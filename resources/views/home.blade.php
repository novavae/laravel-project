@extends('layouts.main')

@section('container')
  <!-- home section start -->
<section class="home py-2" id="home">
    <div class="container-lg">
      <div class="row min-vh-200 align-items-center align-content-center">
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="home-img text-center"></div>
          <img src="img/hero.png" alt="product img" class="mx-3 hero.png img-fluid" >
        </div>
        <div class="col-md-6 mt-5 mt-md-0 order-md-first">
          <div class="home-text"></div>
          <h1 class="text-success text-uppercase fs-1 fw-bold">NIKE AIR JORDAN</h1>
          <h2 class="fs-2">Because shoes that fit better, perform better.</h2>
          <p class="mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt facilis repellat odit numquam blanditiis! Id suscipit vitae 
            hic dignissimos reprehenderit dolorem nulla, nihil ex odio at quibusdam eveniet exercitationem modi.</p>
            <a href="#products" class="btn btn-info px-3 mt-3">Click Here</a>
        </div>
      </div>
    </div>
  </section>
  <!-- home section end -->
@endsection
        