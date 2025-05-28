<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

// Έλεγχος αν η φόρμα υποβλήθηκε σωστά
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Έλεγχος αν όλα τα πεδία είναι συμπληρωμένα και υπάρχει το ID της ανακοίνωσης
    if (isset($_POST['id']) && isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['content'])) {
        // Λήψη δεδομένων από τη φόρμα
        $id = $_POST['id'];
        $subject = $_POST['subject'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        // Προετοιμασία της SQL εντολής για ενημέρωση
        $sql = "UPDATE announcements SET subject = ?, date = ?, content = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Δέσμευση των παραμέτρων στη δήλωση
        $stmt->bind_param("sssi", $subject, $date, $content, $id);

        // Εκτέλεση της δήλωσης
        if ($stmt->execute()) {
            // Ανακατεύθυνση στη σελίδα των ανακοινώσεων μετά την επιτυχή ενημέρωση
            header("Location: announcement_tutor.php?success=1");
            exit();
        } else {
            echo "Σφάλμα κατά την ενημέρωση της ανακοίνωσης: " . $conn->error;
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
