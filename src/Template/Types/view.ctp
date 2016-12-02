<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="types view large-9 medium-8 columns content">
    <h3><?= h($type->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($type->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($type->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($type->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($type->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $type->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Programs') ?></h4>
        <?php if (!empty($type->programs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Meeting Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->programs as $programs): ?>
            <tr>
                <td><?= h($programs->id) ?></td>
                <td><?= h($programs->meeting_id) ?></td>
                <td><?= h($programs->type_id) ?></td>
                <td><?= h($programs->content) ?></td>
                <td><?= h($programs->created) ?></td>
                <td><?= h($programs->modified) ?></td>
                <td><?= h($programs->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programs', 'action' => 'view', $programs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programs', 'action' => 'edit', $programs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programs', 'action' => 'delete', $programs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
