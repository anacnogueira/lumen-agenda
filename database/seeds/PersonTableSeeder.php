<?php

use Illuminate\Database\Seeder;
use \CodeAgenda\Entities\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Person::truncate();
        factory('CodeAgenda\Entities\Person', 30)->create();
    }
}
