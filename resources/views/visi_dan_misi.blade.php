@extends('layouts.guest')

@section('content')
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Visi & Misi</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Visi & Misi</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="history-section">
    <div class="container py-5">
        <div class="section-title text-center mb-5">
            <h2>Visi</h2>
            <div class="prose has-table mx-auto">
                {!! $visi->content !!}
            </div>
        </div>

        <div class="section-title text-center mb-5">
            <h2><span>Misi</span></h2>
            <div class="prose has-ordered-list mx-auto">
                {!! $misi->content !!}
            </div>
        </div>

        <div class="section-title text-center mb-5">
            <h2>Tujuan</h2>
            <div class="text-left">
                <div class="prose has-ordered-list mx-auto">
                    {!! $tujuan->content !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection