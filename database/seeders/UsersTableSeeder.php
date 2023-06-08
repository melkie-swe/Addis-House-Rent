<?php
namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'role_id'   => '1',
          'name'      => 'Admin',
          'username'  => 'admin',
          'email'     => 'admin@gmail.com',
          'nid'     => '11223344556677',
          'contact'     => '0911223344',
          'created_at' => '2023',
          'updated_at' => '2023',
          'password'  => bcrypt('12345678'),
        ]);

    DB::table('users')->insert([
          'role_id'   => '2',
          'name'      => 'Landlord',
          'username'  => 'landlord',
          'email'     => 'landlord@gmail.com',
          'nid'     => '1016227150',
          'contact'     => '01970605076',
          'created_at' => '2023',
          'updated_at' => '2023',
          'password'  => bcrypt('23456789'),
        ]);

        DB::table('users')->insert([
          'role_id'   => '3',
          'name'      => 'Renter',
          'username'  => 'renter',
          'email'     => 'renter@gmail.com',
          'nid'     => '1016227180',
          'contact'     => '01870605075',
          'created_at' => '2023',
          'updated_at' => '2023',
          'password'  => bcrypt('34567890'),
        ]);


    }
}
