<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

// Έλεγχος αν η φόρμα υποβλήθηκε
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Λήψη δεδομένων από τη φόρμα
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Διαχείριση αρχείου
    $file = $_FILES['file'];
    $uploadDirectory = 'uploads/'; // Καθορισμός του φακέλου όπου θα αποθηκευτούν τα αρχεία

    // Δημιουργία του φακέλου αν δεν υπάρχει
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Δημιουργία μοναδικού ονόματος αρχείου για αποφυγή συγκρούσεων
    $fileName = uniqid() . '_' . basename($file['name']);
    $filePath = $uploadDirectory . $fileName;

    // Μετακίνηση του αρχείου στον προορισμό
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Αποθήκευση των δεδομένων στη βάση δεδομένων χρησιμοποιώντας MySQLi
        $sql = "INSERT INTO documents (title, description, file_path) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $title, $description, $filePath);

        if ($stmt->execute()) {
            // Ανακατεύθυνση σε άλλη σελίδα μετά την επιτυχή αποθήκευση
            header("Location: documents_tutor.php?success=1");
            exit();
        } else {
            echo "Σφάλμα κατά την αποθήκευση των δεδομένων: " . $conn->error;
        }
    } else {
        echo "Υπήρξε πρόβλημα κατά τη μεταφόρτωση του αρχείου.";
    }
} else {
    echo "Η φόρμα δεν υποβλήθηκε σωστά.";
}

// Κλείσιμο σύνδεσης
$conn->close();
?>
