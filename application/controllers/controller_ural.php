<?php

class Controller_Ural extends Controller
{

	function action_index()
	{	
		$this->view->generate('ural_view.php','template_view.php');
	}
}