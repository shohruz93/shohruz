<?php require_once "Alif.php"; ?>
<html>
<head>
    <title> Welcome Alif </title>
</head>
<body>

    <?php
    $object = new Alif();
    if (isset($_POST['saveFile'],$_POST['fileName'],$_POST['amal'])){
        $fileName = htmlspecialchars($_POST['fileName']);
        $amal = htmlspecialchars($_POST['amal']);
        $object->amaliyat($fileName,$amal);
    }
    ?>

 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
     <select name="fileName">
         <option value="shohruz">shohruz</option>
     </select><br>
    <input type="radio" name="amal" value="+"> +
    <input type="radio" name="amal" value="-"> -
    <input type="radio" name="amal" value="*"> *
    <input type="radio" name="amal" value="/"> /
    <br>
    <input type="submit" name="saveFile" value="Send">
 </form>
</body>
</html>
