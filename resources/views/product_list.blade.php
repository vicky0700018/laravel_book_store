<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <!-- Bootstrap CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">📦 Product List</h1>

        <table class="table table-bordered table-striped shadow">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Price (₹)</th>
                    <th>Description</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $vicky)
                <tr>
                    <td>{{ $vicky->id }}</td>
                    <td>{{ $vicky->product_name }}</td>
                    <td>
                        @if($vicky->product_image)
                        <img src="{{ asset('images/' . $vicky->product_image) }}" alt="Image" width="80">
                        @else
                        <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>{{ number_format($vicky->product_price, 2) }}</td>
                    <td>{{ $vicky->product_description }}</td>
                    <td>{{ $vicky->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>