@extends('layout.template')
@section('content')
@section('title',$post->title)








    <div class="container-fluid bg-3 text-center">
        <h3>{{$post->title}}</h3>

        <div class="row">
            <h4>Publicada: {{$post->published}}</h4>
                <div class="col-sm-12" >
                    <img src="{{$post->url}}"  class="center-block" width="20%">
                </div>
                <div class="col-md-4 text-left">


                    <h4>HISTORIA: {{$post->description}}</h4>

                </div>




        </div>

    </div>

    </div>
    <div class="col-md-12 text-center">

        <a  href="{{ URL::previous() }}">Tornar</a>
    </div>


@endsection