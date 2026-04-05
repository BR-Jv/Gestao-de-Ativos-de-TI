<div class="users form">
<?php echo $this->Form->create('Movement'); ?>
    <!--O user_id vai vir da session-->
   <?php 
        echo $this->Form->input('asset_id', array('label' => 'Item', 'options' =>  $assets));
        echo $this->Form->input('from_user_id', array('label' => 'Com quem estava', 'options' =>  $users));
        echo $this->Form->input('to_user_id', array('label' => 'Com quem vai ficar', 'options' =>  $users));
        echo $this->Form->input('from_location_id', array('label' => 'Onde estava', 'options' =>  $locations));
        echo $this->Form->input('to_location_id', array('label' => 'Pra onde vai', 'options' =>  $locations));
        echo $this->Form->input('movement_date',array('label' => 'Data da movimentação'));
   ?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>