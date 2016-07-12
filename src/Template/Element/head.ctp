<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  <?php echo $this->Html->bower('/fontawesome/css/font-awesome.min.css');?>
  <?php echo $this->Html->bower('/adminize/css/adminize.min.css');?>
  <?php echo $this->Html->bower('/datatables/media/css/jquery.dataTables.min.css');?>
  <?php echo $this->fetch('css');?>
  <?php
  if ($style = $this->fetch('style')) {
      echo "<style>";
      echo $style;
      echo "</style>";
  }

  ?>
  <title>Bolster : <?php echo (@$title_for_layout)?$title_for_layout:"";?></title>
</head>
