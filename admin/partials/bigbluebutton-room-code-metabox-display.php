<label><?php echo $entry_code_label; ?>: </label>
<?php if ($existing_value != '') { ?>
	<input name="<?php echo $entry_code_name; ?>" type="text" maxlength="3" value="<?php echo $existing_value; ?>">
<?php } else { ?>
	<input name="<?php echo $entry_code_name; ?>" type="text" maxlength="3" value="<?php echo $entry_code; ?>">
<?php } ?>
<p><?php echo esc_html($entry_code_msg); ?></p>
<p><strong><?php _e('The access code must be at least 3 characters long', 'bigbluebutton'); ?></strong></p>