<?php

use Illuminate\Database\Seeder;

class AdminPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = App\Page::all();
        foreach ($pages as $one) {
        	App\UserPage::create([
        		'user_id' => 1,
        		'page_id' => $one->id
        	]);
        }
    }
}
