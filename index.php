


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        // function mon_autoload($class_name){
        //     require'class/' .$class_name .'.php';
        // }
        // spl_autoload_register('mon_autoload');

        require'./class/Autoloader.php';
            Autoloader::register();
       
    // @include("form.php");
    // @include("text.php");
   $form = new Form($_POST);
   
     var_dump(Text::withZero(7));
   
?>

<form action="#" method="post">
<?php
 
  
echo $form->input('username');
echo $form->input('password');
echo $form->submit();


?>
</form>
</body>
</html>