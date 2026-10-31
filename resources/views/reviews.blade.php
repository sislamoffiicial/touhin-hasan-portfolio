@extends('layouts.site')

@section('title', 'Review — Touhin Hasan')

@section('content')
    <main class="reviews-page">

        <aside class="reviews-sidebar">
            <nav class="reviews-nav">
                <a href="{{ route('gallery') }}">Gallery</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('press') }}">Press</a>

                <a
                    href="{{ route('reviews') }}"
                    class="active"
                >
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

            <div class="reviews-sidebar-footer">
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

        <section class="reviews-main">

            <div class="reviews-list">

                @forelse ($reviews as $review)

                  <article class="review-item">

    @if ($review->image)
        <div class="reviewer-image">
            <img
                src="{{ asset('storage/' . $review->image) }}"
                alt="{{ $review->reviewer_name }}"
            >
        </div>
    @endif

    <div class="review-text">
        {!! nl2br(e($review->review_text)) !!}
    </div>

    <div class="reviewer-meta">

        <h2>{{ $review->reviewer_name }}</h2>

        @if ($review->reviewer_title || $review->location)
    <p class="reviewer-details">
        @if ($review->reviewer_title)
            {{ $review->reviewer_title }}
        @endif

        @if ($review->reviewer_title && $review->location)
            ,
        @endif

        @if ($review->location)
            {{ $review->location }}
        @endif
    </p>
@endif

    </div>

    @unless ($loop->last)
    <div class="review-separator"></div>
@endunless

</article>

                @empty

                    <p>No reviews available.</p>

                @endforelse

            </div>

        </section>

    </main>
@endsection
