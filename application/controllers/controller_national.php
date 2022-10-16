<?php

class Controller_National extends Controller
{

	function action_index()
	{
		$this->view->generate('national_view.php', 'template_view.php');
	}
}
