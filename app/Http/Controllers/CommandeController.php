<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
   public function passeralacaisse()
   { 
       return view('commandes.index');
   }

   public function store(Request $request) {
      
      $this->validate($request,[
         'adressedelivraison'=>'required|string|max:150'
      ]);
         $commande = new Commande();
         $commande->reference = rand(200000,500000);
         $commande->total = Cart::getTotal();
         $commande->adressedelivraison = $request->adressedelivraison;
         $commande->user_id = Auth::user()->id;
         $commande->save();
         
         $paniers = Cart::getContent();

      foreach ($paniers as $panier) 
      {
         $commande->produits()->attach($panier->id,
       [
          'quantite'=>$panier->quantity,
          'prix'=>$panier->price,
         ]);
         $produit =Produit::find($panier->id);
         $produit->quantite -=$panier->quantity; 
      }

      Cart::clear();

      if($request->type_de_payement == "livraison") {
           return redirect()->route('confirmation');
      } else {
           return redirect()->route('paiement.index', $commande->reference);
      }
   }


   public function confirmation() {
      return view('commandes.confirmation');
   }
}
