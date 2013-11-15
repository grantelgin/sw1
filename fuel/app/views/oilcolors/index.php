<h2>Listing <span class='muted'>OilColors</span></h2>
<br>
<?php if ($oilColors): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Pantonename</th>
			<th>Pantoneid</th>
			<th>C</th>
			<th>M</th>
			<th>Y</th>
			<th>K</th>
			<th>R</th>
			<th>B</th>
			<th>G</th>
			<th>A</th>
			<th>Notes</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($oilColors as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->pantonename; ?></td>
			<td><?php echo $item->pantoneid; ?></td>
			<td><?php echo $item->c; ?></td>
			<td><?php echo $item->m; ?></td>
			<td><?php echo $item->y; ?></td>
			<td><?php echo $item->k; ?></td>
			<td><?php echo $item->r; ?></td>
			<td><?php echo $item->g; ?></td>
			<td><?php echo $item->b; ?></td>
			<td><?php echo $item->a; ?></td>
			<td><?php echo $item->notes; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('oilcolors/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('oilcolors/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('oilcolors/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No OilColors.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('oilcolors/create', 'Add new OilColor', array('class' => 'btn btn-success')); ?>

</p>
