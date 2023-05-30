<?php
session_start();
include("teacher_header.php");

?>

<script>
    // Check if the user has the session variable set to 'Operating System'
if ("<?php echo $_SESSION['selectedSubject']; ?>" === "Operating System") {
  // Create a dynamic anchor element
  var link = document.createElement("a");
  link.href = "form_data.csv"; // Replace with the actual file path
  link.download = "form_data.csv"; // Replace with the desired file name

  // Trigger a click event on the anchor element
  link.click();
} else {
  console.log("You are not authorized to download this file.");
}

</script>
