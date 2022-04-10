<style>
    tr, td, th {
        text-align: center;
    }
</style>

<?php
include "config.php";

$sql = "SELECT * FROM images";
$res = mysqli_query($connect, $sql);
?>

<table border = "1px solid" text-align = "center">
    <tr>
        <th>Картинка</th>
        <th>Название картинки</th>
        <th>Размер картинки</th>
        <th>Подробности</th>
    </tr>

<?php
while ($data = mysqli_fetch_assoc($res)){?>
<tr>
  <td>
      <a href="detail.php?name=<?= $data['name']?>">
  <img width = "50px" src="<?= $data['path']?>" alt="">
</a>
</td>
  <td>
  <?= $data['name']?>
</td>
<td>
  <?= $data['size']?>
</td>
<td>
 <a href="detail.php?name=<?= $data['name']?>">
     <button>Нажми, чтобы рассмотреть картинку</button>
 </a>
</td>
<td>
  <?= $count?>
</td>
</tr>
<?php
}
?>