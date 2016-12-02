<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programs form large-9 medium-8 columns content">
    <?= $this->Form->create($program) ?>
    <fieldset>
        <legend><?= __('Add Program') ?></legend>
        <?php
            echo $this->Form->input('meeting_id', ['options' => $meetings]);
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('content');
            echo $this->Form->input('active');
            echo $this->Form->input('evidences._ids', ['options' => $evidences]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
