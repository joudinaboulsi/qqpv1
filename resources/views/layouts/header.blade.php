
    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg light">
        <div class="container-xxl">
            <a class="navbar-brand mt-10"  href="{{ route('home') }}">
                <div class="logo">
                    <div class="logo-light">
                        <img src="/img/logos/qqp-logo-dark.svg" alt="qqp logo">
                    </div>
                </div>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === '/' ? 'active' : ''}}" href="{{ route('home') }}" role="button"
                            aria-expanded="false">
                            Home
                        </a>    
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{ Request::path() === 'about' ? 'active' : ''}}" href="{{ route('about') }}" role="button" 
                            aria-expanded="false">
                            About
                        </a>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'portfolio' ? 'active' : ''}}" href="{{ route('portfolio') }}" role="button"
                            aria-expanded="false">
                            Portfolio
                        </a>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'contact' ? 'active' : ''}}"" href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="nav-info-right d-flex align-items-center">
                    <div class="social">
                        <ul class="rest">
                            <li>
                                <a href="https://www.facebook.com/quickqualityprint/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://instagram.com/quickqualityprint?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.tiktok.com/@qqpsarl" target="_blank"><i class="fab fa-tiktok"></i></a>                        
                            </li>
                        </ul>
                    </div>
                    <div class="dark-mode-icon">
                        <button type="button" class="theme-icon">
                            <i aria-hidden="true" class="pe-7s-moon moon" title="Toggle between dark and light mode"></i>
                            <i aria-hidden="true" class="pe-7s-sun sun" title="Toggle between dark and light mode"></i>
                        </button>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->
