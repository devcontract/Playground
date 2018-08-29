

$(document).ready(function(){
  window['last_time'] = parseInt(new Date().getTime());
});

function Query(e) {
	e.preventDefault();
	var msg = $(this).serialize();
	$("#waiting").show();     // это такой большой div на весь экран  с крутилкой посередине и полупрозрачным фоном
	setTimeout(function(){
        $.ajax({ type: 'POST', url: 'response.php', data: msg, dataType: 'json',
			beforeSend: function(data){ $("#waiting").show(); },
			success: function(data){
				//обрабатываю данные от сервера
			},error: function(xhr, str){ console.log(xhr.responseText); },
			complete: function(data){
				$("#waiting").hide();
				window['last_time'] = parseInt(new Date().getTime());
			}
		});
    }, PauseQuery());
	return false;
}

function PauseQuery(){
	var pause = 3000,
		time = parseInt(new Date().getTime()),
		defftime = time - window['last_time'];
	if(defftime < pause) pause = pause - defftime;
	else pause = 0;
	return pause;
}
