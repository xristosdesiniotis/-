<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

// Έλεγχος αν η φόρμα υποβλήθηκε σωστά
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Έλεγχος αν όλα τα πεδία είναι συμπληρωμένα
    if (isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['content'])) {
        // Λήψη δεδομένων από τη φόρμα
        $subject = $_POST['subject'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        // Προετοιμασία της SQL εντολής
        $sql = "INSERT INTO announcements (subject, date, content) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Δέσμευση των παραμέτρων στη δήλωση
        $stmt->bind_param("sss", $subject, $date, $content);

        // Εκτέλεση της δήλωσης
        if ($stmt->execute()) {
            // Ανακατεύθυνση στη σελίδα των ανακοινώσεων μετά την επιτυχή αποθήκευση
            header("Location: announcement_tutor.php?success=1");
            exit();
        } else {
            echo "Σφάλμα κατά την αποθήκευση της ανακοίνωσης: " . $conn->error;
        }

        // Κλείσιμο της προετοιμασμένης δήλωσης
        $stmt->close();
    } else {
        echo "Όλα τα πεδία είναι υποχρεωτικά.";
    }
} else {
    echo "Η φόρμα δεν υποβλήθηκε σωστά.";
}

// Κλείσιμο σύνδεσης
$conn->close();
?>
