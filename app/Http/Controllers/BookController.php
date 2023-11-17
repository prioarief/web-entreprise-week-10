<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Ini adalah index page Book';
    }

    public function viewJudul($judul)
    {
        $data = [
            'judul' => $judul
        ];

        return view('book', $data);
    }
}
