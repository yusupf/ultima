@extends('layouts.front.master')

@section('content')

	<!--  MAIN CONTENT -->

    <div class="content-container home">
  		<!-- HERO IMAGE -->
  		<section class="hero">
  			<div class="container">
	  			<div class="hero-inner">
	  				<h1 class="black">
{{ lang('title_question') }}Find Out About The Skin You Care</h1>
	  				<p>
	  					Donec vitae nunc nec felis efficitur convallis. Nam in interdum nunc. Fusce venenatis augue turpis, at hendrerit diam dignissim ut. In in odio tempus.
	  				</p>
	  				<div>
	  					<a href="{{ url('take') }}" class="button">CHECK NOW</a>
	  				</div>
	  			</div>
	  		</div>
  		</section>
  		<!-- FUN FACT 1 -->
  		<section class="fun-fact section" id="fun-fact-1">
			<h2 class="title">FUN FACTS</h2>
			<div class="container">
				<div class="col-md-6 img">
					<img src="{{ url('front') }}/assets/img/home-funfact1.png"/>
				</div>
				<div class="col-md-6">
					<h1 class="add-padding"><span class="italic big">99%</span><br>FACIAL ANALYSIS PRECISION <span class="italic">of the </span><span class="medium"><br> 5 AGING AREA </span><span class="italic"><br>of your face</span></h1>
				</div>
			</div>
  		</section>
  		<!-- FUN FACT 2 -->
  		<section class="fun-fact section bg-lightgrey">
  			<div class="container">
				<div class="col-md-6">
					<h1><span class="italic">More than</span><br><span class="italic big">1 MILLION </span> WOMEN HAVE DISCOVERED <span class="italic"><br/>the power of </span><br/><span class="big">Skin Advisor</span> <span class="italic"><br/>and put our AI to the test</span></h1>
				</div>
				<div class="col-md-6">
					<img src="{{ url('front') }}/assets/img/home-funfact2.jpg"/>
				</div>
			</div>
  		</section>
  		<!-- FUN FACT 3 -->
  		<section class="fun-fact section add-padding">
			<div class="container">
				<div class="col-md-6">
					<img src="{{ url('front') }}/assets/img/home-funfact3.jpg"/>
				</div>
				<div class="col-md-6">
					<h1 class="add-padding"><span class="italic big">99%</span><br>FACIAL ANALYSIS PRECISION <span class="italic">of the </span><span class="medium"><br> 5 AGING AREA </span><span class="italic"><br>of your face</span></h1>
				</div>
			</div>
  		</section>
  		<!-- FUN FACT 4 -->
  		<section class="fun-fact section bg-lightgrey">
  			<div class="container">
				<div class="col-md-6">
					<h1><span class="italic">More than</span><br><span class="italic big">1 MILLION </span> WOMEN HAVE DISCOVERED <span class="italic"><br/>the power of </span><br/><span class="big">Skin Advisor</span> <span class="italic"><br/>and put our AI to the test</span></h1>
				</div>
				<div class="col-md-6">
					<img src="{{ url('front') }}/assets/img/home-funfact4.jpg"/>
				</div>
			</div>
  		</section>
  		<!-- BOTTOM CONTENT -->
  		<section class="bottom-content add-padding align-center">
  			<div class="container">
  				<p>Donec vitae nunc nec felis efficitur convallis. Nam in interdum nunc. Fusce venenatis augue turpis, at hendrerit diam dignissim ut. In in odio tempus.</p>
  				<div><a class="button" href="#">CHECK NOW</a></div>
  			</div>
  		</section>
  	</div>

@endsection
@section('script')

@endsection
