<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home() {
        $data = Book::all();
        $categories = Category::all();
        return view('home', ['dt' => $data, 'ct' => $categories]);
    }

    public function show($id) {
        $book = Book::find($id);
        $categories = Category::all();
        return view('detail', ['bk' => $book, 'ct' => $categories]);
    }

    public function category($id) {
        $category = Category::with('Book')->find($id);
        $categories = Category::all();

        return view('category', ['cat' => $category, 'ct' => $categories]);
    }

    public function publisher() {
        $publisher = Publisher::all();
        $categories = Category::all();

        return view('publisher', ['pb' => $publisher, 'ct' => $categories]);
    }

    public function contact() {
        $categories = Category::all();

        return view('contact', ['ct' => $categories]);
    }
}
