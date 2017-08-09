<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting[]|\Cake\Collection\CollectionInterface $settings
 */
?>
<div class="roww">
    <div class="col-md-12">
        <legend><?= __('Settings') ?></legend>
        <?= $this->Form->create($setting) ?>
        <div class="row">
            <div class="col-lg-3">
                <?= $this->Form->control('tittle') ?>
            </div>
        </div>
        <?= $this->Form->button(__('Save'),['class'=>'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>