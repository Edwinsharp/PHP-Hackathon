<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
<?php foreach($songs as $value) :?>

<li>
<?php echo $value->name ?>
<?php echo '<a href="?page=insertsong&id='.$value->id.'">edit</a>' ?> 
<?php echo '<a href="?page=deletesong&id='.$value->id.'">delete</a>' ?> 
</li>

<?php endforeach ?>
</ul>
    
</body>
</html>