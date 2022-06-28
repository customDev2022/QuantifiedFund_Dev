@extends('admin.layouts.app')
@section('content')
    {{-- @dd($news) --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card horizontal-form">
                        <div class="card-header ">
                            <h4 class="card-title">Edit News</h4>
                        </div>
                        <div class="card-body ">
                            @include('errors')
                            <form class="form-horizontal" method="post" action="{{ route('admin::news.update', $news->id) }}">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">News Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="News Title" name="news_title"
                                                value="{{ $news->title }}" class="form-control">
                                            @if ($errors->has('news_title'))
                                                <span
                                                    class="text-danger">{{ str_replace('news title', 'News Title', $errors->first('news_title')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">News Slug</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="News Slug" name="slug"
                                                value="{{ $news->slug }}" class="form-control">
                                            @if ($errors->has('slug'))
                                                <span
                                                    class="text-danger">{{ str_replace('slug', 'News Slug', $errors->first('slug')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">News Topic</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="News Topic" name="news_topic"
                                                value="{{ $news->topic }}" class="form-control">
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
                                            <textarea name="short_description" placeholder="Short Description" class="form-control ckeditor">{{ $news->short_description }}</textarea>
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
                                            <textarea name="long_description" placeholder="Long Description" class="form-control ckeditor">{{ $news->description }}</textarea>
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
                                                value="{{ $news->meta_title }}" class="form-control">
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
                                            <textarea name="meta_description" placeholder="Meta Description" class="form-control ckeditor">{{ $news->meta_description }}</textarea>
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
                                                value="{{ $news->meta_keywords }}" class="form-control">
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
                                        <div class="col-md-3">
                                            <img src="{{ asset('storage/' . $news->feature_image) }}" width="150"
                                                height="150" alt="">
                                        </div>
                                        <div class="col-md-7">
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
                                                @if ($news->external_link_check == 'yes') checked @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row" id="add_external_link">
                                        <label class="col-md-2 control-label">External Link</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="External Link" name="external_link"
                                                value="{{ $news->external_link }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Keywords</label>
                                        <div class="col-md-10">
                                            <select name="status" class="form-control">
                                                <option value="Active" @if ($news->status == 'Active') selected @endif>
                                                    Active</option>
                                                <option value="Inactive"
                                                    @if ($news->status == 'Inactive') selected @endif>
                                                    Inactive</option>
                                                <option value="Trash" @if ($news->status == 'Trash') selected @endif>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });

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
