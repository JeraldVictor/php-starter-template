<?php


class _404
{
	use Controller, REST;

	public function index()
	{
		$this->response(array("Message" => "Page Not found"), 404);
	}
}
