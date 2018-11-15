$(document).ready(function(){
	$('#comboboxProv').change(function(event){
		$.get("/partidos/" + event.target.value + "", function(response, state){
			$('#comboboxPart').empty();
			$('#comboboxPart').append("<option>Partido</option>");
			$('#comboboxLocal').empty();
			$('#comboboxLocal').append("<option>Localidad</option>");
			for (i = 0; i < response.length; i++){
				$('#comboboxPart').append("<option value='" + response[i].id + "'>" + response[i].name + "</option>");
			}
		});
	});
});

$(document).ready(function(){
	$('#comboboxPart').change(function(event){
		$.get("/localidades/" + event.target.value + "", function(response, state){
			$('#comboboxLocal').empty();
			$('#comboboxLocal').append("<option>Localidad</option>");
			for (i = 0; i < response.length; i++){
				$('#comboboxLocal').append("<option value='" + response[i].id + "'>" + response[i].name + "</option>");
			}
		});
	});
});


$(document).ready(function(){
	$('#comboboxLocal').change(function(event){
		$('#localidad').val(event.target.value);
	});
});