<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        form {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="form.php" method="post">

        <input
            type="text"
            name="firstname"
            id="firstname"
            placeholder="firstname"
            pattern="[A-Za-z]+"
            required
        >

        <input
            type="text"
            name="lastname"
            id="lastname"
            placeholder="lastname"
            pattern="[A-Za-z]+"
            required
        >

        <input
            type="password"
            name="password"
            id="password"
            placeholder="password"
            minlength="5"
            required
        >

        <button type="submit">Submit</button>

    </form>
</body>
</html>
