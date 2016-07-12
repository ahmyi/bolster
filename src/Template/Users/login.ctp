<?= $this->Form->create() ?>
<div class="login__head">
  <h1 class="login__title"><i class="fa fa-sign-in"></i><span>Sign in to Dashboard</span></h1></div>
<div class="login__body">
  <div class="login__list"><label for="username" class="login__label">Username</label>
    <?php echo $this->Form->input('username', ['class'=>"input--full", 'label'=>'']);?>
  </div>
  <div class="login__list"><label for="password" class="login__label">Password</label>
    <?php echo $this->Form->input('password', ['class'=>"input--full", 'label'=>'']);?>

  </div>
</div>
<div class="login__foot">
  <ul class="list-btn align--center">
    <li><button class="btn btn--success">Sign in</button></li>
  </ul>
</div>
<?= $this->Form->end() ?>
