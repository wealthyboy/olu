<?php

namespace App\Http\Controllers\Pictures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Upload;
use App\Models\UploadFile;
use App\Notifications\PictureNotification;

class PicturesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $upload =  Upload::create([
            'name'      => $request->first_name,
            'last_name' => $request->last_name,
            'email'     => $request->email,
            'comments'  => $request->comments,
            'relationship'  => $request->relationship,
            'link'  =>   session('session_link'),
            'type'  =>     $request->type,
        ]);

        $request->session()->forget('session_link');

        $uploader = [];
        $uploader['full_name'] = $request->first_name . ' ' . $request->last_name;
        $uploader['intro'] = $request->type;
        $uploader['comment']   = $request->comments;
        $uploader['email']     = $request->email;
        try {
            \Notification::route('mail', 'a.abimbola@hotmail.com')
                ->notify(new PictureNotification($uploader));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect()->back()->with('success', "We have received your {$request->post}, thank you.");
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
}
