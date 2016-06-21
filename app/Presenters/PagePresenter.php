<?php
namespace App\Presenters;

use App\Page;

class PagePresenter
{
    public function pages()
    {
        return Page::all();
    }
}