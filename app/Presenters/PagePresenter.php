<?php
namespace App\Presenters;

use Auth;
use App\Page;

class PagePresenter
{
    public function pages()
    {
        return $pages = Auth::user()->pages;
    }
}