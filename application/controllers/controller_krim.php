<?php

class Controller_Krim extends Controller
{

	function action_index()
	{
		$this->view->generate('krim_view.php', 'template_view.php');
	}
}
