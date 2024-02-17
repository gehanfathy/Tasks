

    <?php

    $dsn = 'mysql:host=localhost;dbname=window';

    $user = 'squer';

    $pass = '';

    $options = array(

        pdo::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

    );

    try {

        $db = new PDO($dsn, $user, $pass, $options);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $q = "INSERT INTO items (name) VALUES ('window3');";

        $db->exec($q);

    }

    catch(PDOException $e) {

        echo 'the connection Failed' . $e->getMessage();

    }

    ?>