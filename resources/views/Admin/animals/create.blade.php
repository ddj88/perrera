


@extends('layout.Admintemplate')
@section('content')




<div class="section">
    <h2 class="title text-center" >Crear nou animal</h2>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('/admin/animals')}}"enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">Nom</label>
                    <input type="text" class="form-control" name="name" value="">

                    <label class="control-label">Sexe</label>
                    <br>
                    <input type="radio" name="gender" value="mascle" > mascle<br>
                    <input type="radio" name="gender" value="famella"> famella<br>

                    <br>

                    <label class="control-label">tipus</label> <br>
                    <input type="radio" name="type" value="gos" checked> Gos<br>
                    <input type="radio" name="type" value="gat"> gat<br>

                    <br>
                    <label class="control-label">Raça</label>
                    <input type="text" class="form-control" name="breed" value="">

                    <label class="control-label">Data naixement</label>
                    <input type="text" class="form-control" name="born" value="">

                    <label class="control-label">Data entrada</label>
                    <input type="text" class="form-control" name="entry" value="">
                </div>
            </div>
        </div>
        <label class="control-label">descripció</label>
        <textarea class="form-control" placeholder="descripcio" rows="5" name="description">}</textarea>



        <div>
            <label>Imatge animal</label>
            <input type="file" name="photo">
        </div>

        <div class="col-md-12 text-center">

            <button class="btn btn-primary text-center">insertar animal</button>
            <a href="{{url('/admin/animals')}}" class="btn brn-default">Cancelar</a>
        </div>

    </form>



</div>

@endsection