@extends('layouts.frontend.app')

@section('content')

<main class="page-wrapper">
   
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>Acceuil</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="/">Boutique</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-light mb-0">Checkout</h1>
        </div>
      </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <section class="col-lg-8">
          <!-- Steps-->
          <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
              <div class="step-progress"><span class="step-count">1</span></div>
              <div class="step-label"><i class="ci-cart"></i>Panier</div></a><a class="step-item active current" href="checkout-details.html">
              <div class="step-progress"><span class="step-count">2</span></div>
              <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item active current" href="checkout-shipping.html">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item active current" href="checkout-payment.html">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="ci-card"></i>Paiement</div></a><a class="step-item active current" href="checkout-review.html">
              <div class="step-progress"><span class="step-count">5</span></div>
              <div class="step-label"><i class="ci-check-circle active current"></i>Termin??</div></a>
            </div>
         <div class="card">
            
         </div>
          
        </section>
      </div> 
    </div>
  </main>

@endsection
