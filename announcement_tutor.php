<?php
// Συμπεριλάβετε το αρχείο σύνδεσης με τη βάση δεδομένων
include('database.php');

// Ανάκτηση των ανακοινώσεων από τη βάση δεδομένων
$sql = "SELECT id, date, subject, content FROM announcements ORDER BY date DESC";
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
    <title>Ανακοινώσεις</title>
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

        .announcement {
            margin-bottom: 2em;
        }

        .announcement-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .announcement-actions a {
            margin-left: 1em;
            color: #d9534f;
            text-decoration: none;
        }

        .announcement-actions a.edit {
            color: #5bc0de;
        }

        .announcement-content {
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
            <h1>Ανακοινώσεις</h1>
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
                    <!-- Κουμπί για προσθήκη νέας ανακοίνωσης -->
                    <p><a href="add_announcement.php" style="font-weight: bold; color: #007bff;">Προσθήκη νέας ανακοίνωσης</a></p>

                    <!-- Δυναμική λίστα ανακοινώσεων -->
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($announcement = $result->fetch_assoc()): ?>
                            <div class="announcement">
                                <div class="announcement-header">
                                    <h2 style="font-size: 20px;">
                                        <span style="color: green;"><?= htmlspecialchars($announcement['subject']) ?></span>
                                    </h2>
                                    <div class="announcement-actions">
                                        <a href="edit_announcement.php?id=<?= $announcement['id'] ?>" class="edit">Επεξεργασία</a>
                                        <a href="delete_announcement.php?id=<?= $announcement['id'] ?>" class="delete">Διαγραφή</a>
                                    </div>
                                </div>
                                <div class="announcement-content">
                                    <p><strong>Ημερομηνία:</strong> <?= htmlspecialchars($announcement['date']) ?></p>
									<p><strong>Θέμα:</strong> <?= htmlspecialchars($announcement['subject']) ?></p>
                                    <p><?= nl2br(htmlspecialchars($announcement['content'])) ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                    <!-- Προκαθορισμένες ανακοινώσεις (Ανακοίνωση 1 & 2) -->
                    <div class="announcement">
                        <div class="announcement-header">
                            <h2 style="font-size: 20px;">
                              
                            </h2>
                            <div class="announcement-actions">
                              
                            </div>
                        </div>
                        <div class="announcement-content">
                          
                        </div>
                    </div>
                    <div class="announcement">
                        <div class="announcement-header">
                            <h2 style="font-size: 20px;">
                                
                            </h2>
                            <div class="announcement-actions">
                               
                            </div>
                        </div>
                        <div class="announcement-content">
                           
                        </div>
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
