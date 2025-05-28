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

// Λήψη όλων των εργασιών από τη βάση δεδομένων ταξινομημένες κατά ημερομηνία εισαγωγής
$sql = "SELECT * FROM assignments ORDER BY id DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Εργασίες</title>
    <style>
        /* Στυλ */
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

        .assignment-content {
            padding-left: 40px; /* Adjust this value to move the content more to the right */
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
            <h1>Εργασίες</h1>
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
                    <!-- Κουμπί για προσθήκη νέας εργασίας -->
                    <p><a href="add_homework.php" style="font-weight: bold; color: #007bff;">Προσθήκη νέας εργασίας</a></p>
                      
                    <!-- Εργασία 1 -->
                    <h2 style="font-size: 20px;"><span style="color: green;">Εργασία 1</span></h2>
                    <div class="assignment-content">
                        <p>Στόχοι: Οι στόχοι της εργασίας είναι</p>
                        <p>1. Κατανόηση των βασικών εννοιών της γραμμικής άλγεβρας</p>
                        <p>2. Επίλυση Γραμμικών Συστημάτων</p>
                        <p>3. Κριτική Σκέψη και Ανάλυση</p>
                        <p>Εκφώνηση:</p>
                        <p>Κατεβάστε την εκφώνηση της εργασίας από</p>
                        <a href="path/to/ergasia1.doc" download="ergasia1.doc">εδώ</a>
                        <p>Παραδοτέα:</p>
                        <p>1. Γραπτή αναφορά σε word</p>
                        <p>2. Παρουσίαση σε powerpoint</p>
                        <p><span style="color: red;">Ημερομηνία παράδοσης:</span> 12/5/2009</p>
                    </div>

                    <!-- Εργασία 2 -->
                    <h2 style="font-size: 20px;"><span style="color: green;">Εργασία 2</span></h2>
                    <div class="assignment-content">
                        <p>Στόχοι: Οι στόχοι της εργασίας είναι</p>
                        <p>1. Κατανόηση αφηρημένων εννοιών</p>
                        <p>2. Χρήση εργαλείων υπολογιστικής άλγεβρας</p>
                        <p>3. Κατανόηση και εφαρμογή της στατιστικής</p>
                        <p>Κατεβάστε την εκφώνηση της εργασίας από</p>
                        <a href="path/to/ergasia2.doc" download="ergasia2.doc">εδώ</a>
                        <p>Παραδοτέα:</p>
                        <p>1. Γραπτή αναφορά σε word</p>
                        <p>2. Παρουσίαση σε powerpoint</p>
                        <p><span style="color: red;">Ημερομηνία παράδοσης:</span> 15/5/2009</p>
                    </div>

                    <!-- Εμφάνιση των εργασιών από τη βάση δεδομένων -->
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h2 style=\"font-size: 20px;\"><span style=\"color: green;\">Εργασία " . $row['id'] . "</span></h2>";
                            echo "<div class=\"assignment-content\">";
                            echo "<p>Στόχοι: " . $row['goals'] . "</p>";
                            echo "<p>Κατεβάστε την εκφώνηση της εργασίας από <a href=\"" . $row['assignment_file'] . "\" download>εδώ</a></p>";
                            echo "<p>Παραδοτέα: " . $row['deliverables'] . "</p>";
                            echo "<p><span style=\"color: red;\">Ημερομηνία παράδοσης:</span> " . $row['due_date'] . "</p>";
                            echo "</div>";
                        }
                    } 
                    ?>
                    
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

