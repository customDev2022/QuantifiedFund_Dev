@extends('layouts.layout')
@section('content')
<section class="slidersec">
	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
		  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
		<div class="carousel-inner">
			<div class="carousel-item active"  data-bs-interval="10000"> 
				<div class="sldrimg"> <img src="images/indexbnr.png" alt="" srcset="images/indexbnr@2x.png 2x, images/indexbnr@3x.png 3x"></div>
				<div class="container">
				<div class="bannertext1">
					
						<div class="row align-content-center">
							<div class="col-md-8 col-lg-5">
								<h1 class="text-white">Investors need more defensive tools</h1>
								<h6 class="text-white">Tracking investments against personal benchmarks</h6>
								<a href="fund-family.html" class="animatedbtn">View our funds</a>
							</div>
						</div>
						
					</div>
					<div class="bnrlogo1">
					     <img src="images/bnrlogo.png" alt="" srcset="images/bnrlogo@2x.png 2x, images/bnrlogo@3x.png 3x">
				        </div>
				</div>
				
				</div>
				<div class="carousel-item"  data-bs-interval="2000">
					<div class="sldrimg"> <img src="images/indexbnr2.jpg" alt="" srcset="images/indexbnr2@2x.jpg 2x, images/indexbnr2@3x.jpg 3x"></div>
					<div class="container">
					<div class="bannertext2">
					
						<div class="row align-content-center justify-content-center">
							<div class="col-md-12 col-lg-9">
								<h1 class="text-white">Managing the non-traditional is our tradition</h1>
					            <h6 class="text-white">Tracking investments against personal benchmarks</h6>
					            <a href="fund-family.html" class="animatedbtn">View our funds</a>
							</div>
						</div>
						
					</div>
					<div class="bnrlogo2">
					     <img src="images/bnrlogo.png" alt="" srcset="images/bnrlogo@2x.png 2x, images/bnrlogo@3x.png 3x">
				        </div>
				</div>
				
				</div>
				<div class="carousel-item">
					<div class="sldrimg"> <img src="images/indexbnr3.jpg" alt="" srcset="images/indexbnr3@2x.jpg 2x, images/indexbnr3@3x.jpg 3x"></div>
					<div class="container">
					<div class="bannertext3">
						
							<div class="row align-items-center justify-content-center">
								<div class="col-md-6 order-1 order-md-0">
									<h6 class="text-white">2022 Winner United States</h6>
									<h1 class="text-white">Quantified STF Fund (QSTFX)</h1>
									<h6 class="text-white">The Fund seeks high appreciation on an annual basis consistent with a high tolerance for risk. The Quantified STF Fund follows easily identifiable trends in the market with rule sets that seek to take advantage of both up and down trends.</h6>
								</div>
								<div class="col-md-6 order-0 order-md-1">
									<div class="rghtpnl">
										<div class="row justify-content-start">
										<div class="col-4 col-md-2 text-right">
											<img src="images/bnr3logoicon.png" alt="" srcset="images/bnr3logoicon@2x.png 2x, images/bnr3logoicon@3x.png 3x">
										</div>
										<div class="col-8 col-md-10">
											<h2>REFINITIV LIPPER <br> Fund awards</h2>
											<h6 class="text-white">Best Flexible Portfolio Fund Over Three Years Best Flexible Portfolio Fund Over Five Years</h6>
										</div>
									</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="bnrlogo1">
					     <img src="images/bnrlogo.png" alt="" srcset="images/bnrlogo@2x.png 2x, images/bnrlogo@3x.png 3x">
				        </div>
					</div>
					
				</div>
				
			
		</div>
	</section>

<section class="approachsec">
	<div class="container">
		<p class="text-theme sub-heading text-uppercase text-center">Quantified funds</p>
		<h1 class="text-theme-dark text-center">Our Approach</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="image">
					<img src="images/our-approach-img1.png" alt="" srcset="images/our-approach-img1@2x.png 2x, images/our-approach-img1@3x.png 3x">
				</div>
				<h4 class="text-theme-dark">Dynamic Risk Management</h4>
				<p>Today’s market climate is defined by unpredictability. A wealth-management strategy that manages risk first—focusing on preserving wealth and minimizing losses—is the key to investor success.</p>
			</div>
			<div class="col-md-4">
				<div class="image">
					<img src="images/our-approach-img2.png" alt="" srcset="images/our-approach-img2@2x.png 2x, images/our-approach-img2@3x.png 3x">
				</div>
				<h4 class="text-theme-dark">Strategic Diversification</h4>
				<p>Our investment strategies offer a three-dimensional approach to diversification that aims to increase the odds that more of your portfolio is correctly positioned to weather market storms.</p>
			</div>
			<div class="col-md-4">
				<div class="image">
					<img src="images/our-approach-img3.png" alt="" srcset="images/our-approach-img3@2x.png 2x, images/our-approach-img3@3x.png 3x">
				</div>
				<h4 class="text-theme-dark">Managing Investor Expectations</h4>
				<p>An investment portfolio should be tailored to an investor's time lines, risk tolerance, and goals. The benchmark used to set investment expectations and track the progress of that portfolio should be just as customized.</p>
			</div>
		</div>
	</div>
