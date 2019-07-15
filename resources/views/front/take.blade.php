@extends('layouts.front.master')

@section('content')
<!--  MAIN CONTENT -->

<div class="content-container add-padding align-center">
  		<section class="single-page container">
	  		<h1 class="title">SCAN YOUR FACE</h1>
	  		<!-- INSTRUCTIONS -->
	  		<div class="instruction">
	  			<div class="col-md-4 col-xs-12">
					<div class="col-xs-2 col-md-3 img"><img src="{{ url('front') }}/assets/img/scan-glasses.svg"></div>
					<div class="col-xs-8 text">Pull hair back, remove makeup and glasses.</div>
	  			</div>
	  			<div class="col-md-4 col-xs-12">
					<div class="col-xs-2 col-md-3 img"><img src="{{ url('front') }}/assets/img/scan-camera.svg"></div>
					<div class="col-xs-8 text">Use the Webcam and minimize shadows.</div>
	  			</div>
	  			<div class="col-md-4 col-xs-12">
					<div class="col-xs-2 col-md-3 img"><img src="{{ url('front') }}/assets/img/scan-center.svg"></div>
					<div class="col-xs-8 text">Center entire face and have a neutral expression.</div>
	  			</div>
	  		</div>
	  		<!-- PRIVACY POLICY -->
	  		<div class="privacy-policy section add-padding">
	  			<h4 class="bold black">Privacy Policy</h4>
	  			<p>I grant The Procter & Gamble Company, its subsidiaries, affiliates, licensees, agents and representatives the right to use my age, race, skin type, image, likeness and/or pictures of me for internal research purposes including the ability to update our Olay Skin Advisor algorithm to improve our skin analysis and product recommendations.</p>
	  			<div class="form-check">
				    <input type="checkbox" class="form-check-input" id="privacyAgreement">
				    <label class="form-check-label" for="privacyAgreement">I agree</label>
				</div>
	  		</div>
	  		<!-- CAMERA AND IMAGE PREVIEW -->
	  		<div class="section align-center" id="camera-wrapper">
	  			<video id="scan" width="320" height="240" autoplay></video>
	  			<div class="camera-btn-wrapper">
	  				<button id="camera-btn">TAKE A PHOTO</button>
	  			</div>
	  			<div id="scan-canvas-wrapper">
	  				<canvas id="scan-canvas" width="320" height="240"></canvas>
	  			</div>
	  		</div>

	  		<!-- FORM TO SUBMIT THE IMAGE FILE -->
			  <form method="post" action="{{ url('take') }}" enctype="multipart/form-data">
			  @csrf
	  			<input id="input-img" name="img" type="hidden" value="">
  				<input id="upload-btn" class="button" type="submit" value="Use this photo">
	  		</form>
	  		<!-- <?php
 
			if (count($_POST) && (strpos($_POST['img'], 'data:image/png;base64') === 0)) {
			     
			  $img = $_POST['img'];
			  $img = str_replace('data:image/png;base64,', '', $img);
			  $img = str_replace(' ', '+', $img);
			  $data = base64_decode($img);
			  $file = 'uploads/img'.date("YmdHis").'.png';
			   
			  if (file_put_contents($file, $data)) {
			     echo "<p>The canvas was saved as $file.</p>";
			  } else {
			     echo "<p>The canvas could not be saved.</p>";
			  } 
			   
			}                   
			?> -->
	  		<!-- UPLOAD FROM GALLERY -->
	  		<div class="add-padding align-center">
		  		<div id="file-btn">
		  			<p>Or upload from gallery</p>
					<div style="position:absolute; width: 100%">
				        <!--This is your labeled image-->
				        <label for="browse-img" class="button">BROWSE IMAGE</label>
				    </div>
				    <div>
				        <input type="file" accept="image/*" id="browse-img" name="browseImg"/>
				    </div>
				</div>
		  	</div>
		  	<div>
		  		<a id="retake-btn">Retake</a>
		  	</div>
	  	</section>
	  </div>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('front') }}/assets/js/scan.js"></script>
<script>

$('#use-btn').hide();
$('#browse-btn').show();

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
$('#browse-btn').hide();
$('#use-btn').show();


        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>

@endsection
