<?php

class Controller_dbconnect extends Controller
{
	function action_index()
	{
		$this->view->generate('dbconnect_view.php','template_view.php');
	}
}