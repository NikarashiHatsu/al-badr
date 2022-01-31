@extends('layouts.guest')

@section('content')
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Sejarah</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Sejarah</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="history-section">
    <div class="container py-5">
        @foreach ($histories as $history)
            <div class="section-title text-center mb-5">
                <h2>Tahun <span>{{ $history->year }}</span></h2>
                {!! $history->content !!}
            </div>
        @endforeach
    </div>
</section>
@endsection