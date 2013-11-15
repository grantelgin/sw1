<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Id', 'id', array('class'=>'control-label')); ?>

				<?php echo Form::input('id', Input::post('id', isset($oilColor) ? $oilColor->id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($oilColor) ? $oilColor->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Pantonename', 'pantonename', array('class'=>'control-label')); ?>

				<?php echo Form::input('pantonename', Input::post('pantonename', isset($oilColor) ? $oilColor->pantonename : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Pantonename')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Pantoneid', 'pantoneid', array('class'=>'control-label')); ?>

				<?php echo Form::input('pantoneid', Input::post('pantoneid', isset($oilColor) ? $oilColor->pantoneid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Pantoneid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('C', 'c', array('class'=>'control-label')); ?>

				<?php echo Form::input('c', Input::post('c', isset($oilColor) ? $oilColor->c : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'C')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M', 'm', array('class'=>'control-label')); ?>

				<?php echo Form::input('m', Input::post('m', isset($oilColor) ? $oilColor->m : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Y', 'y', array('class'=>'control-label')); ?>

				<?php echo Form::input('y', Input::post('y', isset($oilColor) ? $oilColor->y : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Y')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('K', 'k', array('class'=>'control-label')); ?>

				<?php echo Form::input('k', Input::post('k', isset($oilColor) ? $oilColor->k : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'K')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('R', 'r', array('class'=>'control-label')); ?>

				<?php echo Form::input('r', Input::post('r', isset($oilColor) ? $oilColor->r : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'R')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('G', 'g', array('class'=>'control-label')); ?>

				<?php echo Form::input('g', Input::post('g', isset($oilColor) ? $oilColor->g : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'G')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('B', 'b', array('class'=>'control-label')); ?>

				<?php echo Form::input('b', Input::post('b', isset($oilColor) ? $oilColor->b : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'B')); ?>

		</div>
		
		<div class="form-group">
			<?php echo Form::label('A', 'a', array('class'=>'control-label')); ?>

				<?php echo Form::input('a', Input::post('a', isset($oilColor) ? $oilColor->a : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'A')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Notes', 'notes', array('class'=>'control-label')); ?>

				<?php echo Form::input('notes', Input::post('notes', isset($oilColor) ? $oilColor->notes : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Notes')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>