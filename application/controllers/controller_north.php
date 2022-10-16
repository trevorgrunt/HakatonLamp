<?php

class Controller_north extends Controller
{

	function action_index()
	{	
		$this->view->generate('north_view.php','template_view.php');
	}
}