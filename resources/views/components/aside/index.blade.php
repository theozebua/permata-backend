<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/">
            <img src="/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Permata Backend</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
        <x-nav>
            <x-nav.nav-item>
                <x-nav.nav-link class="{{ Request::is('admin') ? 'active' : '' }}">
                    <x-nav.nav-icon>
                        <x-svg.dashboard />
                    </x-nav.nav-icon>
                    <a href="{{ route('dashboard.index') }}">
                        <x-nav.nav-link-text>Dashboard</x-nav.nav-link-text>
                    </a>
                </x-nav.nav-link>
            </x-nav.nav-item>
            <x-nav.nav-item>
                <x-nav.nav-link class="{{ Request::is('words*') ? 'active' : '' }}">
                    <x-nav.nav-icon>
                        <x-svg.words />
                    </x-nav.nav-icon>
                    <a href="{{ route('words.index') }}">
                        <x-nav.nav-link-text>Words</x-nav.nav-link-text>
                    </a>
                </x-nav.nav-link>
            </x-nav.nav-item>
            <x-nav.nav-item>
                <x-nav.nav-link class="{{ Request::is('news*') ? 'active' : '' }}">
                    <x-nav.nav-icon>
                        <x-svg.news />
                    </x-nav.nav-icon>
                    <a href="{{ route('news.index') }}">
                        <x-nav.nav-link-text>News</x-nav.nav-link-text>
                    </a>
                </x-nav.nav-link>
            </x-nav.nav-item>
            <br>
            <hr class="horizontal dark mt-0">
            <x-nav.nav-item>
                <x-nav.nav-link>
                    <x-nav.nav-icon>
                        <x-svg.sign-out />
                    </x-nav.nav-icon>
                    <form action="{{ route('auth.signout') }}" method="POST">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent" onclick="return confirm('Sign out now?')">
                            <x-nav.nav-link-text>Sign Out</x-nav.nav-link-text>
                        </button>
                    </form>
                </x-nav.nav-link>
            </x-nav.nav-item>
        </x-nav>
    </div>
</aside>
