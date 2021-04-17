@extends('main')

@section('title')
  Modifier
@endsection
@section('contents')
 
      <div class="row">
        <div class="col-md-6 col-md-offset-3 portlets ui-sortable">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Generations</strong></h2>
							</div>
							<div class="widget-content padding">
								<div id="basic-form">
									<form action="{{ route('edit.generation',$generation->id) }}" method="POST" role="form">

                    <div class="form-group @if($errors->has('type_id')) has-error @endif">
										{{ Form::label('type_id','Types : ')}}
									{{ Form::select('type_id',$types, null, ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group @if($errors->has('date')) has-error @endif">
                  <label for="fournisseur">Fournisseur</label>
                  <input type="text" class="form-control datepicker-input" value="{{ $generation->fournisseur }}"  name="fournisseur" data-mask="9999-99-99">
                    @if($errors->has('fournisseur')) <div class="help-block">
                       {{ $errors->first('fournisseur') }}
                    </div>
                  @endif
                </div>
                    <div class="form-group @if($errors->has('nfacture')) has-error @endif">
										<label for="quantite">Stock initial</label>
										<input type="text" class="form-control" value="{{ $generation->quantite }}" name ="quantite">
                    @if($errors->has('quantite')) <div class="help-block">
                       {{ $errors->first('quantite') }}
                    </div>
                  @endif
                    </div>
                    <div class="form-group @if($errors->has('quantite')) has-error @endif">
                    <label for="stock_actuel">  Stock actuel</label>
                    <input type="text" class="form-control" value="{{ $generation->stock_actuel }}" name="stock_actuel" data-mask="999999" placeholder="999999">
                    @if($errors->has('stock_actuel')) <div class="help-block">
                       {{ $errors->first('stock_actuel') }}
                    </div>
                  @endif
                  </div>
                  <div class="form-group @if($errors->has('prix_uni')) has-error @endif">
                  <label for="prix_achat">Prix d'achat</label>
                  <input type="text" class="form-control" value="{{ $generation->prix_achat }}" name="prix_achat" data-mask="999999" placeholder="999999">
                  @if($errors->has('prix_achat')) <div class="help-block">
                     {{ $errors->first('prix_achat') }}
                  </div>
                @endif
                </div>
                <div class="form-group @if($errors->has('fourni')) has-error @endif">
                <label for="prix_uni">Prix de vente</label>
                <input type="text" class="form-control" value="{{ $generation->prix_uni }}" name ="prix_uni">
                @if($errors->has('prix_uni')) <div class="help-block">
                   {{ $errors->first('prix_uni') }}
                </div>
              @endif
                </div>
                <div class="form-group @if($errors->has('fourni')) has-error @endif">
                  <label for="entree_par">Entrer par</label>
                  <input type="text" class="form-control" value="{{ $generation->entree_par }}" name ="entree_par">
                  @if($errors->has('entree_par')) <div class="help-block">
                     {{ $errors->first('entree_par') }}
                  </div>
                @endif
                  </div>
                  <div class="form-group @if($errors->has('fourni')) has-error @endif">
                    <label for="prix_uni*quantite">Solde </label>
                    <input type="text" class="form-control" value="{{ $generation->prix_uni*quantite }}" name ="prix_uni*quantite">
                    @if($errors->has('prix_uni*quantite')) <div class="help-block">
                       {{ $errors->first('prix_uni*quantite') }}
                    </div>
                  @endif
                    </div>
                    <div class="form-group @if($errors->has('fourni')) has-error @endif">
                      <label for="date">Date </label>
                      <input type="text" class="form-control" value="{{ $generation->date }}" name ="date">
                      @if($errors->has('pdate')) <div class="help-block">
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
       $('#active-generation').addClass('active');
</script>
@endsection
