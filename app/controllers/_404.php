<?php


class _404
{
	use Controller, REST;

	public function index()
	{
		$this->response(array("msg" => "Page Not found"), 404);
	}
}
