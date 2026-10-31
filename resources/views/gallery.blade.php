@extends('layouts.site')

@section('title', 'Gallery — Touhin Hasan')

@section('content')
    <main class="gallery-page">

        <aside class="gallery-sidebar">
            <nav class="gallery-nav">
                <a href="{{ route('gallery') }}" class="active">Gallery</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('press') }}">Press</a>
                <a href="{{ route('reviews') }}">Review</a>
                <a href="{{ route('awards') }}">Awards And Appriciations</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="#">Blog</a>
            </nav>

            <div class="gallery-sidebar-footer">
                <div class="sidebar-custom-icon">
                    <img
                        src="{{ asset('images/touhin-sidebar-icon.png') }}"
                        alt=""
                    >
                </div>

                <p>Touhin Hasan</p>
                <p>Copyright @ 2021-2026</p>
            </div>
        </aside>

        <section class="gallery-main gallery-home-main">

            <h1>GALLERY</h1>

            @if ($featuredItems->isNotEmpty())
                <div class="gallery-slider gallery-home-slider">

                    <button
                        type="button"
                        class="gallery-slider-arrow gallery-slider-prev"
                        aria-label="Previous artwork"
                    >
                        ‹
                    </button>

                    <div class="gallery-slider-items">

                        @foreach ($featuredItems as $item)
                            <figure
                                class="gallery-slide {{ $loop->first ? 'is-active' : '' }}"
                            >
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                >
                            </figure>
                        @endforeach

                    </div>

                    <button
                        type="button"
                        class="gallery-slider-arrow gallery-slider-next"
                        aria-label="Next artwork"
                    >
                        ›
                    </button>

                </div>
            @endif

            <div class="gallery-home-periods">

                @foreach ($galleryPeriods as $period)
                    <a
                        href="{{ route('gallery.period', ['slug' => $period->slug]) }}"
                        class="gallery-home-period-link"
                    >
                        {{ $period->name }}
                    </a>
                @endforeach

                <a
                    href="{{ route('gallery.category', ['category' => 'Conceptual Art']) }}"
                    class="gallery-home-conceptual-link"
                >
                    Conceptual Art
                </a>

            </div>

        </section>

    </main>
@endsection
