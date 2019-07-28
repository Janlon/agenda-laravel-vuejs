<?php

use Faker\Generator as Faker;

$factory->define(App\Contato::class, function (Faker $faker) {
    return [
        'saudacao' => 'Sr.',
        'nome' => $faker->name,
        'cpf' => $faker->unique()->safeCPF,
        'celular' => $faker->cellphoneNumber,
        'telefone' => $faker->cellphoneNumber,
        'nascimento' => $faker->date('Y-m-d'),
        'email' => $faker->unique()->safeEmail,
    ];
});
