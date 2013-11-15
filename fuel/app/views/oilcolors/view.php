<h2>Viewing <span class='muted'>#<?php echo $oilColor->id; ?></span></h2>


<p>
	<strong>Id:</strong>
	<?php echo $oilColor->id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $oilColor->name; ?></p>
<p>
	<strong>Pantonename:</strong>
	<?php echo $oilColor->pantonename; ?></p>
<p>
	<strong>Pantoneid:</strong>
	<?php echo $oilColor->pantoneid; ?></p>
<p>
	<strong>C:</strong>
	<?php echo $oilColor->c; ?></p>
<p>
	<strong>M:</strong>
	<?php echo $oilColor->m; ?></p>
<p>
	<strong>Y:</strong>
	<?php echo $oilColor->y; ?></p>
<p>
	<strong>K:</strong>
	<?php echo $oilColor->k; ?></p>
<p style="background-color:rgb(<?php echo $oilColor->r; ?>, 0, 0);color:#fff;">
	<strong>R:</strong>
	<?php echo $oilColor->r; ?></p>
<p style="background-color:rgb(0, <?php echo $oilColor->g; ?>, 0);color:#fff;">
	<strong>G:</strong>
	<?php echo $oilColor->g; ?></p>
<p style="background-color:rgb(0, 0, <?php echo $oilColor->b; ?>);color:#fff;">
	<strong>B:</strong>
	<?php echo $oilColor->b; ?></p>
<div style="background-color:rgb(<?php echo $oilColor->r; ?>, <?php echo $oilColor->g; ?>, <?php echo $oilColor->b; ?>);height:50px; text-align:center;color:#fff;padding-top:15px;">RGB Color mix</div>
<p>
	<strong>A:</strong>
	<?php echo $oilColor->a; ?></p>
<p>
	<strong>Notes:</strong>
	<?php echo $oilColor->notes; ?></p>

<?php echo Html::anchor('oilcolors/edit/'.$oilColor->id, 'Edit'); ?> |
<?php echo Html::anchor('oilcolors', 'Back'); ?>