$(document).ready(function(){
	$('#comboboxProv').change(function(event){
		$.get("/partidos/" + event.target.value + "", function(response, state){
			$('#comboboxPart').empty();
			$('#comboboxPart').append("<option value=''>Partido</option>");
			$('#comboboxLocal').empty();
			$('#comboboxLocal').append("<option value=''>Localidad</option>");
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
			$('#comboboxLocal').append("<option value=''>Localidad</option>");
			for (i = 0; i < response.length; i++){
				$('#comboboxLocal').append("<option value='" + response[i].id + "'>" + response[i].name + "</option>");
			}
		});
	});
});