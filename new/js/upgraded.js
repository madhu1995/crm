$(document).ready(function(){
    $("#mysub").click(function(){		
		var drn = $("#drn").val();
		var test_date = $("#test_date").val();
		var model1 = $("#model1").val();
		var dur = $("#dur").val();
		var tenq = $("#tenq").val();
		var tcu = $("#tcu").val();
		var tcun = $("#tcun").val();
		var place = $("#place").val();
		
		var dataString = '&drn='+ drn + '&test_date='+ test_date + '&model1='+ model1 + '&dur='+ dur + '&tenq=' + tenq + '&tcu=' + tcu + '&tcun=' + tcun + '&place=' + place ;
		
		$.ajax({
			type: "POST",
			url: "ajaxsubmit.php",
			data: dataString,
			success: function(result){
				$("#myModal").modal('hide');
			}
		});

    });
	$("#my1s").click(function(){		
		var model3 = $("#model3").val();
		var fuel1 = $("#fuel1").val();
		var col = $("#col").val();
		var quants = $("#quants").val();
		var sta = $("#sta").val();
		var venq = $("#venq").val();
		var vcu = $("#vcu").val();
		var vcun = $("#vcun").val();
		var app = $("#app").val();
		var pri = $("#pri").val();
		
		
		var dataString = '&model3='+ model3 + '&fuel1='+ fuel1 + '&col='+ col + '&quants='+ quants + '&sta=' + sta + '&venq=' + venq + '&vcu=' + vcu + '&vcun=' + vcun +'&app=' + app + '&pri=' + pri;
		
		$.ajax({
			type: "POST",
			url: "ajaxsubmit1.php",
			data: dataString,
			success: function(result){
				$("#my1").modal('hide');
			}
		});

    });
	$("#del").click(function(){	
	   $.ajax({
			type: "POST",
			url: "leaddetails.php",
			success: function(result){
				$("#myModal3").modal('hide');
			}
		});

    });
});

