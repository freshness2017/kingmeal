<?php if(count($errors) > 0): ?>
	<div class="error">
		<?php foreach($errors as $errors): ?>
			<p style="color:red;"><strong><?php echo $errors; ?></strong></p>
		<?php endforeach ?>
		
	</div>


<?php endif ?>