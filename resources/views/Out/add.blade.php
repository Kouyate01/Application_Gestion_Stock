@extends('main')

@section('title')
  Ajouter Sorties
@endsection
@section('contents')
      <div class="row">

        <div class="col-md-6 col-md-offset-3 portlets ui-sortable">

						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Ajouter</strong> Sortie</h2>

							</div>
							<div class="widget-content padding">
								<div id="basic-form">
								<form action="{{ route('add.sorties') }}" method="POST" role="form">
                   
                  <div class="form-group @if($errors->has('date')) has-error @endif">
                  <label for="date">Date</label>  
                  <input type="date" class="form-control datepicker-input"  name="date" data-mask="9999-99-99">
                    @if($errors->has('date')) <div class="help-block">
                       {{ $errors->first('date') }}
                    </div>
                  @endif
                </div>
                    <div class="form-group @if($errors->has('client_id')) has-error @endif">
										<label for="client">Client</label>
                    <select class="form-control" name="client_id">
                      @foreach($client as $clt)
                      <option value="{{ $clt->id }}">{{ $clt->name }}</option>
                    @endforeach
                    </select>
                    </div>
           
                 
                  {{-- <div class="form-group @if($errors->has('quantite')) has-error @endif">
                  <label for="quantite">Quantité</label>
                  <input type="text" class="form-control" name="quantite" data-mask="999999" placeholder="999999">
                  @if($errors->has('quantite')) <div class="help-block">
                     {{ $errors->first('quantite') }}
                  </div>
                @endif
                </div> --}}
                    <div class="form-group @if($errors->has('montant_total')) has-error @endif">
                    <label for="montant_total">Montant Total</label>
                    <input type="text" class="form-control" name="montant_total" data-mask="999999" placeholder="999999">
                    @if($errors->has('montant_total')) <div class="help-block">
                       {{ $errors->first('montant_total') }}
                    </div>
                  @endif
                  </div>
                  <div class="form-group @if($errors->has('montant_paye')) has-error @endif">
                  <label for="montant_paye">Montant Payé</label>
                  <input type="text" class="form-control" name="montant_paye" data-mask="999999" placeholder="999999">
                  @if($errors->has('montant_paye')) <div class="help-block">
                     {{ $errors->first('montant_paye') }}
                  </div>
                @endif
                </div>
                <div class="form-group @if($errors->has('montant_due')) has-error @endif">
                <label for="montant_due">Montant Due</label>
                <input type="text" class="form-control" name ="montant_due">
                @if($errors->has('montant_due')) <div class="help-block">
                   {{ $errors->first('montant_due') }}
                </div>
              @endif
              {{-- <div class="form-group @if($errors->has('vendu_par')) has-error @endif">
                <label for="vendu_par">Vendu Par</label>
                <input type="text" class="form-control" name ="vendu_par">
                @if($errors->has('vendu_par')) <div class="help-block">
                   {{ $errors->first('vendu_par') }}
                </div>
              @endif
                </div> --}}
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
       $('#active-sorties-add').addClass('active');
</script>
@endsection
