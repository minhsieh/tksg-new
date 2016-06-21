<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
        	'幼童軍團',
        	'幼女童軍團',
        	'童軍團',
        	'女童軍團',
        	'行義童軍團',
        	'蘭姐女童軍團',
        	'羅浮群',
        	'資深女童軍團'
        ];
    	$slogans = [
    		'cub-scout',
    		'brownie',
    		'boy-scout',
    		'girl-scout',
    		'senior-scout',
    		'ranger-girl-scout',
    		'rover-scout',
    		'senior-girl-scout'
    	];

    	foreach($names as $key=>$value) {
	        $pageData = [
	        	'name' => $value,
		    	'slogan' => $slogans[$key]
	        ];
	        App\Page::create($pageData);
	    }
    }
}
