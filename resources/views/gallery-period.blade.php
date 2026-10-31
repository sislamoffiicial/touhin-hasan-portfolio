@extends('layouts.site')

@section('title', $galleryPeriod->name . ' — Touhin Hasan')

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

        <section class="gallery-main gallery-period-main">

            <h1>GALLERY</h1>

            <h2 class="gallery-period-title">
                {{ $galleryPeriod->name }}
            </h2>

            @if ($items->isNotEmpty())
                <div class="gallery-slider">

                    <button
                        type="button"
                        class="gallery-slider-arrow gallery-slider-prev"
                        aria-label="Previous artwork"
                    >
                        ←
                    </button>

                    <div class="gallery-slider-items">

                        @foreach ($items as $item)
                            <figure
                                class="gallery-slide {{ $loop->first ? 'is-active' : '' }}"
                            >
                                @if ($item->image)
                                    <img
                                        src="{{ asset('storage/' . $item->image) }}"
                                        alt="{{ $item->title }}"
                                    >
                                @endif
                            </figure>
                        @endforeach

                    </div>

                    <button
                        type="button"
                        class="gallery-slider-arrow gallery-slider-next"
                        aria-label="Next artwork"
                    >
                        →
                    </button>

                </div>
            @else
                <p>No artworks available for this period.</p>
            @endif

        </section>

    </main>
@endsection
