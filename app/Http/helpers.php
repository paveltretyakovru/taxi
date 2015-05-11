<?php
	function delete_form($routeParams , $label = 'Удалить' , $btn_size = ''){
		$form = Form::open(['route' => $routeParams, 'method' => 'DELETE' , 'style' => "float:right"]);
		$form .= Form::submit($label , ['class' => 'btn btn-danger '.$btn_size]);
		return $form .= Form::close();
	}
?>