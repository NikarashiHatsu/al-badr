<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function sejarah()
    {
        return view("sejarah");
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
}
