<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
	<div class="section__content section__content--p35">
		<div class="header3-wrap">
			<div class="header__logo">
				<i class="fas fa-home" style="font-size: 20px; color: #fff"></i>&nbsp;&nbsp; <h4 style="color: #fff"> VILLAGE D'ALLAKRO</h4>
			</div>
			<div class="header__navbar">
				<ul class="list-unstyled">
					<li>
						<a href="{{ route('frontHomePage') }}">
							<i class="fas fa-tachometer-alt"></i>Accueil
							<span class="bot-line"></span>
						</a>
					</li>
					<li>
						<a href="{{ route('frontListPharmacie') }}">
							<i class="fas fa-medkit"></i>
							<span class="bot-line"></span>Pharmacies
						</a>
					</li>
					<li>
						<a href="{{ route('frontListCentre') }}">
							<i class="fas fa-h-square"></i>
							<span class="bot-line"></span>Centre de santé
						</a>
					</li>
					<li>
						<a href="{{ route('frontListMaladie') }}">
							<i class="fas fa-plus-square"></i>
							<span class="bot-line"></span>Maladies
						</a>
					</li>
					<li class="has-sub">
						<a href="#">
							<i class="fas fa-copy"></i>
							<span class="bot-line"></span>Déclarations</a>
						<ul class="header3-sub-list list-unstyled">
							<li>
								<a href="login.html">Naissance</a>
							</li>
							<li>
								<a href="register.html">Décès</a>
							</li>
							<li>
								<a href="forget-pass.html">Aménagement</a>
							</li>
							<li>
								<a href="forget-pass.html">Démenagement</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="header__tool">
				<div class="account-wrap">
					<div class="account-item account-item--style2 clearfix js-item-menu">
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
</header>
<!-- END HEADER DESKTOP-->

<!-- HEADER MOBILE-->
<header class="header-mobile header-mobile-2 d-block d-lg-none">
	<div class="header-mobile__bar">
		<div class="container-fluid">
			<div class="header-mobile-inner">
				<a class="logo" href="#">
					<i class="fas fa-home" style="font-size: 20px; color: #fff"></i>&nbsp;&nbsp; <h4 style="color: #fff"> VILLAGE D'ALLAKRO</h4>
				</a>
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
				<li>
					<a href="{{ route('frontHomePage') }}">
						<i class="fas fa-tachometer-alt"></i>Accueil
						<span class="bot-line"></span>
					</a>
				</li>
				<li>
					<a href="{{ route('frontListPharmacie') }}">
						<i class="fas fa-medkit"></i>
						<span class="bot-line"></span>Pharmacies
					</a>
				</li>
				<li>
					<a href="{{ route('frontListCentre') }}">
						<i class="fas fa-h-square"></i>
						<span class="bot-line"></span>Centre de santé
					</a>
				</li>
				<li>
					<a href="{{ route('frontListMaladie') }}">
						<i class="fas fa-plus-square"></i>
						<span class="bot-line"></span>Maladies
					</a>
				</li>
				<li class="has-sub">
					<a href="#" class="js-arrow"><i class="fas fa-copy"></i>Déclarations</a>
					<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
						<li>
							<a href="login.html">Naissance</a>
						</li>
						<li>
							<a href="register.html">Décès</a>
						</li>
						<li>
							<a href="forget-pass.html">Aménagement</a>
						</li>
						<li>
							<a href="forget-pass.html">Démenagement</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
<div class="sub-header-mobile-2 d-block d-lg-none">
	<div class="header__tool">
		<div class="account-wrap">
			<div class="account-item account-item--style2 clearfix js-item-menu">
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
<!-- END HEADER MOBILE -->