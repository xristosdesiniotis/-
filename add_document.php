<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Προσθήκη Νέου Εγγράφου</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f0f0f0;
            font-size: 18px;
        }

        .container {
            max-width: 75%;
            margin: auto;
            padding: 1em;
        }

        h1 {
            text-align: center;
            margin-bottom: 2em;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label, input, textarea {
            margin-bottom: 1em;
            font-size: 18px;
        }

        input[type="text"], input[type="file"], textarea {
            width: 100%;
            padding: 0.5em;
        }

        button {
            align-self: center;
            padding: 0.5em 2em;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Προσθήκη Νέου Εγγράφου</h1>
        <form action="save_document.php" method="post" enctype="multipart/form-data">
            <label for="title">Τίτλος:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Περιγραφή:</label>
            <textarea id="description" name="description" rows="5" required></textarea>

            <label for="file">Επιλογή Αρχείου:</label>
            <input type="file" id="file" name="file" required>

            <button type="submit">Αποθήκευση</button>
        </form>
    </div>

</body>
</html>
