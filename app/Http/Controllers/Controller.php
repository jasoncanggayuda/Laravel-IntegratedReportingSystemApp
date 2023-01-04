<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function history()
        {
            //mengambil data dari table PO
            $table = DB::table('form_complain')->where('status','4')->get();
    
            //mengirimkan data ke view BuatSurat
            return view('history',['form_complain' => $table]);   
        }
}
