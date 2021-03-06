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
        $this->call(CreateUserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PageContentSeeder::class);
        $this->call(AdminPageSeeder::class);
    }
}
