<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Package List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Package Name</th>
                <th>Credits</th>
                <th>Credit Due</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($packages as $index => $package)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $package->package_name }}</td>
                    <td>{{ $package->credits }}</td>
                    <td>{{ $package->credit_due }}</td>
                    <td>{{ $package->status }}</td>
                    <td>
                        <a href="{{ url('edit_package/'.$package->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('delete_package/'.$package->id) }}" class="btn btn-sm btn-danger"
   onclick="return confirm('Are you sure you want to delete this package?')">Delete</a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No packages found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
