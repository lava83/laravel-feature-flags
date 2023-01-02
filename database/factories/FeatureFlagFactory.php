<?php

namespace RyanChandler\LaravelFeatureFlags\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RyanChandler\LaravelFeatureFlags\Models\FeatureFlag;

class FeatureFlagFactory extends Factory
{
    protected $model = FeatureFlag::class;

    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => null,
            'enabled' => fake()->randomElement([true, false]),
            'flaggable_type' => null,
            'flaggable_id' => null
        ];
    }
}
