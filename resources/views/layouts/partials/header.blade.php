<header>
    <h1>Movies App</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('movies.index')}}"  class="{{request()->routeIs('movies.*') ? 'active' : ''}}">Movies</a>
            </li>
            <li>
                <a href="{{route('about')}}"  class="{{request()->routeIs('about') ? 'active' : ''}}">About</a>
            </li>
        </ul>
    </nav>
</header>