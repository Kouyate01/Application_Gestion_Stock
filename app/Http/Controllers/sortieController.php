<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sortie;
use Session;
use App\type;
use App\Client; 
class sortieController extends Controller
{

   //----------------------------------------------------sortie-----------------------------------------
   //

   public function sortie_home()
   {
    $sortie = Sortie::OrderBy('date')->get();
    return view('sortie.home')->with('sortie',$sortie);
   }
   public function get_edit_sortie($id)
   {
      $sortie = Sortie::find($id);
       $types = type::all();
      $modifier = array();
      foreach($types as $type)
      {
        $modifier[$type->id] = $type->name;
      }
      return view('sortie.edit')->with('sortie',$sortie)->with('types',$modifier);
   }
    public function edit_sortie(Request $request,$id)
    {
      $sortie = Sortie::find($id);
       //change validate after
      $this->validate($request,[
        //'type_id' => 'required',
        'date' => 'required',
        'client' => 'required',
        'montant_total' => 'required',
        'montant_paye' => 'required',
        'montant_due' => 'required',
        'vendu_par' => 'required'
        ]);
       //$sortie->type_id = $request->type_id;
        $sortie->date = $request->date;
        //$sortie->nfacture = $request->nfacture;
        $sortie->client = $request->client;
        $sortie->montant_total = $request->montant_total;
        $sortie->montant_paye = $request->montant_paye;
        $sortie->montant_due = $request->montant_due;
        $sortie->vendu_par = $request->vendu_par;
        $sortie->update();
        Session::flash('success','Vous avez bien modifier votre stock');
        return redirect()->route('sortie.home');
    }

    //delete

    public function destroy_sortie($id)
    {
      $sortie = Sortie::find($id);
      $sortie->delete();

      Session::flash('failed','Vous avez bien supprimer votre sortie');
      return redirect()->route('sortie.home');

    }











  //---------------------------------------------------------------------------------------------------------------------------------------------------Entres-----------------------------------------------------------------------------
  //

    public function show_entres()
    {
      $entres = Sortie::where('mode',1)->OrderBy('date')->get();
      return view('In.show')->with('entres',$entres);
    }
    public function get_add_entres()
    {
      $types = type::all();
      return view('In.add')->with('types',$types);
    }
    public function post_add_entres(Request $request)
    {

      //change validate after
      $this->validate($request,[
        //'type_id' => 'required',
        'date' => 'required',
        // 'nfacture' => 'required',
        'client' => 'required',
        'montant_total' => 'required',
        'montant_paye' => 'required',
        'montant_due' => 'required',
        'vendu_par' => 'required'
      ], );

        // die("OK....");
        $entres = new Sortie;
        //$entres->type_id = $request->type_id;
        $entres->date = $request->date;
        //$entres->nfacture = $request->nfacture;
        $entres->client = $request->client;
        $entres->montant_total = $request->montant_total;
        $entres->montant_paye = $request->montant_paye;
        $entres->montant_due = $request->montant_due;
        $entres->vendu_par = $request->vendu_par;
        $entres->mode = 1;
        $entres->save();



        Session::flash('success','Vous Avez Bien Ajouter votre nouveaux Commande');
        return redirect()->route('show.entres');

    }
    //Edit entres

    public function get_edit_entres($id)
    {
      $entres = Sortie::find($id);
      $types = type::all();
      $typo = [];
      foreach($types as $type)
      {
        $typo[$type->id] = $type->name;
      }
      return view('In.edit')->with('entres',$entres)->with('types',$typo);
    }

    public function edit_entres(Request $request,$id)
    {
      $entres = Sortie::find($id);
       //change validate after
      $this->validate($request,[
       // 'type_id' => 'required',
        'date' => 'required',
        //'nfacture' => 'required',
        'client' => 'required',
        'montant_total' => 'required',
        'montant_paye' => 'required',
        'montant_due' => 'required',
        'vendu_par' => 'required'
        ]);
       $entres->type_id = $request->type_id;
        $entres->date = $request->date;
        //$entres->nfacture = $request->nfacture;
        $entres->client = $request->client;
        $entres->montant_total = $request->montant_total;
        $entres->montant_paye = $request->montant_paye;
        $entres->montant_due = $request->montant_due;
        $entres->vendu_par = $request->vendu_par;
        $entres->mode = 1;
        $entres->update();
        Session::flash('success','Vous avez bien modifier votre entres');
        return redirect()->route('show.entres');
    }

    //delete

    public function destroy_entres($id)
    {
      $entres = Sortie::find($id);
      $entres->delete();

      Session::flash('failed','Vous avez bien supprimer votre entres');
      return redirect()->route('show.entres');

    }
    //---------------------------------------------------------------------------------------------------------------------------------------------END ENTRES-------------------------------------------------------------------------------




//-----------------------------------------------------------------BEGIN SORTIE--------------------------------------------------------------------------------------
//
 public function show_sorties()
    {
      $sorties = Sortie::where('mode','=','2')->OrderBy('date')->get();
      return view('Out.show')->with('sorties',$sorties);
    }
    public function get_add_sorties()
    {
      $types = type::all();
      return view('Out.add')->with('types',$types);
    }
    public function post_add_sorties(Request $request)
    {
      //change validate after
      $this->validate($request,[
        'type_id' => 'required',
        'date' => 'required',
        'nfacture' => 'required',
        'client' => 'required',
        'montant_total' => 'required',
        'montant_paye' => 'required',
        'montant_due' => 'required',
        'vendu_par' => 'required'
        ]);
        $sorties = new Sortie;
        $sorties->type_id = $request->type_id;
        $sorties->date = $request->date;
        //$sorties->nfacture = $request->nfacture;
        $sorties->client = $request->prix_uni;
        $sorties->montant_total = $request->montant_total;
        $sorties->montant_paye = $request->montant_paye;
        $sorties->montant_due = $request->montant_due;
        $sorties->vendu_par = $request->vendu_par;
        $sorties->mode = 2;
        $sorties->save();

        Session::flash('success','Vous Avez Bien Ajouer votre nouveaux Commande');
        return redirect()->route('show.sorties');

    }
    //Edit sorties

