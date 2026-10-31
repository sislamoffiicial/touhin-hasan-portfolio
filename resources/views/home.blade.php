@extends('layouts.site')

@section('title', 'Touhin Hasan — Visual Artist')

@section('content')
    <main class="home-page">

        <section class="home-identity">
            <h1>TOUHIN HASAN</h1>
            <p>Visual Artist</p>
        </section>

        <nav class="home-nav">
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('press') }}">Press</a>
            <a href="{{ route('reviews') }}">Review</a>
            <a href="{{ route('awards') }}">Awards And Appriciations</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="#">Blog</a>
        </nav>

        <div class="home-footer">
    <div class="sidebar-custom-icon">
        <img
            src="{{ asset('images/touhin-sidebar-icon.png') }}"
            alt=""
        >
    </div>

    <p>Touhin Hasan</p>
    <p>Copyright @ 2021-2026</p>
</div>

        <section class="home-artworks">
            @for ($slot = 1; $slot <= 7; $slot++)
                @if ($homeArtworks->has($slot))
                    @php
                        $artwork = $homeArtworks->get($slot);
                    @endphp

                    <div class="home-artwork home-artwork-{{ $slot }}">
                        <img
                            src="{{ asset('storage/' . $artwork->image) }}"
                            alt="{{ $artwork->alt_text ?? 'Touhin Hasan artwork' }}"
                        >
                    </div>
                @endif
            @endfor
        </section>

    </main>
@endsection
