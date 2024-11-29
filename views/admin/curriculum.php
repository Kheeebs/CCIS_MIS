<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curriculum</title>
    <link rel="stylesheet" href="../../assets/css/curriculum.css">
  </head>
  <body>
    <div class="dashboard-container">
      <!-- Sidebar -->
      <?php include '../../includes/sidebar.php'; ?>

      <!-- Main Content -->
      <div class="main-content">
        <header class="main-header">
          <h1>PROGRAM</h1>
        </header>

        <div class="content-area">
          <div id="program-buttons">
            <button class="program-button" onclick="showSubjects('BSIT')">
              BSIT
            </button>
            <button class="program-button" onclick="showSubjects('BSCS')">
              BSCS
            </button>
            <button class="program-button" onclick="showSubjects('BLIS')">
              BLIS
            </button>
            <button
              class="program-button add-program-button"
              onclick="addNewProgram()"
            >
              +
            </button>
            <!-- Plus Sign Button -->
          </div>

          <div class="dropdown">
            <label for="year-level">Year Level:</label>
            <select id="year-level">
              <option value="first-year">First Year</option>
              <option value="second-year">Second Year</option>
              <option value="third-year">Third Year</option>
              <option value="fourth-year">Fourth Year</option>
            </select>
          </div>

          <div class="dropdown">
            <label for="semester">Semester:</label>
            <select id="semester">
              <option value="first-semester">First Semester</option>
              <option value="second-semester">Second Semester</option>
              <option value="summer">Summer</option>
            </select>
          </div>

          <button
            onclick="showSubjects(document.querySelector('.program-button:focus').textContent)"
          >
            Show Courses
          </button>

          <div id="subjects-display" class="subjects"></div>
        </div>
      </div>
    </div>
  </body>
</html>
