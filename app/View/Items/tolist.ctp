
<?php if ($items) { ?> 
    <?php foreach($items as $itens){ ?>
        <?php echo $this->Html->link($itens['Item']['serial_number'].' / '.$itens['Item']['asset_tag'], array(
            'action' => 'edit',
            $itens['Item']['id']
        )); ?>
        </br>
    <?php }; ?>
<?php } else { ?>
    <p>Nenhum item cadastrado.</p>
<?php }; ?>
