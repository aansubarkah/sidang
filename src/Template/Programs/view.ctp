<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="programs view large-9 medium-8 columns content">
    <h3><?= h($program->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meeting') ?></th>
            <td><?= $program->has('meeting') ? $this->Html->link($program->meeting->id, ['controller' => 'Meetings', 'action' => 'view', $program->meeting->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $program->has('type') ? $this->Html->link($program->type->name, ['controller' => 'Types', 'action' => 'view', $program->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($program->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($program->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($program->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $program->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($program->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Evidences') ?></h4>
        <?php if (!empty($program->evidences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($program->evidences as $evidences): ?>
            <tr>
                <td><?= h($evidences->id) ?></td>
                <td><?= h($evidences->name) ?></td>
                <td><?= h($evidences->created) ?></td>
                <td><?= h($evidences->modified) ?></td>
                <td><?= h($evidences->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evidences', 'action' => 'view', $evidences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evidences', 'action' => 'edit', $evidences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evidences', 'action' => 'delete', $evidences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
