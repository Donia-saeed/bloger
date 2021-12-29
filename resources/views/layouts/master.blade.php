<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moschino | Minimalist Free HTML Portfolio by WowThemes.net</title>
<link rel='stylesheet' href="{{ asset('css/woocommerce-layout.css')}}" type='text/css' media='all'/>
<link rel='stylesheet' href="{{ asset('css/woocommerce-smallscreen.css')}}" type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href="{{ asset('css/woocommerce.css')}}" type='text/css')}}" media='all'/>
<link rel='stylesheet' href="{{ asset('css/font-awesome.min.css')}}" type='text/css')}}" media='all'/>
<link rel='stylesheet' href="{{ asset('style.css')}}" type='text/css' media='all'/>
<link rel='stylesheet' href="{{url('https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700')}}" type='text/css' media='all'/>
<link rel='stylesheet' href="{{ asset('css/easy-responsive-shortcodes.css')}}" type='text/css' media='all'/>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="{{url('/')}}" rel="home">Moschino</a></h1>
			<h2 class="site-description">Minimalist Portfolio HTML Template</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="{{url('/')}}">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Shop</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Elements</a></li>
				<li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="{{url('#')}}">Portfolio Item</a></li>
					<li><a href="{{url('#')}}">Blog Article</a></li>
					<li><a href="{{url('#')}}">Shop Item</a></li>
					<li><a href="{{url('#')}}">Portfolio Category</a></li>
				</ul>
				</li>
				<li><a href="{{url('#')}}">Contact</a></li>
			</ul>
		</div>
		</nav>
		</header>
        @yield('content')



	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Moschino</h1>
			 <a target="blank" href="{{url('https://www.wowthemes.net/">&copy; Moschino - Free HTML Template by WowThemes.net')}}"</a>
		</div>
	</div>
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
</body>
</html>
