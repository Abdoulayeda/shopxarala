@extends('layouts.frontend.app')

@section('content')



<main class="page-wrapper">
    <!-- Navbar 3 Level (Light)-->
   
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-light mb-0">Your cart</h1>
        </div>
      </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <!-- List of items-->
        <section class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
            <h2 class="h6 text-light mb-0">Products</h2><a class="btn btn-outline-primary btn-sm ps-2" href="shop-grid-ls.html"><i class="ci-arrow-left me-2"></i>Continue shopping</a>
          </div>
          <!-- Item-->
          @foreach ($carts as  $cart)
              
          
          <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
            <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="img/shop/cart/01.jpg" width="160" alt="Product"></a>
              <div class="pt-2">
                <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">{{ $cart->name }}</a></h3>
                <div class="fs-sm"><span class="text-muted me-2">Size:</span>8.5</div>
                <div class="fs-sm"><span class="text-muted me-2">Color:</span>White &amp; Blue</div>
                <div class="fs-lg text-accent pt-2">{{format_devise($cart->price) }} x{{ $cart->quantity }} = {{ format_devise($cart->price * $cart->quantity) }}</div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
              <label class="form-label" for="quantity1">Quantity</label>
              <input class="form-control" type="number" id="quantity1" min="1" value="{{ $cart->quantity }}">
              <button class="btn btn-link px-0 text-danger" type="button"><i class="ci-close-circle me-2"></i><span class="fs-sm">Remove</span></button>
            </div>
          </div>

          <!-- Item-->
         @endforeach
          <button class="btn btn-outline-accent d-block w-100 mt-4" type="button"><i class="ci-loading fs-base me-2"></i>Update cart</button>
        </section>




        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
          <div class="bg-white rounded-3 shadow-lg p-4">
            <div class="py-2 px-xl-2">
              <div class="text-center mb-4 pb-3 border-bottom">
                <h2 class="h6 mb-3 pb-1">Total</h2>
                <h3 class="fw-normal">{{ format_devise($total) }}</h3>
              </div>
              
              
              <a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="{{ route('passeralacaisse') }}">
                <i class="ci-card fs-lg me-2"></i>Passer ?? la caisse</a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>

@endsection