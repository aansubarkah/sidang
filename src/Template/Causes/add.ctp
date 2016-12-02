<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causes form large-9 medium-8 columns content">
    <?= $this->Form->create($cause) ?>
    <fieldset>
        <legend><?= __('Add Cause') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('number');
            echo $this->Form->input('dateregister', ['empty' => true]);
            echo $this->Form->input('datepmh', ['empty' => true]);
            echo $this->Form->input('datephs', ['empty' => true]);
            echo $this->Form->input('dateppp', ['empty' => true]);
            echo $this->Form->input('active');
            echo $this->Form->input('assemblies._ids', ['options' => $assemblies]);
            echo $this->Form->input('clients._ids', ['options' => $clients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
