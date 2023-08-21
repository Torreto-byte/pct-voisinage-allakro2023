<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Recherche...." />
                    <button class="au-btn--submit" type="submit" style="background-color: #92278f;">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            @if ($countHabitantEnAttente > 0)
                                <span class="quantity">{{ $countHabitantEnAttente }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset('images/icon/avatar.png') }}"/>
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Session::get('noms') }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('images/icon/avatar.png') }}"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Session::get('role_name') }}</a>
                                        </h5>
                                    </div>
                                </div>
                                
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('logout') }}">
                                        <i class="zmdi zmdi-power"></i>Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->