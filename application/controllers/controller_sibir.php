<?php

class Controller_sibir extends Controller
{

	function action_index()
	{	
		$this->view->generate('sibir_view.php','template_view.php');
	}
}