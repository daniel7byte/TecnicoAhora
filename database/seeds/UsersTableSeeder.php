<?php

use App\User;
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
        $user = new User;
        $user->first_name = 'Jose Daniel';
        $user->last_name = 'Posso Garcia';
        $user->role = 'ADMIN';
        $user->profile_photo = '';
        $user->skills = 'programador, mantenimiento';
        $user->address = '';
        $user->phone_number = '';
        $user->latitude = '';
        $user->longitude = '';
        $user->email = 'daniel7byte@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
