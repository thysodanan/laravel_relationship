<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds=User::pluck('id')->toArray();
        $userId=collect($userIds)->random();
        $currentDate=Carbon::now()->format('Y-m-d H:i:s');
        return [
            "content"=>$this->faker->text(30),
            'user_id'=>$userId,
            'created_at'=>$currentDate,
            'updated_at'=>$currentDate,
        ];
    }
}
