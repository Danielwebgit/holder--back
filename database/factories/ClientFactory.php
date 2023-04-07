<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'img'   => 'https://palestraparaprofessores.com.br/wp-content/webp-express/webp-images/uploads/2022/12/fotos-para-perfil-de-cria.png.webp',
            'password' => '$2y$10$sj4hDtuxjg86Pb6o14iV1.N5YLWh.7/4M5bBcAgNO1X5P7Uip.zRS',
            'created_at' =>  new DateTime(),
            'updated_at' => new DateTime()
        ];
    }
}
