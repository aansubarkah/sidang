<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->input('number');
            echo $this->Form->input('fullname');
            echo $this->Form->input('active');
            echo $this->Form->input('causes._ids', ['options' => $causes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
