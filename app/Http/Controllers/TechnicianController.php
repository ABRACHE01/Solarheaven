<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technician;

class TechnicianController extends Controller
{

    public function index()
    {
        $technicians = Technician::with('user')->get();
        return response()->json($technicians); 
    }
}
