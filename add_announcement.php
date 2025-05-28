<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Προσθήκη Ανακοίνωσης</title>
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Προσθήκη Νέας Ανακοίνωσης</h1>
        <form action="save_announcement.php" method="post">
            <label for="subject">Τίτλος:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="date">Ημερομηνία:</label>
            <input type="text" id="date" name="date" required>

            <label for="content">Περιεχόμενο:</label>
            <textarea id="content" name="content" rows="5" required></textarea>

            <button type="submit">Αποθήκευση</button>
        </form>
    </div>

</body>
</html>

