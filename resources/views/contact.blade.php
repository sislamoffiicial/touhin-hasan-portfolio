@extends('layouts.site')

@section('title', 'Contact — Touhin Hasan')

@section('content')
    <main class="contact-page">


        <aside class="contact-sidebar">
            <nav class="contact-nav">
                <a href="{{ route('gallery') }}">Gallery</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('press') }}">Press</a>
                <a href="{{ route('reviews') }}">Review</a>
                <a href="{{ route('awards') }}">Awards And Appriciations</a>
                <a href="{{ route('contact') }}" class="active">Contact</a>
                <a href="#">Blog</a>
            </nav>

            <div class="contact-sidebar-footer">
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

        <section class="contact-main">

            <h1>Contact me</h1>

            <div class="contact-grid">

                <div class="contact-left">

                    <div class="contact-meta-item">
    <svg class="contact-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M12 2.5a6.5 6.5 0 0 0-6.5 6.5c0 4.9 6.5 12.5 6.5 12.5S18.5 13.9 18.5 9A6.5 6.5 0 0 0 12 2.5Zm0 9.2A2.7 2.7 0 1 1 12 6.3a2.7 2.7 0 0 1 0 5.4Z"/>
    </svg>

    <span>{{ $contactSetting?->location ?? 'Dhaka, Bangladesh' }}</span>
</div>

<div class="contact-meta-item">
    <svg class="contact-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M3 5h18v14H3V5Zm9 7.1L5.6 7h12.8L12 12.1Zm-7-3.8v8.7h14V8.3l-7 5.6-7-5.6Z"/>
    </svg>

    <a href="mailto:{{ $contactSetting?->email }}">
    {{ $contactSetting?->email ?? 'touhinhasan@gmail.com' }}
</a>
</div>

                    <div class="contact-map">
    <iframe
        src="{{ $contactSetting?->google_map_embed_url }}"
        width="100%"
        height="100%"
        style="border:0;"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Touhin Hasan studio location">
    </iframe>
</div>

                </div>

                <div class="contact-right">

                    @if ($errors->any())
    <div class="contact-errors">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

                    @if (session('success'))
    <div class="contact-success">
        {{ session('success') }}
    </div>
@endif

                    <form
    class="contact-form"
    method="POST"
    action="{{ route('contact.store') }}"
>
    @csrf

    <div class="contact-honeypot" aria-hidden="true">
    <label for="website">Website</label>
    <input
        type="text"
        id="website"
        name="website"
        tabindex="-1"
        autocomplete="off"
    >
</div>
                        <input
    type="text"
    name="name"
    placeholder="NAME"
    value="{{ old('name') }}"
>

<input
    type="email"
    name="email"
    placeholder="EMAIL"
    value="{{ old('email') }}"
>

<textarea
    name="message"
    placeholder="MESSAGE"
>{{ old('message') }}</textarea>

                        <button type="submit">
                            SUBMIT
                        </button>
                    </form>

                </div>

            </div>

            <div class="studio-details">
                <div class="studio-line"></div>

                <p>{{ $contactSetting?->studio_label ?? 'Studio' }}</p>

                <p>
    {!! nl2br(e($contactSetting?->studio_address ?? '')) !!}
</p>

                <p class="studio-phone">
    {{ $contactSetting?->phone }}
</p>
            </div>

        </section>

    </main>

@endsection
