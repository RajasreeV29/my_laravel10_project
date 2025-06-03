<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package Manager Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
            background-color: #f4f4f4;
        }

        h1 {
            margin-bottom: 40px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Welcome to Package Manager</h1>

    <div class="button-container">
        <a href="{{ route('package.index') }}" class="btn">View Packages</a>
        <a href="{{ route('package.create') }}" class="btn">Create Package</a>
    </div>

</body>
</html>
