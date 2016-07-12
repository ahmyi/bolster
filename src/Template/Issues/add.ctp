<?= $this->Form->create($issue) ?>

<div class="docs-example" style='width:60%'>
  <div class="panel">
    <div class="panel__head">
      <h2 class="panel__title">Create Issue</h2>
    </div>
    <div class="panel__body">
      <dl class="data-list">
        <dt class="data-list__title">Email</dt>
        <dd class="data-list__body">
          <?php echo $this->Form->input('issuer', ['label'=>"", "class"=>"input--full"]);?>
        </dd>
      </dl>

      <dl class="data-list">
        <dt class="data-list__title">Issue</dt>
        <dd class="data-list__body">
          <div class='select-styled select--large ' style='width:100%'>
          <?php echo $this->Form->input('group_id', ['options' => $groups, 'label'=>""]);?>
          </div>
      </dl>
      <dl class="data-list">
        <dt class="data-list__title">Issue</dt>
        <dd class="data-list__body">  <?php

              echo $this->Form->input('message', ['label'=>"",  "class"=>"input--full"]);
              ?>
      </dl>
      <dl class="data-list">
        <ul class="list-btn align--center" style='margin-top: 10px;margin-bottom: 10px;'>
          <li><button  class="btn btn--success">Submit</button></li>
        </ul>

      </dl>
    </div>
  </div>
</div>
<?= $this->Form->end() ?>
