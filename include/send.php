<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


if(isset($_POST)  && !empty($_POST)){

	$event = $_POST['event'];
	
	if($event == 'COURSE_FORM'){

		$USER_NAME= $_POST['name'];
		$USER_PHONE= $_POST['phone'];
		$USER_EMAIL= $_POST['email'];

		$fields = array(
			'USER_NAME' => $USER_NAME,
			'USER_PHONE' => $USER_PHONE,
			'USER_EMAIL' => $USER_EMAIL,
		);
	}

	if($event == 'REQUEST_FORM'){

		$USER_NAME= $_POST['name'];
		$USER_PHONE= $_POST['phone'];
		$USER_COMMENT= $_POST['comment'];

		$fields = array(
			'USER_NAME' => $USER_NAME,
			'USER_PHONE' => $USER_PHONE,
			'USER_COMMENT' => $USER_COMMENT,
		);
	}

	if($event == 'MODAL_FORM'){

		$USER_NAME= $_POST['name'];
		$USER_PHONE= $_POST['phone'];

		$fields = array(
			'USER_NAME' => $USER_NAME,
			'USER_PHONE' => $USER_PHONE,
		);
	}


	if($event){
		CEvent::Send($event, 's1', $fields , 'N', '','' );
	}
	echo true;
} else {
	LocalRedirect("404.php", " 404 Страница не найдена");
}?>