<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(QuotationsTableSeeder::class);
    }
}
