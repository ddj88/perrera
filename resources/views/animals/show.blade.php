@extends('layout.template')
@section('content')
@section('title',$animal->name)








    <div class="container-fluid bg-3 text-center">
        <h3>{{$animal->name}}</h3>

        <div class="row">

                <div class="col-sm-8 center-block">
                    <img src="{{$animal->url}}" class="img-responsive center-block"  style="width:50%" alt="Image">
                </div>
                <div class="col-md-4 text-left">
                    <h4>NOM: {{$animal->name}}</h4>
                    <h4>SEXE: {{$animal->gender}}</h4>
                    <h4>DATA NAIXAMENT: {{$animal->born}}</h4>
                    <h4>DATA ENTRADA: {{$animal->entry}}</h4>
                    <h4>HISTORIA: {{$animal->description}}</h4>

                </div>




        </div>

    </div>

    </div>
    <div class="col-md-12 text-center">

        <a  href="{{ URL::previous() }}">Tornar</a>
    </div>


@endsection