@extends('main')
@section('title')
Sorties
@endsection


@section('contents')
    <div class="row">

      <div class="col-md-12">
        <div class="widget">
          <div class="widget-header">
            <h2><strong>Default</strong> DataTable</h2>

            <div class="additional-btn">
           <a href="{{ route('get_add_sorties') }}"><button class="btn btn-success pull-right">Ajouter</button></a>
            </div>
          </div>
          <div class="widget-content">
          <br>
            <div class="table-responsive">
              <form class='form-horizontal' role='form'>
              <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <!--<th>Types</th>-->
                              <th>Date</th>
                              <!--<th>N°Facture</th>-->
                              <th>Client</th>
                              <th>Quantité</th>
                              <th>Montant Total</th>
                              <th>Montant Payé</th>
                              <th>Montant Due</th>
                              <th>Vendu par</th>
                              <!--<th>Moyen paiement</th>-->
                              <th>Options</th>
                          </tr>
                      </thead>


                      <tbody>
                        @foreach($sorties as $sortie)
                          <tr>

                              {{--<td>{{ $sortie->type->name }}</td>--}}
                              <td>{{ date('d/m/Y',strtotime($sortie->date)) }}</td>
                              {{--<td>{{ $sortie->nfacture }}</td>--}}
                              <td>{{ $sortie->client}}</td>
                              <td>{{ $sortie->quantite}}</td>
                              <td>{{ $sortie->montant_total }}</td>
                              <td>{{ $sortie->montant_paye}}</td>
                              <td>{{ $sortie->montant_due }}</td>
                              <td>{{ $sortie->vendu_par }}</td>
                              {{--<td>{{}}--}}
                              {{--<td>{!! $sortie->solde = $sortie->quantite * $sortie->prix_uni !!}</td>--}}
                              <td>
                          <div class="btn-group btn-group-xs">
                           <a href="{{ route('get_edit_sorties',$sortie->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('destroy.sorties',$sortie->id) }}" class="btn btn-default"><i class="fa fa-trash"></i></a>
                            
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
       $('#active-sorties-table').addClass('active');
</script>
@endsection
