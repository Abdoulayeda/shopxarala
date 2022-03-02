<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Commande;
use Illuminate\Http\Request;

class ReponseControlller extends Controller
{

    public function success()
    {

        $token = $_GET['token'];


        try {
            //Verifier si le paiement provient de paydunya
            if($_POST['data']['hash'] === hash('sha512', env("P_MASTER_KEY"))) {
              //Si la commande est bien passé
              if ($_POST['data']['status'] == "completed") {
                  //Faites vos traitements backoffice ici...
                  $reference = $_POST['data']['custom_data']['reference_commande'];
                  $commande =Commande::where('reference', $reference)->first();
                  
                  if(empty($commande)){
                      return redirect()->route('paiement.error');
                  }

                  $commande->status = "Paiement effectué sur paydunya";
                  $commande->save();
              }
          
              } else {
                    die("Cette requête n'a pas été émise par PayDunya");
              }
            } catch(Exception $e) {
              die();
            }
          
        return view('paiements.success');
    }

    public function cancel()
    {
        return view('paiements.cancel');
    }
}
