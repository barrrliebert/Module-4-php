<?php 
if (isset($_POST['submit'])) {
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " Years Old.";
    exit();
}
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
    Name: <input type="text" name="name" />
    Age:   <input type="text" name="age" />
    <input type="submit" name="submit" />
</form>
</body>
</html>