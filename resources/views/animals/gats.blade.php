@extends('layout.template')
@section('content')
@section('title','gossos')








<div class="container-fluid bg-3 text-center">
    <h3>gats</h3>

    <div class="row">
        @foreach($animals as $animal)
            <div class="col-sm-4">

                <a href="{{url('/animals/'.$animal->id)}}"><img src="{{$animal->photo}}" class="img-responsive center-block"  style="width:50%" alt="Image" ">{{$animal->name}}</a>


                <br>
            </div>
        @endforeach



    </div>
    <div class="text-center" > {{$animals->links()}}</div>
</div>
</div>

<div class="col-md-12 text-center">

    <a  href="{{ URL::previous() }}">Tornar</a>
</div>


@endsection
