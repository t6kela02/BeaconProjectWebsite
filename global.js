$.ajax({
	url: 'GetDataOut.php',
	dataType: 'json',
	type: 'GET',
	succes: function(data){
		console.log(data);
	}
});
