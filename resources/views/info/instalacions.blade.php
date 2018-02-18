@extends('layout.template')
@section('content')








    <div class="container-fluid bg-3 text-center">
        <h3>L'adopcio</h3>

        <div class="row">

            <div class="col-sm-12 text-left" >
                El millor lloc per aconseguir un animal de companyia és un refugi o una protectora d'animals.
                En aquests centres hi ha animals de tot tipus, des de cadells fins a animals ancians. Cadascun d'ells té la seva pròpia història, però tots necessiten atenció i estimació.
                El denominador comú de la gran majoria d'animals abandonats és que els propietaris anteriors no havien pensat de manera seriosa sobre la responsabilitat que comporta tenir un animal de companyia.

                La nostra experiència ens demostra que la immensa majoria dels animals que es troben als refugis s'adapten sense dificultats a la seva nova i definitiva llar.
                Sobretot si els nous propietaris estan disposats a dedicar al seu nou company el temps i la paciència que requereix.

                Les protectores d'animals ens ocupem que estiguin ben atesos, però l'estimació que se'ls pot donar en aquests centres no pot comparar-se a
                la d'una família que decideixi adoptar-los. Per això, el nostre objectiu principal és el de buscar-los una nova llar, una nova família que els
                doni una segona oportunitat.

            </div>




        </div>

    </div>


    <div class="col-md-12 text-center">

        <div class="col-md-12 text-center">

            <a  href="{{ URL::previous() }}">Tornar</a>
        </div>

    </div>

@endsection