<fieldset class="adminform">
	<legend><?php echo JText::_( 'Server Settings' ); ?></legend>
	<table class="admintable" cellspacing="1">

		<tbody>
			<tr>
				<td valign="top" class="key">
					<span class="editlinktip">
					<?php
					$tip = 'TIPTMPFOLDER';
					echo mosToolTip( $tip, '', 280, 'tooltip.png', 'Path to Temp-folder', '', 0 );
					?>
					</span>
				</td>
				<td>
					<input class="text_area" type="text" size="50" name="tmp_path" value="<?php echo $row->tmp_path; ?>" />
				</td>
			</tr>
			<tr>
				<td class="key">
					<span class="editlinktip">
					<?php
					$tip = 'Compress buffered output if supported';
					echo mosToolTip( $tip, '', 280, 'tooltip.png', 'GZIP Page Compression', '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['gzip']; ?>
				</td>
			</tr>
			<tr>
				<td class="key">
					<?php echo JText::_( 'Error Reporting' ); ?>
				</td>
				<td>
					<?php echo $lists['error_reporting']; ?>
				</td>
			</tr>
		</tbody>
	</table>
</fieldset>
