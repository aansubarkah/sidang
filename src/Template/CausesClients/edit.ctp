<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $causesClient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $causesClient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Causes Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causesClients form large-9 medium-8 columns content">
    <?= $this->Form->create($causesClient) ?>
    <fieldset>
        <legend><?= __('Edit Causes Client') ?></legend>
        <?php
            echo $this->Form->input('cause_id', ['options' => $causes]);
            echo $this->Form->input('client_id', ['options' => $clients]);
            echo $this->Form->input('position');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
