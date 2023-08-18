<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <div class="logo">
                   <i class="fas fa-home" style="font-size: 20px; color: #92278f"></i>&nbsp;&nbsp; <h4> GESTION DE ALLAKRO</h4>
                </div>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <li class="has-sub">
                    <a class="js-arrow" href="{{ route('homePage') }}"><i class="fas fa-tachometer-alt"></i>Accueil</a>
                </li>
                    
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Habitants</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('addHabitant') }}">Enregistrer un habitant </a>
                        </li>
                        <li>
                            <a href="{{ route('listHabitant') }}">Liste des habitants</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-medkit"></i>Pharmacies</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('addPharmacie') }}">Enregistrer une pharmacies </a>
                        </li>
                        <li>
                            <a href="{{ route('listPharmacie') }}">Liste des pharmacies</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-h-square"></i>Centre de santé</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('addCentre') }}">Enregistrer un centre de santé </a>
                        </li>
                        <li>
                            <a href="{{ route('listCentre') }}">Liste des centres de santé</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-plus-square"></i>Maladies</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('addMaladie') }}">Enregistrer une maladie </a>
                        </li>
                        <li>
                            <a href="{{ route('listMaladie') }}">Liste des maladies</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#"><i class="fas fa-rub"></i>Projets</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('addProjet') }}">Enregistrer un projet </a>
                        </li>
                        <li>
                            <a href="{{ route('listProjet') }}">Liste des projets</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->