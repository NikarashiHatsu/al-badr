<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function sejarah()
    {
        return view("sejarah", [
            'histories' => History::orderBy('year', 'ASC')->get()
        ]);
    }

    public function visi_dan_misi()
    {
        return view("visi_dan_misi");
    }

    public function prestasi()
    {
        return view("prestasi");
    }

    public function kontak()
    {
        return view("kontak");
    }

    public function blog()
    {
        return view("blog");
    }
}
