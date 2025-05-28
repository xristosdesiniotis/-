<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

// Έλεγχος αν έχει δοθεί το ID της ανακοίνωσης
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Προετοιμασία και εκτέλεση της SQL εντολής για διαγραφή
    $sql = "DELETE FROM announcements WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Ανακατεύθυνση στη σελίδα των ανακοινώσεων μετά τη διαγραφή
        header("Location: announcement_tutor.php?deleted=1");
        exit();
    } else {
        echo "Σφάλμα κατά τη διαγραφή της ανακοίνωσης: " . $conn->error;
    }

    // Κλείσιμο της προετοιμασμένης δήλωσης
    $stmt->close();
} else {
    echo "Το ID της ανακοίνωσης δεν βρέθηκε.";
}

// Κλείσιμο σύνδεσης
$conn->close();
?>
