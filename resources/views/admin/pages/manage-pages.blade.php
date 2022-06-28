{{-- @dd($pages->all()) --}}
@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">
                        <div class="card-header ">
                            <h4 class="card-title">Manage Pages</h4>
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
                                            <th>Page Title</th>
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
                                            <th>Page Title</th>
                                            <th>Page Description</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Meta Keywords</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($pages as $index => $page)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $page->title }}</td>
                                                <td>{!! $page->description !!}</td>
                                                <td>{{ $page->meta_title }}</td>
                                                <td>{!! $page->meta_description !!}</td>
                                                <td>{{ $page->meta_keywords }}</td>
                                                <td>
                                                    @if ($page->status == 'Active')
                                                        <span class="badge bg-success text-white">Active</span>
                                                    @elseif ($page->status == 'Inactive')
                                                        <span class="badge bg-warning text-white">Inactive</span>
                                                    @else
                                                        <span class="badge bg-danger text-white">Inactive</span>
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('admin::page.edit', $page->id) }}"
                                                        class="btn btn-link btn-warning"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('admin::page.destroy', $page->id) }}" method="post">
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
