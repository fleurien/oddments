<?php
 
namespace App\Http\Controllers;
 
use Auth;
use db;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SitePage;
 
class CustomController extends Controller
{
    public function getGameplay()     
    {
    return view('custom.gameplay');     
    }
 
    public function getGameplay() 
    {
    return view('custom.gameplay', [ 
    'page' => SitePage::where('key', 'gameplay')->first()
        ]);
    }
}
