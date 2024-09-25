{{-- resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-header {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <h2 class="text-center">Admin Dashboard</h2>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <hr>
        <h4>Manage Toys</h4>
        <a href="{{ route('toys.create') }}" class="btn btn-success mb-3">Add New Toy</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($toys as $toy)
                <tr>
                    <td>{{ $toy->id }}</td>
                    <td>{{ $toy->name }}</td>
                    <td>{{ $toy->description }}</td>
                    <td>{{ $toy->price }}</td>
                    <td>
                        <a href="{{ route('toys.edit', $toy->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('toys.destroy', $toy->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
