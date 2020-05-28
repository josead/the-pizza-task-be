<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
/*
|--------------------------------------------------------------------------
| Resources Routes
|--------------------------------------------------------------------------
*/


Route::get('images/{fileName}', function ($fileName) {
  try {
    $path = resource_path('/images/'.$fileName);
    
    return Response::download($path);
  } catch(Exception $e) {
    $defaultImagePath = resource_path('/images/default.png');
    return Response::download($defaultImagePath);
  }
});