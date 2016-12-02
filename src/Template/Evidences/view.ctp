<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidence'), ['action' => 'edit', $evidence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidence'), ['action' => 'delete', $evidence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidences view large-9 medium-8 columns content">
    <h3><?= h($evidence->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($evidence->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidence->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evidence->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evidence->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $evidence->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Decisions') ?></h4>
        <?php if (!empty($evidence->decisions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Meeting Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($evidence->decisions as $decisions): ?>
            <tr>
                <td><?= h($decisions->id) ?></td>
                <td><?= h($decisions->meeting_id) ?></td>
                <td><?= h($decisions->date) ?></td>
                <td><?= h($decisions->number) ?></td>
                <td><?= h($decisions->name) ?></td>
                <td><?= h($decisions->content) ?></td>
                <td><?= h($decisions->created) ?></td>
                <td><?= h($decisions->modified) ?></td>
                <td><?= h($decisions->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Decisions', 'action' => 'view', $decisions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Decisions', 'action' => 'edit', $decisions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Decisions', 'action' => 'delete', $decisions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decisions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Programs') ?></h4>
        <?php if (!empty($evidence->programs)): ?>
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
            <?php foreach ($evidence->programs as $programs): ?>
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
