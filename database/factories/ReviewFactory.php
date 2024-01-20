<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'book_id' => null,
            'review' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-2 years')->format('Y-m-d H:i:s'),
            'updated_at' => $this->faker->dateTimeBetween('created_at', 'now')->format('Y-m-d H:i:s'),

        ];
    }




    public function average(){
        return $this->state(function(array $attributes){
            return [
                'rating'=>fake()->numberBetween(2,5)
            ];
        });
     }


     public function bad(){
        return $this->state(function(array $attributes){
            return [
                'rating'=>fake()->numberBetween(1,3)
            ];
        });
     }

     public function good(){
        return $this->state(function(array $attributes){
            return [
                'rating'=>fake()->numberBetween(4,5)
            ];
        });
     }
}
