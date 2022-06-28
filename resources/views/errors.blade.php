@if (session()->has('success'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
            <i class="nc-icon nc-simple-remove"></i>
        </button>
        <span>
            <b> Success - </b> {{ session()->get('success') }}</span>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
            <i class="nc-icon nc-simple-remove"></i>
        </button>
        <span>
            <b> Opps - </b> {{ session()->get('error') }}</span>
    </div>
@endif
