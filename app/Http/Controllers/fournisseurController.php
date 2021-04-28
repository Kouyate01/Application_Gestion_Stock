<?php

namespace App\Http\Controllers;

use App\Categorie;
use Session;
use Illuminate\Http\Request;
use App\Fournisseur;
use App\Http\Requests;
class fournisseurController extends Controller
{
    ////#
  public function get_edit_fournisseur($id)
  {
    $fournisseur = Fournisseur::find($id);
    return view('vendeur.edit')->with("vendeur", $fournisseur);
  }
  //#
  public function edit_fournisseur(Request $request, $id)
  {
    $fournisseur = Fournisseur::find($id);
    //change validate after
    $this->validate($request, [
      //'type_id' => 'required',
      // 'date' => 'required',
      'nom_vendeur' => 'required',

    ]);

    $fournisseur->nom_vendeur = $request->nom_vendeur;

    $fournisseur->update();
    Session::flash('success', 'modification effectué');
    return redirect()->route('show.fournisseur');
  }



  //#
  public function show_vendeur()
  {
    $fournisseur = Fournisseur::OrderBy('created_at')->get();
    return view('Fournisseur.show')->with('vendeur', $fournisseur);
  }
  //#
  public function get_add_fournisseur()
  {

    return view('Fournisseur.add');
  }
  //#
  public function post_add_vendeur(Request $request)
  {

    $this->validate($request, [

      'nom_vendeur' => 'required',

    ],);

    $fournisseur = new Fournisseur;

    $fournisseur->nom_vendeur = $request->nom_vendeur;

    // $sortie->mode = 1;
    $fournisseur->save();



    Session::flash('success', 'Ajout effectué');
    return redirect()->route('show.vendeur');
  }

  //#
  public function destroy_vendeur($id)
  {
    $fournisseur = Fournisseur::find($id);
    $fournisseur->delete();

    Session::flash('failed', 'Vous avez bien supprimer');
    return redirect()->route('show.vendeur');
  }
}
