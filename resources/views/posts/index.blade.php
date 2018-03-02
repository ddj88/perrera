@extends('layout.template')
@section('content')


    <div class="container-fluid bg-3 text-center">
        <h3>noticies</h3>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-12 table-bordered">


                    <br>
                    <a>{{$post->published}}</a>
                    <br>
                    <a>{{$post->title}}</a>
                    <a> <img src="{{$post->Url}}" class=" center-block"   style="width:25%" alt="Image"> </a>
<div class="table-bordered">
    <a>{{$post->description}}</a>
</div>

                </div>
            @endforeach



        </div>
        <div class="text-center" > {{$posts->links()}}</div>
    </div>


    <div class="col-md-12 text-center">

        <a  href="{{ URL::previous() }}">Tornar</a>

    </div>

    </div>


@endsection
