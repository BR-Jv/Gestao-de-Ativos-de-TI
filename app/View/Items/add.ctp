<div class="users form">
    <?php echo $this->Form->create('Item'); ?>
        <legend><?php echo __('Cadastrar Item'); ?></legend>  
        <?php 
            //TODO - Deve ter um campo relacionando a um usuário / Funcionário - contempla o RF-01.4 
            echo $this->Form->input('asset_type_id', array('label' => 'Categorias', 'options' =>  $categories));
            echo $this->Form->input('location_id', array('label' => 'Departamentos', 'options' =>  $locations));
            echo $this->Form->input('serial_number', array('type' => 'text','label' => 'Serial Number'));
            echo $this->Form->input('asset_tag', array('type' => 'text', 'label' => 'Tag'));
            echo $this->Form->input('brand', array('type' => 'text', 'label' => 'Brand'));
            echo $this->Form->input('model', array('type' => 'text', 'label' => 'Modelo'));
            echo $this->Form->input('status',  array('label' => 'Status', 'options' => array('disponivel' => 'Disponível' , 'em_uso' => 'Em uso' , 'manutencao' => 'Manutenção' , 'retirado' => 'Retirado', 'perdido'=> 'Perdido')));
            echo $this->Form->input('purchase_date', array('label' => 'Data da compra'));
            echo $this->Form->input('notes');
        ?>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>