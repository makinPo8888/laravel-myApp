<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositorys\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // DBよりBookテーブルの値を全て取得
        $books = Book::all();

        // 取得した値をビュー「book/index」に渡す
        return view('book/index', compact('books'));
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つBookの情報を取得
        $book = Book::findOrFail($id);

        // 取得した値をビュー「book/edit」に渡す
        return view('book/edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFali($id);
        $book = $request->name;
        $book = $request->price;
        $book = $request->author;
        $book->save();

        return redirect("/book");
    }
}
