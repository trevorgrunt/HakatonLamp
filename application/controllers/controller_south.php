<?php

class Controller_south extends Controller
{

	function action_index()
	{	
		$this->view->generate('south_view.php','template_view.php');
	}
}