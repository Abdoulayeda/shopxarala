@extends('layouts.frontend.app')

@section('content')
 <!-- Page Title-->
 <div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
            </li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Product Page v.1</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 text-light mb-0">{{ $produit->nom }}</h1>
      </div>
    </div>
  </div>

  
    @if (session('msg'))
    <div class="alert alert-success">
     {{ session('msg') }}    
    </div>
    @endif

    @if (session('msg_error'))
    <div class="alert alert-danger">
        {{ session('msg_error') }}
    </div>
        
    @endif
   

  <div class="container">
    <!-- Gallery + details-->
    <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5">
      <div class="px-lg-3">
        <div class="row">
          <!-- Product gallery-->
          <div class="col-lg-7 pe-lg-0 pt-lg-4">
            <div class="product-gallery">
              <div class="product-gallery-preview order-sm-2">
                <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="{{ asset('img/components/gallery/03.jpg') }}" data-zoom="{{ asset('img/components/gallery/03.jpg') }}" alt="Product image">
                  <div class="image-zoom-pane"></div>
                </div>
               
              </div>

              <div class="product-gallery-thumblist order-sm-1">
                  <a class="product-gallery-thumblist-item active" href="#first">
                      <img src="{{ asset('img/components/gallery/03.jpg') }}" alt="Product thumb">
                    </a>
                                      
              </div>
            </div>
          </div>
          <!-- Product details-->
          <div class="col-lg-5 pt-4 pt-lg-0">
            <div class="product-details ms-auto pb-3">
              <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 Reviews</span></a>
                <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div>
              <div class="mb-3"><span class="h3 fw-normal text-accent me-1">{{ format_devise($produit->prix)}}</span>
                <del class="text-muted fs-lg me-3">$25.<small>00</small></del><span class="badge bg-danger badge-shadow align-middle mt-n2">Sale</span>
              </div>
              <div class="position-relative me-n4 mb-3">
               
                
                
                <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Product available</div>
              </div>
              <form class="mb-grid-gutter" method="post" action=" {{ route('cart.store')}}">
                @csrf
                <input type="hidden" value="{{ $produit->id}}" name="produit_id">
                <div class="mb-3 d-flex align-items-center">
                  <select class="form-select me-3" style="width: 5rem;" name="quantite">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>Ajouter au panier</button>
                </div>

              </form>
              <!-- Product panels-->
              <div class="accordion mb-4" id="productPanels">
                <div class="accordion-item">
                  <h3 class="accordion-header"><a class="accordion-button" href="#productInfo" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Description</a></h3>
                  <div class="accordion-collapse collapse show" id="productInfo" data-bs-parent="#productPanels">
                    <div class="accordion-body">
                      <h6 class="fs-sm mb-2">Description</h6>
                     <p>
                         {{ $produit->description }}
                     </p>
                      
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-8 mb-3">
                  <a class="btn btn-primary btn-sm d-block w-100" href="{{ route('cart.index') }}"><i class="ci-eye me-2 fs-base align-middle"></i>Voir le panier</a>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-8">
                  <a class="btn btn-success btn-sm d-block w-100" href="{{ route('passeralacaisse') }}"><i class="ci-card me-2 fs-base align-middle"></i>Passer à la caisse</a>
                </div>
              </div>
                
                <div class="accordion-item">
                  <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                    <div class="accordion-body">
                      <select class="form-select">
                        <option value>Select your country</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Belgium">Belgium</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Spain">Spain</option>
                        <option value="UK">United Kingdom</option>
                        <option value="USA">USA</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sharing-->
              <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection