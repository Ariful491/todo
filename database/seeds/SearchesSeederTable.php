<?php

use Illuminate\Database\Seeder;
use App\Model\Search;
use Faker\Factory as Faker;
class SearchesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //factory(Search::class, 5000)->create();

        $faker = Faker::create('App\Model\Search');
        for($i = 0; $i < 500; $i++) {
            DB::table('searches')->insert([
                'first_name' => $faker->word(),
                'last_name' => $faker->word(),
                'phone_number' => $faker->unique()->e164PhoneNumber,
            ]);
        }
    }
}
