<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/img/logos/qqp-logo-dark.svg" width="150">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

      
        <!-- Nous Connaitre -->
        <li class="menu-item {{ Route::currentRouteName() == 'cms_portfolio' ? 'active' : '' }}">
            <a href="{{ Route('cms_portfolio') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Portfolio">Portfolio</div>
            </a>
        </li>

       


        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>

        
        
        {{-- <!-- SEO -->
        <li class="menu-item {{ Route::currentRouteName() == 'seoCms' || Route::currentRouteName() == 'seoEdit' ? 'active' : '' }}">
            <a href="{{ route('seoCms') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Seo">Seo</div>
            </a>
        </li> --}}

        <!-- Logout -->
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Logout">Logout</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
