// A $( document ).ready() block.
$( document ).ready(function() {
	/*var xmlhttp;
	if (window.XMLHttpRequest)  {  
	    xmlhttp=new XMLHttpRequest(); 
	} else {  
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  
	}*/
	var votes = [];
	/*xmlhttp.onreadystatechange=function()  {
	    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		votes = JSON.parse(xmlhttp.responseText);*/
		
		$.ajax({
		  url: 'http://student.cs.appstate.edu/st79375/polls/candy/counter.php',
		  type: 'GET',
		  data: {func: "queryValues"},
		  success: function(data) {
			votes = JSON.parse(data);
			//console.log(votes);
  
			var data2 = [
		{
		    /* Fruit Snacks */
		    value: parseInt(votes[0]),
		    color:"#FF8E36",
		    label : "Fruit Snacks: " + votes[0],
		    labelColor : "#000000",
		},
		{
		    /* KitKat Bars */
		    value : parseInt(votes[1]),
		    color : "#6b66ff",
		    label : "KitKat Bars: " + votes[1],
		    labelColor : "#000000",
		},
		{
		    /* M and M's */
		    value : parseInt(votes[2]),
		    //color : "#00ffe5",
			color:"#FFF94D",
		    label : "M & M's: " + votes[2],
		    labelColor : "#000000",
		},
		{
		    /* Reese's Cups */
		    value : parseInt(votes[3]),
		    color : "#FF0303",
		    label : "Reese's Cups: " + votes[3],
		    labelColor : "#000000",
		},
		{
		    /* Skittles */
		    value : parseInt(votes[4]),
		    color : "#29ff74",
		    label : "Skittles: " + votes[4],
		    labelColor : "#000000",
		},
		{
		    /* Twix Bars */
		    value : parseInt(votes[5]),
		    color : "#E030FF",
		    label : "Twix Bars: " + votes[5],
		    labelColor : "#000000",
		},
				    ];

			var myPie = new Chart(document.getElementById("myChart").getContext("2d")).Pie(data2);
			//console.log(data2);
		    //}
			  
			  
			//called when successful
			//$('myChart').html(data);
		  },
		  error: function(e) {
			//called when there is an error
			//console.log(e.message);
		  }
		});
		//}
	//xmlhttp.open("GET","counter.php",true);
	//xmlhttp.send();
    });