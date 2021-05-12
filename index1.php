<?php
include 'create.php';

include 'phoneFormat.php';

$sql = $pdo->prepare("SELECT * FROM `contacts`");
$sql->execute();
$result = $sql->fetchAll();

?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/style.css">
<style>
.contactNametext{
    font-size:15px;
}
.contactNametextP{
    font-size:12px;
    
}

</style>

</head>
<body>

<div class="addContact">
    <div class="addContactText">

        <h2 class="addContactH1">Дабавить контакт</h2>
  
    </div>
    <div class="container">

    <div class="formInput">
    <form method="post" action="">
<input type="text" id="name" required  name="name" placeholder="Имя" require>
<input type="text" id="phone" required  name="phone" placeholder="Телефон">
<!-- <button type="submit" class="submitButton">Дабавить</button> -->
<input type="submit" class="submitButton" name="submit">
</form> 
</div>

</div>
</div>

<div class="ContactList">
    <div class="ContactNames">
        <h3 class="addContactH2">Список контактов</h3>
           </div>

           <?php foreach ($result as $value) { ?>
         <div class="Menu">
       
         <p class="contactNametext"><?=$value['name'] ?> <a style="text-decoration:none;font-size:13px;color:black" href="delete.php?id=<?php echo $value["id"]; ?>">x</a>
           </p>
         <p class="contactNametextP"><?= formatPhoneNumber($value['phone'] )?></p>
        
         </div>
         <?php }?>

</div>



</body>
