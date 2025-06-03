<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Package</title>
</head>
<body>
  <h2>Add Package</h2>

  <form action="{{ route("package.update", $package->id)}}" method="POST">
    @csrf
    @method('PUT')
@if(session('success'))
                 <div style="color: green;">
                 {{ session('success') }}
                 </div>
                @endif
    <!-- Package Name -->
    <label for="package_name">Package Name</label><br>
    <input type="text" id="package_name" name="package_name" value="{{ $package->package_name }}"><br><br>

    <!-- Credits -->
    <label for="credits">Credits</label><br>
    <input type="number" id="credits" name="credits" value={{ $package->credits }} required><br><br>

    <!-- Credit Due (PerMonth/PerWeek) -->
    <label for="credit_due">Credit Due</label><br>
    <select name="credit_due" id="credit_due" value={{ $package->credit_due }}required>
      <option value="PerMonth">Per Month</option>
      <option value="PerWeek">Per Week</option>
    </select><br><br>

    <!-- Status -->
    <label for="status">Status</label><br>
    <select name="status" id="status" value={{ $package->status }} required>
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
      <option value="Draft">Draft</option>
    </select><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>
