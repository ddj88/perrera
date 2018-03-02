


@extends('layout.Admintemplate')
@section('content')




    <div class="section">
        <h2 class="title text-center" >Editar animal</h2>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>

                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{url('/admin/animals/'.$animal->id.'/edit')}}"enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Nom</label>
                        <input type="text" class="form-control" name="name" value="{{old('name',$animal->name)}}">

                        <label class="control-label">Sexe</label>
                         <br>
                        <input type="radio" name="gender" value="mascle" > mascle<br>
                        <input type="radio" name="gender" value="famella"> famella<br>

                        <br>

                        <label class="control-label">tipus</label> <br>
                        <input type="radio" name="type" value="gos" > Gos<br>
                        <input type="radio" name="type" value="gat"> gat<br>

                        <br>
                        <label class="control-label">Raça</label>
                        <input type="text" class="form-control" name="breed" value="{{old('breed',$animal->breed)}}">

                        <label class="control-label">Data naixement</label>
                        <input type="text" class="form-control" name="born" value="{{old('born',$animal->born)}}">

                        <label class="control-label">Data entrada</label>
                        <input type="text" class="form-control" name="entry" value="{{old('entry',$animal->entry)}}">
                    </div>
                </div>
            </div>
            <label class="control-label">descripció</label>
            <textarea class="form-control" placeholder="descripcio" rows="5" name="description">{{old('description',$animal->description)}}</textarea>



            <div>
                <label>Imatge animal</label>
                <input type="file" name="photo">
            </div>

            <div class="col-md-12 text-center">

                <button class="btn btn-primary text-center">Editar noticia</button>
                <a href="{{url('/admin/posts')}}" class="btn brn-default">Cancelar</a>
            </div>

        </form>


    </div>

@endsection