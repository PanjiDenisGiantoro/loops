<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(\App\User::class, 10)->create();
        
        factory(\App\Posts::class, 10)->create();
        
        factory(\App\Comments::class, 10)->create();
    }
}
