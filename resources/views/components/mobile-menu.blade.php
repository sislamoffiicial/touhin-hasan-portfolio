<div class="mobile-menu">

    <div class="mobile-topbar">

        <button
            type="button"
            class="mobile-menu-toggle"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobile-menu-panel"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

       <a
    href="{{ route('home') }}"
    class="mobile-home-link"
>
    <span class="mobile-home-name">
        TOUHIN HASAN
    </span>

    <span class="mobile-home-role">
        Visual Artist
    </span>
</a>

    </div>

    <nav
        id="mobile-menu-panel"
        class="mobile-menu-panel"
        aria-hidden="true"
    >
        <a
            href="{{ route('gallery') }}"
            class="{{ request()->routeIs('gallery*') ? 'active' : '' }}"
        >
            Gallery
        </a>

        <a
            href="{{ route('about') }}"
            class="{{ request()->routeIs('about') ? 'active' : '' }}"
        >
            About
        </a>

        <a
            href="{{ route('press') }}"
            class="{{ request()->routeIs('press') ? 'active' : '' }}"
        >
            Press
        </a>

        <a
            href="{{ route('reviews') }}"
            class="{{ request()->routeIs('reviews') ? 'active' : '' }}"
        >
            Review
        </a>

        <a
            href="{{ route('awards') }}"
            class="{{ request()->routeIs('awards') ? 'active' : '' }}"
        >
            Awards And Appriciations
        </a>

        <a
            href="{{ route('contact') }}"
            class="{{ request()->routeIs('contact') ? 'active' : '' }}"
        >
            Contact
        </a>

        <a href="#">Blog</a>
    </nav>

</div>
