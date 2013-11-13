<h2>Editing <span class='muted'>OilColor</span></h2>
<br>

<?php echo render('oilcolors/_form'); ?>
<p>
	<?php echo Html::anchor('oilcolors/view/'.$oilColor->id, 'View'); ?> |
	<?php echo Html::anchor('oilcolors', 'Back'); ?></p>
