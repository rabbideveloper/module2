<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Project</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Name: <input type="text" name="fname" >
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
    if ($_SERVER["REQUEST_METHOD"]==="POST"){
        // collect value of input field

        $name = $_REQUEST['fname'];

        if (empty($name)){
            echo "Name is empty";
        }else{
            echo $name;
        }

    }

?>