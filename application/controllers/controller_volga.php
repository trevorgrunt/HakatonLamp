<?php

class Controller_volga extends Controller
{

	function action_index()
	{	
		$this->view->generate('volga_view.php','template_view.php');
	}
}