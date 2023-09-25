<div class="nav-scroller py-1 mb-3 border-bottom">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <span>DANYAL CAN KAYRAK ®</span>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="/"><i class="fa-solid fa-house"></i></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                         viewBox="0 0 24 24"><title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                        <path d="M21 21l-5.2-5.2"></path>
                    </svg>
                </a>

                <div class="d-flex align-items-center">
                @auth
                    <span class="mx-2">Welcome, {{ auth()->user()->name }}</span>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Logout</button>
                        </form>
                @else
                    <a class="btn btn-sm btn-outline-secondary mx-1" href="/register">Register</a>
                    <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
                @endauth
                </div>
            </div>
        </div>
    </header>

    <nav class="nav nav-underline justify-content-between">
        {{ $slot }}
    </nav>
</div>
