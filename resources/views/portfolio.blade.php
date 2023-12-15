@extends('layouts.master')
@section('content')

<main>

    <div class="vline"></div>


    <!-- ==================== Start Slider ==================== -->
@foreach($page as $portfolio)
    <header class="pg-header style2 bg-img parallaxie valign" data-background="{{asset('assets/portfolio/'.$portfolio->image_header)}}" data-overlay-dark="6">
        <div class="container-xxl ontop">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <div class="cont mb-80">
                        <h6 class="sub-title"><a href="{{ route('home') }}">Home</a> <span class="ml-20 mr-20">/</span>
                            <span class="main-color">Portfolio</span>
                        </h6>
                        <h1 class="fw-800 fz-70">{{$portfolio->title_header}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="curve">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 0 0 C15 120 35 120 100 0 L 100 100 Z" fill="#191b1d"></path>
            </svg>
        </div>
    </header>
@endforeach
    <!-- ==================== End Slider ==================== -->
    <!-- ==================== Start Portfolio ==================== -->

    <section class="portfolio section-padding pb-80">
        <div class="container-xxl">
            <div class="row">
                <!-- filter links -->
                <div class="filtering col-12 mb-80 text-center">
                    <div class="filter">
                        <span class="text">Filter :</span>
                        <span data-filter='*' class='active'>All</span>
                        <span data-filter='.billboard'>Billboard</span>
                        <span data-filter='.carbranding'>Car Branding</span>
                        <span data-filter='.lightbox'>Light Box</span>
                        <span data-filter='.plexi'>Plexi</span>
                        <span data-filter='.rollup'>Rollup</span>
                        <span data-filter='.seethrough'>See Through</span>
                        <span data-filter='.signs'>Signs</span>
                        <span data-filter='.vinylcut'>Vinyl Cut</span>
                    </div>
                </div>
            </div>
            <div class="gallery grid">
                <div class="row">
                @foreach($projects as $p)
                <div class="col-lg-4 col-md-6 items {{$p->type}} mb-50">
                        <div class="item-img">
                            <a href="/img/portfolio/{{ $p->image }}" data-fancybox="gallery">
                                <div>
                                    <img src="/img/portfolio/{{ $p->image }}" alt="{{ $p->alt }}">
                                </div>
                            </a>
                        </div>
                    </div>
				@endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Portfolio ==================== -->


</main>
@endsection