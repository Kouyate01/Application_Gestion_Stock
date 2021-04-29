<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vendeur;

class vendeurController extends Controller
{
    //
    // public function get_edit_vendeur($id)
    // {
    //   $vendeurs = Vendeur::all();  
  
    //   $vendeur = [];
    //   foreach($vendeurs as $vend)
    //   {
    //     $vendeur[$vend->id] = $vend->nom_vendeur;
    //   }
    //   $vendeur =    Vendeur::find($id);
    //   return view('vendeur.edit')->with(["vendeur"=>$vendeur,"vendeur"=>$vendeur]);
    // }
    //#
    public function edit_vendeur(Request $request, $id)
    {
      $vendeur = vendeur::find($id);
      //change validate after
      $this->validate($request, [
        //'type_id' => 'required',
        // 'date' => 'required',
        'nom_vendeur' => 'required',
  
      ]);
  
    //   $produit->nom_produit = $request->nom;
    //   $produit->detail = $request->detail;
    //   $produit->id_categorie = $request->id_categorie;
  
      $vendeur->update();
      Session::flash('success', 'modification effectué');
      return redirect()->route('show.vendeur');
    }
  
  
  
    //#
    public function show_vendeur()
    {
      $vendeurs = vendeur::all();
      return view('vendeur.show')->with(['vendeurs'=>$vendeurs]);
    }
    //#
    public function get_add_vendeur()
    {
      $vendeurs = vendeur::all();
  
      return view('vendeur.add')->with(["vendeurs"=>$vendeurs]);
    }
    //#
    public function post_add_produit(Request $request)
    {
  
      $this->validate($request, [
  
          'nom_vendeur' => 'required',
      ],);
  
      $vendeur = new vendeur;
  
      $vendeur->nom_vendeur = $request->nom_vendeur;
      $vendeur->email_vendeur = $request->email_vendeur;
      $vendeur->téléphone_vendeur = $request->téléphone_vendeur;
      $vendeur->address_vendeur = $request->address_vendeur;
    //   $vendeur->id_categorie = $request->categorie_id;
  
      // $sortie->mode = 1;
      $vendeur->save();
  
  
  
      Session::flash('success', 'Ajout effectué');
      return redirect()->route('show.vendeur');
    }
  
    //#
    public function destroy_vendeur($id)
    {
      $vendeur = vendeur::find($id);
      $vendeur->delete();
  
      Session::flash('failed', 'Vous avez bien supprimer');
      return redirect()->route('show.vendeur');
    }
}
