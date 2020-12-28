@if (count($errors)>0)
    @foreach ($errors as $error)
        <div class="alert alert-danger">
            <button class="close" type="button" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ $error }}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ session('success') }}
    </div>
@endif
