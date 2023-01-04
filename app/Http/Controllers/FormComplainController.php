<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormComplainController extends Controller
{
    public function TableFormComplain()
        {
            
            $table = DB::table('form_complain')->get();

            
            return view('/pegawai/dashboard',['form_complain' => $table]);    
        }

    public function plusComplain()
        {
            return view('FormComplain/form_complain');
        }
    
    public function storeComplain(Request $request)
        {
            
            DB::table('form_complain')->insert([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            
            return redirect('/dashboard');
        
        }

    public function show($id)
        {
            $table = DB::table('form_complain')->where('id',$id)->get();
            return view('FormComplain/show',['form_complain' => $table]);
        }

    public function edit($id)
        {
            $table = DB::table('form_complain')->where('id',$id)->get();
            return view('FormComplain/update',['form_complain' => $table]);
        }
    
    public function update(Request $request)
        {
            
            DB::table('form_complain')->where('id',$request->id)->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            
            return redirect('/dashboard');
        }

    public function delete($id)
        {
            DB::table('form_complain')->where('id',$id)->delete();
            return redirect('/dashboard');
        }

    public function valid(Request $request)
    {

        DB::table('form_complain')->where('id',$request->id)->update([
            'status' => 1,
        ]);
        
        return redirect('/supervisor/dashboard');
    }

    public function undo(Request $request)
    {

        DB::table('form_complain')->where('id',$request->id)->update([
            'status' => 0,
        ]);
        
        return redirect('/supervisor/dashboard');
    }

    public function reject(Request $request)
    {

        DB::table('form_complain')->where('id',$request->id)->update([
            'status' => 2,
        ]);
        
        return redirect('/supervisor/dashboard');
    }

    public function unreject(Request $request)
    {

        DB::table('form_complain')->where('id',$request->id)->update([
            'status' => 1,
        ]);
        
        return redirect('/supervisor/dashboard');
    }
}
