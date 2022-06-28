@extends('admin.layouts.app')
@section('content')
    {{-- @dd($news) --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card horizontal-form">
                        <div class="card-header ">
                            <h4 class="card-title">Edit Fund</h4>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">News Topic</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="News Topic" name="news_topic"
                                                value="{{ $news->topic }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Short Description</label>
                                        <div class="col-md-10">
                                            <textarea name="short_description" placeholder="Short Description" id="" cols="40" rows="10"
                                                class="form-control">{{ $news->short_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Long Description</label>
                                        <div class="col-md-10">
                                            <textarea name="long_description" placeholder="Long Description" id="" cols="40" rows="10"
                                                class="form-control">{{ $news->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Meta Title" name="meta_title"
                                                value="{{ $news->meta_title }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Description</label>
                                        <div class="col-md-10">
                                            <textarea name="meta_description" placeholder="Meta Description" id="" cols="40" rows="10"
                                                class="form-control">{{ $news->meta_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Meta Keywords</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Meta Keywords" name="meta_keywords"
                                                value="{{ $news->meta_keywords }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Feature Image</label>
                                        <div class="col-md-3">
                                            <img src="{{ asset('storage/' . $news->feature_image) }}" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" placeholder="Feature Image" name="feature_image"
                                                class="form-control">
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
                                                <option value="Inactive" @if ($news->status == 'Inactive') selected @endif>
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
    <script type="text/javascript">
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
