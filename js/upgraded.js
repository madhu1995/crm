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
		
		if(drn == '' || test_date == '' || model1 == '' || dur == '' || tenq == '' || tcu == '' || tcun == '' || place == '')
		{
			if(drn == ''){
			$('#drn').tooltip('show');
			}
			else if(test_date == ''){
			$('#test_date').tooltip('show');
			}
			else if(model1 == ''){
			$('#model1').tooltip('show');
			}
			else if(dur == ''){
			$('#dur').tooltip('show');
			}
			else if(tenq == ''){
			$('#tenq').tooltip('show');
			}
			else if(tcu == ''){
			$('#tcu').tooltip('show');
			}
			else if(tcun == ''){
			$('#tcun').tooltip('show');
			}
			else if(place == ''){
			$('#place').tooltip('show');
			}
			return false;
		}
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
		var model3 = $("#model3").val();1
		var fuel1 = $("#fuel1").val();
		var col = $("#col").val();
		var quants = $("#quants").val();
		var sta = $("#sta").val();
		var venq = $("#venq").val();
		var vcu = $("#vcu").val();
		var vcun = $("#vcun").val();
		var app = $("#app").val();
		var pri = $("#pri").val();
		if(model3 == '' || fuel1 == '' || col == '' || quants == '' || sta == '' || venq == '' || vcu == '' || vcun == '' || app == '')
		{
			if(model3 == ''){
			$('#model3').tooltip('show');
			return false;
			}
			else if(fuel1 == ''){
			$('#fuel1').tooltip('show');
			return false;
			}
			else if(col == ''){
			$('#col').tooltip('show');
			return false;
			}
			else if(quants == ''){
			$('#quants').tooltip('show');
			return false;
			}
			else if(sta == ''){
			$('#sta').tooltip('show');
			return false;
			}
			else if(venq == ''){
			$('#venq').tooltip('show');
			return false;
			}
			else if(vcu == ''){
			$('#vcu').tooltip('show');
			return false;
			}
			else if(vcun == ''){
			$('#vcun').tooltip('show');
			return false;
			}
			else if(app == ''){
			$('#app').tooltip('show');
			return false;
			}
			return false;
		}
		
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

