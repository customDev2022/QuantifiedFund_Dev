<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Page::orderBy('id', 'desc')->get();
        return view('admin.pages.manage-pages', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_title'=>'required',
            'page_description'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
        ]);
        // dd($request->all());
        // try {
        //     DB::beginTransaction();
            $newPage = new Page;
            $newPage->title = $request->page_title;
            $newPage->slug = \Str::slug($request->page_title);
            $newPage->description = $request->page_description;
            $newPage->meta_title = $request->meta_title;
            $newPage->meta_description = $request->meta_description;
            $newPage->meta_keywords = $request->meta_keywords;
            $newPage->save();
          
            // DB::commit();
            return back()->with(['success'=>'New Page Created']);
        // } catch (\Throwable $th) {
        //   DB::rollback();
        //   return back()->with(['error'=>'Something went wrong!!']);
        // }
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
        $data['page'] = Page::find($id);
        return view('admin.pages.edit-page', $data);
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
        // dd($request->all(), $id);
        $request->validate([
            'page_title'=>'required',
            'slug'=>'required|unique:pages,slug,'.$id,
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
        ]);

        try {
            DB::beginTransaction();
            $newPage = Page::find($id);
            $newPage->title = $request->page_title;
            $newPage->slug = $request->slug;
            $newPage->description = $request->page_description;
            $newPage->meta_title = $request->meta_title;
            $newPage->meta_description = $request->meta_description;
            $newPage->meta_keywords = $request->meta_keywords;
            $newPage->status = $request->status;
            $newPage->save();
            DB::commit();
            return back()->with(['success'=>'Page Updated']);
        } catch (\Throwable $th) {
          DB::rollback();
          return back()->with(['error'=>'Something went wrong!!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page= Page::find($id);
        $page->delete();
        return back()->with(['success'=>'Page Deleted']);
    }
}
