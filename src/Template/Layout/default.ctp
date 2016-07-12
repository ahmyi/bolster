<?php
$content = $this->fetch('content');
?>
<!DOCTYPE html>
<html>
  <?php echo $this->element('head');?>

  <body>
    <?php echo $this->element('headbar');?>
    <?php echo $this->element('sidebar');?>
    <div class="main-contents">
      <div class="main-contents__body">
        <?= $this->Flash->render() ?>

        <?php echo $this->cell("Breadcrumbs");?>
        <h1 class="page-header"><i class="fa fa-<?php echo (@$icon_for_layout)?$icon_for_layout:'star'?>"></i>
          <span><?php echo (@$title_for_layout)?$title_for_layout:"";?></span>
        </h1>
        <?=$content;?>
      </div>
    </div>
    <?php echo $this->element('foot');?>
  </body>

</html>
