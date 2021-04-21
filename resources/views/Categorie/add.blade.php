@extends('main')

@section('title')
  Ajouter Catégories
@endsection
@section('contents')
      <div class="row">

        <div class="col-md-6 col-md-offset-3 portlets ui-sortable">

						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Ajouter</strong> Catégories</h2>

							</div>
							<div class="widget-content padding">
								<div id="basic-form">
									<form action="{{ route('add.categorie') }}" method="POST" role="form">
                    <div class="form-group @if($errors->has('nom')) has-error @endif">
                      <label for="nom">Nom categorie</label>
                      <input type="text" class="form-control" name ="nom">
                      @if($errors->has('nom')) <div class="help-block">
                         {{ $errors->first('nom') }}
                      </div>
                    @endif
                      </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
									  <button type="submit" class="btn btn-default">Valider</button>
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
