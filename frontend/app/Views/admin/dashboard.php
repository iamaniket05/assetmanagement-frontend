<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - AssetManager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
      min-height: 100vh;
    }

    .navbar {
      background: linear-gradient(90deg, #007bff, #6610f2);
    }

    .navbar-brand {
      font-weight: 600;
      color: white !important;
      letter-spacing: 0.5px;
    }

    .logout-btn {
      background-color: #dc3545;
      border: none;
      border-radius: 8px;
      padding: 8px 15px;
      color: #fff;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #c82333;
      transform: translateY(-2px);
    }

    .dashboard-header {
      text-align: center;
      margin: 2rem 0;
    }

    .dashboard-header h3 {
      font-weight: 700;
      color: #333;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .card-title {
      font-weight: 600;
      color: #333;
    }

    .card-text {
      color: #555;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 shadow-sm">
    <a class="navbar-brand" href="#">AssetManager Admin</a>
    <div class="ms-auto">
      <a href="<?= base_url('admin/logout') ?>" class="logout-btn">Logout</a>
    </div>
  </nav>

  <!-- Dashboard Header -->
  <div class="dashboard-header">
    <h3>Welcome to the Admin Dashboard 👋</h3>
    <p class="text-muted">Manage your assets, users, and system activity all in one place.</p>
  </div>

  <!-- Dashboard Cards -->
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-4 text-center">
          <h5 class="card-title">Total Assets</h5>
          <p class="display-6 text-primary fw-bold">120</p>
          <p class="card-text">Currently active assets in the system.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <h5 class="card-title">Active Users</h5>
          <p class="display-6 text-success fw-bold">35</p>
          <p class="card-text">Users currently managing assets.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <h5 class="card-title">Pending Requests</h5>
          <p class="display-6 text-warning fw-bold">8</p>
          <p class="card-text">Assets waiting for approval.</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
