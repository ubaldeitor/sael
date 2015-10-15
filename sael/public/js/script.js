$(document).ready(function(){
  	$('#estadoAlumno').change(function(){
			$.get('http://localhost/sael/public/obtenerMunicipios', 
				{ option: $(this).val()}, 
				function(data) {
					var municipio=$('#delegacionAlumno');
					municipio.empty();
					$.each(data, function(index, element) {
						municipio.append("<option value='" + index + "'>" + element + "</option>");
			        });
					
				});
  	});
	$('#delegacionAlumno').change(function(){
			$.get('http://localhost/sael/public/obtenerColonias',
			    { municipio: $('#delegacionAlumno').val(), 
				  estado:$('#estadoAlumno').val()},
			    function(data) {
			    	var colonia = $('#coloniaAlumno');
					colonia.empty();
					$.each(data, function(index, element) {
			            //colonia.append("<option value='"+ element.id +"'>" + element.asentamiento + "</option>");
						colonia.append("<option value='" + index + "'>" + element + "</option>");
			        });
			    	
			    });
		});
	
	
});