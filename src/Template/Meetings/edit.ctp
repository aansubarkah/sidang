<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $meeting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $meeting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="meetings form large-9 medium-8 columns content">
    <?= $this->Form->create($meeting) ?>
    <fieldset>
        <legend><?= __('Edit Meeting') ?></legend>
        <?php
            echo $this->Form->input('assembly_id', ['options' => $assemblies]);
            echo $this->Form->input('cause_id', ['options' => $causes]);
            echo $this->Form->input('date');
            echo $this->Form->input('datecancel', ['empty' => true]);
            echo $this->Form->input('causingcancel');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
