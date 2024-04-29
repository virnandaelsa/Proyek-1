<?php

namespace App\Http\Controllers;

use App\Models\Dummy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
    public function index(){
        return view('dashboard.index');
    }

}
