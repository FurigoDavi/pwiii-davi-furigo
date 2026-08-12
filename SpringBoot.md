# Como criar um projeto Spring Boot pelo VS Code usando o Spring Initializr

O **Spring Initializr** é uma ferramenta que facilita a criação de projetos **Spring Boot**, permitindo escolher a versão do Java, dependências e configurações iniciais do projeto.

Neste guia, veremos como criar um projeto Spring Boot utilizando o **Visual Studio Code (VS Code)** e o **Spring Initializr**.

## 1. Pré-requisitos

Antes de começar, é necessário ter instalado:

* [ ] **Java JDK** — de preferência uma versão LTS compatível com a versão do Spring Boot escolhida.
* [ ] **Visual Studio Code**
* [ ] **Extensão Extension Pack for Java**
* [ ] **Extensão Spring Boot Extension Pack**
* [ ] **Git** — opcional, mas recomendado.

Para verificar se o Java está instalado, abra o terminal e execute:

```bash
java -version
```

Se o Java estiver instalado corretamente, será exibida a versão instalada.

---

# 2. Criando o projeto pelo Spring Initializr

Uma das formas mais simples é utilizar o site oficial do Spring Initializr:

[Spring Initializr](https://start.spring.io/?utm_source=chatgpt.com)

Ao acessar o site, será exibido um formulário para configurar o projeto.

## 3. Configurando o projeto

No Spring Initializr, podemos utilizar uma configuração semelhante a esta:

| Configuração | Valor                     |
| ------------ | ------------------------- |
| Project      | Maven                     |
| Language     | Java                      |
| Spring Boot  | Versão estável disponível |
| Group        | `com.exemplo`             |
| Artifact     | `demo`                    |
| Name         | `demo`                    |
| Packaging    | Jar                       |
| Java         | Versão do JDK instalada   |

### Group

O campo **Group** representa o grupo ou organização responsável pelo projeto.

Exemplo:

```text
com.exemplo
```

### Artifact

O **Artifact** normalmente representa o nome do projeto.

Exemplo:

```text
sistema
```

Com isso, o projeto poderá ser identificado como:

```text
com.exemplo:sistema
```

---

# 4. Adicionando dependências

Na seção **Dependencies**, podemos adicionar as bibliotecas que serão utilizadas no projeto.

Por exemplo:

### Spring Web

Permite criar aplicações web e APIs REST utilizando Spring MVC.

### Spring Data JPA

Facilita o acesso e a persistência de dados utilizando JPA.

### MySQL Driver

Permite conectar a aplicação a um banco de dados MySQL.

### Spring Boot DevTools

Fornece recursos que facilitam o desenvolvimento, como reinicialização automática da aplicação.

Um projeto de API REST, por exemplo, pode utilizar:

```text
Spring Web
Spring Data JPA
MySQL Driver
Spring Boot DevTools
```


# Como criar um projeto Spring Boot pelo Spring Boot Extension Pack no VS Code

O **Spring Boot Extension Pack** é um conjunto de extensões para o Visual Studio Code que facilita o desenvolvimento de aplicações utilizando Spring Boot.

Com ele, podemos criar um projeto Spring Boot diretamente pelo VS Code, sem precisar acessar o site do Spring Initializr pelo navegador.

## 1. Instalar o Spring Boot Extension Pack

Abra o **Visual Studio Code**.

No menu lateral esquerdo, clique no ícone de **Extensions** ou utilize o atalho:

```text
Ctrl + Shift + X
```

Pesquise por:

```text
Spring Boot Extension Pack
```

Instale a extensão disponibilizada para desenvolvimento com Spring Boot.

O pacote fornece ferramentas para facilitar a criação, execução e gerenciamento de projetos Spring.

---

## 2. Abrir o Spring Initializr pelo VS Code

Depois de instalar a extensão, pressione:

```text
Ctrl + Shift + P
```

Esse comando abre a **Command Palette** do VS Code.

Pesquise por:

```text
Spring Initializr
```

Entre as opções disponíveis, selecione:

```text
Spring Initializr: Create a Maven Project
```

Também é possível escolher:

```text
Spring Initializr: Create a Gradle Project
```

Neste exemplo, vamos utilizar **Maven**.

---

## 3. Escolher a linguagem

O VS Code perguntará qual linguagem será utilizada no projeto.

Selecione:

```text
Java
```

---

## 4. Escolher a versão do Spring Boot

Em seguida, será necessário escolher a versão do **Spring Boot**.

Selecione uma versão estável e compatível com a versão do Java instalada no computador.

Por exemplo:

```text
Spring Boot 3.x.x
```

> A versão disponível pode ser diferente dependendo da data em que o projeto for criado.

---

## 5. Informar o Group ID

Depois será solicitado o **Group ID** do projeto.

Podemos utilizar:

```text
com.exemplo
```

O Group ID normalmente identifica a organização, empresa ou desenvolvedor responsável pelo projeto.

---

## 6. Informar o Artifact ID

Agora informe o nome do projeto.

Por exemplo:

```text
sistema
```

O projeto ficará identificado como:

```text
com.exemplo:sistema
```

---

## 7. Escolher o tipo de empacotamento

O VS Code perguntará qual será o tipo de empacotamento da aplicação.

Selecione:

```text
Jar
```

O formato JAR é bastante utilizado para aplicações Spring Boot.

---

## 8. Escolher a versão do Java

Selecione uma versão do Java compatível com o Spring Boot escolhido.

Por exemplo:

```text
Java 17
```

ou

```text
Java 21
```

A versão escolhida deve estar instalada no computador.

Para verificar a versão instalada:

```bash
java -version
```

---

## 9. Adicionar as dependências

Agora o VS Code mostrará uma lista de dependências que podem ser adicionadas ao projeto.

Para criar uma API REST simples, podemos selecionar:

```text
Spring Web
```

Dependendo do projeto, também podemos adicionar:

```text
Spring Data JPA
Validation
Spring Boot DevTools
MySQL Driver
```

Por enquanto, para um projeto básico, podemos utilizar apenas:

```text
Spring Web
```

---

## 10. Escolher onde salvar o projeto

Depois de configurar o projeto, o VS Code perguntará onde ele deve ser criado.

Escolha uma pasta no computador.

# Resumo

Como criar um projeto Spring Boot utilizando o **Spring Boot Extension Pack** no VS Code:

1. Instale o **Spring Boot Extension Pack**.
2. Abra o VS Code.
3. Pressione `Ctrl + Shift + P`.
4. Pesquise por **Spring Initializr**.
5. Selecione **Create a Maven Project**.
6. Escolha **Java**.
7. Escolha a versão do Spring Boot.
8. Informe o **Group ID**.
9. Informe o **Artifact ID**.
10. Escolha **Jar**.
11. Escolha a versão do Java.
12. Adicione as dependências.
13. Escolha a pasta onde o projeto será criado.
14. Abra o projeto no VS Code.
15. Execute a classe principal.
16. Comece a desenvolver sua aplicação.
