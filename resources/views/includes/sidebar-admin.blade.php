<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>



            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Menu</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link {{ request()->is('admin') || request()->is('admin/dashboard') ? 'active' : '' }}"
                href="{{ route('admin-dashboard') }}">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
            </a>

            {{-- BLOG --}}
            <a class="nav-link {{ request()->is('admin/pos*') ? 'active' : '' }}" href="javascript:void(0);"
                data-bs-toggle="collapse" data-bs-target="#blog-menu" aria-expanded="false" aria-controls="blog-menu">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Blog
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse {{ request()->is('admin/pos*') ? 'show' : '' }}" id="blog-menu"
                data-bs-parent="#blog-menu">
                <nav class="sidenav-menu-nested nav" id="blog-menu">
                    <a class="nav-link {{ request()->is('admin/pos/post') || request()->is('admin/pos/post/*/edit') || request()->is('admin/pos/published') || request()->is('admin/pos/draft') || request()->is('admin/pos/trash') ? 'active' : '' }}"
                        href="{{ route('post.index') }}">Semua Post</a>
                    @if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Penulis')
                        <a class="nav-link {{ request()->is('admin/pos/post/create') ? 'active' : '' }}"
                            href="{{ route('post.create') }}">Tambah Baru</a>
                    @endif
                </nav>
            </div>

            {{-- PORTOFOLIO --}}
            <a class="nav-link {{ request()->is('admin/statistik*') ? 'active' : '' }}" href="javascript:void(0);"
                data-bs-toggle="collapse" data-bs-target="#portofolio-menu" aria-expanded="false"
                aria-controls="portofolio-menu">
                <div class="nav-link-icon"><i data-feather="briefcase"></i></div>
                Portofolio
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse {{ request()->is('admin/statistik*') ? 'show' : '' }}" id="portofolio-menu"
                data-bs-parent="#portofolio-menu">
                <nav class="sidenav-menu-nested nav" id="portofolio-menu">
                    <a class="nav-link {{ request()->is('admin/statistik') ? 'active' : '' }}"
                        href="{{ route('statistik.index') }}">Semua Post</a>
                    @if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Penulis')
                        <a class="nav-link {{ request()->is('admin/statistik/create') ? 'active' : '' }}"
                            href="{{ route('statistik.create') }}">Tambah Baru</a>
                    @endif
                </nav>
            </div>

            {{-- MASTER DATA --}}
            @if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Penulis')
                <a class="nav-link {{ request()->is('admin/category*') || request()->is('admin/tag*') ? 'active' : '' }}"
                    href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#masterData-menu"
                    aria-expanded="false" aria-controls="masterData-menu">
                    <div class="nav-link-icon"><i data-feather="database"></i></div>
                    Master Data
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('admin/category*') || request()->is('admin/tag*') ? 'show' : '' }}" id="masterData-menu" data-bs-parent="#masterData-menu">
                    <nav class="sidenav-menu-nested nav" id="masterData-menu">
                        <a class="nav-link {{ request()->is('admin/category') ? 'active' : '' }}"
                            href="{{ route('category.index') }}">Kategori</a>
                        <a class="nav-link {{ request()->is('admin/tag') ? 'active' : '' }}"
                            href="{{ route('tag.index') }}">Tag</a>
                    </nav>
                </div>
            @endif

            {{-- APLIKASI --}}
            @if (Auth::user()->roles == 'Administrator')
                <!-- Sidenav Link (Pengaturan)-->
                <a class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}" href="javascript:void(0);"
                    data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false"
                    aria-controls="collapseSettings">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    Aplikasi
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('admin/settings*') ? 'show' : '' }}" id="collapseSettings"
                    data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('admin/settings/headline') ? 'active' : '' }}"
                            href="{{ route('headline.index') }}">Headline</a>
                        <a class="nav-link {{ request()->is('admin/settings/breaking-news') ? 'active' : '' }}"
                            href="{{ route('breaking-news.index') }}">Breaking News</a>
                        <a class="nav-link {{ request()->is('admin/settings/apps') ? 'active' : '' }}"
                            href="{{ route('apps.index') }}">Aplikasi</a>
                    </nav>
                </div>
            @endif

            {{-- HALAMAN  --}}
            @if (Auth::user()->roles == 'Administrator')
                <a class="nav-link {{ request()->is('admin/page*') ? 'active' : '' }}" href="javascript:void(0);"
                    data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false"
                    aria-controls="collapsePages">
                    <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                    Halaman
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('admin/page*') ? 'show' : '' }}" id="collapsePages"
                    data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('admin/page/redaction') ? 'active' : '' }}"
                            href="{{ route('redaction.index') }}">Redaksi</a>
                        <a class="nav-link {{ request()->is('admin/page/guideline') ? 'active' : '' }}"
                            href="{{ route('guideline.index') }}">Pedoman</a>
                        <a class="nav-link {{ request()->is('admin/page/disclaimer') ? 'active' : '' }}"
                            href="{{ route('disclaimer.index') }}">Disclaimer</a>
                        <a class="nav-link {{ request()->is('admin/page/contact') ? 'active' : '' }}"
                            href="{{ route('contact.index') }}">Kontak</a>
                    </nav>
                </div>
            @endif

            {{-- PENGGUNA  --}}
            <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}" href="javascript:void(0);"
                data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false"
                aria-controls="collapseUtilities">
                <div class="nav-link-icon"><i data-feather="user"></i></div>
                Pengguna
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse {{ request()->is('admin/users*') ? 'show' : '' }}" id="collapseUtilities"
                data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    @if (Auth::user()->roles == 'Administrator')
                        <a class="nav-link {{ request()->is('admin/users/user') ? 'active' : '' }}"
                            href="{{ route('user.index') }}">Semua Pengguna</a>
                        <a class="nav-link {{ request()->is('admin/users/user/create') ? 'active' : '' }}"
                            href="{{ route('user.create') }}">Tambah Baru</a>
                    @endif
                </nav>
            </div>
        </div>
    </div>

    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
