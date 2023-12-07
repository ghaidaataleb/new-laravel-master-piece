<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                </p>
         </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
    <a class="navbar-brand" href="index"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars"></span> Menu
  </button>
  <div class="navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a href="home" class="nav-link">Home</a></li>
      <li class="nav-item "><a href="about" class="nav-link">About</a></li>
      <li class="nav-item"><a href="/vet" class="nav-link">Veterinarian</a></li>
      <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
      <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
      <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
      <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>


      @if (Route::has('login'))
      @auth
      
<<<<<<< HEAD
=======

      <li class="nav-item"><a href="{{url('myappointment')}}" style="background-color: greenyellow; color: white;" class="nav-link">My Appointment</a></li>


>>>>>>> b423acd6fc35106447513050a818aba48f5096d2
      <x-app-layout>

      </x-app-layout>


        @else
        <li class="nav-item"><a href="{{route('register')}}" class="nav-link">register</a></li>
        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">login</a></li>


          @endauth  
      @endif


    </ul>
  </div>
</div>
</nav>