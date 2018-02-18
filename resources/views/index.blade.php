@extends('layout.template')
@section('content')








    <div class="container-fluid bg-3 text-center">
        <h3>Adopcions</h3>

        <div class="row">
            @foreach($animals as $animal)
            <div class="col-sm-4">

                <a href="{{url('/animals/'.$animal->id)}}"> <img src="{{$animal->photo}}" class="img-responsive center-block"   style="width:50%" alt="Image"> </a>
                <a>{{$animal->name}}</a>
                <br>
            </div>
                @endforeach



            </div>
        <div class="text-center" > {{$animals->links()}}</div>
        </div>
    </div>


@endsection
