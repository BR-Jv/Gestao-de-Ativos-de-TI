<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php 
            echo $this->Form->input('name', array('type' => 'text','label' => 'Nome'));
            echo $this->Form->input('email');
            echo $this->Form->input('login');
            echo $this->Form->input('password', array('type' => 'password', 'label' => 'Senha'));
            echo $this->Form->input('department', array('type' => 'text', 'label' => 'Departamento'));
            echo $this->Form->input('role', array('type' => 'select', 'label' => 'Perfil', 'options' => array('admin' => 'admin', 'gestor' => 'gestor')));
            echo $this->Form->input('status');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>