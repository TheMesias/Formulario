<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>Test de carreras</title>
    <style>
    .bg-light {
        background-color: #1F295B !important;
    }

    .main_titulo {
        text-align: center;
        margin-top: 2rem;
        margin-bottom: 3rem;
    }

    .main_titulo .titulo_formulario{
        color: #daa213;
        font-size: 3rem;
        font-family: 'Anton', sans-serif;
        word-spacing: 2px;
       
    }

    .contenedor_pregunta{
        background-color: #1F295B; 
        color: aliceblue
    }

    .contenedor_pregunta:hover{
        transform: scale(1.007);
        transition: all 0.1s ease-in-out;
    }

    form label {
        cursor: pointer
    }
  
   
    form input[type=radio] {
        padding: 0.2rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 100%;
        width: 1.2em;
        height: 1.2em;
        outline: none;
        border: 2px solid #1F295B;
        background-color: #0000007c;
        cursor: pointer
    }
        
    form input[type=radio]:checked {
        background-color: #1F295B;
        border: 2px solid #ffffff;
    }
    
   
   .container_button{
    text-align: center;
    margin: 1rem;
    padding: 1rem;
   
   }

   .container_button:hover{
    transform: scale(1.01);
    transition: all 0.1s ease-in-out;
   }
   
   .container_button .btn{
    width: 50%;
    padding-top: 1rem; 
    padding-bottom: 1rem; 
    background-color: #daa213;
    border: none;
    color: #000;
   }
    
    </style>
</head>
<body>
    <header class="header" >
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="https://institutotraversari.edu.ec/wp-content/uploads/2023/01/LOGO-ORIGINAL.png" width="100%" height="40" alt="logo">
            </a>
            
        </nav>
    </header>
    <main class="main_container container-sm">
        <div class="main_contenedor_superior">
            <div class="main_titulo">
                <h5 class="titulo_formulario p-3">Descubre tu vocación y toma el control de tu futuro con nuestro test de carreras personalizado</h5>
            </div>
        </div>

        <form action="{{ route('store') }}" method="post">
            @csrf


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" value="{{ old('nombre') }}">
            </div>
            @error('nombre')
                <div class="alert alert-danger">Falta llenar</div>
            @enderror
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido: </label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido" value="{{ old('apellido') }}" >
            </div>
            @error('apellido')
                <div class="alert alert-danger">Falta llenar</div>
            @enderror
            <div class="mb-3">
                <label for="celular" class="form-label">Celular: </label>
                <input type="text" name="celular" id="celular" class="form-control" placeholder="Ingrese su numero de celular" value="{{ old('celular') }}" >
            </div>
            @error('celular')
                <div class="alert alert-danger">Falta llenar</div>
            @enderror


            @foreach ($preguntas as $pregunta)
            <div class="mb-3 p-3 border border-dark rounded contenedor_pregunta">
                <label class="form-label">Pregunta {{ $pregunta->id }}:</label>
                <label class="form-label" for="pregunta{{ $pregunta->codigo_pregunta }}">{{ $pregunta->titulo_pregunta }}</label>
                <div class="d-flex">
                    @foreach ($tipo_respuestas as $tipo_respuesta)
                        <div class="m-3 container_input">
                            <input type="hidden" name="pregunta_id_{{ $pregunta->codigo_pregunta }}" value="{{ $pregunta->id }}">
                            <input class="form-check-input" type="radio" id="{{ $pregunta->codigo_pregunta }}_{{ $tipo_respuesta->codigo_tipo_respuesta }}" value="{{ $tipo_respuesta->valor_tipo_respuesta }}" name="respuesta_{{ $pregunta->codigo_pregunta }}" {{ old('respuesta_' . $pregunta->codigo_pregunta) == $tipo_respuesta->valor_tipo_respuesta ? 'checked' : '' }} value="{{ $tipo_respuesta->valor_tipo_respuesta }}">
                            <label class="form-check-label" for="{{ $pregunta->codigo_pregunta }}_{{ $tipo_respuesta->codigo_tipo_respuesta }}" value="{{ $tipo_respuesta->id }}">
                                {{ $tipo_respuesta->titulo_tipo_respuesta }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            @error('respuesta_' . $pregunta->codigo_pregunta)
                <div class="alert alert-danger">Falta llenar</div>
            @enderror
            @endforeach
            <div class="container_button">
                <button type="submit" class="btn btn-primary">!Conoce tu profesion 🙂!</button>
            </div>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>