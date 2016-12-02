<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Assemblies Causes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assembliesCauses form large-9 medium-8 columns content">
    <?= $this->Form->create($assembliesCause) ?>
    <fieldset>
        <legend><?= __('Add Assemblies Cause') ?></legend>
        <?php
            echo $this->Form->input('assembly_id', ['options' => $assemblies]);
            echo $this->Form->input('cause_id', ['options' => $causes]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
