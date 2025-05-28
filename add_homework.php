<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Προσθήκη Νέας Εργασίας</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div id="header">
            <h1>Προσθήκη Νέας Εργασίας</h1>
        </div>

        <form action="save_homework.php" method="post">
            <label for="goals">Στόχοι:</label>
            <textarea id="goals" name="goals" rows="4" required></textarea>

            <label for="assignment_file">Αρχείο Εκφώνησης:</label>
            <input type="text" id="assignment_file" name="assignment_file" required>

            <label for="deliverables">Παραδοτέα:</label>
            <textarea id="deliverables" name="deliverables" rows="4" required></textarea>

            <label for="due_date">Ημερομηνία Παράδοσης:</label>
            <input type="date" id="due_date" name="due_date" required>

            <input type="submit" value="Αποθήκευση">
        </form>
    </div>

</body>
</html>
