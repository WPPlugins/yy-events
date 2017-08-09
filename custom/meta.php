<div class="my_meta_control">
	<label><?php _e('Event Sub Title', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_title'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>
	
	<label><?php _e('Event Description', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_description'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="5"><?php $mb->the_value(); ?></textarea>
	</p>

	<label><?php _e('Place', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_place'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label><?php _e('Date', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_date'); ?>
		<input type="text" class="input_yye_date" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label><?php _e('Open/Start', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_start'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label><?php _e('Price', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_price'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label><?php _e('Actors', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_actors'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>

	<label><?php _e('Contact', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_contact'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>

	<label><?php _e('Infomation', 'yyevents') ?></label>
	<p>
		<?php $mb->the_field('yye_etc'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>

	<label><?php _e('Event Image', 'yyevents') ?></label>
	<?php global $wpalchemy_media_access; ?>
	<?php $mb->the_field('imgurl'); ?>
	<?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('追加'); ?>
	<div class="media-box">
		<div class="pre-image">
		<?php if ($mb->get_the_value()): ?>
			<?php echo wp_get_attachment_image($mb->get_the_value()); ?>
		<?php endif; ?>
			<div class="img-edit">
				<a href="<?php echo $wpalchemy_media_access->getButtonLink(); ?>" class="mediabutton-nn thickbox {label:'<?php _e('upload', 'yyevents') ?>'}"><?php _e('upload', 'yyevents') ?></a>
			</div>
		</div>
		<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
	</div>
   
</div>
<script>
jQuery(document).ready(function(){
	jQuery('.input_yye_date').datepicker({
		dateFormat : 'yy/mm/dd'
	});	
});
</script>