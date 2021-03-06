<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Blog;
use App\Models\History;
use App\Models\SiteSettings;
use App\Models\Teacher;

class PageController extends Controller
{
    public function index()
    {
        return view("index", [
            'teachers' => Teacher::all(),
        ]);
    }

    public function sejarah()
    {
        return view("sejarah", [
            'histories' => History::orderBy('year', 'ASC')->get(),
        ]);
    }

    public function visi_dan_misi()
    {
        return view("visi_dan_misi", [
            'visi' => SiteSettings::where('type', 'visi')->first(),
            'misi' => SiteSettings::where('type', 'misi')->first(),
            'tujuan' => SiteSettings::where('type', 'tujuan')->first(),
        ]);
    }

    public function prestasi()
    {
        return view("prestasi", [
            'achievements' => Achievement::orderBy('year', 'ASC')->get(),
        ]);
    }

    public function kontak()
    {
        return view("kontak", [
            'big_google_map' => SiteSettings::where('type', 'big_google_map')->first(),
            'whatsapp' => SiteSettings::where('type', 'whatsapp')->first(),
            'address' => SiteSettings::where('type', 'address')->first(),
        ]);
    }

    public function blog()
    {
        return view("blog", [
            'blogs' => Blog::where('is_published', true)->orderBy('created_at', 'DESC')->get(),
        ]);
    }

    public function blog_detail($slug)
    {
        return view('blog_detail', [
            'blog' => Blog::with('categories')->where('slug', $slug)->firstOrFail(),
        ]);
    }
}
