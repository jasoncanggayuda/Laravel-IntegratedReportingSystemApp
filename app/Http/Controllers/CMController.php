<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use DateInterval;

class CMController extends Controller
{
    public function cm_dashboard()
    {
        //mengambil data dari table PO
        $table = DB::table('form_complain')->where('status','1')->get();

        //mengirimkan data ke view BuatSurat
        return view('cm/dashboard',['form_complain' => $table]);   
    }

    public function viewPenjadwalan($id)
        {
            
            $table = DB::table('form_complain')->where('id',$id)->get();
            
            return view('cm/penjadwalan',['form_complain' => $table]);
        
        }

    public function penjadwalan(Request $request)
        {
            
            DB::table('form_complain')->where('id',$request->id)->update([
                'status' => 3,
                'date_visit' =>$request->date_visit,
                'date_limit' =>Carbon::parse($request->date_visit)->addDays(3)
            ]);
            
            return redirect('/cm/progress');
        }

    public function progress()
        {
            //mengambil data dari table PO
            $table = DB::table('form_complain')->where('status','3')->get();
    
            //mengirimkan data ke view BuatSurat
            return view('cm/progress',['form_complain' => $table]);   
        }
    

    // public function resolve(Request $request)
    //     {
    
    //         DB::table('form_complain')->where('id',$request->id)->update([
    //             'status' => 4,
    //             'date_resolved' => Carbon::now(),
    //         ]);
    //         return redirect('/cm/progress');
    //     }
}
