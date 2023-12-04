@include('include.top')

  <body>

    @include('include.nav')

    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Veterinarian <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Meet Our Veterinary Doctor</h1>
          </div>
        </div>
      </div>
    </section>

		

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">

					@foreach ($doctor as $doctors)
 

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(doctorimage/{{$doctors->image}});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>{{$doctors->name}}</h3>
								<span class="position mb-2">{{$doctors->speciality}}</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                             <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                             <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                             <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                             <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		                            </ul>
	              </div>
							</div>
						</div>
					</div>
				
					@endforeach

					

					
				</div>

			</div>
		</section>


		@include('include.footer')

  <!-- loader -->
  @include('include.bottom')
