<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::query()->first()->id,
            'status'=>$this->faker->randomElement(['New','Confirmed','End']),
            'description'=>$this->faker->text(20),
            'den_degree'=>$this->faker->randomElement(['High','Normal','Low']),
            'lat_lang' => '[{"route": "İstanbul Limanı", "value": "Selimiye, İstanbul Limanı No:19, 34668 Üsküdar/İstanbul, تركيا", "latlng": {"lat": "41.00575182177659", "lng": " 29.010915530989102"}, "country": "تركيا", "postal_code": "34668", "street_number": "19", "administrative_area_level_1": "İstanbul", "administrative_area_level_2": "Üsküdar", "administrative_area_level_4": "Selimiye"}]',
            'created_at'=>$this->faker->dateTime,
        ];
    }
}
