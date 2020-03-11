<!DOCTYPE html>
<html>

<head>
    <title>Registratie</title>
    <style>
        .form {
            display: flex;
            flex-direction: row;
        }
        .regristratie{
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
    
    echo "your name is ". $_COOKIE["naamkoekje"]. "<br>";
    echo "your email is ". $_COOKIE["emailkoekje"]. "<br>";
    echo "your age is ". $_COOKIE["leeftijdkoekje"]. "<br>";

    
    ?>
    
    <footer></footer>

</body>

</html>