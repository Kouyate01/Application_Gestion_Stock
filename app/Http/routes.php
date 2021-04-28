<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('home',function(){
return view('auth.login');
});
Route::get('/',[
  'uses' => 'DashboardController@home', 
  'as' => 'home.dashboard'
  ]);


  Route::get('connection',[
    'uses' => 'UserController@get_login',
    'as' => 'login'
  ]);
  //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Client--------------------------------------------
  //
Route::get('client/{id}',[
  'uses' => 'generationController@single_client',
  'as' => 'single.client'
]);
Route::get('client/edit/{id}',[
  'uses' => 'generationController@get_edit_client',
  'as' => 'get_edit_client'
]);
Route::post('client/edit/{id}',[
  'uses' => 'generationController@edit_client',
  'as' => 'edit.client'
]);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Generation--------------------------------------------
//
Route::get('generation',[
  'uses'=> 'generationController@generation_home',
  'as'=> 'generation.home'
  ]);
Route::get('generation/modifier/{id}',[
  'uses' => 'generationController@get_edit_generation',
  'as' => 'get_edit_generation'
  ]);

Route::post('generation/modifier/{id}',[
  'uses' => 'generationController@edit_generation',
  'as' => 'edit.generation'
  ]);
Route::get('generation/delete/{id}',[
  'uses' => 'generationController@destroy_generation',
  'as' => 'destroy.generation'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Entres
Route::get('/entres/add',[
  'uses' => 'generationController@get_add_entres',
  'as' => 'get_add_entres'
]);
Route::post('entres/add',[
  'uses' => 'generationController@post_add_entres',
  'as' => 'add.entres'
]);
Route::get('entres',[
  'uses' => 'generationController@show_entres',
  'as' => 'show.entres'
]);
//Edit entres
Route::get('entres/modifier/{id}',[
  'uses' => 'generationController@get_edit_entres',
  'as' => 'get_edit_entres'
  ]);
Route::post('entres/modifier/{id}',[
  'uses' => 'generationController@edit_entres',
  'as' => 'edit.entres'
]);

//delete

Route::get('entres/delete/{id}',[
  'uses' => 'generationController@destroy_entres',
  'as' => 'destroy.entres'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------END ENTRES--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Sorties--------------------------------------------------------------------------------------------------------
Route::get('/sorties/add',[
  'uses' => 'sortieController@get_add_sorties',
  'as' => 'get_add_sorties'
]);
Route::post('sorties/add',[
  'uses' => 'sortieController@post_add_sorties',
  'as' => 'add.sorties'
]);
Route::get('sorties',[
  'uses' => 'sortieController@show_sorties',
  'as' => 'show.sorties'
]);
//Edit sorties
Route::get('sorties/modifier/{id}',[
  'uses' => 'sortieController@get_edit_sorties',
  'as' => 'get_edit_sorties'
  ]);
Route::post('sorties/modifier/{id}',[
  'uses' => 'sortieController@edit_sorties',
  'as' => 'edit.sorties'
]);

//delete

Route::get('sorties/delete/{id}',[
  'uses' => 'sortieController@destroy_sorties',
  'as' => 'destroy.sorties'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------END Sorties--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//---------------------------------------------------------------------------------------------------------------------------------------------Types--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('types',[
  'uses' => 'sortieController@index_types',
  'as' => 'home.types'
]);
Route::post('types',[
  'uses' => 'sortieController@post_types',
  'as' => 'post.types'
]);

Route::get('type/{id}',[
  'uses' => 'sortieController@single_type',
  'as' => 'single.type'
  ]);
Route::get('types/modifier/{id}',[
  'uses' => 'sortieController@get_edit_page_types',
  'as' => 'get_edit_page_types'
  ]);
Route::post('types/modifier/{id}',[
  'uses' => 'sortieController@edit_page_types',
  'as' => 'edit.page.types'
]);

//delete

Route::get('types/delete/{id}',[
  'uses' => 'sortieController@destroy_page_types',
  'as' => 'destroy.page.types'
  ]);

  //----------------------------------------------------------------------------------------------
  Route::get('/categorie/add',[
    'uses' => 'categorieController@get_add_categorie',
    'as' => 'get_add_categorie'
  ]);
  Route::post('categorie/add',[
    'uses' => 'categorieController@post_add_categorie',
    'as' => 'add.categorie'
  ]);
  Route::get('categorie',[
    'uses' => 'categorieController@show_categorie',
    'as' => 'show.categorie'  
  ]);
  //Edit entres
  Route::get('categorie/modifier/{id}',[
    'uses' => 'categorieController@get_edit_categorie',
    'as' => 'get_edit_categorie'
    ]);
  Route::post('categorie/modifier/{id}',[
    'uses' => 'categorieController@edit_categorie',
    'as' => 'edit.categorie'
  ]);
  
  //delete
  
  Route::get('categorie/delete/{id}',[
    'uses' => 'categorieController@destroy_categorie',
    'as' => 'destroy.categorie'
    ]);

    //----------------------------------------------------------------------------------------------
  Route::get('/produit/add',[
    'uses' => 'produitController@get_add_produit',
    'as' => 'get_add_produit'
  ]);
  Route::post('produit/add',[
    'uses' => 'produitController@post_add_produit',
    'as' => 'add.produit'
  ]);
  Route::get('produit',[
    'uses' => 'produitController@show_produit',
    'as' => 'show.produit'
  ]);
  //Edit entres
  Route::get('produit/modifier/{id}',[
    'uses' => 'produitController@get_edit_produit',
    'as' => 'get_edit_produit'
    ]);
  Route::post('produit/modifier/{id}',[
    'uses' => 'produitController@edit_produit',
    'as' => 'edit.produit'
  ]);
  
  //delete
  
  Route::get('produit/delete/{id}',[
    'uses' => 'produitController@destroy_produit',
    'as' => 'destroy.produit'
    ]);

    //--------------------------------------------------------------------------------------------

    Route::get('/vendeur  /add',[
      'uses' => 'vendeurrController@get_add_vendeur',
      'as' => 'get_add_vendeur'
    ]);
    Route::post('vendeur/add',[
      'uses' => 'vendeurrController@post_add_vendeur',
      'as' => 'add.vendeur'
    ]);
    Route::get('vendeur',[
      'uses' => 'vendeurController@show_vendeur',
      'as' => 'show.vendeur'
    ]);
    //Edit entres
    Route::get('vendeur/modifier/{id}',[
      'uses' => 'vendeurController@get_edit_vendeur',
      'as' => 'get_edit_vendeur'
      ]);
    Route::post('vendeur/modifier/{id}',[
      'uses' => 'vendeurController@edit_vendeur',
      'as' => 'edit.vendeur'
    ]);
    
    //delete
    
    Route::get('vendeur/delete/{id}',[
      'uses' => 'vendeurController@destroy_vendeur',
      'as' => 'destroy.vendeur'
      ]);
  
