@extends('layouts.frontend.app')

@section('content')

<section class="tns-carousel tns-controls-lg mb-4 mb-lg-5">
  <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
    <!-- Item-->
    <div class="px-lg-5" style="background-color: #f5b1b0;">
      <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/02.jpg" alt="Women Sportswear">
        <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
          <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
            <h3 class="h2 text-light fw-light pb-1 from-bottom">Hurry up! Limited time offer.</h3>
            <h2 class="text-light display-5 from-bottom delay-1">Women Sportswear Sale</h2>
            <p class="fs-lg text-light pb-3 from-bottom delay-2">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p>
            <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="px-lg-5" style="background-color: #3aafd2;">
      <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/01.jpg" alt="Summer Collection">
        <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
          <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
            <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
            <h2 class="text-light display-5 from-start delay-1">Huge Summer Collection</h2>
            <p class="fs-lg text-light pb-3 from-start delay-2">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p>
            <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="px-lg-5" style="background-color: #eba170;">
      <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/03.jpg" alt="Men Accessories">
        <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
          <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
            <h3 class="h2 text-light fw-light pb-1 from-top">Complete your look with</h3>
            <h2 class="text-light display-5 from-top delay-1">New Men's Accessories</h2>
            <p class="fs-lg text-light pb-3 from-top delay-2">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p>
            <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container pt-lg-3 mb-4 mb-sm-5">
<div class="row">
  @foreach ($produits as $produit ) 
    <div class="col-lg-3">
      <!-- Product card (Grid) -->
<div class="card product-card">
  <span class="badge bg-danger badge-shadow">Promo</span>
  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist">
    <i class="ci-heart"></i>
  </button>
  <a class="card-img-top d-block overflow-hidden" href="#">
    <img src="{{ asset('img/components/gallery/03.jpg') }}" alt="Product">
  </a>
  <div class="card-body py-2">
    <a class="product-meta d-block fs-xs pb-1" href="#"> {{ $produit->categorie->libelle }} </a>
    <h3 class="product-title fs-sm"><a href="#"> {{ $produit->nom }} </a></h3>
    <div class="d-flex justify-content-between">
      <div class="product-price">
        <span class="text-accent">{{  format_devise($produit->prix) }} </span><small>50</small></span>
        <del class="fs-sm text-muted">38.<small>50</small></del>
      </div>
      <div class="star-rating">
        <i class="star-rating-icon ci-star-filled active"></i>
        <i class="star-rating-icon ci-star-filled active"></i>
        <i class="star-rating-icon ci-star-filled active"></i>
        <i class="star-rating-icon ci-star"></i>
        <i class="star-rating-icon ci-star"></i>
      </div>
    </div>
  </div>
  <div class="card-body card-body-hidden">
    <div class="text-center pb-2">
    
     
     
    
    </div>
    <div class="d-flex mb-2">
     
      <a class="btn btn-primary btn-sm" type="button" href="{{ route('showproduit', $produit->slug) }}">
        <i class="ci-cart fs-sm me-1"></i>
        Add to Cart
      </a>
    </div>
   
  </div>
</div>
    </div>
   @endforeach 
</div>

  
</section>






@endsection