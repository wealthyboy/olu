<?php

namespace App\Http\Controllers\Admin\Videos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Upload;

use App\UploadFile;


class VideosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Upload::where('type','videos')->latest()->get();
        return view('admin.videos.index',compact('videos'));
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
        $video = Upload::find($id);
        return view('admin.videos.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {   
        if ($request->a)
        {
            return $this->approve($id);
        }
        $video = Upload::find($id);
        return view('admin.videos.edit',compact('video'));
    }

    public function approve($id)
    {
        $videos = Upload::find($id);
        $videos->is_approved  ? $videos->is_approved =  false : $videos->is_approved =  true;
        $videos->save();
       
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
        $upload =  Upload::find($id)->update([
            'title'      => $request->title,
            'link' => $request->link,
        ]);
        return redirect()->route('videos.index')->with('success','Video Added!!');


       
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
