<?php
echo $this->Html->bower('/jquery/dist/jquery.min.js');
echo $this->Html->bower('/adminize/js/adminize.min.js');
echo $this->Html->bower('/datatables/media/js/jquery.dataTables.min.js');
$this->Vue->writeBuffer();
$this->DataTables->writeBuffer();
$this->Html->writeBuffer();

echo $this->fetch('js');
echo $this->Html->scriptBlock($this->fetch('script'));
