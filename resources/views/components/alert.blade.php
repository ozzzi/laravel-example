@if($message = Session::get('success'))
<div class="alert alert-success mt-3">
    {{ $message }}
</div>
@elseif($errors->any())
<div class="alert alert-danger mt-3">
    @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
</div>
@endif
