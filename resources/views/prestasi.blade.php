@extends('layouts.guest')

@section('content')
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Prestasi</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Prestasi</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="achievment-section py-5">
    <div class="container">
        @foreach ($achievements as $achievement)
            <div class="section-title text-center mb-5">
                <h2>Tahun <span>{{ $achievement->year }}</span></h2>
                <div class="prose mx-auto">
                    {!! $achievement->content !!}
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection