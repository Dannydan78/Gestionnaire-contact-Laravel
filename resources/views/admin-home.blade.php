<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<title>Admin Home</title>
</head>



<body class="font-[Poppins]">
    <div class="flex">
        <div class="w-1/5">
            @include('sidebar')
        </div>
        <div class="w-4/5 p-4">
            <h1 class="text-center text-4xl mt-3 font-semibold">Espace Administrateur</h1>

            <div class="flex items-center justify-centermt  mt-10 mr-10">

                <div>
                  </div class="justify-center">
                  <style>
                    #myChart {
                      width: 100px; /* Ajustez la largeur en pixels selon vos besoins */
                      height: 400px; /* Ajustez la hauteur en pixels selon vos besoins */
                    }
                  </style>
                    <canvas id="myChart"></canvas>

                  <script>
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                      type: 'bar',
                      data: {
                        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                        datasets: [{
                          label: '# Inscriptions',
                          data: [12, 19, 3, 5, 2, 3, 20, 16, 10, 5, 10, 6],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
                <div>
                    <canvas id="myChart"></canvas>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>
