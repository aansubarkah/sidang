<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Decision'), ['action' => 'edit', $decision->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Decision'), ['action' => 'delete', $decision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decision->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Decisions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Administrations'), ['controller' => 'Administrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administration'), ['controller' => 'Administrations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="decisions view large-9 medium-8 columns content">
    <h3><?= h($decision->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meeting') ?></th>
            <td><?= $decision->has('meeting') ? $this->Html->link($decision->meeting->id, ['controller' => 'Meetings', 'action' => 'view', $decision->meeting->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($decision->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($decision->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($decision->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($decision->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($decision->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($decision->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $decision->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($decision->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Administrations') ?></h4>
        <?php if (!empty($decision->administrations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Decision Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Datepbt') ?></th>
                <th scope="col"><?= __('Datebht') ?></th>
                <th scope="col"><?= __('Datephs') ?></th>
                <th scope="col"><?= __('Dateikrar') ?></th>
                <th scope="col"><?= __('Datesetor') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($decision->administrations as $administrations): ?>
            <tr>
                <td><?= h($administrations->id) ?></td>
                <td><?= h($administrations->decision_id) ?></td>
                <td><?= h($administrations->date) ?></td>
                <td><?= h($administrations->datepbt) ?></td>
                <td><?= h($administrations->datebht) ?></td>
                <td><?= h($administrations->datephs) ?></td>
                <td><?= h($administrations->dateikrar) ?></td>
                <td><?= h($administrations->datesetor) ?></td>
                <td><?= h($administrations->created) ?></td>
                <td><?= h($administrations->modified) ?></td>
                <td><?= h($administrations->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Administrations', 'action' => 'view', $administrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Administrations', 'action' => 'edit', $administrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Administrations', 'action' => 'delete', $administrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Evidences') ?></h4>
        <?php if (!empty($decision->evidences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($decision->evidences as $evidences): ?>
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
