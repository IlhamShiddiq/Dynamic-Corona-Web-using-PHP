<?php
  // Cases Total
  $cases = $con->prepare("SELECT SUM(positive) AS positive, SUM(healed) AS healed, SUM(dead) AS dead FROM data_statistic ORDER BY id_statistic DESC LIMIT 1");
  $cases->execute();

  $record_statistic = $cases->fetch(PDO::FETCH_ASSOC);
  $positive = $record_statistic['positive'];
  $healed = $record_statistic['healed'];
  $dead = $record_statistic['dead'];

  // Latest Update
  $date = $con->prepare("SELECT DATE_FORMAT(date_confirmed, '%d %M %Y') as day_only, DATE_FORMAT(date_confirmed, '%W, %d %M %Y') as day, DATE_FORMAT(time_confirmed, '%H:%i') as time FROM data_statistic ORDER BY id_statistic DESC LIMIT 1");
  $date->execute();

  $record = $date->fetch(PDO::FETCH_ASSOC);
  $format_date = $record['day']." ".$record['time'];
  $date_only = $record['day_only'];
?>