<?php

class Controller_Aboutproject extends Controller
{
	
	function action_index()
	{
		$this->view->generate('aboutproject_view.php', 'template_view.php');
	}
}