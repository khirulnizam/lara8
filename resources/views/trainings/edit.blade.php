@extends('layouts.mylayout')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    <h6>Update-form Training Record</h6>
    <form action="{{route('training.update',$training->id)}}" 
    method="post">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <input type="hidden" name="id" 
        value="{{ $training->id }}">
        Training Title
        <input type="text" name="title"
        value="{{ $training->title }}"
        class="form-control">
        Description
        <input type="text" name="desc"
        value="{{ $training->desc }}"
        class="form-control">
        Trainer
        <input type="text" name="trainer"
        value="{{ $training->trainer }}"
        class="form-control">
        <button type="submit"
        class="btn btn-primary">Save update</button>

    </form>
@endsection