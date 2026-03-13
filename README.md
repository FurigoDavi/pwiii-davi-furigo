# Jogo da Velha em React

------------------------------------------------------------------------

# index.js - Inicialização da Aplicação

``` javascript
import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "./styles.css";
import App from "./App";

const root = createRoot(document.getElementById("root"));
root.render(
  <StrictMode>
    <App />
  </StrictMode>
);
```

### O que esse arquivo faz

1.  Importa o React.
2.  Importa o CSS.
3.  Importa o componente principal `App`.
4.  Carrega o aplicativo dentro do HTML.

------------------------------------------------------------------------

# Quadrado

Cada quadrado do tabuleiro é um botão.

``` javascript
function Square({ value, onSquareClick }) {
  return (
    <button className="square" onClick={onSquareClick}>
      {value}
    </button>
  );
}
```

### Função

-   Mostra **X ou O**

------------------------------------------------------------------------

# Tabuleiro

Responsável por montar o tabuleiro 3x3.

``` javascript
function Board({ xIsNext, squares, onPlay })
```

### Funções

  `xIsNext`   Indica quem joga agora
  `squares`   Estado atual do tabuleiro
  `onPlay`    Função para atualizar o jogo

------------------------------------------------------------------------

## Clique em um quadrado

``` javascript
function handleClick(i) {
  if (calculateWinner(squares) || squares[i]) {
    return;
  }

  const nextSquares = squares.slice();

  if (xIsNext) {
    nextSquares[i] = "X";
  } else {
    nextSquares[i] = "O";
  }

  onPlay(nextSquares);
}
```

### O que acontece aqui

1.  Verifica se o jogo já terminou
2.  Verifica se o quadrado já foi usado
3.  Copia o estado atual do tabuleiro
4.  Coloca **X ou O**
5.  Atualiza o jogo

------------------------------------------------------------------------

# Jogo

Controla todo o estado do jogo.

``` javascript
export default function Game()
```

------------------------------------------------------------------------

## Histórico de jogadas

``` javascript
const [history, setHistory] = useState([Array(9).fill(null)]);
```

Guarda todas as jogadas feitas durante a partida.

Exemplo:

    Jogada 0 → tabuleiro vazio
    Jogada 1 → primeira jogada
    Jogada 2 → segunda jogada

------------------------------------------------------------------------

## Jogada atual

``` javascript
const [currentMove, setCurrentMove] = useState(0);
```

Indica em qual jogada o jogo está.

------------------------------------------------------------------------

## Quem joga agora

``` javascript
const xIsNext = currentMove % 2 === 0;
```

Se o número da jogada for **par** joga **X**.\
Se for **ímpar** joga **O**.

------------------------------------------------------------------------

# Histórico de movimentos

``` javascript
const moves = history.map((squares, move) => {
```

Isso cria uma lista de botões:

    Go to game start
    Go to move #1
    Go to move #2

Ao clicar em um deles:

``` javascript
jumpTo(move)
```

O jogo volta para aquela jogada.

------------------------------------------------------------------------

# Vitorai

Responsável por verificar se alguém venceu.

``` javascript
function calculateWinner(squares)
```

Combinações de vitória:

``` javascript
const lines = [
 [0,1,2],
 [3,4,5],
 [6,7,8],
 [0,3,6],
 [1,4,7],
 [2,5,8],
 [0,4,8],
 [2,4,6]
];
```

Essas combinações representam:

-   Linhas
-   Colunas
-   Diagonais

Se três posições forem iguais você ganha.

------------------------------------------------------------------------

# CSS

O arquivo `styles.css` define o visual.

Exemplo:

``` css
.square {
  background: pink;
  border: 1px solid purple;
  font-size: 24px;
  height: 34px;
  width: 34px;
}
```

------------------------------------------------------------------------

# Como ocorre

    Usuário clica no quadrado
            ↓
    handleClick é executado
            ↓
    X ou O é colocado
            ↓
    Estado do jogo é atualizado
            ↓
    React renderiza novamente
            ↓
    calculateWinner verifica vitória
