<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'Nome' => fake()->name(),
            'Email' => fake()->unique()->safeEmail(),
            'Senha' => static::$password ??= Hash::make('password'),
        ];
    }
}
