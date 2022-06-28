@extends('admin.layouts.app')
@section('content')
    {{-- @dd($page) --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card horizontal-form">
                        <div class="card-header ">
                            <h4 class="card-title">Edit Page</h4>
                        </div>
                        <div class="card-body ">
                            @include('errors')
                            <form class="form-horizontal" method="post" action="{{ route('admin::page.update', $page->id) }}">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Page Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Page Title" name="page_title"
                                                value="{{ $page->title }}" class="form-control">
                                            @if ($errors->has('page_title'))
                                                <span
                                                    class="text-danger">{{ str_replace('page title', 'Page Title', $errors->first('page_title')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Page Slug</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Page Slug" name="slug"
                                                value="{{ $page->slug }}" class="form-control">
                                            @if ($errors->has('slug'))
                                                <span
                                                    class="text-danger">{{ str_replace('slug', 'Slug', $errors->first('slug')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Page Description</label>
                                        <div class="col-md-10">
                                            <textarea placeholder="Page Description" name="page_description" class="form-control ckeditor">{{ $page->description }}</textarea>
                                            @if ($errors->has('page_description'))
                                                <span
                                                    class="text-danger">{{ str_replace('page description', 'Page Description', $errors->first('page_description')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Meta Title" name="meta_title"
                                                value="{{ $page->meta_title }}" class="form-control">
                                            @if ($errors->has('meta_title'))
                                                <span
                                                    class="text-danger">{{ str_replace('meta title', 'Meta Title', $errors->first('meta_title')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Description</label>
                                        <div class="col-md-10">
                                            <textarea placeholder="Meta Description" name="meta_description" class="form-control ckeditor">{{ $page->meta_description }}</textarea>
                                            @if ($errors->has('meta_description'))
                                                <span
                                                    class="text-danger">{{ str_replace('meta description', 'Meta Description', $errors->first('meta_description')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Keywords</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Meta Keywords" name="meta_keywords"
                                                value="{{ $page->meta_keywords }}" class="form-control">
                                            @if ($errors->has('meta_keywords'))
                                                <span
                                                    class="text-danger">{{ str_replace('meta keywords', 'Meta Keywords', $errors->first('meta_keywords')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Keywords</label>
                                        <div class="col-md-10">
                                            <select name="status" class="form-control">
                                                <option value="Active" @if ($page->status == 'Active') selected @endif>
                                                    Active</option>
                                                <option value="Inactive" @if ($page->status == 'Inactive') selected @endif>
                                                    Inactive</option>
                                                <option value="Trash" @if ($page->status == 'Trash') selected @endif>
                                                    Trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card-footer ">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-fill btn-info">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('cs')
    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
    <Script>
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </Script>
@endpush
