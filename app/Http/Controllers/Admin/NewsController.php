<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['newss'] = News::orderBy('id', 'desc')->get();
        return view('admin.news.manage-news', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'news_title'=>'required',
            'news_topic'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
            'feature_image'=>'required',
        ]);

        try {
            DB::beginTransaction();
            $news = new News;
            $news->title = $request->news_title;
            $news->topic = $request->news_topic;
            $news->slug = \Str::slug($request->news_title);
            $news->short_description = $request->short_description;
            $news->description = $request->long_description;
            $news->meta_title = $request->meta_title;
            $news->meta_description = $request->meta_description;
            $news->meta_keywords = $request->meta_keywords;
            $news->feature_image = $request->file('feature_image')->store('admin/newsImage', 'public');
            if(!empty($request->external_link_check)){
                $news->external_link_check = 'yes';
            }
            $news->external_link = $request->external_link;
            $news->save();
            DB::commit();
            return back()->with(['success'=>'New News Created']);
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with(['error'=>'Something went wrong!!']);
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['news'] = News::find($id);
        return view('admin.news.edit-news', $data);
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
            'news_title'=>'required',
            'news_topic'=>'required',
            'slug'=>'required|unique:news,slug,'.$id,
            'short_description'=>'required',
            'long_description'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
        ]);

        // try {
        //     DB::beginTransaction();
            $news = News::find($id);
            $news->title = $request->news_title;
            $news->topic = $request->news_topic;
            $news->slug = $request->slug;
            $news->short_description = $request->short_description;
            $news->description = $request->long_description;
            $news->meta_title = $request->meta_title;
            $news->meta_description = $request->meta_description;
            $news->meta_keywords = $request->meta_keywords;

            if($request->hasFile('feature_image')){
                if(file_exists(public_path('storage/'.$news->feature_image))){
                    unlink(public_path('storage/'.$news->feature_image));
                }
                $news->feature_image = $request->file('feature_image')->store('admin/newsImage', 'public');
            }

            if(!empty($request->external_link_check)){
                $news->external_link_check = 'yes';
            }else{
                $news->external_link_check = 'no';
            }

            $news->external_link = $request->external_link;
            $news->status = $request->status;
            $news->save();
            // DB::commit();
            return back()->with(['success'=>'News Updated']);
        // } catch (\Throwable $th) {
        //     DB::rollback();
        //     return back()->with(['error'=>'Something went wrong!!']);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news= News::find($id);
        if(file_exists(public_path('storage/'.$news->feature_image))){
            unlink(public_path('storage/'.$news->feature_image));
        }
        $news->delete();
        return back()->with(['success'=>'News Deleted']);
    }
}
