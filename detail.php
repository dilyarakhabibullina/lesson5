<?php

$count = 0;
if($_GET['name']){?>

<img width="600" src="images/<?= $_GET['name']?>">

<hr>
<?php
$count++;
}
?>
<a href="<?=$_SERVER['HTTP_REFERER']?>"><-- Back</a>
<h3><?=$count?></h3>