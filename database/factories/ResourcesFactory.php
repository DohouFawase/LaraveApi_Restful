<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResourcesFactory extends Factory
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
            'name'=>$this->fake()->sentence(3, true),
            'descriptio,'=>$this->fake()->sentence(4,true),
            'price'=>$this->fake()->numberBtween(100000, 100000),
            'quantity'=>$this->fake()->numberBtween(5, 200),
            'stock'=> false,
        ];
    }


    public function stock():static{
        return  $this->state(fn (array $attributes)=> [
            'stock'=>true,
        ]); 
    }
}
