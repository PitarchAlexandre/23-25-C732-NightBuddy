<header>
    <div class="nav">
        <input type="checkbox" id="nav-check">

        <!-- Logo -->
        <div class="nav-header">
            <a href="/"><span class="nav-title">Night Buddy</span></a>
        </div>

        <!-- Bouton Hamburger -->
        <div class="nav-btn">
            <label for="nav-check" class="nav-btn-label">
                <span class="nav-btn-bar"></span>
                <span class="nav-btn-bar"></span>
                <span class="nav-btn-bar"></span>
            </label>
        </div>

        <!-- Liens de la navbar -->
        <div class="nav-links">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/carpooling" class="nav-link {{ request()->is('carpooling') ? 'active' : '' }}">Événements et Covoiturages</a>

            <!-- Lien "Créer un événements" uniquement pour les utilisateurs connectés -->
            @auth
                <a href="/events" class="nav-link {{ request()->is('events') ? 'active' : '' }}">Créer un événements</a>
            @endauth

            <!-- Section Auth -->
            <div class="auth-links">
                @auth
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="/login" class="nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
                    <a href="/register" class="nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
                @endguest
            </div>
        </div>
    </div>
</header>
