// Toggle dropdown visibility
function toggleDropdown(dropdownId, event) {
  event.preventDefault(); // Prevent the default link behavior

  // Get the dropdown element by its id
  const dropdown = document.getElementById(dropdownId);

  // Toggle the dropdown's visibility
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
}

// Confirm logout action
function confirmLogout(event) {
  if (!confirm("Are you sure you want to log out?")) {
    event.preventDefault();
  }
}
