<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\WeightLog;

use Illuminate\Database\Eloquent\Factories\Factory;


class WeightLogFactory extends Factory
{
    protected $model = WeightLog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id'=>User::inRandomOrder()->first()->id,
            'user_id'=>1,
            'date' => sprintf('2024-12-%02d', $this->faker->numberBetween(1, 31)),

            'weight'=> $this->faker->randomFloat(1,40.0,120.0),
            'calories'=> $this->faker->numberBetween(1000,2200),
           
            'exercise_time'=> '00:' . str_pad($this->faker->numberBetween(0, 59),2, '0', STR_PAD_LEFT),
            'exercise_content'=> $this->faker->realText(120),
        ];
    }
}
