<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::all();

        return view('home', [
            'categories' => $categories,
            'books'      => $books
        ]);
    }
}
