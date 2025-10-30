<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            $followersIds = $users->random(random_int(0, 3))
                ->where('id', '!=', $user->id)
                ->pluck('id');
            $user->followers()->sync($followersIds);
        }
    }
}