    public function get_edit_sorties($id)
    {
      $sorties = Sortie::find($id);
      $types = type::all();
      $typo = [];
      foreach($types as $type)
      {
        $typo[$type->id] = $type->name;
      }
      return view('Out.edit')->with('sorties',$sorties)->with('types',$typo);
    }

    public function get_sorties(Request $request,$id)
    {
      $sorties = Sortie::find($id);
       //change validate after
      $this->validate($request,[
        //'type_id' => 'required',
        'date' => 'required',
        'client' => 'required',
        'montant_total' => 'required',
        'montant_paye' => 'required',
        'montant_due' => 'required',
        'vendu_par' => 'required',
        ]);
       //$sorties->type_id = $request->type_id;
        $sorties->date = $request->date;
        //$sorties->nfacture = $request->nfacture;
        $sorties->client = $request->client;
        $sorties->montant_total = $request->montant_total;
        $sorties->montant_paye = $request->montant_paye;
        $sorties->montant_due = $request->montant_due;
        $sorties->vendu_par = $request->vendu_par;
        $sorties->mode = 2;
        $sorties->update();
        Session::flash('success','Vous avez bien modifier votre sorties');
        return redirect()->route('show.sorties');
    }

    //delete

    public function destroy_sorties($id)
    {
      $sorties = Sortie::find($id);
      $sorties->delete();

      Session::flash('failed','Vous avez bien supprimer votre sorties');
      return redirect()->route('show.sorties');

    }

//--------------------------------------------------------------------------------------------------------------------------------------------END SORTIE-------------------------------------------------------------------------------------
    //types

    public function index_types()
    {
      $types = type::all();
      return view('type.home')->with('types',$types);
    }
    public function post_types(Request $request)
    {
      $this->validate($request,[
        'name' => 'required'
      ]);
      $types = new type;
      $types->name = $request->name;
      $types->save();

      Session::flash('success','Vous Avez bien Ajouter votre Type');
      return redirect()->route('home.types');
    }
    public function single_type($id)
    {
      $types = Sortie::where('type_id',$id)->get();
      $name = type::find($id);
      return view('type.page')->with('types',$types)->with('name',$name);
    }
    public function get_edit_page_types($id)
    {
      $types = Sortie::find($id);
      return view('type.edit')->with('types',$types);
    }

    public function edit_page_types(Request $request,$id)
    {
      $types = Sortie::find($id);
       //change validate after
      $this->validate($request,[
        'date' => 'required',
        'client' => 'required',
        'montant_total' => 'required',
        'montant_paye' => 'required',
        'montant_due' => 'required',
        'vendu_par' => 'required'
        ]);
        $types->date = $request->date;
        $types->client = $request->nfacture;
        $types->montant_total = $request->prix_uni;
        $types->montant_paye = $request->quantite;
        $types->montant_due = $request->fourni;
        $types->vendu_par = $request->fourni;
        $types->update();
        Session::flash('success','Vous avez bien modifier votre type');
        return redirect()->route('single.type',$types->type_id);
    }

    //----------------------------------------------------CLient-----------------------------------------
    //

 //  public function single_client($id)
   // {
    //  $client = client::find($id);
    //  $sortie = sortie::where('fourni',$client->name);
    //  $entres = $sortie->where('mode',1)->get();
    //  $sorties = $sortie->where('mode',2)->get();
    //  return view('client.single')->with('entres',$entres)->with('sorties',$sorties)->with('client',$client);
  //  }

    public function single_client($id)
    {
      $sortie = Sortie::find($id);   //the sortie row where id = $id
      $client = client::where('name',$sortie->fourni)->first(); //client name
      $sorties = Sortie::where('fourni',$client->name); // sortie where the fourni have the name of existing client
      $entres = $sorties->where('mode',1)->get();
      $sorties = $sorties->where('mode',2)->get();
      return view('client.single')->with('entres',$entres)->with('sorties',$sorties)->with('client',$client);

    }
    public function get_edit_client($id)
    {
      $client = client::find($id);
      $sorties = Sortie::where('fourni',$client->name); // sortie where the fourni have the name of existing client
      $entres = $sorties->where('mode',1)->get();
      $sorties = $sorties->where('mode',2)->get();
      return view('client.edit')->with('entres',$entres)->with('sorties',$sorties)->with('client',$client);

    }
    public function edit_client(Request $request,$id)
    {
      $client = client::find($id);
      $this->validate($request,[
        'name' => 'required'
      ]);
      $client = new client();
      $client->name = $request->name;
      $client->telephone = $request->telephone;
      $client->email = $request->email;
      $client->update();
      return redirect()->route('single.client',$id);
    }

}
