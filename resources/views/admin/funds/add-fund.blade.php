@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card horizontal-form">
                        <div class="card-header ">
                            <h4 class="card-title">Add Fund</h4>
                        </div>
                        <div class="card-body ">
                            @include('errors')
                            <form class="form-horizontal" method="post" action="{{ route('admin::fund.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Fund Title</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Fund Title" name="fund_title"
                                                class="form-control">
                                            @if ($errors->has('fund_title'))
                                                <span
                                                    class="text-danger">{{ str_replace('fund title', 'Fund Title', $errors->first('fund_title')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea name="description" placeholder="Description" class="form-control ckeditor"></textarea>
                                            @if ($errors->has('description'))
                                                <span
                                                    class="text-danger">{{ str_replace('description', 'Description', $errors->first('description')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Portfolio ID</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Portfolio ID" name="portfolio_id"
                                                class="form-control">
                                            @if ($errors->has('portfolio_id'))
                                                <span
                                                    class="text-danger">{{ str_replace('portfolio id', 'Portfolio ID', $errors->first('portfolio_id')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Fund Objective</label>
                                        <div class="col-md-10">
                                            <textarea name="fund_objective" placeholder="Fund Objective" class="form-control"></textarea>
                                            @if ($errors->has('fund_objective'))
                                                <span
                                                    class="text-danger">{{ str_replace('fund objective', 'Fund Objective', $errors->first('fund_objective')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Fund Focus</label>
                                        <div class="col-md-10">
                                            <textarea placeholder="Fund Focus" name="fund_focus" class="form-control"></textarea>
                                            @if ($errors->has('fund_focus'))
                                                <span
                                                    class="text-danger">{{ str_replace('fund focus', 'Fund Focus', $errors->first('fund_focus')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Fund Description</label>
                                        <div class="col-md-10">
                                            <textarea placeholder="Fund Description" name="fund_description" class="form-control"></textarea>
                                            @if ($errors->has('fund_description'))
                                                <span
                                                    class="text-danger">{{ str_replace('fund description', 'Fund Description', $errors->first('fund_description')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Fact Sheet Link</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Fact Sheet Link" name="fact_sheet_link"
                                                class="form-control">
                                            @if ($errors->has('fact_sheet_link'))
                                                <span
                                                    class="text-danger">{{ str_replace('fact sheet link', 'Fact Sheet Link', $errors->first('fact_sheet_link')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">QTR</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="QTR" name="qtr" class="form-control">
                                            @if ($errors->has('qtr'))
                                                <span
                                                    class="text-danger">{{ str_replace('qtr', 'QTR', $errors->first('qtr')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">YTD</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="YTD" name="ytd" class="form-control">
                                            @if ($errors->has('ytd'))
                                                <span
                                                    class="text-danger">{{ str_replace('ytd', 'YTD', $errors->first('ytd')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">One Year</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="One Year" name="one_year"
                                                class="form-control">
                                            @if ($errors->has('one_year'))
                                                <span
                                                    class="text-danger">{{ str_replace('one year', 'One Year', $errors->first('one_year')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Three Year</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Three Year" name="three_year"
                                                class="form-control">
                                            @if ($errors->has('three_year'))
                                                <span
                                                    class="text-danger">{{ str_replace('three year', 'Three Year', $errors->first('three_year')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Five Year</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Five Year" name="five_year"
                                                class="form-control">
                                            @if ($errors->has('five_year'))
                                                <span
                                                    class="text-danger">{{ str_replace('five year', 'Five Year', $errors->first('five_year')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Since Inception</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Since Inception" name="since_inception"
                                                class="form-control">
                                            @if ($errors->has('since_inception'))
                                                <span
                                                    class="text-danger">{{ str_replace('since inception', 'Since Inception', $errors->first('since_inception')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Index Name</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Index Name" name="index_name"
                                                class="form-control">
                                            @if ($errors->has('index_name'))
                                                <span
                                                    class="text-danger">{{ str_replace('index name', 'Index Name', $errors->first('index_name')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Set Date</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Set Date" name="set_date"
                                                class="form-control">
                                            @if ($errors->has('set_date'))
                                                <span
                                                    class="text-danger">{{ str_replace('set date', 'Set Date', $errors->first('set_date')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Expense Ratio</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Expense Ratio" name="expense_ratio"
                                                class="form-control">
                                            @if ($errors->has('expense_ratio'))
                                                <span
                                                    class="text-danger">{{ str_replace('expense ratio', 'Expense Ratio', $errors->first('expense_ratio')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Disclaimers</label>
                                        <div class="col-md-10">
                                            <textarea name="disclaimers" placeholder="Disclaimers" class="form-control ckeditor"></textarea>
                                            @if ($errors->has('disclaimers'))
                                                <span
                                                    class="text-danger">{{ str_replace('disclaimers', 'Disclaimers', $errors->first('disclaimers')) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Featured Image</label>
                                        <div class="col-md-10">
                                            <input type="file" placeholder="Featured Image" name="featured_image"
                                                class="form-control">
                                            {{-- @if ($errors->has('feature_image'))
                                                <span
                                                    class="text-danger">{{ str_replace('feature image', 'Feature Image', $errors->first('feature_image')) }}</span>
                                            @endif --}}
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
