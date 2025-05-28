<?php
// Σύνδεση με τη βάση δεδομένων
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student3885.sql";

// Δημιουργία σύνδεσης
$conn = new mysqli($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Λήψη δεδομένων από τη φόρμα
$goals = $_POST['goals'];
$assignment_file = $_POST['assignment_file'];
$deliverables = $_POST['deliverables'];
$due_date = $_POST['due_date'];

// Εισαγωγή δεδομένων στη βάση
$sql = "INSERT INTO assignments (goals, assignment_file, deliverables, due_date)
VALUES ('$goals', '$assignment_file', '$deliverables', '$due_date')";

if ($conn->query($sql) === TRUE) {
    // Ανακατεύθυνση πίσω στο homework_tutor.php μετά την αποθήκευση
    header("Location: homework_tutor.php");
    exit;
} else {
    echo "Σφάλμα κατά την αποθήκευση της εργασίας: " . $conn->error;
}

// Κλείσιμο σύνδεσης
$conn->close();
?>
