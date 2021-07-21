@extends('layouts.bootstraptemp')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    
<h3>Insert new trainer</h3>
<form action="{{route('trainer.store')}}" method="post">
    @csrf
    Trainer name
    <input type="text" name="trainername"
    class="form-control">
    Expertise
    <input type="text" name="trainerexpert"
    class="form-control">
    Web
    <input type="text" name="trainerweb"
    class="form-control">
    <button type="submit" class="btn btn-primary">Save Record
    </button>

</form>
@endsection