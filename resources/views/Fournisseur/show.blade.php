@extends('main')
@section('title')
Entrées
@endsection


@section('contents')
    <div class="row">

      <div class="col-md-12">
        <div class="widget">
          <div class="widget-header">
            <h2 class="text-center"><strong>Fournisseur</strong></h2>

            <div class="additional-btn">  
           <a href="{{ route('get_add_vendeur') }}"><button class="btn btn-success pull-right">Ajouter</button></a>
            </div>
          </div>
          <div class="widget-content">
          <br>
            <div class="table-responsive">
              <form class='form-horizontal' role='form'>
              <table id="datatables-1" class="table table-striped table-bordered " cellspacing="0" width="80%">
                      <thead>
                        <tr>
                          <th>Nom </th>
                          <th>Email</th>
                          <th>Téléphone</th>
                          <th>Adresse</th>
                          <th>option</th>
                      </tr>
                      </thead>

                      <tbody>
                        
                        @foreach($vendeurs as $vendeur)
                        {{-- @php
                            $categorie = DB::table('Catégorie')->where('id',$produit->id_categorie)->first();
                        @endphp --}}
                          <tr>
                              <td>{{ $vendeur->nom_vendeur}}</td>
                              <td>{{ $vendeur->email_vendeur}}</td>
                              <td>{{ $vendeur->téléphone_vendeur}}</td>
                              <td>{{ $vendeur->adress_vendeur}}</td>
                              {{-- <td>{{ $produit->nom}}</td> --}}
                             <td>
                           
                          <div class="btn-group btn-group-xs">
                           <a href="{{ route('get_edit_vendeur',$vendeur->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('destroy.vendeur',$vendeur->id) }}" class="btn btn-defaultt"><i class="fa fa-trash"></i></a>

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
