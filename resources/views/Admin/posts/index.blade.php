@extends('layout.Admintemplate')
@section('content')

    <div class="section text-center">
        <h2 class="title">Llistat noticies </h2>

        <div >
            <div class="row">
                <a href="{{url('admin/posts/create') }}" class="btn btn-primary btn-round">Nova noticia</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-1 text-center">#</th>
                        <th class="col-md-1 text-center">titol</th>
                        <th class="col-md-4 text-center">Descripcio</th>
                        <th class="col-md-1 text-center">Opcions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="text-center">{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>

                                <form method="post" action="{{url('admin/posts/'.$post->id.'/delete')}}">
                                    <a  href="{{url('noticies/'.$post->id)}}" type="button" rel="tooltip" title="Veure noticia" class="btn btn-info btn-xs" target="_blank">
                                        <i class="fa fa-info"> ver</i>
                                    </a>
                                    <a href="{{url('admin/posts/'.$post->id.'/edit')}}" type="button" rel="tooltip" title="Editar noticia" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit">editar</i>
                                    </a>

                                    {{csrf_field()}}
                                    {{-- {{method_field('DELETE')}} para el metodo delete--}}
                                    <button  type="submit" rel="tooltip" title="borrar noticia" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times">borrar</i>
                                    </button>

                                </form>

                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
                {{$posts->links()}}
            </div>
        </div>

    </div>
@endsection
