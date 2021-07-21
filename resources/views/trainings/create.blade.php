@extends('layouts.mylayout')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    <h6>Create Training Record</h6>
    <form action="{{route('training.store')}}" 
    method="post">
        @csrf
        Training Title
        <input type="text" name="title"
        class="form-control">
        Description
        <input type="text" name="desc"
        class="form-control">
        Trainer
        <input type="text" name="trainer"
        class="form-control">
        <button type="submit"
        class="btn btn-primary">Create new Training</button>

    </form>
@endsection