<html>
    <body>

        <?php
            $name = htmlspecialchars($_POST['name']);
            $surname = htmlspecialchars($_POST['surname']);
            $email = htmlspecialchars($_POST['email']);
            $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
            $city = htmlspecialchars($_POST['city']);
            $msg = htmlspecialchars($_POST['msg']);

            echo $name , "<br>";
            echo $surname;echo"<br>";
            echo $email;echo"<br>";
            echo $cinsiyet;echo"<br>";
            echo $city;echo"<br>";
            echo $msg;echo"<br>";

            ?>
    </body>
</html>
