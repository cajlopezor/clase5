<?php


Route::get('/', function()
{
    if(Auth::check()){
        return Redirect::to('/profile');
    }
	return View::make('general.login');
});
Route::get('/profile',array('before'=>'auth', function()
{
	return View::make('perfil.perfil')
          ->with("nombre", Auth::user()->nombre);
}));
Route::post('/loguear',function(){
    $email = Input::get('correo');
    $password = Input::get('password');
    if (Auth::attempt(['correo' => $email, 'password' => $password])){
    return Redirect::to('/profile');
    }  else {
        echo "usuario no logueado";
    }
});

Route::get('/logout',function(){
   
    Auth::logout();
    return Redirect::to('/');
    
});
    

Route::controller('personal','PersonalController');
Route::controller('clase','Clase2Controller');