<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            /*
                
            ['name' => 'Jasper', 'date_of_birth' => '2010-01-20', 'breed_id' => 1],
            ['name' => 'Wag', 'date_of_birth' => '1980-01-20', 'breed_id' => 7],
            ['name' => 'Teddy', 'date_of_birth' => '2018-01-22', 'breed_id' => 8],
            ['name' => 'Scout', 'date_of_birth' => '2017-01-20', 'breed_id' => 3],
            ['name' => 'Honey', 'date_of_birth' => '2009-01-02', 'breed_id' => 1],
            
            */
            ['name' => 'dog6', 'date_of_birth' => '2009-01-02', 'breed_id' => 2],
            ['name' => 'dog7', 'date_of_birth' => '2009-01-02', 'breed_id' => 4],
            ['name' => 'dog8', 'date_of_birth' => '2009-01-02', 'breed_id' => 5],
            ['name' => 'dog9', 'date_of_birth' => '2009-01-02', 'breed_id' => 6]
        ]);
    }
}
