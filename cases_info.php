<?php
  // Cases Total
  $cases = $con->prepare("SELECT SUM(positive) AS positive, SUM(healed) AS healed, SUM(dead) AS dead FROM data_statistic ORDER BY id_statistic DESC LIMIT 1");
  $cases->execute();

  $record_statistic = $cases->fetch(PDO::FETCH_ASSOC);
  $positive = $record_statistic['positive'];
  $healed = $record_statistic['healed'];
  $dead = $record_statistic['dead'];

  // Latest Update
  $date = $con->prepare("SELECT DATE_FORMAT(date_confirmed, '%W, %d %M %Y %H:%i') as day FROM data_statistic ORDER BY id_statistic DESC LIMIT 1");
  $date->execute();

  $record = $date->fetch(PDO::FETCH_ASSOC);
  $format_date = $record['day'];
?>