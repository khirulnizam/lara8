@extends('layouts.bootstraptemp')

@section('content')

<h3>Search page: trainers module</h3>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    
<form action="{{ route('trainer.index')}}" 
method="GET" class="form-inline">
    <input type="text" name="keyword" class="form-control">
    <button type="submit" class="btn btn-success">Search</button>
</form>

<table class="table table-striped">
    <tr>
        <td>Id</td>
        <td>Trainer name</td>
        <td>Website</td>
        <td>Actions</td>
        <td></td>
    </tr>
    @foreach ($trainers as $trainer)
    <tr>
        <td>{{ $trainer->id }}</td>
        <td>{{ $trainer->trainername }}</td>
        <td>{{ $trainer->trainerweb }}</td>
        <td><a href="{{route('trainer.edit',$trainer->id)}}" 
            class="btn btn-success">Edit 
            <i class="fas fa-edit"></i> </a>
        </td>
        <td>
            <form method="POST" 
            action="{{route('trainer.destroy',$trainer->id)}}">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger"
            onclick="return confirm('Are you sure to delete the record?')">
            Delete 
            <i class="fas fa-trash"></i> </button>
            </form>
        </td>
    
    </tr>
    @endforeach
</table>
{{ $trainers->links('pagination::bootstrap-4') }}

@endsection