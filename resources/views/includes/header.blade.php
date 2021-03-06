<header class="header header-relative header-fixed-on-mobile" data-helper-in-threshold="200" data-helper-out-threshold="500" data-sticky-threshold="200" data-bkg-threshold="100" data-compact-threshold="100">
    <div class="header-inner-top bkg-gradient-custom-blue-header">
        <div class="nav-bar">
            <div class="row flex">
                <div class="column width-8 nav-bar-inner v-align-middle left">
                    <div>
                        <p>Télephone: +213698162821 / Email: sepespoire@ass.dz</p>
                    </div>
                </div>
                <div class="column width-4 nav-bar-inner v-align-middle right">
                    <div>
                        <ul class="social-list list-horizontal">
                            <li><a href="#"><span class="icon-facebook small"></span></a></li>
                            <li><a href="#"><span class="icon-twitter small"></span></a></li>
                            <li><a href="#"><span class="icon-vimeo small"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-inner">
        <div class="row nav-bar">
                <div class="column width-12 nav-bar-inner">
                    <div class="logo">
                        <div class="logo-inner">
                            <a href="{{route('home')}}" class=""><img src="{{asset('images/logo_sep.png')}}" alt="Faulkner Logo"></a>
                            <a href="{{route('home')}}" class=""><img src="{{asset('images/logo_sep')}}" alt="Faulkner Logo"></a>
                        </div>
                    </div>
                    <nav class="navigation nav-block secondary-navigation nav-right">
                        <ul>
                            <li>
                                <!-- Donate nav-button -->
                                <div class="v-align-middle">
                                    <a data-content="inline" data-aux-classes="tml-promotion-modal tml-padding-small tml-swap-exit-light height-auto rounded" data-toolbar="" data-modal-mode data-modal-width="1140" data-modal-animation="scaleIn" data-lightbox-animation="fadeIn" href="#promotion-modal" class="lightbox-link button small rounded no-label-on-mobile no-margin-bottom fade-location">
                                        Donation
                                   </a>
                                </div>
                            </li>
                            <li class="aux-navigation hide">
                                <!-- Aux Navigation -->
                                <a href="#" class="navigation-show side-nav-show nav-icon">
                                    <span class="icon-menu"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="navigation nav-block primary-navigation nav-right">
                        <ul>
                            <li class="{{ Request::is('/') ? 'current' : '' }}">
                                <a href="{{route('home')}}">Accueil</a>
                            </li>
                            <li class="{{ Request::is('association') ? 'current' : '' }}">
                                <a href="{{route('association')}}">Association</a>
                            </li>
                            <li class="{{ Request::is('maladie') ? 'current' : '' }}">
                                <a href="{{route('maladie')}}">Maladie</a>
                            </li>
                            <li class="{{ Request::is('services') ? 'current' : '' }}">
                                <a href="{{route('services')}}">Services</a>
                            </li>
                            <li class="{{ Request::is('blog') ? 'current' : '' }}">
                                <a href="{{route('blog')}}">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
    </div>
</header>


