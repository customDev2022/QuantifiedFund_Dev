@extends('layouts.layout')
@section('content')
    <section class="innerbnr">
	<div class="container">
		<div class="bnrcntnt">
		<h1>Contact us</h1>
		</div>
	</div>
</section>
<section class="incontactsec">
	<div class="container">
		<div class="row justify-content-center align-items-center">
		  <div class="col-md-6">
		  		<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">							
								<input type="text" class="form-control" id="Input1" aria-describedby="name" placeholder="First Name *">
								<img src="images/user-green.png" alt="" srcset="images/user-green@2x.png 2x, images/user-green@3x.png 3x">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">							
								<input type="text" class="form-control" id="Input1" aria-describedby="name" placeholder="Last Name *">
								<img src="images/user-green.png" alt="" srcset="images/user-green@2x.png 2x, images/user-green@3x.png 3x">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" id="Input1" aria-describedby="name" placeholder="Email *">
								
								<img src="images/email-green.png" alt="" srcset="images/email-green@2x.png 2x, images/email-green@3x.png 3x">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="Input1" aria-describedby="name" placeholder="Phone *">
								
								<img src="images/call-green.png" alt="" srcset="images/call-green@2x.png 2x, images/call-green@3x.png 3x">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								
								<textarea class="form-control" id="Input3" rows="3" placeholder="Message"></textarea>
								
								<img src="images/chat-green.png" alt="" srcset="images/chat-green@2x.png 2x, images/chat-green@3x.png 3x">
							</div>
						</div>
						<div class="col-md-12 text-center">
							<button type="submit" class="animatedbtn">Send</button>
						</div>
					</div>
				</form>
		  </div>
		</div>
	</div>
</section>
@endsection