<?php
if ( is_array( $field_value ) )  {
	if ( isset( $field_value[0] ) ) {
		$field_value = $field_value[0];
	}else{
		$field_value = ' ';
	}

}

if(!empty($field['config']['placeholder'])){
	$field_placeholder = 'placeholder="'.$field['config']['placeholder'].'"';
}
?><?php echo $wrapper_before; ?>
	<?php echo $field_label; ?>
	<?php echo $field_before; ?>
		<?php if($form['editable']): ?>
			<textarea  <?php echo $field_placeholder; ?> data-field="<?php echo $field_base_id; ?>" class="<?php echo $field_class; ?>" rows="<?php echo $field['config']['rows']; ?>" id="<?php echo $field_id; ?>" name="<?php echo $field_name; ?>" <?php echo $field_required; ?>><?php echo htmlentities( $field_value ); ?></textarea>
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
