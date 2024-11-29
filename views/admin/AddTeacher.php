<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Teacer</title>
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

    .user-profile {
      position: relative;
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    .profile-pic {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 5px;
      object-fit: cover;
    }

    .dropdown-arrow {
      margin-left: 5px;
      font-size: 12px;
    }

    .dropdown {
      display: none;
      position: absolute;
      top: 60px;
      right: 0;
      background-color: white;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
      z-index: 1;
      border-radius: 5px;
      overflow: hidden;
    }

    .dropdown-content {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .dropdown-content li {
      border-bottom: 1px solid #ddd;
    }

    .dropdown-content a {
      display: block;
      padding: 10px;
      text-decoration: none;
      color: black;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .breadcrumb {
      margin-top: 10px;
      font-size: 16px;
      background-color: #eaeaea;
      padding: 10px;
      border-radius: 5px;
    }

    .content-area {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    form {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .form-group {
      flex: 1 1 calc(50% - 20px);
      margin-bottom: 20px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-group label {
      font-size: 14px;
      color: #555;
      display: block;
      margin-bottom: 5px;
    }

    .form-group-full {
      flex: 1 1 100%;
    }

    .photo-upload {
      text-align: center;
    }

    .photo-preview {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 2px solid #ddd;
      margin-bottom: 10px;
      object-fit: cover;
    }

    .buttons {
      text-align: center;
      margin-top: 20px;
    }

    .buttons button {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      margin: 5px;
      cursor: pointer;
    }

    .save-btn {
      background-color: #4CAF50;
      color: white;
    }

    .reset-btn {
      background-color: #f44336;
      color: white;
    }

    .save-btn:hover {
      background-color: #45a049;
    }

    .reset-btn:hover {
      background-color: #d32f2f;
    }

    @media (max-width: 768px) {
      .main-header {
        flex-direction: column;
        text-align: center;
      }

      .main-content {
        margin-left: 0;
        padding: 10px;
      }

      .sidebar {
        width: 100px;
      }

      .sidebar-menu a {
        padding: 5px;
      }
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="logos">
        <img src="CCIS Logo.png" alt="College Logo 1" class="sidebar-logo">
        <img src="College Logo.png" alt="College Logo 2" class="sidebar-logo">
      </div>
      <ul class="sidebar-menu">
        <li><a href="Dashboard.html">Dashboard</a></li>
        <li>
          <a href="#" onclick="toggleDropdown('curriculumDropdown')">Curriculum</a>
          <ul id="curriculumDropdown" class="dropdown-content" style="display: none;">
            <li><a href="CurriculumBSIT.html">BSIT</a></li>
            <li><a href="CurriculumBSCS.html">BSCS</a></li>
            <li><a href="CurriculumBLIS.html">BLIS</a></li>
          </ul>
        </li>
        <li><a href="UserManagement.html">User Management</a></li>
        <li>
          <a href="#" onclick="toggleDropdown('facultyDropdown')">Faculty</a>
          <ul id="facultyDropdown" class="dropdown-content" style="display: none;">
            <li><a href="AllTeachers.html">All Teachers</a></li>
            <li><a href="AddTeacher.html">Add Teachers</a></li>
          </ul>
        </li>
        <li><a href="#">Subject</a></li>
        <li><a href="Profile.html">Profile</a></li>
      </ul>
      <div class="logout-section">
        <a href="Log-in.html" class="logout-button" onclick="confirmLogout(event)">Logout</a>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <header class="main-header">
          <h1>College of Computing in Information Sciences Management Information System</h1>
          <div class="user-profile" onclick="toggleDropdown('profileDropdown')">
            <img src="User.jpg" alt="User Profile" class="profile-pic">
            <span class="dropdown-arrow">&#9662;</span>
            <div class="dropdown" id="profileDropdown">
              <ul class="dropdown-content">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="Log-in.html" onclick="confirmLogout(event)">Logout</a></li>
              </ul>
            </div>
          </div>
        </header>

      <div class="breadcrumb">
        <p>ADMIN - ADD NEW TEACHER</p>
      </div>

      <div class="content-area">
        <h2>Add New Teacher</h2>
        <form>
          <!-- First Row -->
          <div class="form-group">
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" placeholder="Last Name" required>
          </div>

          <div class="form-group">
            <label for="gender">Gender *</label>
            <select id="gender">
              <option value="">Please Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="form-group">
            <label for="dob">Date of Birth *</label>
            <input type="date" id="dob" required>
          </div>

          <!-- Second Row -->
          <div class="form-group">
            <label for="religion">Religion *</label>
            <input type="text" id="religion" placeholder="Type Religion" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" required>
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" placeholder="Phone">
          </div>

          <!-- Photo Upload -->
          <div class="form-group-full photo-upload">
            <img src="placeholder.jpg" alt="Teacher Photo" class="photo-preview">
            <p>Upload Teacher Photo (150px X 150px)</p>
            <input type="file" accept="image/*">
          </div>

          <!-- Buttons -->
          <div class="form-group-full buttons">
            <button type="submit" class="save-btn">Save</button>
            <button type="reset" class="reset-btn">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Toggle dropdown menu visibility
    function toggleDropdown(dropdownId) {
      var dropdownContent = document.getElementById(dropdownId);
      dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    }

    // Confirm logout function
    function confirmLogout(event) {
      if (!confirm("Are you sure you want to log out?")) {
        event.preventDefault();
      }
    }
  </script>
</body>
</html>
