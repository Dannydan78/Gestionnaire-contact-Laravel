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

            <div class="flex items-center justify-center mt-5">

                <img src="" alt="">
            </div>
        </div>
    </div>
</body>
</html>
