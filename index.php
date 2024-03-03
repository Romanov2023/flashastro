<?php
require_once 'connect.php';

$starclusters = mysqli_query($connect, "SELECT * FROM rzs");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starclusters</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <table>
    <tr>
      <th>Наименование</th>
      <th>Созвездие</th>
      <th>Звездная величина</th>
      <th>Поверхностная яркость</th>
      <th>Показатель цвета</th>
      <th>Контрастный индекс</th>
      <th>Диапазон яркости</th>
      <th>Количество звезд</th>
      <th>Морфология</th>
      <th>Расстояние</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($starclusters)) { ?>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['id_sozvezdie']; ?></td>
        <td><?php echo $row['zv_vel']; ?></td>
        <td><?php echo $row['pov_ya']; ?></td>
        <td><?php echo $row['pok_cv']; ?></td>
        <td><?php echo $row['k_index']; ?></td>
        <td><?php echo $row['diap_yark']; ?></td>
        <td><?php echo $row['kol_zv']; ?></td>
        <td><?php echo $row['konc_zv']; ?></td>
        <td><?php echo $row['rasstoyanie']; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
