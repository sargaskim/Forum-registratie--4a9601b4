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
        label{
            margin-bottom: 4px;
        }
    </style>
</head>

<body>

    <header></header>

    <main>

        <h1>Form registratie</h1>

        <form action="registratie_handler.php" method="get" class="form">
            <div class="regristratie">
                <label for="name">Enter your user name: </label>
                <label for="email">Enter your email: </label>
                <label for="number">Enter your age: </label>
            </div>
            <div class="regristratie">
                <input type="text" name="name" required>
                <input type="email" name="email" required>
                <input type="number" name="age" required>
            </div>
            <div class="regristratie">
                <input type="submit" value="Subscribe!" >
            </div>
        </form>

        <?php
        
        session_start();

        if (isset($_GET["name"], $_GET["email"], $_GET["age"])){
            setcookie("naamkoekje", $_GET["name"], time()+3600);
            setcookie("emailkoekje", $_GET["email"], time()+3600);
            setcookie("leeftijdkoekje", $_GET["age"], time()+3600);
        }

        ?>

    </main>
    
    <footer></footer>

</body>

</html>