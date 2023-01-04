<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PController extends Controller
{
    public function resolve($id)
    {
        $table = DB::table('form_complain')->where('id',$id)->get();
        return view('pengawas/resolve',['form_complain' => $table]);
    }

public function store(Request $request)
    {
        
        DB::table('form_complain')->where('id',$request->id)->update([
            'keterangan' => $request->keterangan,
            'status' => 4,
            'date_resolved' => Carbon::now(),
        ]);
        
        return redirect('/cm/progress');
    }
}
