


@extends('layout.Admintemplate')
@section('content')




<div class="section">
    <h2 class="title text-center" >Crear nova notcia</h2>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('/admin/posts')}}"enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">Titol</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                </div>
            </div>
        </div>


        <textarea class="form-control" placeholder="descripcio" rows="5" name="description">{{old('description')}}</textarea>



        <div>
            <label>Imatge noticia</label>
            <input type="file" name="photo">
        </div>


        <div class="col-md-12 text-center">

            <button class="btn btn-primary text-center">Insertar noticia</button>
            <a href="{{url('/admin/posts')}}" class="btn brn-default">Cancelar</a>
        </div>






    </form>




</div>

@endsection