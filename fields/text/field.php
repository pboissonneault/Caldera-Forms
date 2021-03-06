<?php
if(!empty($field['config']['placeholder'])){
	$field_placeholder = 'placeholder="'.$field['config']['placeholder'].'"';
}

$mask = null;
if(!empty($field['config']['masked'])){
	$mask = "data-inputmask=\"'mask': '".$field['config']['mask']."'\" ";
}
$type_override = 'text';
if( !empty( $field['config']['type_override'] ) ){
	$type_override = $field['config']['type_override'];
}
?>
<?php echo $wrapper_before; ?>
	<?php echo $field_label; ?>
	<?php echo $field_before; ?>
		<?php if($form['editable']): ?>
			<input <?php echo $field_placeholder; ?> type="<?php echo esc_attr( $type_override ); ?>" <?php echo $mask; ?> data-field="<?php echo $field_base_id; ?>" class="<?php echo $field_class; ?>" id="<?php echo $field_id; ?>" name="<?php echo $field_name; ?>" value="<?php echo esc_attr( $field_value ); ?>" <?php echo $field_required; ?>>
		<?php else:
			if(empty($field_value)) {
				$field_value = ' ';
			}
			?>
			<input type="hidden" id="<?php echo $field_id; ?>" data-field="<?php echo $field_base_id; ?>" name="<?php echo $field_name; ?>" value="<?php echo htmlentities( $field_value ); ?>">
			<div class="printHelper"><?php echo $field_value; ?></div>
		<?php endif; ?>
		<?php echo $field_caption; ?>
	<?php echo $field_after; ?>
<?php echo $wrapper_after; ?>