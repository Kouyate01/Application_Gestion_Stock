@extends('main')

@section('title')
  Ajouter Entrées
@endsection
@section('contents')
      <div class="row">

        <div class="col-md-6 col-md-offset-3 portlets ui-sortable">

						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Ajouter</strong> Entrées</h2>

							</div>
							<div class="widget-content padding">
								<div id="basic-form">
									<form action="{{ route('add.entres') }}" method="POST" role="form">
                    {{-- <div class="form-group @if($errors->has('cate_id')) has-error @endif">
										<label for="cate_id">Categorie</label>
									<select class="form-control" name="cate_id">
                    @foreach($categorie as $cate)
									  <option value="{{ $cate->id }}">{{ $cate->nom }}</option>
                  @endforeach
									</select>
                  </div> --}}

                  <div class="form-group @if($errors->has('produit_id')) has-error @endif">
										<label for="produit_id">Produit</label>
									<select class="form-control" name="produit_id">
                    @foreach($produit as $prod)
									  <option value="{{ $prod->id }}">{{ $prod->nom_produit }}</option>
                  @endforeach
									</select>
                  </div>

                  <div class="form-group @if($errors->has('fourni')) has-error @endif">
                  <label for="fourni">Fournisseur</label>
                  <select class="form-control" name="fourni">
                    @foreach($vendeur as $vend)
									  <option value="{{ $vend->id }}">{{ $vend->nom_vendeur }}</option>
                  @endforeach
									</select>
                </div>
                    <div class="form-group @if($errors->has('quantite')) has-error @endif">
										<label for="quantite">Quantité</label>
										<input type="text" class="form-control" name ="quantite">
                    @if($errors->has('quantite')) <div class="help-block">
                       {{ $errors->first('quantite') }}
                    </div>
                  @endif
                    </div>
                    {{-- <div class="form-group @if($errors->has('stock_actuel')) has-error @endif">
                    <label for="stock_actuel">Stock Actuel</label>
                    <input type="text" class="form-control" name="stock_actuel" data-mask="999999" placeholder="999999">
                    @if($errors->has('stock_actuel')) <div class="help-block">
                       {{ $errors->first('stock_actuel') }}
                    </div>
                  @endif
                  </div> --}}
                  <div class="form-group @if($errors->has('prix_achat')) has-error @endif">
                  <label for="prix_achat">Prix d'achat</label>
                  <input type="text" class="form-control" name="prix_achat" data-mask="999999" placeholder="999999">
                  @if($errors->has('prix_achat')) <div class="help-block">
                     {{ $errors->first('prix_achat') }}
                  </div>
                @endif
                </div>
                <div class="form-group @if($errors->has('prix_uni')) has-error @endif">
                <label for="prix_uni">Prix de vente</label>
                <input type="text" class="form-control" name ="prix_vente">
                @if($errors->has('prix_vente')) <div class="help-block">
                   {{ $errors->first('prix_vente') }}
                </div>
              @endif
              
             
              <div class="form-group @if($errors->has('date')) has-error @endif">
                <label for="date">Date</label>
                <input type="date" class="form-control" name ="date">
                @if($errors->has('date')) <div class="help-block">
                   {{ $errors->first('date') }}
                </div>
              @endif
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
									  <button type="submit" class="btn btn-default">Submit</button>
									</form>
								</div>
							</div>
						</div>

					</div>
      </div>
      
@endsection
@section('scripts')
  <script src="{{ URL::to('assets/libs/d3/d3.v3.js')}}"></script>
  <script src="{{ URL::to('assets/libs/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/raphael/raphael-min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/morrischart/morris.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-knob/jquery.knob.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-clock/clock.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>
  <script src="{{ URL::to('assets/js/apps/calculator.js')}}"></script>
  <script src="{{ URL::to('assets/js/apps/todo.js')}}"></script>
  <script src="{{ URL::to('assets/js/apps/notes.js')}}"></script>
  <script src="{{ URL::to('assets/js/pages/index.js')}}"></script>
  <script>
       $('#active-entres-add').addClass('active');
</script>
@endsection
