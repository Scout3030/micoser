<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div>
            <img src="/images/logo_micoser_black.png" alt="" width="100%">
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="/images/default_user.png" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <button type="button" tabindex="0" class="dropdown-item">Mi cuenta</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" class="dropdown-item" tabindex="0" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"
                                    >
                                        {{ __("Cerrar sesión") }}
                                    </button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{auth()->user()->name}}
                            </div>
                            <div class="widget-subheading">
                                {{auth()->user()->role->name}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>