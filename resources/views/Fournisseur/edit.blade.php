@extends('main')

@section('title')
  Modifier Fournisseurs
@endsection
@section('contents')

      <div class="row">
        <div class="col-md-6 col-md-offset-3 portlets ui-sortable">
						<div class="widget">
							<div class="widget-header transparent">
								<h2 class="text-center"><strong>Modifier</strong> Fournisseurs</h2>
							</div>
							<div class="widget-content padding">
                <div id="basic-form">
                  {!! Form::model($vendeur,['route' => ['edit.vendeur', $vendeur->id],'method'=>'POST']) !!}

                  {{-- <div class="form-group @if($errors->has('categorie_id')) has-error @endif">
                    {{ Form::label('id_categorie','categories : ') }}
                    {{ Form::select('id_categorie',$categorie,null, ['class' => 'form-control']) }}
                </div> --}}
                <div class="form-group @if($errors->has('nom_vendeur')) has-error @endif">
                  <label for="nom_vendeur">Nom</label>
                  <input type="text" class="form-control" name ="nom_vendeur" value="{{$vendeur->nom_vendeur}}">
                  @if($errors->has('nom_vendeur')) <div class="help-block">
                     {{ $errors->first('nom_vendeur') }}
                  </div>
                @endif
                  </div>
                  <div class="form-group @if($errors->has('email_vendeur')) has-error @endif">
                    <label for="email_vendeur">Email</label> <br>
                    <textarea name="email_vendeur" id="" cols="100" rows="5">{{$vendeur->email_vendeur}}</textarea>
                    {{-- <input type="text" class="form-control" name ="detail"> --}}
                    @if($errors->has('email_vendeur')) <div class="help-block">
                       {{ $errors->first('email_vendeur') }}
                    </div>
                    <div class="form-group @if($errors->has('téléphone_vendeur')) has-error @endif">
                        <label for="téléphone_vendeur">Téléphone</label> <br>
                        <textarea name="téléphone_vendeur" id="" cols="100" rows="5">{{$vendeur->téléphone_vendeur}}</textarea>
                        {{-- <input type="text" class="form-control" name ="detail"> --}}
                        @if($errors->has('téléphone_vendeur')) <div class="help-block">
                           {{ $errors->first('téléphone_vendeur') }}
                        </div>
                        <div class="form-group @if($errors->has('address_vendeur')) has-error @endif">
                            <label for="address_vendeur">Addresse</label> <br>
                            <textarea name="address_vendeur" id="" cols="100" rows="5">{{$vendeur->address_vendeur}}</textarea>
                            {{-- <input type="text" class="form-control" name ="detail"> --}}
                            @if($errors->has('address_vendeur')) <div class="help-block">
                               {{ $errors->first('address_vendeur') }}
                            </div>
                  @endif
                    </div>
									  <button type="submit" class="btn btn-default">Valider</button>
									{{ Form::close() }}
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
       $('#active-entres-table').addClass('active');
</script>
@endsection
