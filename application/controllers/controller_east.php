<?php

class Controller_east extends Controller
{

	function action_index()
	{	
		$this->view->generate('east_view.php','template_view.php');
	}
}