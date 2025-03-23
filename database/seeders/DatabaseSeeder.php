<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Check if admin user exists
        if (!User::where('email', 'admin@example.com')->exists()) {
            // Create an admin user
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]);
        } else {
            // Update existing admin user to have admin privileges
            User::where('email', 'admin@example.com')
                ->update(['is_admin' => true]);
        }
        
        // Run the posts seeder
        $this->call(PostsTableSeeder::class);
    }
}
