<?php

namespace App\Http\Controllers\Admin\Consolation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Upload;
use App\UploadFile;

class ConsolationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consolations = Upload::where('type','consolation')->latest()->get();
        return view('admin.consolations.index',compact('consolations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $consolation = Upload::find($id);
        return view('admin.consolations.show',compact('consolation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pictures = Upload::find($id);
        $pictures->is_approved  ? $pictures->is_approved =  false : $pictures->is_approved =  true;
        $pictures->save();
        UploadFile::where('upload_id',$pictures->id)->update([
            'is_approved' => $pictures->is_approved 
        ]);
        return back()->with('success','Status updated!!');
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


    public function deleteImage(Request $request,$id)
    {
        try {
            UploadFile::find( $id )->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $rules = array (
                '_token' => 'required' 
        );
        $validator = \Validator::make ( $request->all (), $rules );
        if (empty ( $request->selected )) {
            $validator->getMessageBag ()->add ( 'Selected', 'Nothing to Delete' );
            return \Redirect::back ()->withErrors ( $validator )->withInput ();
        }
        try {
            Upload::destroy( $request->selected );
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->back();
    }
}
