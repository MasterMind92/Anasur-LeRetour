$(function () {
	
	$(".route").on('submit', function (e) {
		e.preventDefault();
		var form = $(this).serialize();
			//alert('test');
		$.post("../Traitement/trait_validfr.php",form, function (data) {
			//console.log(data);
			alert(data);
			$(this).hide(500);
		});
	});

	$(".newspot").on('submit', function (e) {
		e.preventDefault();
		var frm = $(this).serialize();

		$.post("../Traitement/trait_dp.php",frm, function (data) {
			alert(data);
			$(this).hide(500);  
		});
	});
	//SCRIPT DES PRESTATAIRES
	$(".prest").on('submit', function (e) {
		e.preventDefault();
		var formu = $(this).serialize();

		$.post("note.php",formu, function (data) {
			alert(data);
			$(this).fadeOut();
		});
	});
});