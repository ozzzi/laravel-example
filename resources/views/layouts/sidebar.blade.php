<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ active_link('dashboard') }}" aria-current="page" href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active_link('articles.*') }}" href="{{ route('articles.index') }}">
                    Articles
                </a>
            </li>
        </ul>
    </div>
</nav>
