<!DOCTYPE>
<html>
<header>
<title>MaNichShop Center</title>
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/ManichStyle.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/MaMenu.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/demo.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}" />
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/MaNichShop.js')}}"></script> 

<!-- jmpress plugin -->
<script type="text/javascript" src="{{asset('/js/jmpress.min.js')}}"></script>
<!-- jmslideshow plugin : extends the jmpress plugin -->
<script type="text/javascript" src="{{asset('/js/jquery.jmslideshow.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/modernizr.custom.48780.js')}}"></script>
<noscript>
	<style>
	.step {
		width: 100%;
		position: relative;
	}
	.step:not(.active) {
		opacity: 1;
		filter: alpha(opacity=99);
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
	}
	.step:not(.active) a.jms-link{
		opacity: 1;
		margin-top: 40px;
	}
	</style>
</noscript>
</header>
<body>
<!-- <div class="Macontact"><span><i class="fa fa-phone"></i> 010369034/098898932</span><span style="float:right">En: Englist &nbsp; Kh: Khmer</span></div> -->
<div class="ManichWrapper">
	<div class="MaSlide">
		@yield('slide')
	</div>
	<div class="Mamenu">
		@yield('menu')
	</div>
	<div class="MaProductCenter"> 
		@yield('productcenter')  
	</div>
	<div class="MaSlideCenter">
		
	</div>
	<div class="MaArrival">
		@yield('arriveproduct')
	</div>
	<div class="MaLine">
		<div class="Mabox-line">Our Products</div>
	</div>
	<div class="MaPickupPro">
		<div class="MaPickupBox">
			<p>Pick up of the best</p>
			<div class="MaBoxImg"></div>
		</div>
		<div class="MaPickupBox">
			<p>Pick up of the best</p>
			<div class="MaBoxImg2">
				<div class="MaSubBox">
					<div class="MaBox-img"></div>
					<div class="MaBox-p"></div>
				</div>
				<div class="MaSubBox">
					<div class="MaBox-img"></div>
					<div class="MaBox-p"></div>
				</div>
				<div class="MaSubBox">
					<div class="MaBox-img"></div>
					<div class="MaBox-p"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="MaDelivery">
		<div class="MaDelivery-cotaint">
			<div class="MaDebox"></div>
			<div class="MaDebox"></div>
			<div class="MaDebox"></div>
			<div class="MaDebox"></div>
		</div> 
	</div>
	<div class="MaFooter">
		@yield('category')
	</div>
	<div class="Macontainlogo">
		@yield('footerlogo')
	</div>
	<div class="MaFooter">
		@yield('footer')
	</div>
</div>
<script type="text/javascript">
	$(function() {
		var jmpressOpts	= {
			animation		: { transitionDuration : '0.8s' }
		};	
		$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
			autoplay	: true,
			bgColorSpeed: '0.8s',
			arrows		: false
		}));
	});
</script>
</body>
</html>
