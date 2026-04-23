<!DOCTYPE html>
<html lang="en">

<x-layouts.head :title="$title ?? null" />

<body>
    <nav>
        <div>
            <a href="/">🐦 Chirper</a>
        </div>
        <div>
            @auth
                <span>{{ auth()->user()->name }}</span>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">Se déconnecter</button>
                </form>
            @else
                <a href="/login">Se connecter</a>
                <a href="{{ route('register') }}">S'inscrire</a>
            @endauth
        </div>
    </nav>

    <!-- Success Toast -->
    @if (session('success'))
        <div>
            <div>
                <svg xmlns="<http://www.w3.org/2000/svg>" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <main>
        {{ $slot }}
    </main>

    <footer>
        <div>
            <p>© {{ date('Y') }} Artesan - Built with Laravel and ❤️</p>
        </div>
    </footer>
</body>
</html>