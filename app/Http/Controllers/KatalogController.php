<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class KatalogController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('katalog', compact('books'));
    }

    public function show($id) {
        $book = Book::findOrFail($id);
        return view('detailBuku', compact('book'));
    }
}
