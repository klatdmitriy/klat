<?php 
use App\Http\Controllers\tcontr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return '!'; }); 
Route::get('/sum/:num1/:num2/{num1}/{num2}', function ($num1,$num2) {return ($num1.$num2);});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){return 'User '.$postId. $commentId;});
Route::get('/user/:name/{str}', function ($str) {return 'User '.$id;});
Route::get('/user/{id?}', function ($id = 0) {return $id;});

Route::get('/pages/show/{pages}', [tcontr::class,'showOne']);
Route::get('/test/show/{param}', [tcontr::class,'show']);

Route::get('/test/show/{param1}/{param2}',[tcontr::class,'show2']); 
Route::get('/test/sum/{num1}/{num2}/',[tcontr::class,'sum']); 

Route::get('/test/{var1}/{var2}',[tcontr::class,'show5']); 
Route::get('/test1/{surname}/{name}',[tcontr::class,'show8']);

Route::get('/test2/{name1}/{age}/{salary}',[tcontr::class,'show9']); 
Route::get('/test3/{day}',[tcontr::class,'show10']); 
Route::get('/test4/{arr}',[tcontr::class,'show11']); 
Route::get('/test5/{verst}',[tcontr::class,'show12']);


Route::get('/test6/{form}',[tcontr::class,'form']);
 ?>