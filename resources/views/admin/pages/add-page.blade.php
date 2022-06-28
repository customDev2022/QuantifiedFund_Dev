@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card horizontal-form">
                        <div class="card-header ">
                            <h4 class="card-title">Add Page</h4>
                        </div>
                        <div class="card-body ">
                            @include('errors')
                            <form class="form-horizontal" method="post" action="{{ route('admin::page.store') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Page Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Page Title" name="page_title"
                                                class="form-control">
                                            @if ($errors->has('page_title'))
                                                <span
                                                    class="text-danger">{{ str_replace('page title', 'Page Title', $errors->first('page_title')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Page Description</label>
                                        <div class="col-md-10">
                                            <textarea placeholder="Page Description" name="page_description" class="form-control ckeditor"></textarea>
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
                                                class="form-control">
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
                                            <textarea placeholder="Meta Description" name="meta_description" class="form-control ckeditor"></textarea>
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
                                                class="form-control">
                                            @if ($errors->has('meta_keywords'))
                                                <span
                                                    class="text-danger">{{ str_replace('meta keywords', 'Meta Keywords', $errors->first('meta_keywords')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card-footer ">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-fill btn-info">Submit</button>
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
