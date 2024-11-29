<nav class="sidebar">
  <div class="logos">
    <img src="../../assets/images/CCIS.png" alt="CCIS Logo" class="sidebar-logo">
    <img src="../../assets/images/CJCLOGO.png" alt="College Logo" class="sidebar-logo">
  </div>
  <ul class="sidebar-menu">
    <li><a href="../admin/Dashboard.php" class="menu-item">Dashboard</a></li>
    <li><a href="../admin/curriculum.php" class="menu-item">Curriculum</a></li>

    <!-- Users Dropdown Menu -->
    <li class="dropdown">
      <a href="#" class="menu-item" onclick="toggleDropdown('usersDropdown', event);" aria-expanded="false">
        Users <span class="dropdown-arrow">&#9662;</span>
      </a>
      <ul id="usersDropdown" class="dropdown-content">
        <li><a href="../admin/AddUser.php">Add User</a></li>
        <li><a href="../pages/AllTeachers.php">Faculty</a></li>
        <li><a href="../pages/AllStudents.php">Student</a></li>
      </ul>
    </li>

    <li><a href="../admin/Subjects.php" class="menu-item">Subjects</a></li>
    <li><a href="../pages/Profile.php" class="menu-item">Profile</a></li>
  </ul>

  <div class="logout-section">
    <a href="login.php" class="logout-button" onclick="confirmLogout(event)">Logout</a>
  </div>
</nav>
