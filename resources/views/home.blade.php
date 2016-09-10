@extends('layout.index')
@section('slide')
	<section id="jms-slideshow" class="jms-slideshow">
				<div class="step" data-color="color-2">
					<div class="jms-content">
						<h3>Just when I thought...</h3>
					<p>From fairest creatures we desire increase, that thereby beauty's rose might never die</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/1.png" />
				</div>
				<div class="step" data-color="color-3" data-y="900" data-rotate-x="80">
					<div class="jms-content">
						<h3>Holy cannoli!</h3>
					<p>But as the riper should by time decease, his tender heir might bear his memory</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/2.png" />
				</div>
				<div class="step" data-color="color-4" data-x="-100" data-z="1500" data-rotate="170">
					<div class="jms-content">
						<h3>No time to waste</h3>
					<p>Within thine own bud buriest thy content and, tender churl, makest waste in niggarding</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/3.png" />
				</div>
				<div class="step" data-color="color-5" data-x="3000">
					<div class="jms-content">
						<h3>Supercool!</h3>
					<p>Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/4.png" />
				</div>
				<div class="step" data-color="color-1" data-x="4500" data-z="1000" data-rotate-y="45">
					<div class="jms-content">
						<h3>Did you know that...</h3>
					<p>Thou that art now the world's fresh ornament and only herald to the gaudy spring</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/5.png" />
				</div>
			</section>
@stop
@section('menu')
<nav id="primary_nav_wrap">
	<ul>
	  <li class="current-menu-item"><a href="#">Home</a></li>
	  <li><a href="#">Lady</a>
		<ul>
		  <li><a href="#">Sub Menu 1</a></li>
		  <li><a href="#">Sub Menu 2</a></li>
		  <li><a href="#">Sub Menu 3</a></li>
		  <li><a href="#">Sub Menu 4</a>
			<ul>
			  <li><a href="#">Deep Menu 1</a>
				<ul>
				  <li><a href="#">Sub Deep 1</a></li>
				  <li><a href="#">Sub Deep 2</a></li>
				  <li><a href="#">Sub Deep 3</a></li>
					<li><a href="#">Sub Deep 4</a></li>
				</ul>
			  </li>
			  <li><a href="#">Deep Menu 2</a></li>
			</ul>
		  </li>
		  <li><a href="#">Sub Menu 5</a></li>
		</ul>
	  </li>
	  <li><a href="#">Man</a>
		<ul>
		  <li><a href="#">Sub Menu 1</a></li>
		  <li><a href="#">Sub Menu 2</a></li>
		  <li><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>
	  <li><a href="#">Look Book</a>
		<ul>
		  <li class="dir"><a href="#">Sub Menu 1</a></li>
		  <li class="dir"><a href="#">Sub Menu 2 THIS IS SO LONG IT MIGHT CAUSE AN ISSEUE BUT MAYBE NOT?</a>
			<ul>
			  <li><a href="#">Category 1</a></li>
			  <li><a href="#">Category 2</a></li>
			  <li><a href="#">Category 3</a></li>
			  <li><a href="#">Category 4</a></li>
			  <li><a href="#">Category 5</a></li>
			</ul>
		  </li>
		  <li><a href="#">Sub Menu 3</a></li>
		  <li><a href="#">Sub Menu 4</a></li>
		  <li><a href="#">Sub Menu 5</a></li>
		</ul>
	  </li>
	  <li><a href="#">Others</a></li> 
	  <li><a href="#">Menu 6</a></li>
	  <li><a href="#">Contact Us</a></li>
	  <li><div class="menusearch"><div class="btnsearch"></div><input placeholder="Find your products..." id="menusearch"></div></li>
	</ul>
</nav>
@stop
@section('productcenter')
<div class="MaProduct"> 
	<div class="Masub-p1">
		<img src="images/jean.jpeg">
		<p>There my products</p>
		<p>$16</p>
	</div>
	<div class="Masub-p1">
		<img src="images/blackjean.jpeg">
		<p>There my products</p>
		<p>$10</p>
	</div>
</div>
<div class="MaProduct">  
	<div class="MaProductslide"><img src="images/whitejean.jpeg"></div>
	<p>There my products</p>
	<h3>EXPLOSIVE STYLE</h3>
	<div class="MaProductDetail">This this first Products come from cambodia</div>
	<div class="MaProductSeeMore">More Products</div>
</div>
<div class="MaProduct"> 
	<div class="Masub-p1">
		<img src="images/blackshirt.jpeg">
		<p>There my products</p>
		<p>$15</p>
	</div>
	<div class="Masub-p1">
		<img src="images/underware.jpeg">
		<p>There my products</p>
		<p>$13</p>
	</div>
</div>
@stop
@section('arriveproduct')
<div class="MaArriveTitle"><p>284</p><span>ARRIVAL THIS MONTH</span></div>
<div class="MaProduct-Arr">
	@for($i=0;$i<8;$i++)
	<div class="MaProduct-Arr-box">
		<div class="Maproduct-img"><img src="{{asset('images/images_'.$i.'.jpeg')}}"></div>
		<div class="Madesproduct"><p>This is my products</p></div>
		<div class="Madesprice"><span>$150</span></div>
	</div>
	@endfor 
</div>
@stop
@section('footerlogo')
<div class="Mafooterlogo"> 
	<div class="Malogo"><img src="/hhf"></div>
</div> 
@stop
@section('footer')
<div class="MaBlockFooter">
	<div class="MasubBlockFooter"><p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Choam Chao,​Phnom Penh</p></div>
	<div class="MasubBlockFooter" style="text-align:center">
		<?php $socail=['fa-facebook','fa-instagram','fa-twitter','fa-pinterest','fa-skype'];?>
		@for($s=0;$s<count($socail);$s++)
		<a href="#"><i class="fa {{$socail[$s]}}"></i></a>
		@endfor
	</div>
	<div class="MasubBlockFooter">
		<ul>
			<li><a href="#">Man</a></li>
			<li><a href="#">Lady</a></li>
			<li><a href="#">Look Book</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Others</a></li>
		</ul>
	</div>
</div>
@stop
@section('category')
<div class="Masubconfooter"> 
		<div class="Masubcatblock">
			<div class="SubBlock">
				<h5>Lady</h5>
				<ul>
					@for($i=0;$i<6;$i++)
					<?php $j=$i+1;?>
					<li><a href="#">category {{$j}}</a></li> 
					@endfor
				</ul>
			</div>
			<div class="SubBlock">
				<h5>Man</h5> 
				<ul>
					@for($i=0;$i<6;$i++)
					<?php $j=$i+1;?>
					<li><a href="#">category {{$j}}</a></li> 
					@endfor
				</ul>
			</div>
		</div> 
		<div class="Masubcatblock Macatcenter"></div> 
		<div class="Masubcatblock">
			<div class="SubBlock">
				<h5>Lady</h5>
				<ul>
					@for($i=0;$i<6;$i++)
					<?php $j=$i+1;?>
					<li><a href="#">category {{$j}}</a></li> 
					@endfor
				</ul>
			</div>
			<div class="SubBlock">
				<h5>Other Products</h5> 
				<ul>
					@for($i=0;$i<6;$i++)
					<?php $j=$i+1;?>
					<li><a href="#">category {{$j}}</a></li> 
					@endfor
				</ul>
			</div>
		</div>  
	</div>
@stop