<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> <!-- For trash icon -->
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
           
                <th>Package Name</th>
                <th>Credits</th>
                <th>Credit Due</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if($packages->count()) --}}
                @foreach($package as $p)
                    <tr>
                        {{-- <td>{{ $index + 1 }}</td> --}}
                        <td>{{ $p->package_name }}</td>
                        <td>{{ $p->credits }}</td>
                        <td>{{ $p->credit_due }}</td>
                        <td>{{ $p->status }}</td>
                        <td>
                            <a href="{{ route('package.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>

                            <form action="{{ route('package.destroy', $p->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this Package?')" title="Delete">
                                    Delete <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            {{-- @else
                <tr>
                    <td colspan="6" class="text-center">No packages found.</td>
                </tr>
            @endif --}}
        </tbody>
    </table>
</div>

</body>
</html>
