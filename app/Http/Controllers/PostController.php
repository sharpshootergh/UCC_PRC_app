<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programme;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postData(Request $request)
    {
         $input = $request->elect;
  
        // return( $input);
        // Post::create($input);
        $elect=\App\Models\programme::where('prog_type_id',2)
        ->get() ;
        $elect2=\App\Models\programme::where('faculty_id',1)
        ->get() ;
        $elect3=\App\Models\programme::where('faculty_id',2)
        ->get() ;
        $rec1= array("7","5","12","13","20","22","25","15","38","19");
        $rec2= array("12","13");
        $check = array_intersect($rec1,  $input);
        $check2 = array_intersect($rec2,  $input);
        $dog= count($check);
        $cat= count($check2);
        // return view('courses'['elect'=> $elect,'elect2'=>$elect2])
        // foreach ($elect as $item){
        //     print_r($item->name) ;}
            // return view('form',[
            //     'elect' => $elect,
            //     'elect2' => $elect2
            // ]);
        if ($dog > 1 ) {
             return view('courses',[
            'elect' => $elect,
            'elect2' => $elect2
        ]);
        }
        if ($cat != 0 ) {
            return view('courses',[
           'elect' => $elect,
           'elect2' => $elect2,
           'elect3' => $elect3
       ]);
       }
        
    

    }

}

