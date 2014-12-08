// Get Traffic
$.get( "/traffic", function( data ) {
 $('#traffic h2').html(data);
});

// Get Leads
$.get( "/leads", function( data ) {
 $('#leads h2').html(data);
});

// Get Mql
$.get( "/mql", function( data ) {
 $('#mql h2').html(data);
});

// Get Sql
$.get( "/sql", function( data ) {
 $('#sql h2').html(data);
});