<div class="side-bar">
  <div class="side-bar__header">
    <div class="site-name">
      <a href="#">
        <!-- <img src="http://www.gravatar.com/avatar/b58f6ebea2155370e2daf60c369616b1" /> -->
        <span class="with-logo">BOLSTER</span></a>
        <span style='color:white'>Support System</span>
    </div>
  </div>
  <div class="scroll-wrap">
    <div class="scroll-content">
      <ul class="side-bar__menu">
        <?php if ($this->request->session()->read('Auth.User')):?>
        <li class="side-bar__list"><a href="<?=$this->Url->build('/groups');?>"><i class="fa fa-group icon"></i><span>Groups</span></a></li>
        <li class="side-bar__list"><a href="<?=$this->Url->build('/pages/display');?>"><i class="fa fa-tachometer icon"></i><span>Dashboard</span></a></li>
        <li class="side-bar__list"><a href="<?=$this->Url->build('/users/logout');?>"><i class="fa fa-sign-out icon"></i><span>Sign out</span></a></li>
      <?php else:?>
        <li class="side-bar__list"><a href="<?=$this->Url->build('/users/login');?>"><i class="fa fa-sign-in icon"></i><span>Sign in</span></a></li>
      <?php endif;?>
        <li class="side-bar__list"><a href="<?=$this->Url->build('/issues/add');?>"><i class="fa fa-file-text icon"></i><span>Create Issues</span></a></li>
        <li class="side-bar__list"><a href="<?=$this->Url->build('/issues/search');?>"><i class="fa fa-magic icon"></i><span>Search Issues</span></a></li>
      </ul>
    </div>
  </div>
</div>
