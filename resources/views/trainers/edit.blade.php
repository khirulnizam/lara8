@extends('layouts.bootstraptemp')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    
<h3>Edit existing record</h3>
<form action="{{route('trainer.update',$trainer->id)}}" 
    method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$trainer->id}}">
    Trainer name
    <input type="text" name="trainername"
    class="form-control" value="{{$trainer->trainername}}">
    Expertise
    <input type="text" name="trainerexpert"
    class="form-control" value="{{$trainer->trainerexpert}}">
    Web
    <input type="text" name="trainerweb"
    class="form-control" value="{{$trainer->trainerweb}}">
    <button type="submit" class="btn btn-primary">Save Record
    </button>

</form>
@endsection