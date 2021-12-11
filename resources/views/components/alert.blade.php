@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissiable fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissiable fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
