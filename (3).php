<?php 
    if(isset($_POST['submit']))
    {
        $location = $_POST["location"];
        header("Location:$location");
        exit();
    }
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <p>Choose a site to visit :</p>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <select name="location">
            <option value="http://w3c.org">
                World Wise Web Consortium
            </option>
            <option value="http://google.com">
                Google Search Page
            </option>
        </select>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>