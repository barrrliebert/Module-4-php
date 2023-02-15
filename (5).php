<?php 
if (isset($_GET['submit'])) {
    echo "Welcome ". $_GET['name']. "<br />";
    echo "You Are ". $_GET['age']. " Years Old.";
    exit();
}
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" />
        Age:   <input type="text" name="age" />
        <input type="submit" name="submit" />
</form>
</body>
</html>