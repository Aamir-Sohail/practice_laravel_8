<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            $customers = new Customers;
            $customers->name = $faker->name;
            $customers->email = $faker->email;
            $customers->password = $faker->password;
            $customers->gender = "M";
            $customers->address = "Peshawar";
            $customers->state = $faker->state;
            $customers->country = $faker->country;
            $customers->dob = $faker->date;
            $customers->points = "5";

            $customers->save();
        }
    }
}
