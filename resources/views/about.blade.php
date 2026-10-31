@extends('layouts.site')

@section('title', 'About — Touhin Hasan')

@section('content')
    <main class="about-page">


        <aside class="about-sidebar">
            <nav class="about-nav">
                <a href="{{ route('gallery') }}">Gallery</a>

                <a
                    href="{{ route('about') }}"
                    class="active"
                >
                    About
                </a>

                <a href="{{ route('press') }}">Press</a>
                <a href="{{ route('reviews') }}">Review</a>
                <a href="{{ route('awards') }}">Awards And Appriciations</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="#">Blog</a>
            </nav>

            <div class="about-sidebar-footer">
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

        <section class="about-main">

            @if ($aboutSetting)
                <section class="about-section about-artist-statement">
    <h2>ARTIST STATEMENT</h2>

    @if ($aboutSetting->artist_image)
        <div class="about-artist-image">
            <img
                src="{{ asset('storage/' . $aboutSetting->artist_image) }}"
                alt="Touhin Hasan"
            >
        </div>
    @endif

    <div class="about-copy">
        {!! nl2br(e($aboutSetting->artist_statement)) !!}
    </div>
</section>

                <section class="about-section">
                    <h2>BIO</h2>

                    <div class="about-copy">
                        {!! nl2br(e($aboutSetting->bio)) !!}
                    </div>
                </section>
            @endif

            <section class="about-section">
                <h2>SOLO ART EXHIBITION</h2>

                <div class="exhibition-list">
                    @forelse ($soloExhibitions as $exhibition)
                        <div class="exhibition-item">
                            <h3>{{ $exhibition->title }}</h3>

                           <p>
    {{ collect([
        $exhibition->year,
        $exhibition->city,
        $exhibition->country,
    ])->filter()->implode(', ') }}.
</p>
                        </div>
                    @empty
                        <p>No solo exhibitions available.</p>
                    @endforelse
                </div>
            </section>

            <section class="about-section">
                <h2>GROUP ART EXHIBITION</h2>

                <div class="group-exhibition-list">
    @forelse ($groupExhibitions as $exhibition)
        <p class="group-exhibition-item">
            {{ collect([
                $exhibition->year,
                $exhibition->title,
                $exhibition->city,
                $exhibition->country,
            ])->filter()->implode(', ') }}.
        </p>
    @empty
        <p>No group exhibitions available.</p>
    @endforelse
</div>
            </section>

        </section>

    </main>
@endsection
