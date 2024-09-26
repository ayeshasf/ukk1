<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .toy-card {
            margin: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
            transition: box-shadow 0.3s;
        }
        .toy-card:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .card-title {
            font-size: 1.5rem;
        }
        .btn-login {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <h2 class="text-center mb-4">Available Toys</h2>
        <div class="row">
            @foreach($toys as $toy)
                <div class="col-md-3">
                    <div class="toy-card p-3">
                        <h5 class="card-title">{{ $toy->name }}</h5>
                        <p class="card-text">{{ $toy->description }}</p>
                        <p class="card-text"><strong>Price: </strong>${{ $toy->formatted_price }}</p>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $toy->id }}">
                            <input type="hidden" name="name" value="{{ $toy->name }}">
                            <input type="hidden" name="price" value="{{ $toy->price }}">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        @if($toys->count() < 4)
        @endif
    </div>
</body>
</html>

