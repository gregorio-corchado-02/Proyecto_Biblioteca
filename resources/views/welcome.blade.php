@extends('layouts.plantilla')

@include('partials.navbar')

@section('contenido')

<h1 class='mb-3 mt-4 text-center text-success' >BIBLIOTECA UPQ</h1>

<div class="container mb-5">
    <div class="row">

        <div class="col-6">

            <div class="card border-dark">
                <div class="card-body">

                <div class="card-header mb-2"> <h2 class='my-2 text-center text-primary' >¿Quién es Jon Fosse?</h2> </div>

                    <p style='text-align: justify;'>
                        Jon Fosse fue galardonado este jueves con el Premio Nobel de Literatura 2023 por "por sus 
                        obras innovadoras y su prosa que dan voz a lo indecible", dijo la Academia Sueca al anunciar
                        el galardón en una ceremonia en Estocolmo este jueves.
                    </p>

                    <p style='text-align: justify;'>
                        Jon Fosse nació en la Haugesund, una ciudad en la costa noruega, el 29 de septiembre de 1959, 
                        destacándose como uno de los escritores más importantes de esta época, dijo Anders Olsson, presidente 
                        del Comité del Nobel de la Academia Sueca.
                    </p>

                    <p style='text-align: justify;'>
                        Su primera novela "Raudt, svart (Rojo, negro)", de 1983, en la que aborda el tema del suicidio, fue descrita
                        por la Academia Sueca como una obra "tan rebelde como emocionalmente cruda" que marcó la pauta para su posterior
                        obra.
                    </p>

                    <p style='text-align: justify;'>
                        Pero su obra magna es quizá "Septology", una colección de siete secciones en tres libros agrupados en un solo volumen titulado.
                        El libro cuenta la historia de un pintor y viudo que envejece y vive solo mientras se enfrenta a las realidades de la religión,
                        la identidad, el arte y la vida familiar.
                    </p>
                </div>
            </div>

        </div>



        <div class="col-6">

        <img  class='pt-5' width='550' src='https://cnnespanol.cnn.com/wp-content/uploads/2023/10/GettyImages-1707912670-e1696507519877.jpg?quality=100&strip=info&w=940&h=530&crop=1'/>


        </div>

    </div>


</div>

@include('partials.piedepagina')




@endsection