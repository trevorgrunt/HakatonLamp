<?php

class Controller_test extends Controller
{

	function action_index()
	{
		$this->view->generate('test_view.php', 'template_view.php');
	}
}

