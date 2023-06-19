<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container bg-black">

        <div class="d-flex flex-column">

            <div>
                <p class="text-white">Nueva Promocion</p>
            </div>

            <form action="{{ route('insertarPromo') }}" method="post">
            @csrf
            
                <div>
                    <input type="text" name="promocion">
                    <button type="submit">INSERTAR</button>
                </div>

            </form>
        </div>

    </div>
</body>
</html>