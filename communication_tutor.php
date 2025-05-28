<?php
// Συμπεριλάβετε το script για την αποστολή email
include('send_email.php');
// Ξεκίνησε τη συνεδρία

?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Επικοινωνία</title>
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

        form {
            display: flex;
            flex-direction: column;
            padding-left: 20px; /* Shifts the form to the right */
        }

        label, input, textarea {
            margin-bottom: 1em;
            font-size: 18px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 0.5em;
        }

        button {
            align-self: center;
            padding: 0.5em 2em;
            font-size: 18px;
            cursor: pointer;
        }

        .email-section {
            padding-left: 40px; /* Shifts the email section to the right */
        }
    </style>
</head>
<body>

    <div class="container">
        <div id="header">
            <h1>Επικοινωνία</h1>
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
                    <p>Η συγκεκριμένη ιστοσελίδα θα περιέχει δύο δυνατότητες για την αποστολή email στον καθηγητή:</p>
                    <ul>
                        <li>Μέσω web φόρμας </li>
                        <li>Με χρήση email διεύθυνσης </li>
                    </ul>

                    <h2 style="font-size: 20px;"><span style="color: green;">Αποστολή e-mail μέσω web φόρμας</span></h2>
                    <form action="communication_tutor.php" method="post">
                        <label for="sender">Αποστολέας:</label>
                        <input type="text" id="sender" name="sender" required style="margin-bottom: 30px;"><br>

                        <label for="subject">Θέμα:</label>
                        <input type="text" id="subject" name="subject" required style="margin-bottom: 30px;"><br>

                        <label for="message">Κείμενο:</label>
                        <textarea id="message" name="message" required style="margin-bottom: 0px;"></textarea><br>

                        <button type="submit">Αποστολή</button>
                    </form>

                    <h2 style="font-size: 20px;"><span style="color: green;">Αποστολή e-mail με χρήση e-mail διεύθυνσης</span></h2>
                    <div class="email-section">
                        <p>Εναλλακτικά, μπορείτε να αποστείλετε e-mail στην παρακάτω διεύθυνση ηλεκτρονικού ταχυδρομείου: <a href="mailto:tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

