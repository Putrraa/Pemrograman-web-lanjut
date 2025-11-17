<div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
                <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-success alert-dismissable fade show" role="alert">
                Periksa ulang kesalahan pengisian form
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endif
</div>