<?php
class Controller_OilColors extends Controller_Template{

	public function action_index()
	{
		$data['oilColors'] = Model_OilColor::find('all');
		$this->template->title = "OilColors";
		$this->template->content = View::forge('oilcolors/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('oilcolors');

		if ( ! $data['oilColor'] = Model_OilColor::find($id))
		{
			Session::set_flash('error', 'Could not find oilColor #'.$id);
			Response::redirect('oilcolors');
		}

		$this->template->title = "OilColor";
		$this->template->content = View::forge('oilcolors/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_OilColor::validate('create');
			
			if ($val->run())
			{
				$oilColor = Model_OilColor::forge(array(
					'id' => Input::post('id'),
					'name' => Input::post('name'),
					'pantonename' => Input::post('pantonename'),
					'pantoneid' => Input::post('pantoneid'),
					'c' => Input::post('c'),
					'm' => Input::post('m'),
					'y' => Input::post('y'),
					'k' => Input::post('k'),
					'r' => Input::post('r'),
					'b' => Input::post('b'),
					'g' => Input::post('g'),
					'a' => Input::post('a'),
					'notes' => Input::post('notes'),
				));

				if ($oilColor and $oilColor->save())
				{
					Session::set_flash('success', 'Added oilColor #'.$oilColor->id.'.');

					Response::redirect('oilcolors');
				}

				else
				{
					Session::set_flash('error', 'Could not save oilColor.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Oilcolors";
		$this->template->content = View::forge('oilcolors/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('oilcolors');

		if ( ! $oilColor = Model_OilColor::find($id))
		{
			Session::set_flash('error', 'Could not find oilColor #'.$id);
			Response::redirect('oilcolors');
		}

		$val = Model_OilColor::validate('edit');

		if ($val->run())
		{
			$oilColor->id = Input::post('id');
			$oilColor->name = Input::post('name');
			$oilColor->pantonename = Input::post('pantonename');
			$oilColor->pantoneid = Input::post('pantoneid');
			$oilColor->c = Input::post('c');
			$oilColor->m = Input::post('m');
			$oilColor->y = Input::post('y');
			$oilColor->k = Input::post('k');
			$oilColor->r = Input::post('r');
			$oilColor->b = Input::post('b');
			$oilColor->g = Input::post('g');
			$oilColor->a = Input::post('a');
			$oilColor->notes = Input::post('notes');

			if ($oilColor->save())
			{
				Session::set_flash('success', 'Updated oilColor #' . $id);

				Response::redirect('oilcolors');
			}

			else
			{
				Session::set_flash('error', 'Could not update oilColor #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$oilColor->id = $val->validated('id');
				$oilColor->name = $val->validated('name');
				$oilColor->pantonename = $val->validated('pantonename');
				$oilColor->pantoneid = $val->validated('pantoneid');
				$oilColor->c = $val->validated('c');
				$oilColor->m = $val->validated('m');
				$oilColor->y = $val->validated('y');
				$oilColor->k = $val->validated('k');
				$oilColor->r = $val->validated('r');
				$oilColor->b = $val->validated('b');
				$oilColor->g = $val->validated('g');
				$oilColor->a = $val->validated('a');
				$oilColor->notes = $val->validated('notes');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('oilColor', $oilColor, false);
		}

		$this->template->title = "OilColors";
		$this->template->content = View::forge('oilcolors/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('oilcolors');

		if ($oilColor = Model_OilColor::find($id))
		{
			$oilColor->delete();

			Session::set_flash('success', 'Deleted oilColor #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete oilColor #'.$id);
		}

		Response::redirect('oilcolors');

	}


}
