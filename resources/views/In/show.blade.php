@extends('main')
@section('title')
Entrées
@endsection


@section('contents')
    <div class="row">

      <div class="col-md-12">
        <div class="widget">
          <div class="widget-header">
            <h2 class="text-center"><strong>Entrées</strong></h2>

            <div class="additional-btn">  
           <a href="{{ route('get_add_entres') }}"><button class="btn btn-success pull-right">Ajouter</button></a>
            </div>
          </div>
          <div class="widget-content">
          <br>
            <div class="table-responsive">
              <form class='form-horizontal' role='form'>
              <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          {{-- <th>Types</th> --}}
                          {{-- <th>N°=Facture</th> --}}
                          <th>Catégorie</th>
                          <th>Produit</th>
                      
                          <th>Fournisseur</th>
                          <th>Stock initial</th>
                          <th>Stock actuel</th>
                          <th>Prix d'achat</th>
                          <th>Prix de vente</th>
                          <th>Entrer par</th>
 
                          {{-- <th>Solde</th> --}}
                          <th>Date</th>
                          <th>Options</th>
                      </tr>
                      </thead>

                      <tbody>
                        
                        @foreach($entres as $entre)
                        @php
               
                            $produit = DB::table('Produit')->where('id',$entre->id_produit)->first();
                            $categorie = DB::table('Catégorie')->where('id',$produit->id_categorie)->first();
                            $vendeur = DB::table('vendeur')->where('id',$entre->id_vendeur)->first();
                            $by = DB::table('users')->where('id',$entre->entree_par)->first();
                              
                        @endphp
                          <tr>
                              <td>{{ $categorie->nom}}</td>
                              <td>{{ $produit->nom_produit}}</td>
                              <td>{{ $vendeur->nom_vendeur }}</td>
                       
                              <td>{{ $entre->quantite}}</td>
                              <td>{{ $entre->stock_actuel }}</td>
                              <td>{{ $entre->prix_achat }}</td>
                              <td>{{ $entre->prix_uni}}</td>
                              <td>{{ $by->noms}}</td>
              
                              {{-- <td><a href="{{ route('single.client',$entre->id)}}">{{ $entre->fourni }}</a></td> --}}
                              {{-- <td>{!! $entre->solde = $entre->stock_actuel * $entre->prix_uni !!}</td> --}}
                              <td>{{ date('d/m/Y',strtotime($entre->date)) }}</td>
                              <td>
                          <div class="btn-group btn-group-xs">
                           <a href="{{ route('get_edit_entres',$entre->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('destroy.entres',$entre->id) }}" class="btn btn-defaultt"><i class="fa fa-trash"></i></a>

                          </div>
                        </td>

                          </tr>
                        @endforeach

                      </tbody>
                  </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
@section('scripts')
  <!-- Page Specific JS Libraries -->
  <script src="{{ URL::to('assets/libs/jquery-datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::to('assets/libs/jquery-datatables/js/dataTables.bootstrap.js') }}"></script>
  <script src="{{ URL::to('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
  <script src="{{ URL::to('assets/js/pages/datatables.js') }}"></script>
  <script>
       $('#active-entres-table').addClass('active');
</script>
@endsection
