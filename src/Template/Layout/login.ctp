<?php $content = $this->fetch('content');?>
<!DOCTYPE html>
<html>
  <?php echo $this->element('head');?>
  <body class="page-login">
    <div class="login">
      <?= $this->Flash->render() ?>

      <?php echo $content;?>
    </div>
    <?php echo $this->element('foot');?>
  </body>
</html>
