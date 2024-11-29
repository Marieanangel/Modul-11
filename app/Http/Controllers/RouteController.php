<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class RouteController extends Controller
{
    // index
    public function index() {
        return "This is from Controller";
    }
    // Function
    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
    }
}
