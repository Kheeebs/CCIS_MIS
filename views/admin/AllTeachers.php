<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Teachers</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 0;
      margin: 0;
      background-color: #f4f4f4;
    }

    .dashboard-container {
      display: flex;
    }

    .sidebar {
      background-color: #333;
      width: 250px;
      height: 100vh;
      padding-top: 20px;
      position: fixed;
    }

    .sidebar-logo {
      width: 100px;
      display: block;
      margin: 0 auto 20px;
    }

    .sidebar-menu {
      list-style: none;
      padding: 0;
    }

    .sidebar-menu li {
      margin-bottom: 10px;
    }

    .sidebar-menu a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px;
      background-color: #444;
      text-align: center;
      border-radius: 5px;
    }

    .sidebar-menu a:hover {
      background-color: #555;
    }

    .logout-section {
      margin-top: auto;
      padding: 20px;
    }

    .logout-button {
      background-color: #b30101;
      color: white;
      padding: 10px;
      text-align: center;
      display: block;
      border-radius: 5px;
      text-decoration: none;
    }

    .logout-button:hover {
      background-color: #900000;
    }

    .main-content {
      margin-left: 250px;
      padding: 20px;
      flex: 1;
    }

    .main-header {
      background-color: #1785ce;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      margin-bottom: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .content-area {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #1785ce;
      color: white;
    }
  </style>
</head>
<body>
  <div class="dashboard-container"> 
      <!-- Include Sidebar -->
  <?php include '../../includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
      <header class="main-header">
        <h1>FACULTY</h1>
      </header>

      <div class="content-area">
        <!-- Add User Button -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addUserModal">
          Add User
        </button>
        <!-- Deleted Users Button -->
        <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#deletedUsersModal">
          Deleted Users
        </button>

        <!-- Teacher Table -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Teacher 1</td>
              <td>Teacher</td>
              <td>Teacher@gmail.com</td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <!-- More rows as needed... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Add User Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="AllTeachers.php"> <!-- Example action -->
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" required>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="form-container">
              <h2>User Details</h2>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required />
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" class="form-control" required>
                  <option value="admin">Admin</option>
                  <option value="teacher">Teacher</option>
                  <option value="student">Student</option>
                </select>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required />
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Deleted Users Modal -->
<div class="modal fade" id="deletedUsersModal" tabindex="-1" role="dialog" aria-labelledby="deletedUsersModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletedUsersModalLabel">Deleted Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Deleted User 1
            <button class="btn btn-success btn-sm restore-btn" data-user-id="1">
              Restore
            </button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Deleted User 2
            <button class="btn btn-success btn-sm restore-btn" data-user-id="2">
              Restore
            </button>
          </li>
          <!-- Add more dynamically -->
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Confirm logout function
    function confirmLogout(event) {
      if (!confirm("Are you sure you want to log out?")) {
        event.preventDefault();
      }
    }
  </script>
</body>
</html>
