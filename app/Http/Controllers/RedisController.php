<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Cache;

class RedisController extends Controller
{
    function index(){
	Cache::put('Name','Kidanemariam',60);

	$value=Cache::get('Name');
	return $value;
}
