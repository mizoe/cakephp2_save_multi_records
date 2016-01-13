<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	var $i = 1;
	$('#add_address').click(function(e) {
		var inputAddress = '<div class="input text required"><label for="Address' + $i + 'Address">Address</label>' +
			'<input name="data[Address][' + $i + '][address]" maxlength="255" type="text" id="Address' + $i + 'Address" required="required"/></div>'
		$('#add_address').before(inputAddress);
		$i++;
	});
});
</script>
<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer with Address'); ?></legend>
		<?php
		echo $this->Form->input('name');
		/*
		参考： http://book.cakephp.org/2.0/ja/core-libraries/helpers/form.html

		同じ項目名で複数の項目を指定したい場合、すなわち一度の saveAll() で配列として値を保存したい場合は以下の様な書式を使います:
		echo $this->Form->input('Modelname.0.fieldname');
		echo $this->Form->input('Modelname.1.fieldname');
		*/
		echo $this->Form->input('Address.0.address');
		?>
		<div class="submit" id="add_address"><input type="button" value="住所追加"/></div>
	</fieldset>
<?php echo $this->Form->end(__('実行')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('顧客一覧'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('住所一覧'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しい住所'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
