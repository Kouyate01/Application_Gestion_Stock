<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Catégrorie;
use Session;
use App\type;
use App\Client;
use App\Categorie;

class categorieController extends Controller
{



  //#
  public function get_edit_categorie($id)
  {
    $cate = Categorie::find($id);
    return view('categorie.edit')->with("categorie", $cate);
  }
  //#
  public function edit_categorie(Request $request, $id)
  {
    $categorie = Categorie::find($id);
    //change validate after
    $this->validate($request, [
      //'type_id' => 'required',
      // 'date' => 'required',
      'nom' => 'required',

    ]);

    $categorie->nom = $request->nom;

    $categorie->update();
    Session::flash('success', 'modification effectué');
    return redirect()->route('show.categorie');
  }



  //#
  public function show_categorie()
  {
    $categories = Categorie::OrderBy('created_at')->get();
    return view('Categorie.show')->with('categories', $categories);
  }
  //#
  public function get_add_categorie()
  {

    return view('Categorie.add');
  }
  //#
  public function post_add_categorie(Request $request)
  {

    $this->validate($request, [

      'nom' => 'required',

    ],);

    $categorie = new Categorie;

    $categorie->nom = $request->nom;

    // $sortie->mode = 1;
    $categorie->save();



    Session::flash('success', 'Ajout effectué');
    return redirect()->route('show.categorie');
  }

  //#
  public function destroy_categorie($id)
  {
    $categorie = Categorie::find($id);
    $categorie->delete();

    Session::flash('failed', 'Vous avez bien supprimer');
    return redirect()->route('show.categorie');
  }
}
