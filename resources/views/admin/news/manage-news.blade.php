{{-- @dd($newss->all()) --}}
@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">
                        <div class="card-header ">
                            <h4 class="card-title">Manage News</h4>
                        </div>
                        <div
                            class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                            <div class="toolbar">
                            </div>
                            <div class="fresh-datatables">
                                @include('errors')
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Feature Image</th>
                                            <th>News Title</th>
                                            <th>News Topic</th>
                                            <th>Page Description</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Meta Keywords</th>
                                            <th>Status</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Feature Image</th>
                                            <th>News Title</th>
                                            <th>News Topic</th>
                                            <th>New Short Description</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Meta Keywords</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($newss as $index => $news)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><img src="{{ asset('storage/' . $news->feature_image) }}"
                                                        alt="" width="100px" height="100px"></td>
                                                <td>{{ $news->title }}</td>
                                                <td>{{ $news->topic }}</td>
                                                <td>{!! $news->short_description !!}</td>
                                                <td>{{ $news->meta_title }}</td>
                                                <td>{!! $news->meta_description !!}</td>
                                                <td>{{ $news->meta_keywords }}</td>
                                                <td>
                                                    @if ($news->status == 'Active')
                                                        <span class="badge bg-success text-white">Active</span>
                                                    @elseif ($news->status == 'Inactive')
                                                        <span class="badge bg-warning text-white">Inactive</span>
                                                    @else
                                                        <span class="badge bg-danger text-white">Inactive</span>
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('admin::news.edit', $news->id) }}"
                                                        class="btn btn-link btn-warning"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('admin::news.destroy', $news->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-link btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this item?');"><i
                                                                class="fa fa-times"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
