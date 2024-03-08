<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <?php
    $dsn="mysql:host=localhost;dbname=shop";
    $usename="root";
    $password ="";
    $option= {
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    };
    try {
        $conn= new PDO($dsn, $username, $password,$option);
    } catch (PDOException $e) {
       echo "connection failed". $e->getMessage();
    }

</body>
</html>