@extends('layouts.site')

@section('title', $category . ' — Touhin Hasan')

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

        <section class="gallery-main gallery-category-main">

            <h1>GALLERY</h1>

            <h2 class="gallery-category-title">
                {{ $category }}
            </h2>

            <div class="gallery-work-list">

                @forelse ($items as $item)

               <article class="gallery-work-item">

    <h3>{{ $item->title }}</h3>

    @if ($item->image)
        <div class="gallery-work-image">
            <img
                src="{{ asset('storage/' . $item->image) }}"
                alt="{{ $item->title }}"
            >
        </div>
    @endif

    @if ($item->note)
        <button
            type="button"
            class="gallery-note-button"
            onclick="this.nextElementSibling.classList.toggle('is-open')"
        >
            Read The Note
        </button>

        <div class="gallery-note">
            {!! nl2br(e($item->note)) !!}
        </div>
    @endif

</article>

                @empty
                    <p>No artworks available.</p>
                @endforelse

            </div>

        </section>

    </main>
@endsection
