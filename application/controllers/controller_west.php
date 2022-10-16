<?php

class Controller_West extends Controller
{

	function action_index()
	{	
		$this->view->generate('west_view.php','template_view.php');
	}
}