<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use App\LinhVuc;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       $listNguoiChoi=NguoiChoi::all();

        return view('nguoi-choi.danh-sach',compact('listNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('nguoi-choi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoiChoi = new NguoiChoi;

        $nguoiChoi->noi_dung=$request->noi_dung;
        $nguoiChoi->linh_vuc_id=$request->linh_vuc;
        $nguoiChoi->phuong_an_a=$request->phuong_an_a;
        $nguoiChoi->phuong_an_b=$request->phuong_an_b;
        $nguoiChoi->phuong_an_c=$request->phuong_an_c;
        $nguoiChoi->phuong_an_d=$request->phuong_an_d;
        $nguoiChoi->dap_an=$request->dap_an;
        $nguoiChoi->save();

        return redirect()->route('nguoi-choi.danh-sach');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->delete();
        return redirect()->route('nguoi-choi.danh-sach');
    }
}