</section>
<section class="vdosec">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="vdoimg">
					<img src="images/videoimg1.jpg" alt="" srcset="images/videoimg1@2x.jpg 2x, images/videoimg1@3x.jpg 3x">
					<button type="button" class="plybtn" data-toggle="modal" data-target="#vdoModalfirst" id="play-button">
					<i class="fa fa-play"></i>
					</button>
				</div>
				<p class="text-theme sub-heading text-uppercase">FEATURED VIDEO</p>
				<h4 class="text-theme-dark">Preparing Portfolios for the Unexpected</h4>
			</div>
			<div class="col-md-6">
				<div class="vdoimg">
					<!-- <img src="images/videoimg2.jpg" alt="" srcset="images/videoimg2@2x.jpg 2x, images/videoimg2@3x.jpg 3x">
					<button type="button" class="plybtn" data-toggle="modal" data-target="#vdoModalscnd" id="play-button">
					<i class="fa fa-play"></i>
					</button> -->
					<iframe src="https://www.youtube.com/embed/hDZ9T_H1ThE?controls=0" allowfullscreen="allowfullscreen"></iframe>
				</div>
				<p class="text-theme sub-heading text-uppercase">FEATURED VIDEO</p>
				<h4 class="text-theme-dark">Our Approach to Dynamic Risk Management</h4>
			</div>
		</div>
	</div>
</section>
<section class="newssec">
	<div class="container">
		<div class="d-flex justify-content-between align-items-baseline">
			<h1 class="text-theme-dark">In The News</h1>
			<a href="news.html"  class="mrbtn"><h4>More News <img src="images/up-arrow-tilted.png" alt="" srcset="images/up-arrow-tilted@2x.png 2x, images/up-arrow-tilted@3x.png 3x" class="ml-1"></h4></a>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="image">
					<a href="javascript:void(0)"><img src="images/newimg1.jpg" alt="" srcset="images/newimg1@2x.jpg 2x, images/newimg1@3x.jpg 3x"></a>
					<div class="category">
						news
					</div>
				</div>
				<a href="javascript:void(0)" class="text-theme-dark"><h4 class="text-theme-dark">Flexible Plan Quantified Funds Reach $1 Billion AUM</h4></a>
				<p>February 16th, 2021</p>
			</div>
			<div class="col-md-4">
				<div class="image">
					<a href="javascript:void(0)"><img src="images/newimg2.jpg" alt="" srcset="images/newimg2@2x.jpg 2x, images/newimg2@3x.jpg 3x"></a>
					<div class="category">
						news
					</div>
				</div>
				<a href="javascript:void(0)" class="text-theme-dark"><h4 class="text-theme-dark">Best ETFs And Mutual Funds Begin 2021 With A Whimper</h4></a>
				<p>February 16th, 2021</p>
			</div>
			<div class="col-md-4">
				<div class="image">
					<a href="javascript:void(0)"><img src="images/newimg3.jpg" alt="" srcset="images/newimg3@2x.jpg 2x, images/newimg3@3x.jpg 3x"></a>
					<div class="category">
						news
					</div>
				</div>
				<a href="javascript:void(0)" class="text-theme-dark"><h4 class="text-theme-dark">Morningstar Names Quantified STF Fund Top-performing Tactical-allocation Fund in 2020</h4></a>
				<p>February 16th, 2021</p>
			</div>
		</div>
	</div>
</section>
<section class="contactsec bg-theme">
	
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1 class="text-white text-center">Contact us</h1>
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="Input1" aria-describedby="name" placeholder="Full Name *">
								<img src="images/user-icon.png" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" id="Input1" aria-describedby="name" placeholder="Email *">
								<img src="images/email-icon.png" alt="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								
								<textarea class="form-control" id="Input3" rows="3" placeholder="Message"></textarea>
								<img src="images/chat-icon.png" alt="">
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