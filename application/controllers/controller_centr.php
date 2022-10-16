<?php

class Controller_Centr extends Controller
{

	function action_index()
	{	
		$this->view->generate('centr_view.php','template_view.php');
	}
}