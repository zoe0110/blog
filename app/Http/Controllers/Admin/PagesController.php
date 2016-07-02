<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Redirect, Input, Auth;

class PagesController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.index')->withPages(Page::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

		/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required|unique:pages|max:255',
                'body' => 'required',
            ]);

        $page = new Page();
        $page->title =  $request->input('title');
        $page->body =  $request->input('body');
        $page->user_id = Auth::user()->id;

        if ($page->save()) {
            return Redirect::to('admin/pages');
        } else {
            return Redirect::back()->withInput()->withErrors('Save Error!');
        }
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
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.pages.edit')->withPages(Page::find($id));
    }

	 /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
                'title' => 'required|unique:pages,title,'.$id.'|max:255',
                'body' => 'required',
            ]);

        $page = Page::find($id);
        $page->title =  $request->input('title');
        $page->body =  $request->input('body');
        $page->user_id = Auth::user()->id;

        if ($page->save()) {
            return Redirect::to('admin/pages');
        } else {
            return Redirect::back()->withInput()->withErrors('Save Error!');
        }
    }
	 	   	 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return Redirect::to('admin/pages');
    }
}


