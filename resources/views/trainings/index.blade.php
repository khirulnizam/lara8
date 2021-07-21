@extends('layouts.mylayout')

@section('content')

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <h6>Search Training Records</h6>
    <form class="form-inline" 
    action="{{route('training.index')}}">
        <input class="form-control mr-sm-2" 
        type="text" name="keyword"
        placeholder="Search training by title">
        <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i></button>
    </form>

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Training title</td>
            <td>Description</td>
            <td colspan="2">Tasks</td>

        </tr>

        @foreach ($trainings as $training)
        <tr>
            <td>{{ $training->id }}</td>
            <td>{{ $training->title }} </td>
            <td>{{ $training->desc }} </td>
            <td>
                <a
                href="{{route('training.edit',$training->id )}}"
                class="btn btn-warning btn-sm">
                <i class="fa fa-edit"></i>
                </a>
            </td>
            <td>
                <!-- form with button delete -->
                <form method="POST"
                action="{{route('training.destroy',
                $training->id) }}">
                @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-sm" type="submit"
                    onclick="return confirm('Are you sure to delete record id:{{$training->id}}')">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $trainings->links('pagination::bootstrap-4') }}

@endsection