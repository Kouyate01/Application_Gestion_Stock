<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Produit;
class produitController extends Controller
{
    
  //#
  public function get_edit_produit($id)
  {
    $categories = Categorie::all();  

    $categorie = [];
    foreach($categories as $cate)
    {
      $categorie[$cate->id] = $cate->nom;
    }
    $produit = produit::find($id);
    return view('produit.edit')->with(["produit"=>$produit,"categorie"=>$categorie]);
  }
  //#
  public function edit_produit(Request $request, $id)
  {
    $produit = produit::find($id);
    //change validate after
    $this->validate($request, [
      //'type_id' => 'required',
      // 'date' => 'required',
      'nom' => 'required',

    ]);

    $produit->nom_produit = $request->nom;
    $produit->detail = $request->detail;
    $produit->id_categorie = $request->id_categorie;

    $produit->update();
    Session::flash('success', 'modification effectué');
    return redirect()->route('show.produit');
  }



  //#
  public function show_produit()
  {
    $produits = produit::all();
    return view('produit.show')->with(['produits'=>$produits]);
  }
  //#
  public function get_add_produit()
  {
    $categories = Categorie::all();

    return view('produit.add')->with(["categories"=>$categories]);
  }
  //#
  public function post_add_produit(Request $request)
  {

    $this->validate($request, [

        'nom' => 'required',
    ],);

    $produit = new produit;

    $produit->nom_produit = $request->nom;
    $produit->detail = $request->detail;
    $produit->id_categorie = $request->categorie_id;

    // $sortie->mode = 1;
    $produit->save();



    Session::flash('success', 'Ajout effectué');
    return redirect()->route('show.produit');
  }

  //#
  public function destroy_produit($id)
  {
    $produit = produit::find($id);
    $produit->delete();

    Session::flash('failed', 'Vous avez bien supprimer');
    return redirect()->route('show.produit');
  }
}
