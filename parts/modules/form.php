<section class="form-wrap gray-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1">
				<h2 class="h3"><?php the_sub_field('form_heading');?></h2>
				<?php $form_id = get_sub_field('form_id');?>
				<?php gravity_form( $form_id, false, false, false, '', true );?>
			</div>
		</div>
	</div>
</section>