<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'lname' => 'Dano',
                'fname' => 'Rener Jan',
                'address' => 'Bunacan, Tubigon, Bohol',
                'phone' => '09385994260',
                'email' => 'dano@gmail.com',
                'password' =>bcrypt('qwerty1234')
            ],
            [
                'id' => 2,
                'lname' => 'Golosinda',
                'fname' => 'Aldjohn',
                'address' => 'Macaas, Tubigon, Bohol',
                'phone' => '09654378521',
                'email' => 'golosinda@gmail.com',
                'password' =>bcrypt('wdvfgshfj123')
            ],
            [
                'id' => 3,
                'lname' => 'Astacaan',
                'fname' => 'Ace Jelo',
                'address' => 'Pooc Occidental, Tubigon, Bohol',
                'phone' => '09385642879',
                'email' => 'astacaan@gmail.com',
                'password' =>bcrypt('dfdhyjhxdfrg1234')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
