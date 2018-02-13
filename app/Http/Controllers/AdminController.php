<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminController extends Controller
{
    public function index()
    {
    	$title = 'Administrator - Cicak-World.co';
        $menu = 'home';
        return view('admin.index', compact('title', 'menu'));
    }

    public function article()
    {
    	$title = 'Daftar Artikel - Cicak-World.co';
        $menu = 'article';
        $articles = Article::all();
        $number = 1;
        return view('admin.article', compact('title', 'menu', 'articles', 'number'));
    }
}
