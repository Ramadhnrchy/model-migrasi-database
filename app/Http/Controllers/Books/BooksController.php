<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){

        $model = new Books();
        $data = $model->select(
            'id',
            'book_name',
            'author',
            'published_at',
        )->get()->toArray();

        return view('books/index', compact('data'));
    }

    public function createBook(Request $request){
        $post = $request->post();
        $model = new Books();

        return redirect('books/index');
    }
}
