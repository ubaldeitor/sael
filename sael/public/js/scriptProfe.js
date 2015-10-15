$(document).ready(function(){
  	$('#ciudad').change(function(){
			$.get('http://localhost/sael/public/obtenerMunicipios', 
				{ option: $(this).val()}, 
				function(data) {
					var municipio=$('#delegacion');
					municipio.empty();
					$.each(data, function(index, element) {
						municipio.append("<option value='" + index + "'>" + element + "</option>");
			        });
					
				});
  	});
	$('#delegacion').change(function(){
			$.get('http://localhost/sael/public/obtenerColonias',
			    { municipio: $('#delegacion').val(), 
				  estado:$('#ciudad').val()},
			    function(data) {
			    	var colonia = $('#colonia');
					colonia.empty();
					$.each(data, function(index, element) {
			            //colonia.append("<option value='"+ element.id +"'>" + element.asentamiento + "</option>");
						colonia.append("<option value='" + index + "'>" + element + "</option>");
			        });
			    	
			    });
		});
	
	
});