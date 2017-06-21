<div class="container" style="padding-top: 115px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($userminicurso) ?>
    <fieldset>
        <legend><?= __('Add Userminicurso') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
