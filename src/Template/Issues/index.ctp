<?php $this->append('style');?>
.panel__body{
  padding:10px;
}
.dataTables_wrapper .dataTables_filter{
  float: left;
  text-align: left;
  margin-bottom:10px;
  width:200px;
}

.dataTables_filter input{
  width:500px;
}
.dataTables_wrapper .dataTables_length{
  float: none;
}

<?php $this->end();?>

<div class="docs-example">
  <div class="panel">
    <div class="panel__body">
      <dl class="data-list">
        <dt class="data-list__title">Issue ID</dt>
        <dd class="data-list__body">
          <?php echo $this->Form->input('id', ['label'=>""]);?>
        </dd>
        <dt class="data-list__title"><a id='search_button' class="btn btn--dark">Search</a></dt>
      </dl>
    </div>
  </div>
  <?php if (!$issues->isEmpty()) :
    $this->Vue->data([
      'issues'=>$issues->toArray()
    ]);
    ?>
    <div class="panel">
      <div class="panel__body">
        <table class="table datatable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Issuer</th>
              <th>Group</th>
              <th>Status</th>
              <th>Created</th>
            </tr>
          </thead>
          <tbody  v-for="issue in issues">
            <tr>
              <td><?php echo $this->Vue->html('issue.id');?></td>
              <td><?php echo $this->Vue->html('issue.issuer');?></td>
              <td><?php echo $this->Vue->html('issue.group.name');?></td>
              <td>
                <span v-if="issue.status" class="btn btn--success" style='padding: 6px 10px;'>Attend</span>
                <span v-else class="btn btn--warning" style='padding: 6px 10px;'>Pending</span>
              </td>
              <td><?php echo $this->Vue->html('issue.created');?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  <?php endif;?>
</div>


<?php
$url = $this->Url->build('/issues/index');
$this->Html->buffer("$('#search_button').on('click',function(e){
  var id = $('#id').val();
  if(id){
      window.location.href='$url/'+id
  }
})");?>
