<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php 
        srand((double)microtime() * 1000000);
        $num = rand(1, 4);
        
        switch($num)
        {
            case 1: $image_file = "/images/faa.jpg";
                break;
            case 2: $image_file = "/images/hajun.jpg";
                break;
            case 3: $image_file = "/images/scarletKing.jpg";
                break;  
            case 4: $image_file = "/images/scp-3812.jpg";
                break;
        }
        echo "Random Image : <br><img src=$image_file />";
    ?>
</body>
</html>