<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <?php include '../includes/sidebar.php'; ?>

  <!-- Header Section -->
  <header class="main-header">
    <div class="header-content">
      <h1>Welcome to the Dashboard</h1>
      <div class="user-profile" onclick="toggleDropdown('userDropdown', event);" aria-expanded="false">
        <img src="assets/images/user_icon.png" alt="User Profile" class="user-icon" />
        <span class="user-name">John Doe</span>
        <div class="dropdown" id="userDropdown">
          <ul class="dropdown-content">
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="login.php" onclick="confirmLogout(event)">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="content">
    <h2>Your Dashboard Content</h2>
    <p>This is where your main content will appear.</p>
  </main>

  <script src="../includes/header.css"></script>
</body>
</html>
