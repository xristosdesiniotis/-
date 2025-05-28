<?php
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

        .form-section {
            padding-left: 40px; /* Adjust this value to move the content more to the right */
        }

        .email-section {
            padding-left: 40px; /* Adjust this value to move the content more to the right */
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
                  <p><a href="index_student.php">Αρχική σελίδα</a></p>
                    <p><a href="announcement_student.php">Ανακοινώσεις</a></p>
                    <p><a href="communication_student.php">Επικοινωνία</a></p>
                    <p><a href="documents_student.php">Έγραφα μαθήματος</a></p>
                    <p><a href="homework_student.php">Εργασίες</a></p>
                </div>
            </div>

            <div class="main-column">
                <div>
                    <p>Η συγκεκριμένη ιστοσελίδα θα περιέχει δύο δυνατότητες για την αποστολή email στον καθηγητή:</p>
                    <ul>
                        <li>Μέσω web φόρμας</li>
                        <li>Με χρήση email διεύθυνσης</li>
                    </ul>
                    <h2 style="font-size: 20px;"><span style="color: green;">Αποστολή e-mail μέσω web φόρμας</span></h2>
                    <div class="form-section">
                        <form action="#" method="post">
                            <label for="sender">Αποστολέας:</label>
                            <input type="text" id="sender" name="sender" required style="margin-bottom: 30px;"><br>

                            <label for="subject">Θέμα:</label>
                            <input type="text" id="subject" name="subject" required style="margin-bottom: 30px;"><br>

                            <label for="message">Κείμενο:</label>
                            <textarea id="message" name="message" required style="margin-bottom: 0px;"></textarea><br>

                            <input type="submit" value="Αποστολή">
                        </form>
                    </div>

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
