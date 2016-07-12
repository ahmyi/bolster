<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Issue'), ['action' => 'edit', $issue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Issue'), ['action' => 'delete', $issue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Issues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Issue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Resolves'), ['controller' => 'Resolves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resolf'), ['controller' => 'Resolves', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="issues view large-9 medium-8 columns content">
    <h3><?= h($issue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($issue->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Issuer') ?></th>
            <td><?= h($issue->issuer) ?></td>
        </tr>
        <tr>
            <th><?= __('Group') ?></th>
            <td><?= $issue->has('group') ? $this->Html->link($issue->group->name, ['controller' => 'Groups', 'action' => 'view', $issue->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($issue->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($issue->message)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Resolves') ?></h4>
        <?php if (!empty($issue->resolves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Issue Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Remarks') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($issue->resolves as $resolves): ?>
            <tr>
                <td><?= h($resolves->id) ?></td>
                <td><?= h($resolves->issue_id) ?></td>
                <td><?= h($resolves->created) ?></td>
                <td><?= h($resolves->remarks) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Resolves', 'action' => 'view', $resolves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Resolves', 'action' => 'edit', $resolves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Resolves', 'action' => 'delete', $resolves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resolves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
