<?php

class AdminController extends BaseController {
	public function edit($id) {
		$nc = Nightclub::find($id);

		return View::make('admin.edit')
			->with('nightclub', $nc);
	}

	public function editConfirm($id) {
		$nc = Nightclub::find($id);

		$nc->name = Input::get('name');
		$nc->address = Input::get('address');
		$nc->entrance = Input::get('entrance');

		$nc->save();

		return Redirect::to('admin/list');
	}
}
