<?php

use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
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
        	$names = [
	        	'團史',
	        	'組織架構',
	        	'服務員',
	        	'團員',
	        	'活動',
	        	'訓練介紹'
	        ];
	    	foreach($names as $key=>$value) {
		        $pageData = [
		        	'page_id' => $one->id,
		        	'title' => $one->name.$value,
			    	'content' => '尚未有內容，請輸入內文',
		        ];
		        App\PageContent::create($pageData);
		    }
        }
    }
}
