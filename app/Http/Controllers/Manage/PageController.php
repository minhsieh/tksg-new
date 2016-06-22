<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

use App\Page;
use App\PageContent;

class PageController extends Controller
{
    public function index($id)
    {
    	$page = Page::find($id);
    	$page_contents = $page->contents;
    	return view('manage.page.index',['page_contents' => $page_contents , 'page'=>$page]);
    }

    public function create($id)
    {
    	$page = Page::find($id);
    	return view('manage.page.form' , ['mode'=>'create' , 'page'=>$page]);
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	$page_content = PageContent::create($data);
    	return redirect()->action('Manage\PageController@index',['id'=>$data['page_id']]);
    }

    public function edit($pc_id)
    {
    	$page_content = PageContent::find($pc_id);
    	$page = Page::find($page_content->page_id);
    	return view('manage.page.form',['page_content'=>$page_content ,'page'=>$page , 'mode' => 'edit']);
    }

    public function update(Request $request)
    {
    	$page_content = PageContent::find($request->input('id'));
    	$page_content->update($request->all());
    	return redirect()->action('Manage\PageController@index',['id'=>$page_content->page_id]);
    }

    public function delete($pc_id)
    {

    }
}
