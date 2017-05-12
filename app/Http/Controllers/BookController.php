<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('index', [
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        try{
            $titulo = $request->get('titulo');

            $book = new Book();
            $book->title = $titulo;
            $book->save();

            return redirect()->route('book.index');

        } catch(\Exception $e){
            throw $e;
        }
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('edit', [
            'book' => $book
        ]);
    }

    public function update($id, Request $request)
    {
        $book = Book::find($id);

        $tituloAtualizado = $request->get('titulo');
        $book->title = $tituloAtualizado;
        $book->save();

        return redirect()->route('book.index');
    }

    public function delete($id)
    {
        Book::destroy($id);
        return redirect()->route('book.index');
    }
}
