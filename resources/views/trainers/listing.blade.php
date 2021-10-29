@extends('layouts.bootstraptemp')

@section('content')
    @foreach ($trainers as $trainer)
        Trainer Name : {{$trainer->trainername}} <br>
        Expertise : {{$trainer->trainerexpert}} <br>
        Web : {{$trainer->trainerweb}} <hr>

    @endforeach
@endsection