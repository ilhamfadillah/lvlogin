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
      for($i=0; $i<=20; $i++){
        DB::table('users')->insert([
            'name' => 'admin',
            'password' => bcrypt('secret'),
        ]);
      }
    }
}
