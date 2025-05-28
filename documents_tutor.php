<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

// Ανάκτηση των εγγράφων από τη βάση δεδομένων και ταξινόμηση κατά ID σε φθίνουσα σειρά
$sql = "SELECT id, title, description, file_path FROM documents ORDER BY id DESC";
$result = $conn->query($sql);

// Έλεγχος για σφάλματα στην εκτέλεση της SQL
if (!$result) {
    die("Σφάλμα στη βάση δεδομένων: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Έγραφα Μαθήματος</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            font-size: 18px;
        }

        .container {
            max-width: 75%;
            margin: auto;
            padding: 1em;
            position: relative; /* Προσθήκη για να δουλέψει το absolute */
        }

        #header {
            text-align: center;
            margin-bottom: 2em;
            border-bottom: 2px solid #ccc;
            padding-bottom: 0.5em;
        }

        #content {
            display: flex;
            gap: 2%;
        }

        .column {
            flex: 1;
            border-right: 2px solid #ccc;
            padding-right: 10px;
        }

        .main-column {
            flex: 3;
            padding-left: 10px;
            position: relative;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 1em;
            margin-left: 40px;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 20px;
        }

        a:hover {
            color: #007bff;
        }

        p {
            margin: 1em 0;
        }

        .document-content {
            padding-left: 40px;
        }

        #top-button {
            position: absolute;
            bottom: -50px; /* Τοποθέτηση πιο κάτω από το κάτω μέρος της κύριας στήλης */
            left: 70%; /* Τοποθέτηση λίγο δεξιά από το κέντρο */
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
        }

        #top-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div id="header">
            <h1>Έγραφα Μαθήματος</h1>
        </div>

        <div id="content">
            <div class="column">
                <div>
                    <p><a href="index_tutor.php">Αρχική σελίδα</a></p>
                    <p><a href="announcement_tutor.php">Ανακοινώσεις</a></p>
                    <p><a href="communication_tutor.php">Επικοινωνία</a></p>
                    <p><a href="documents_tutor.php">Έγραφα μαθήματος</a></p>
                    <p><a href="homework_tutor.php">Εργασίες</a></p>
                </div>
            </div>

            <div class="main-column">
                <div>
                    <!-- Κουμπί για προσθήκη νέου εγγράφου -->
                    <p><a href="add_document.php" style="font-weight: bold; color: #007bff;">Προσθήκη νέου εγγράφου</a></p>

                    <!-- Δυναμική λίστα εγγράφων -->
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($document = $result->fetch_assoc()): ?>
                            <div class="document">
                                <h2 style="font-size: 20px;">
                                    <span style="color: green;"><?= htmlspecialchars($document['title']) ?></span>
                                </h2>
                                <div class="document-content">
                                    <p><?= nl2br(htmlspecialchars($document['description'])) ?></p>
                                    <a href="<?= htmlspecialchars($document['file_path']) ?>" download="<?= htmlspecialchars($document['title']) ?>">Download</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                    <!-- Προκαθορισμένα έγγραφα -->
                    <h2 style="font-size: 20px;"><span style="color: green;">Πρώτη ενότητα</span></h2>
                    <div class="document-content">
                        <p>Περιγραφή: Η πρώτη ενότητα είναι η μελέτη πινάκων, δηλ. Θα μελετήσουμε την βασικότερη έννοια της γραμμικής άλγεβρας η οποία αποτελεί και μια από τις πιο βασικές δομές δεδομένων στην πληροφορική. Η πρώτη ενότητα περιέχει τις βασικές πράξεις σε πίνακες και επίλυση γραμμικών συστημάτων (μέθοδος Gauss, ορίζουσες, αντίστροφος πίνακας)</p>
                        <a href="path/to/your/file1.doc" download="course_1.pdf">Download</a>
                    </div>

                    <h2 style="font-size: 20px;"><span style="color: green;">Δεύτερη ενότητα</span></h2>
                    <div class="document-content">
                        <p>Περιγραφή: H δεύτερη ενότητα αφορά τους διανυσματικούς χώρους. Αυτή η πολύ βασική έννοια μας επιτρέπει να καταλάβουμε βαθύτερα τις τεχνικές που μάθαμε στην προηγούμενη ενότητα. Είναι λίγο θεωρητική η ανάπτυξη αυτής της ενότητας.</p>
                        <a href="path/to/your/file2.doc" download="file2.doc">Download</a>
                    </div>

                    <!-- Το κουμπί "Top" -->
                    <a href="#top" id="top-button">Top</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
// Κλείσιμο σύνδεσης
$conn->close();
?>
