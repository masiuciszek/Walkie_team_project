<?php

use Illuminate\Database\Seeder;

use App\Breed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $breeds = [
            'Boxer',
            'French Bulldog',
            'Yorkshire Terrier',
            'Poodle',
            'Kuvasz',
            'Miniature Schnauzer',
            'Wheaten Terrier',
            'Pug',
            'Pitbull',
            'Wheaten Terrier'
        ];

        foreach($breeds as $breed){
            Breed::create(['name' => $breed]);
        }
        // $this->call(UsersTableSeeder::class);
    }
}
