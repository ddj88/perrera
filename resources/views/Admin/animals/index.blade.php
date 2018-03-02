@extends('layout.Admintemplate')
@section('content')

    <div class="section text-center">
        <h2 class="title">Listado Animales </h2>

        <div >
            <div class="row">
                <a href="{{url('admin/animals/create') }}" class="btn btn-primary btn-round">Nuevo animal</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-1 text-center">#</th>
                        <th class="col-md-1 text-center">Nombre</th>
                        <th class="col-md-4 text-center">Description</th>
                        <th class="col-md-1 text-center">tipo</th>
                        <th class="col-md-1 text-center">genero</th>
                        <th class="col-md-1 text-center">edad</th>
                        <th class="col-md-1 text-center">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($animals as $animal)
                        <tr>
                            <td class="text-center">{{$animal->id}}</td>
                            <td>{{$animal->name}}</td>
                            <td>{{$animal->description}}</td>
                            <td>{{$animal->type ? $animal->type : 'general'}}</td>
                            <td> {{$animal->gender}}</td>
                            <td>  {{$animal->born}}  </td>
                            <td>

                                <form method="post" action="{{url('admin/animals/'.$animal->id.'/delete')}}">
                                    <a  href="{{url('animals/'.$animal->id)}}" type="button" rel="tooltip" title="Ver animal" class="btn btn-info btn-xs" target="_blank">
                                        <i class="fa fa-info"> ver</i>
                                    </a>
                                    <a href="{{url('admin/animals/'.$animal->id.'/edit')}}" type="button" rel="tooltip" title="Editar animal" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit">editar</i>
                                    </a>


                                    {{csrf_field()}}
                                    {{-- {{method_field('DELETE')}} para el metodo delete--}}
                                    <button  type="submit" rel="tooltip" title="borrar animal" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times">borrar</i>
                                    </button>

                                </form>

                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
                {{$animals->links()}}
            </div>
        </div>

    </div>
@endsection
