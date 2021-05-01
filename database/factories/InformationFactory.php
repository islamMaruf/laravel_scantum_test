<?php

namespace Database\Factories;

use App\Models\Information;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Information::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'title' => $this->faker->name,
			'text' => $this->faker->text(50),
			'language' => $this->faker->randomElement(['React', 'Angular', 'Vue', 'NodeJS', 'NextJs', 'Express']),
            'is_awesome' =>rand(0,1) == 1
		];
	}
}
