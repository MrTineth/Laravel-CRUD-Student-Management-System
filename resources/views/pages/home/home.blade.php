@extends('layouts.main')  <!--Extent home body for main layout-->



@section('pageContent')  <!--Pass body-->


<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="/images/hero-carousel-3.svg" class="img-fluid animated">
      <h2>Welcome to <span>Enrollify</span></h2>
      <p>Empower your educational journey with our Student Management System.</p>
      <div class="d-flex">
        <a href="/student"><button class="btn btn-primary mt-5">Manage Students</button></a>
        
      </div>
    </div>
  </section>


@endsection