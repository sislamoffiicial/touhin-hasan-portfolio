@extends('layouts.site')

@section('title', 'Press — Touhin Hasan')

@section('content')
    <main class="press-page">

    <div class="press-list">

        <aside class="press-sidebar">
            <nav class="press-nav">
                <a href="{{ route('gallery') }}">Gallery</a>
                <a href="{{ route('about') }}">About</a>

                <a
                    href="{{ route('press') }}"
                    class="active"
                >
                    Press
                </a>

                <a href="{{ route('reviews') }}">
                    Review
                </a>

                <a href="{{ route('awards') }}">
                    Awards And Appriciations
                </a>

                <a href="{{ route('contact') }}">
                    Contact
                </a>

                <a href="#">Blog</a>
            </nav>

            <div class="press-sidebar-footer">
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

        <section class="press-main">

            <div class="press-list">

                @forelse ($presses as $press)

                    <article class="press-item">

                        @if ($press->image)
                            <div class="press-image">
                                <img
                                    src="{{ asset('storage/' . $press->image) }}"
                                    alt="{{ $press->publication_name }}"
                                >
                            </div>
                        @endif

                        <div class="press-text">
                            {!! nl2br(e($press->press_text)) !!}
                        </div>

                        <div class="press-meta">
    <p>
        <strong>{{ $press->publication_name }}</strong>

        @if ($press->year)
            , {{ $press->year }}
        @endif
    </p>
</div>

                        @unless ($loop->last)
                            <div class="press-separator"></div>
                        @endunless

                    </article>

                @empty
                    <p>No press entries available.</p>
                @endforelse

            </div>

        </section>

    </main>
@endsection
