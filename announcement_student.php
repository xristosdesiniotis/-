
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Αρχική σελίδα</title>
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
            position: relative; /* Προσθήκη relative για να δουλέψει το absolute */
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

        .announcement-content {
            padding-left: 40px;
        }

        #top-button {
            position: absolute;
            bottom: 80px; /* Απόσταση από το κάτω μέρος της κύριας στήλης */
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
                    <p><a href="index_student.php">Αρχική σελίδα</a></p>
                    <p><a href="announcement_student.php">Ανακοινώσεις</a></p>
                    <p><a href="communication_student.php">Επικοινωνία</a></p>
                    <p><a href="documents_student.php">Έγραφα μαθήματος</a></p>
                    <p><a href="homework_student.php">Εργασίες</a></p>
                </div>
            </div>

            <div class="main-column">
                <div>
                    <!-- Εδώ προσθέστε τις ανακοινώσεις σας -->
                    <div class="announcement">
                        <h2 style="font-size: 20px;"><span style="color: green;">Ανακοίνωση 1</span></h2>
                        <div class="announcement-content">
                            <p><strong>Ημερομηνία:</strong> 12/12/2008</p>
                            <p><strong>Θέμα:</strong> Έναρξη μαθημάτων<br></p>
                            <p> Τα μαθήματα αρχίζουν τη Δευτέρα 17/12/2008</p>
                        </div>
                    </div>
                    <div class="announcement">
                        <h2 style="font-size: 20px;"><span style="color: green;">Ανακοίνωση 2</span></h2>
                        <div class="announcement-content">
                            <p><strong>Ημερομηνία:</strong> 15/12/2008</p>
                            <p><strong>Θέμα:</strong> Ανάρτηση εργασίας<br></p>
                            <p> Η 1η εργασία έχει ανακοινωθεί στην ιστοσελίδα <a href="homework.php">«Εργασίες»</a> Τα μαθήματα αρχίζουν τη Δευτέρα 17/12/2008</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <!-- Το κουμπί "Top" -->
    <a href="#top" id="top-button">Top</a>

</body>
</html>



