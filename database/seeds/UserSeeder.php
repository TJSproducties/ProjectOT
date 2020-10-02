<?php

use Illuminate\Database\Seeder;
use  App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create([
            'name'=>'customer',
            'email'=>'customer@test.com',
            'password'=>bcrypt('test1234')])
            ->each(function (User $user){
                $user->assignRole('customer');
            });

    }
}
