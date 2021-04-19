@extends('main')

@section('title')
  Dashboard
@endsection
@section('styles')
{{-- <link rel="stylesheet" href="assets/css/main.css" charset="utf-8"> --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
@endsection
@section('contents')

<div class="row">


    <div class="panel panel-info col-lg-4 " style="font-size: 25px">
      <div class="panel-heading text-center">Total fournisseurs</div>
      <div class="panel-body text-center" >
  
          @php
            echo count(DB::table('vendeur')->get());
        @endphp

      </div>
      {{-- <div class="panel-footer">Panel Footer</div> --}}
    </div>
    <div class="panel panel-default col-md-4">
      <div class="panel-heading">Total Clients</div>
      <div class="panel-body">
        @php
            echo count(DB::table('clients')->get());
        @endphp
      </div>
    
    </div>

    <div class="panel  col-md-4">
      <div class="panel-heading">Total Produits</div>
      <div class="panel-body">@php
        echo count(DB::table('produit')->get());
    @endphp</div>
    
    </div>
</div>

<div class="row">


  <div class="panel panel-info col-lg-4 " >
    <div class="panel-heading">Stocks Total vendu </div>
    <div class="panel-body">
      @php

      @endphp
    </div>
    {{-- <div class="panel-footer">Panel Footer</div> --}}
  </div>
  <div class="panel panel-default col-md-4">
    <div class="panel-heading">Quantité total vendu</div>
    <div class="panel-body">Panel Content</div>
  
  </div>

  <div class="panel  col-md-4">
    <div class="panel-heading">Total Produits</div>
    <div class="panel-body">Panel Content</div>
  
  </div>
</div>
@endsection
@section('scripts')

<script>
       $('#active-home').addClass('active');
</script>
@endsection