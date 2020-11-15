<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $userId = User::all()->pluck('id')->random();

        return [
            'number' => $this->faker->numberBetween(89000000000, 89999999999),
            'user_id' => $userId
        ];
    }
}
