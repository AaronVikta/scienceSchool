@extends('layouts.app')
@section('content')
<div class="">
  <h1 class="text-center">ABIA STATE SENIOR SCIENCE SCHOOL, ALAYI</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 restrict" src="imgs/td.jpg" alt="First slide" >
            <div class="carousel-caption d-none d-md-block">
              <h1 style="color:#c76e0e;">INNOVATE</h1>
              <p style="color:#c76e0e;">Helping your Children put their innovative talents to use</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 restrict" src="imgs/IC.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
            <h1 style="color:#c76e0e;">DREAM</h1>
            <p style="color:#c76e0e;">Every Great Achiement springs from a mind that can dream</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 restrict" src="imgs/student.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>ACHIEVE</h5>
            <p style="color:#c76e0e;">Come let us help you achieve your dreams</p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
    </div>
    <div class="col-md-4 offset-md-4">
      <a href="/admission" type="button" class="btn btn-primary form-control header mt-4">
        Register for the Entrance Examination
      </a>
    </div>
  </div>
</div>
@endsection
