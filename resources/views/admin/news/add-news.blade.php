@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card horizontal-form">
                        <div class="card-header ">
                            <h4 class="card-title">Add News</h4>
                        </div>
                        <div class="card-body ">
                            @include('errors')
                            <form class="form-horizontal" method="post" action="{{ route('admin::news.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">News Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="News Title" name="news_title"
                                                class="form-control">
                                            @if ($errors->has('news_title'))
                                                <span
                                                    class="text-danger">{{ str_replace('news title', 'News Title', $errors->first('news_title')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">News Topic</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="News Topic" name="news_topic"
                                                class="form-control">
                                            @if ($errors->has('news_topic'))
                                                <span
                                                    class="text-danger">{{ str_replace('news topic', 'News Topic', $errors->first('news_topic')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Short Description</label>
                                        <div class="col-md-10">
                                            <textarea name="short_description" placeholder="Short Description" id="" cols="40" rows="10"
                                                class="form-control ckeditor"></textarea>
                                            @if ($errors->has('short_description'))
                                                <span
                                                    class="text-danger">{{ str_replace('short description', 'Short Description', $errors->first('short_description')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Long Description</label>
                                        <div class="col-md-10">
                                            <textarea name="long_description" placeholder="Long Description" id="" cols="40" rows="10"
                                                class="form-control ckeditor"></textarea>
                                            @if ($errors->has('long_description'))
                                                <span
                                                    class="text-danger">{{ str_replace('long description', 'Long Description', $errors->first('long_description')) }}</span>
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
                                            <textarea name="meta_description" placeholder="Meta Description" id="" cols="40" rows="10"
                                                class="form-control ckeditor"></textarea>
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
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Feature Image</label>
                                        <div class="col-md-10">
                                            <input type="file" placeholder="Feature Image" name="feature_image"
                                                class="form-control">
                                            @if ($errors->has('feature_image'))
                                                <span
                                                    class="text-danger">{{ str_replace('feature image', 'Feature Image', $errors->first('feature_image')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">External Link?</label>
                                        <div class="col-md-10">
                                            <input type="checkbox" name="external_link_check" id="external_link_check"
                                                class="mt-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row" id="add_external_link">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

        $(document).ready(function() {
            $('#external_link_check').change(function() {

                if ($(this).is(':checked')) {
                    $('#add_external_link').empty().html(`<label class="col-md-2 control-label">External Link</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="External Link" name="external_link"
                                                class="form-control">
                                        </div>`);
                } else {
                    $('#add_external_link').empty().html("");
                }
            });
        });
    </script>
@endpush
