<?php

//name: short string;
//code: short string;
//description: long string;
//author: short string,
var_dump($song);
?>

<form action="" method="POST">
  Name:<br>
  <input type="text" name="name" value="<?php echo htmlspecialchars($song->name) ?>">
  <br>
  Code:<br>
  <input type="text" name="code" value="<?php echo htmlspecialchars($song->code) ?>">
  <br><br>
  
  Description:<br>
  <textarea type="text" name="description" rows="4" cols="50"><?php echo htmlspecialchars($song->description) ?></textarea><br><br>
  
   Author:<br>
  <input type="text" name="author" value="<?php echo htmlspecialchars($song->author) ?>">
  <br><br>
  
  <input type="submit" value="Submit">
</form> 