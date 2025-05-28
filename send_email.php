<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

session_start();
 
// Έλεγχος αν η φόρμα υποβλήθηκε και ο χρήστης είναι συνδεδεμένος
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SESSION['role'] == 'tutor') {
    $sender = $_SESSION['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Ανάκτηση των email, firstname και lastname των tutors από τη βάση δεδομένων
    $sql = "SELECT email, firstname, lastname FROM users WHERE role = 'tutor'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Διαμόρφωση των email παραληπτών και συγκέντρωση των ονομάτων
        $recipients = [];
        $names = [];
        while ($row = $result->fetch_assoc()) {
            $recipients[] = $row['email'];
            $names[] = $row['firstname'] . " " . $row['lastname'];
        }

        // Προετοιμασία του email
        $to = implode(",", $recipients);
        $headers = "From: " . $sender;

        // Αποστολή του email
        if (mail($to, $subject, $message, $headers)) {
            // Δημιουργία του μηνύματος επιτυχίας με τα ονόματα των tutors
            $successMessage = "Το email στάλθηκε επιτυχώς στους: " . implode(", ", $names) . ".";
        } else {
            $errorMessage = "Παρουσιάστηκε πρόβλημα κατά την αποστολή του email.";
        }
    } else {
        $errorMessage = "Δεν βρέθηκαν χρήστες με ρόλο tutor.";
    }
}
?>
