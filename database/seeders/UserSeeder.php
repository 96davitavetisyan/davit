<?php

namespace Database\Seeders;

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
        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(

                'name' => 'Davit',
                'email'=> 'avetisyan@mail.ru'
            ),
            1 =>
            array(

                'name' => 'Dav',
                'email'=> 'avet@mail.ru'
            ),
        ));
    }
}
