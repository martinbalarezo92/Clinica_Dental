function isNumber(evt) {

    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        
        return false;
        
    }

    return true;
}

function sumarPlaca(){
	alert("Hello! I am an alert box!");
	/*
	var placa1 = document.getElementsByName('placa_01');
	var placa2 = document.getElementsByName('placa_02');
	var placa3 = document.getElementsByName('placa_03');	
	var placa4 = document.getElementsByName('placa_04');
	var placa5 = document.getElementsByName('placa_05');
	var placa6 = document.getElementsByName('placa_06');
	var total_placa = placa1 + placa2 + placa3 + placa4 + placa5 + placa6;
	document.getElementsByName('placa_total').value = total_placa;*/
}