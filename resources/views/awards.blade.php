@extends('layouts.site')

@section('title', 'Awards And Appriciations — Touhin Hasan')

@section('content')
    <main class="awards-page">


        <aside class="awards-sidebar">
            <nav class="awards-nav">
                <a href="{{ route('gallery') }}">Gallery</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('press') }}">Press</a>
                <a href="{{ route('reviews') }}">Review</a>
                <a href="{{ route('awards') }}" class="active">
                    Awards And Appriciations
                </a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="#">Blog</a>
            </nav>

            <div class="awards-sidebar-footer">
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

        <section class="awards-main">

            <div class="awards-list">
                @forelse ($awards as $award)
                   <article class="award-item">

    @if ($award->image)
        <div class="award-image">
            <img
                src="{{ asset('storage/' . $award->image) }}"
                alt="{{ $award->title }}"
            >
        </div>
    @endif

    <div class="award-content">
        <h2>{{ $award->title }}</h2>

        <p>
            @if ($award->year)
                {{ $award->year }}
            @endif

            @if ($award->city)
                , {{ $award->city }}
            @endif

            @if ($award->country)
                , {{ $award->country }}
            @endif
        </p>
    </div>

</article>
                @empty
                    <p>No awards available.</p>
                @endforelse
            </div>

        </section>

    </main>
@endsection
