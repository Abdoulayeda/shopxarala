<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Produit;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        return view("cart.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Produit::find($request->produit_id);

        if($produit->quantite < $request->quantite){
            return redirect()->back()->with('msg_error', 'La quantité de produit est suppérieur est nomre de produit disponible');
        }
        $produit->quantite = $produit->quantite - $request->quantite;
    \Cart::add(array(
        'id' => $produit->id,
        'name' => $produit->nom,
        'price' => $produit->prix,
        'quantity' => $request->quantite,
        'attributes' => [
            'image' => $produit->image
        ],
        'associatedModel' => $produit
    ));

  

   return redirect()->back()->with('msg','Produit ajouter avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
