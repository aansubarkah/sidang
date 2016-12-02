<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $decision->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $decision->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administrations'), ['controller' => 'Administrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administration'), ['controller' => 'Administrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="decisions form large-9 medium-8 columns content">
    <?= $this->Form->create($decision) ?>
    <fieldset>
        <legend><?= __('Edit Decision') ?></legend>
        <?php
            echo $this->Form->input('meeting_id', ['options' => $meetings]);
            echo $this->Form->input('date');
            echo $this->Form->input('number');
            echo $this->Form->input('name');
            echo $this->Form->input('content');
            echo $this->Form->input('active');
            echo $this->Form->input('evidences._ids', ['options' => $evidences]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
