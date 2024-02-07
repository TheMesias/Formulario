<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profesion</title>
</head>
<style>
   
    .main_titulo {
        text-align: center;
        margin-top: 2rem;
        margin-bottom: 3rem;
    }

    .main_titulo .titulo{
        color: #daa213;
        font-size: 3rem;
        font-family: 'Anton', sans-serif;
        word-spacing: 2px;
       
    }

</style>
<body>
    <div class="main_contenedor_superior">
        <div class="main_titulo">
            <h5 class="titulo p-3">RAISEC te ayuda a encontrar las profesiones que coinciden con tus intereses, aptitudes y habilidades.</h5>
        </div>
    </div>


        <canvas id="myChart"></canvas>


</body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['R', 'A', 'I', 'S', 'E', 'C'],
        datasets: [{
            label: 'Puntaje',
            data: @json($data),
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(179,181,198,1)",
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            y: {
                display: false,
                beginAtZero: false,
                max: 10, 
                grid: {
                    display: false
                }
            },
            x: {
                display: false,
                grid: {
                    display: false

                }
            },
            r: {
            angleLines: {
                display: false
            },
            suggestedMax: 10
        }
        }
    }
});
    </script>
</html>