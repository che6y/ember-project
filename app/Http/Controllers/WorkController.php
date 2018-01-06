<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('id', 'desc')->get();

        return view('work.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        var_dump($request);die;
//        $file = $request->file('image')->store('/upload');
//
//        $filename = $file->extention;
//
        $work = new Work;
//
        $work->title = $request->title;
        $work->description = $request->description;
//        $work->image = $filename;
        $work->save();
//
        return redirect('/works');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $work = Work::find($id);

      return view('work.edit', compact('work'));
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
      $work = Work::find($id);

      $work->title = $request->title;
      $work->description = $request->description;
      $work->save();

      return redirect('/works');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Work::destroy($id);
        return back();

    }

    /**
     * Upload image for specific work post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadImage($id)
    {
        $work = Work::find($id);

        return view('work.upload-img', compact('work'));
    }

    /**
     * Upload image for specific work post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveImage(Request $request, $id)
    {
        $work = Work::find($id);

        $file = request()->file('file');

        if (!empty($file)) {

            if (!empty($work->image)) {
              Storage::delete('public/'.$work->image);
            }

            $file->store('public');

            $work->image = $file->hashName();
            $work->save();

            return redirect('/works');
        } else {

          return view('work.upload-img', compact('work'));

        }
    }

    public function deleteImage($id)
    {
        $work = Work::find($id);

        if (!empty($work->image)) {

            Storage::delete('public/'.$work->image);

            $work->image = '';
            $work->save();

            return redirect('/works');

        } else {

          return view('work.upload-img', compact('work'));

        }
    }

}
