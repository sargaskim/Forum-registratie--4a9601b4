<!DOCTYPE html>
<html>

<head>
    <title>Registratie</title>
    <style>
        .form {
            display: flex;
            flex-direction: row;
        }
        .regristratie {
            display: flex;
            flex-direction: column;
            margin: 3px;   
        }
    </style>
</head>

<body>

    <header></header>

    <main>

        <h1>Form registratie</h1>

    </main>

    <?PHP
    
    echo "your name is ". $_POST["name"]. "<br>";
    echo "your email is ". $_POST["email"]. "<br>";
    echo "your age is ". $_POST["age"]. "<br>";

    
    ?>
    
    <footer></footer>

</body>

</html>