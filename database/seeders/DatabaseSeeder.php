<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MoonShine\Laravel\Models\MoonshineUserRole;
use MoonShine\Permissions\Models\MoonshineUser;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MoonshineUser::query()->create([
            'name' => 'Admin',
            'moonshine_user_role_id' => MoonshineUserRole::DEFAULT_ROLE_ID,
            'email' => 'admin@moonshine-laravel.com',
            'password' => bcrypt('moonshine')
        ]);
    }
}
