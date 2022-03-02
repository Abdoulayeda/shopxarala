<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index($reference)
    {
        $commande = Commande::where('reference', $reference)->first();

        if (empty($commande)) {
            return redirect('/');
        }
        return view('paiements.index', compact('commande'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
           'reference' => 'required'
       ]);
        $commande = Commande::where('reference', $request->reference)->first();
        if (empty($commande)) {
            return redirect('/');
        }

        $baseUrl = 'http://127.0.0.1:8000';

        //Recupération des cles de paydunya
        \Paydunya\Setup::setMasterKey(env("P_MASTER_KEY"));
        \Paydunya\Setup::setPublicKey(env("P_PUBLIC_KEY_T"));
        \Paydunya\Setup::setPrivateKey(env("P_PRIVATE_KEY_T"));
        \Paydunya\Setup::setToken(env("P_TOKEN_T"));
        \Paydunya\Setup::setMode("test"); // Optionnel en mode test. Utilisez cette option pour les paiements tests.

        //Configuration des informations de votre service/entreprise
    \Paydunya\Checkout\Store::setName("Xaralashop"); // Seul le nom est requis
    \Paydunya\Checkout\Store::setTagline("Des produits a bon prix");
        \Paydunya\Checkout\Store::setPhoneNumber("780000000");
        \Paydunya\Checkout\Store::setPostalAddress("Koldal");
        \Paydunya\Checkout\Store::setWebsiteUrl("http://www.xarala.co");
        \Paydunya\Checkout\Store::setLogoUrl("https://www.xarala.co/static/img/logo.44106e02b8a2.png");

        //url de redirection
        \Paydunya\Checkout\Store::setCallbackUrl($baseUrl.'/paiement/cancel');
        \Paydunya\Checkout\Store::setReturnUrl($baseUrl.'/paiement/success');


        //Création de la facture
        $invoice = new \Paydunya\Checkout\CheckoutInvoice();
        $nom_invoice ="Commande #$commande->reference";
        $prixunitaire= $commande->total;
        $quantite= 1;
        $prixtotal = $prixunitaire * $quantite;
        $invoice->addItem($nom_invoice, $quantite, $prixunitaire, $prixtotal, "Chaussures faites en peau");
    
        //Le montant que le client payera
        $invoice->setTotalAmount($prixtotal);

        //ajout de la reference
        $invoice->addCustomData("reference_commande", $commande->reference);
        ;
        if ($invoice->create()) {
            $url_facture=$invoice->getInvoiceUrl();
            return Redirect($url_facture);
        } else {
            echo $invoice->response_text;
        }
    }
}
