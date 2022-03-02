@extends('layouts.frontend.app')

@section('content')

<main class="page-wrapper">
   
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
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
              <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="checkout-details.html">
              <div class="step-progress"><span class="step-count">2</span></div>
              <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item" href="checkout-shipping.html">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item" href="checkout-payment.html">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
              <div class="step-progress"><span class="step-count">5</span></div>
              <div class="step-label"><i class="ci-check-circle"></i>Review</div></a>
            </div>
         
          <!-- Shipping address-->
          <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Information</h2>
         <form action="{{ route('commandestore') }}" method="post" >
          @csrf

          @if ($errors->any())

            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>                    
                @endforeach
              </ul>
            </div>    
          @endif
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-fn">Nom</label>
                  <input class="form-control" type="text" id="checkout-fn" value="{{ Auth::user()->name }}" name="nom">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-ln">Email</label>
                  <input class="form-control" type="text" type="email" id="checkout-ln" value="{{ Auth::user()->email }}" name="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-email">Téléphone</label>
                  <input class="form-control"  id="checkout-email" value="{{ Auth::user()->telephone }}" name="telephone">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-phone">Adresse de livraison</label>
                  <input class="form-control" type="text" id="checkout-phone" name="adressedelivraison" placeholder="Adresse de livraison complete" value="{{ old('adressedelivraison') }}" required>
                </div>
              </div>

             
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-company">Departement</label>
                  <input class="form-control" type="text" id="checkout-company" name="departement" placeholder="Votre département">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-country">Région</label>
                  <select class="form-select" id="checkout-country" name="region" placeholder="Votre région">
                    <option>Dakar</option>
                    <option>Kolda</option>
                    <option>Tamba</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                   <div class="form-check form-check-inline">
                     <input type="radio" name="type_de_payement" class="form-check-input" name="inlineRadioOptions" id="payement_en_ligne" value="enligne" checked>
                     <label for="payementenligne" class="form-check-label">Payement en ligne</label>
                   </div>
               </div>
               <div class="col-lg-12">
                <div class="form-check form-check-inline">
                  <input type="radio" name="type_de_payement" class="form-check-input" name="inlineRadioOptions" id="payement_a_la_livraison" value="livraison">
                  <label for="payementalalivraison" class="form-check-label">Payement à la livraison</label>
                </div>
            </div>

                <div class="col-12">
                  
                </div>
              </div>
            </div>


            <div class="d-none d-lg-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html">
                <i class="ci-arrow-left mt-sm-0 me-1"></i>
                <span class="d-none d-sm-inline">Retour vers le panier</span>
                <span class="d-inline d-sm-none">Back</span></a>
              </div>
              <div class="w-50 ps-2">
                
                <button class="btn btn-primary">
                Valider le payement
                <span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i>
                </button>
              </div>
            </div>

         </form>

        
          <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" checked id="same-address">
            <label class="form-check-label" for="same-address">Same as shipping address</label>
          </div>
          <!-- Navigation (desktop)-->
          
        </section>


        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
          <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
            <div class="py-2 px-xl-2">
              <div class="widget mb-3">
                <h2 class="widget-title text-center">Votre panier</h2>

               @foreach ($carts as $cart )
               <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html">
                <img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
              <div class="ps-2">
                <h6 class="widget-product-title"><a href="shop-single-v1.html">{{ $cart->name }}</a></h6>
                <div class="widget-product-meta"><span class="text-accent me-2">{{ format_devise($cart->price) }}</span><span class="text-muted">x {{$cart->quantity }}</span></div>
              </div>
            </div>
               @endforeach
              
               
              </div>
              <ul class="list-unstyled fs-sm pb-2 border-bottom">
                <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">{{ format_devise($total) }}</span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end">$9.<small>50</small></span></li>
              </ul>
              <h3 class="fw-normal text-center my-4">{{ format_devise($total) }} </h3>
              
            </div>
          </div>
        </aside>
      </div>

      <!-- Navigation (mobile)-->
      <div class="row d-lg-none">
        <div class="col-lg-8">
          <div class="d-flex pt-4 mt-3">
            <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html">
              <i class="ci-arrow-left mt-sm-0 me-1"></i>
               <span class="d-none d-sm-inline">Retour vers le panier</span>
               <span class="d-inline d-sm-none">Retour</span></a>
            </div>
            <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="{{route('commandestore')}}">
              <span class="d-none d-sm-inline">Valider le payement</span>
              <span class="d-inline d-sm-none">Valider</span>
              <i class="ci-arrow-right mt-sm-0 ms-1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
