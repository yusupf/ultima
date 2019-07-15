<!-- NAVIGATION BAR -->
<nav class="nav-container">
		<div class="container">
			<div class="left col-md-6 col-xs-8">
				<a href="#">
					<div class="logo"></div>
					<h1 class="logo-text">Skin Check</h1>
				</a>
			</div>
			<div class="right col-lg-4 col-md-4 col-xs-2 pull-right">
				<div class="desktop-menu">
					<!-- SIGN IN / SIGN UP -->
					<!-- <div class="menu">
						<a href="#">SIGN IN</a> | <a href="#">SIGN UP</a>
					</div> -->
					<!-- WELCOME, USER -->
					<div class="menu">
						{{ lang('header_1') }}, <a href="#" class="user-account"> <span class="bold">Tiva</span></a>
					</div>
					<div class="menu">
                        <?php $lang =  Cache::get('lang') ?>
						<a @if($lang == '' || $lang=='en') class="active" @endif href="{{ url('lang/en') }}">EN</a> | <a href="{{ url('lang/id') }}" @if($lang=='id') class="active" @endif>IN</a>
					</div>
				</div>

				<!-- MOBILE MENU -->
				<div class="dropdown" id="mobile-menu">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="mobileMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>
				  <div class="dropdown-menu" aria-labelledby="mobileMenuButton">
				    <a class="dropdown-item" href="#">SIGN IN</a>
				    <a class="dropdown-item" href="#">SIGN UP</a>
				  </div>
				</div>
				<!-- MOBILE MENU END-->
			</div>
		</div>
  	</nav>