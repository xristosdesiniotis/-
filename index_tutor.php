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
    </style>
</head>
<body>

    <div class="container">
        <div id="header">
            <h1>Αρχική σελίδα</h1>
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
                    <p> Καλώς ήρθατε στο μάθημα Γραμμική Άλγεβρα!</p>
                    <p> Η σελίδα αυτή έχει ως στόχο την εκμάθηση των στοιχειωδών γνώσεων Μαθηματικών και την απόκτηση νέων γνώσεων γραμμικής άλγεβρας από τους φοιτητές.</p>
                    <p> Οι δεξιότητες που θα μπορούν να αποκτήσουν οι φοιτητές μέσω του μαθήματος αφορούν τα γραμμικά συστήματα εξισώσεων, τις πράξεις με πίνακες καθώς και τα διανύσματα στον χώρο.</p>
                    <p> Η ιστοσελίδα του μαθήματος περιέχει τα εξής:</p>
                    <p> 1.Aνακοινώσεις: όπου θα αναρτούνται οι ανακοινώσεις του καθηγητή για όποια ενημέρωση θέλει να κάνει στους φοιτητές σχετικά με οποιοδήποτε θέμα.</p>
                    <p> 2.Επικοινωνία: όπου περιέχονται όλα τα στοιχεία του καθηγητή στα οποία θα μπορεί όποιος φοιτητής θέλει να επικοινωνήσει μαζί του μέσω email.</p>
                    <p> 3.Έγγραφα μαθήματος: όπου περιέχονται έγγραφα σχετικά με το μάθημα και μπορεί να κατεβάσουν οι φοιτητές.</p>
                    <p> 4.Εργασίες: όπου θα περιέχονται εκφωνήσεις εργασιών που μπορούν να κατεβάσουν οι μαθητές.</p>
                    <br>
                    <img src="image1.png" alt="εικόνα">
                </div>
            </div>
        </div>
    </div>

</body>
</html>
