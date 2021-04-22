<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sclass = DB::table('sclasses')->get();
        return response()->json($sclass);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'class_name' => 'required|unique:sclasses|max:25'

        ]);

        $data = array();
        $data['class_name'] = $request->class_name;
        $insert = DB::table('sclasses')->insert($data);
        return response('insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Sclass::find($id);
        return response()->json($data);
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
        $update = Sclass::find($id)->update([
            'class_name' => $request->class_name
        ]);
        return response('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('sclasses')->where('id', $id)->delete();
        return response('Deleted');
    }
}
