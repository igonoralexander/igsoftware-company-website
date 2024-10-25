@if (Session::has('Success'))
<div class="alert alert-success"> {{Session::get('Success') }}</div>
@endif
@if (Session::has('Failed'))
<div class="alert alert-success"> {{Session::get('Failed') }}</div>
@endif