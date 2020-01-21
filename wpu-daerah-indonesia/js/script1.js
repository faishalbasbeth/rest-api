$('#search-button').on('click', function () {
	$.ajax({
		url : 'http://api.jakarta.go.id/v1/kota',
		type : 'get',
		dataType : 'json',
		headers : {
			'Content-Type' : 'application/json',
			'Authorization' : 'VcUiGE9ET3hvByV3f0GhGRPNXkzRB3kw1xtEI6PxBCgStfEuGChUE1reoeO2e2AB'
		},
		// data : {
		// 	'Authorization' : 'VcUiGE9ET3hvByV3f0GhGRPNXkzRB3kw1xtEI6PxBCgStfEuGChUE1reoeO2e2AB'
		// },
		success : function (result) {
			console.log(result);
		}
	});
});