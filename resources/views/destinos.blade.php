<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 1rem;
            padding: 1rem;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .card:hover .details {
            max-height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        @foreach ($destinos as $destino)
        <div class="card">
            <h2>{{ $destino->nombre }}</h2>
        </div>
        @endforeach
    </div>
</body>

</html>