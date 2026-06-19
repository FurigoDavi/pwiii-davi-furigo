<?php

namespace App\Models;

// Importa a factory do model User para geração de dados de teste
use Database\Factories\UserFactory;

// Atributos do PHP 8 para definir propriedades do model
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

// Trait para utilização de factories
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Classe base de autenticação do Laravel
use Illuminate\Foundation\Auth\User as Authenticatable;

// Trait para envio de notificações
use Illuminate\Notifications\Notifiable;

/**
 * Define quais campos podem ser preenchidos em massa
 * (Mass Assignment).
 */
#[Fillable(['name', 'email', 'password'])]

/**
 * Define quais campos não devem aparecer em
 * arrays e respostas JSON.
 */
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /**
     * Traits utilizadas pela classe:
     *
     * HasFactory  -> Permite criar registros usando factories.
     * Notifiable  -> Permite enviar notificações ao usuário.
     *
     * @use HasFactory<UserFactory>
     */
    use HasFactory, Notifiable;

    /**
     * Define os casts (conversões automáticas) dos atributos.
     *
     * Quando um valor é recuperado do banco de dados,
     * o Laravel o converte automaticamente para o tipo informado.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            // Converte o campo para uma instância de DateTime/Carbon
            'email_verified_at' => 'datetime',

            // Faz o hash da senha automaticamente ao atribuir um valor
            'password' => 'hashed',
        ];
    }
}