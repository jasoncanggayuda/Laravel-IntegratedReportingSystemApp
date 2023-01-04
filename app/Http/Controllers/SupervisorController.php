<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupervisorController extends Controller
{
    public function dashboard()
    {
        //mengambil data dari table PO
        $table = DB::table('form_complain')
        
        ->get();

        //mengirimkan data ke view BuatSurat
        return view('supervisor/dashboard',['form_complain' => $table]);   
    }

}
