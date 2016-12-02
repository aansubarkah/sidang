<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evidences Decision'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesDecisions index large-9 medium-8 columns content">
    <h3><?= __('Evidences Decisions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evidence_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decision_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evidencesDecisions as $evidencesDecision): ?>
            <tr>
                <td><?= $this->Number->format($evidencesDecision->id) ?></td>
                <td><?= $evidencesDecision->has('evidence') ? $this->Html->link($evidencesDecision->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesDecision->evidence->id]) : '' ?></td>
                <td><?= $evidencesDecision->has('decision') ? $this->Html->link($evidencesDecision->decision->name, ['controller' => 'Decisions', 'action' => 'view', $evidencesDecision->decision->id]) : '' ?></td>
                <td><?= h($evidencesDecision->created) ?></td>
                <td><?= h($evidencesDecision->modified) ?></td>
                <td><?= h($evidencesDecision->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evidencesDecision->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evidencesDecision->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evidencesDecision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesDecision->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
