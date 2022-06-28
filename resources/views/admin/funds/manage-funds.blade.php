{{-- @dd($funds->all()) --}}
@extends('admin.layouts.app')
@section('content')
    {{-- @dd($funds) --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">
                        <div class="card-header ">
                            <h4 class="card-title">Manage Funds</h4>
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
                                            <th>Fund Title</th>
                                            <th>Portfolio ID</th>
                                            <th>Fact Sheet Link</th>
                                            <th>QTR</th>
                                            <th>YTD</th>
                                            <th>One Year</th>
                                            <th>Three Year</th>
                                            <th>Five Year</th>
                                            <th>Since Inception</th>
                                            <th>Index Name</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Fund Title</th>
                                            <th>Portfolio ID</th>
                                            <th>Fact Sheet Link</th>
                                            <th>QTR</th>
                                            <th>YTD</th>
                                            <th>One Year</th>
                                            <th>Three Year</th>
                                            <th>Five Year</th>
                                            <th>Since Inception</th>
                                            <th>Index Name</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($funds as $index => $fund)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $fund->title }}</td>
                                                <td>{{ $fund->portfolio_id }}</td>
                                                <td>{{ $fund->fact_sheet_link }}</td>
                                                <td>{{ $fund->qtr }}</td>
                                                <td>{{ $fund->ytd }}</td>
                                                <td>{{ $fund->one_year }}</td>
                                                <td>{{ $fund->three_year }}</td>
                                                <td>{{ $fund->five_year }}</td>
                                                <td>{{ $fund->since_inception }}</td>
                                                <td>{{ $fund->index_name }}</td>
                                                {{-- <td>
                                                    @if ($fund->status == 'Active')
                                                        <span class="badge bg-success text-white">Active</span>
                                                    @elseif ($fund->status == 'Inactive')
                                                        <span class="badge bg-warning text-white">Inactive</span>
                                                    @else
                                                        <span class="badge bg-danger text-white">Inactive</span>
                                                    @endif
                                                </td> --}}
                                                <td class="text-right">
                                                    <a href="{{ route('admin::fund.edit', $fund->id) }}"
                                                        class="btn btn-link btn-warning"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('admin::fund.destroy', $fund->id) }}" method="post">
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
