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
        <form action="{{ route('store') }}" method="post" >
            @csrf
            <x-pregunta questionNumber="1" questionText="Me gusta realizar pequeñas reparaciones de equipos electrodomésticos." name="flexRadioDefault1" />
            <x-pregunta questionNumber="2" questionText="El trabajo científico me parece muy interesante. " name="flexRadioDefault2" />
            <x-pregunta questionNumber="3" questionText="Sé tocar un instrumento musical o me gustaría aprender." name="flexRadioDefault3" />
            <x-pregunta questionNumber="4" questionText="Me gustaría cuidar personas con enfermedades mentales." name="flexRadioDefault4" />
            <x-pregunta questionNumber="5" questionText="Me siento bien y me las arreglo cuando tengo que organizar el trabajo de mis compañeros y compañeras. Fijarles tareas y comprobar si han sido realizadas." name="flexRadioDefault5" />
            <x-pregunta questionNumber="6" questionText="Me gusta llevar mis cuadernos de manera ordenada y limpia." name="flexRadioDefault6" />
            <x-pregunta questionNumber="7" questionText="Me gustaría trabajar en el servicio técnico de una empresa." name="flexRadioDefault7" />
            <x-pregunta questionNumber="8" questionText="Me gustaría trabajar en un centro de investigación o en un laboratorio." name="flexRadioDefault8" />
            <x-pregunta questionNumber="9" questionText="En el futuro me gustaría escribir poemas, guiones de películas o de juegos de video" name="flexRadioDefault9" />
            <x-pregunta questionNumber="10" questionText="Me gusta mucho participar en organizaciones no gubernamentales como la Cruz Roja o una organización de jóvenes exploradores." name="flexRadioDefault10" />
            <x-pregunta questionNumber="11" questionText="A veces en la escuela soluciono conflictos de mis compañeros y compañeras." name="flexRadioDefault11" />
            <x-pregunta questionNumber="12" questionText="En mi puesto de trabajo me gustaría trabajar según normas estrictamente definidas." name="flexRadioDefault12" />
            <x-pregunta questionNumber="13" questionText="Me interesan los aspectos técnicos de la industria automotriz." name="flexRadioDefault13" />
            <x-pregunta questionNumber="14" questionText="Me interesan los descubrimientos científicos y las nuevas invenciones." name="flexRadioDefault14" />
            <x-pregunta questionNumber="15" questionText="Me gusta ver exposiciones de esculturas, pintura o fotografía." name="flexRadioDefault15" />
            <x-pregunta questionNumber="16" questionText="Me gusta participar en labores sociales." name="flexRadioDefault16" />
            <x-pregunta questionNumber="17" questionText="En las actividades de grupo fomento el liderazgo y la coordinación." name="flexRadioDefault17" />
            <x-pregunta questionNumber="18" questionText="Me gustaría tener un trabajo donde tenga que realizar tareas muy precisas" name="flexRadioDefault18" />
            <x-pregunta questionNumber="19" questionText="Dibujar esquemas o proyectos de equipos es una tarea interesante y agradable para mí." name="flexRadioDefault19" />
            <x-pregunta questionNumber="20" questionText="Me gusta hacer experimentos y observar cómo se hacen." name="flexRadioDefault20" />
            <x-pregunta questionNumber="21" questionText="Me gusta participar en clases de arte, música o de literatura." name="flexRadioDefault21" />
            <x-pregunta questionNumber="22" questionText="Me sentiría bien ayudando a las demás personas a comprenderse." name="flexRadioDefault22" />
            <x-pregunta questionNumber="23" questionText="Me gusta tomar la palabra en diferentes discusiones y convencer a la gente." name="flexRadioDefault23" />
            <x-pregunta questionNumber="24" questionText="Me gusta respetar y cumplir las fechas límites." name="flexRadioDefault24" />
            <x-pregunta questionNumber="25" questionText="En el futuro me gustaría trabajar con herramientas y equipos técnicos." name="flexRadioDefault25" />
            <x-pregunta questionNumber="26" questionText="Me gusta ver los programas de televisión dedicados a las novedades científicas." name="flexRadioDefault26" />
            <x-pregunta questionNumber="27" questionText="Me interesan las revistas dedicadas al arte, a los muebles y a la arquitectura." name="flexRadioDefault27" />
            <x-pregunta questionNumber="28" questionText="Con muchas ganas y gran dedicación enseñaría a jóvenes cómo evitar ciertas adicciones." name="flexRadioDefault28" />
            <x-pregunta questionNumber="29" questionText="Me gustaría liderar un grupo de mis compañeros y compañeras para organizar una fiesta escolar" name="flexRadioDefault29" />
            <x-pregunta questionNumber="30" questionText="Me gustaría tener un trabajo tranquilo, con reglas o instrucciones claras" name="flexRadioDefault30" />
            <x-pregunta questionNumber="31" questionText="Conozco el diseño y el funcionamiento del computador" name="flexRadioDefault31" />
            <x-pregunta questionNumber="32" questionText="Cuando paseo en las montañas o en un bosque me detengo para ver de cerca plantas y árboles que no conozco." name="flexRadioDefault32" />
            <x-pregunta questionNumber="33" questionText="Me gustaría tocar en un grupo musical o en una orquesta." name="flexRadioDefault33" />
            <x-pregunta questionNumber="34" questionText="En el futuro me gustaría trabajar con niños y niñas." name="flexRadioDefault34" />
            <x-pregunta questionNumber="35" questionText="Sé dar instrucciones y consejos claros a las demás personas." name="flexRadioDefault35" />
            <x-pregunta questionNumber="36" questionText="Por las tardes me gusta planear el trabajo que tengo que hacer al día siguiente." name="flexRadioDefault36" />
            <x-pregunta questionNumber="37" questionText="Me gustaría trabajar en un taller de mecánica automotriz." name="flexRadioDefault37" />
            <x-pregunta questionNumber="38" questionText="Me interesan nuevas ramas de la ciencia, como la genética o la biotecnología." name="flexRadioDefault38" />
            <x-pregunta questionNumber="39" questionText="Me gustaría crear o componer algún tipo de música." name="flexRadioDefault39" />
            <x-pregunta questionNumber="40" questionText="Me gustaría ayudar a la gente a resolver sus problemas sociales." name="flexRadioDefault40" />
            <x-pregunta questionNumber="41" questionText="Me gustaría desempeñar la presidencia de mi clase." name="flexRadioDefault41" />
            <x-pregunta questionNumber="42" questionText="En mi mesa de estudios me gusta tener todo perfectamente ordenado." name="flexRadioDefault42" />
            <x-pregunta questionNumber="43" questionText="Me gustaría aprender a hacer dibujos técnicos." name="flexRadioDefault43" />
            <x-pregunta questionNumber="44" questionText="Me gustaría realizar estudios y descubrir la vacuna contra una enfermedad grave." name="flexRadioDefault44" />
            <x-pregunta questionNumber="45" questionText="Me gustaría hacer dibujos para libros o crear carteles." name="flexRadioDefault45" />
            <x-pregunta questionNumber="46" questionText="En mi futuro trabajo me gustaría ayudar a personas con discapacidades." name="flexRadioDefault46" />
            <x-pregunta questionNumber="47" questionText="Me gustaría tener un trabajo donde pudiera tomar decisiones y planear acciones para otras personas." name="flexRadioDefault47" />
            <x-pregunta questionNumber="48" questionText="Me gusta planificar y controlar bien mis gastos." name="flexRadioDefault48" />
            <x-pregunta questionNumber="49" questionText="Me gusta aprender cómo funcionan los equipos técnicos." name="flexRadioDefault49" />
            <x-pregunta questionNumber="50" questionText="Me gustaría realizar estudios sobre el funcionamiento del cerebro." name="flexRadioDefault50" />
            <x-pregunta questionNumber="51" questionText="En el futuro me gustaría expresarme mediante una actividad creativa como: la pintura, el dibujo, la escultura, el baile o el canto." name="flexRadioDefault51" />
            <x-pregunta questionNumber="52" questionText="Me gustaría trabajar en un centro de ayuda telefónica para jóvenes." name="flexRadioDefault52" />
            <x-pregunta questionNumber="53" questionText="Me gustaría aprender a liderar a la gente para gestionar sus acciones." name="flexRadioDefault53" />
            <x-pregunta questionNumber="54" questionText="Me gusta tener ordenada mi habitación y mi mesa de estudios." name="flexRadioDefault54" />
            <x-pregunta questionNumber="55" questionText="Me gustaría diseñar o arreglar máquinas y equipos modernos." name="flexRadioDefault55" />
            <x-pregunta questionNumber="56" questionText="Me interesan nuevas ramas de la ciencia y la tecnología." name="flexRadioDefault56" />
            <x-pregunta questionNumber="57" questionText="Me gustaría actuar en un escenario: bailar, cantar e interpretar papeles." name="flexRadioDefault57" />
            <x-pregunta questionNumber="58" questionText="Me sentiría bien ayudando a personas nerviosas o tristes por algún motivo." name="flexRadioDefault58" />
            <x-pregunta questionNumber="59" questionText="Me gusta dirigir el trabajo de las demás personas." name="flexRadioDefault59" />
            <x-pregunta questionNumber="60" questionText="Me gusta organizar mi trabajo día a día y para la semana." name="flexRadioDefault60" />
            <div class="container_button">
                <button type="submit" class="btn btn-primary">!Conoce tu profesion 🙂!</button>
            </div>
            </div>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>