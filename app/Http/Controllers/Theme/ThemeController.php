<?php namespace App\Http\Controllers\Theme;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Theme;

class ThemeController extends BaseController
{
    public function index(){
    	return View::make('theme.index');
    }
}
