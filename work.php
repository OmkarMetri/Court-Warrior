<?php

session_start();

?>

<html>
	<head>
		<title>Scores</title>
	<style type="text/css">
	
		body{
			 background-image:url("bglogo1.jpg");
			 
			 background-size:cover;
			 
			 background-attachment:fixed;
			
			}
		.teamlogo{
		border-radius: 5px;
		width:15%;
		<!--position:relative;left:25%;-->
			}
		.teamlogo.teamlogol
		{
			position:relative;left:20%;
		}
		.teamlogo.teamlogoc
		{
			position:relative;left:25%;
		}
		.teamlogo.teamlogor
		{
			position:relative;left:30%;
		}	
		form
		{
			display:none;
		}
	</style>	
		
	</head>

	<body>
		
		<form id="myForm" action="Session.php" >
		  <input id="teamname" type="text" name="team" value="helpme"><br>
		 
		 
		</form>
		<div>
		<img src="Logo/Atlanta_Hawks.png" class="teamlogo teamlogol" id="ATL">
		<img src="Logo/Brooklyn_Nets.png" class="teamlogo teamlogoc" id="BRK">
		<img src="Logo/Boston_Celtics.png" class="teamlogo teamlogor" id="BOS">
		
		</br></br>

		<img src="Logo/Charlotte_Hornets.png" id="CHO" class="teamlogo teamlogol">
		<img src="Logo/Chicago_Bulls.png" id="CHI" class="teamlogo teamlogoc">
		<img src="Logo/Cleveland_Cavaliers.png" id="CLE" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/Dallas_Mavericks.png" id="DAL" class="teamlogo teamlogol">
		<img src="Logo/Denver_Nuggets.png" id="DEN" class="teamlogo teamlogoc">
		<img src="Logo/Detroit_Pistons.png" id="DET" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/Golden_State_Warriors.png" id="GSW" class="teamlogo teamlogol">
		<img src="Logo/Houston_Rockets.png" id="HOU" class="teamlogo teamlogoc">
		<img src="Logo/Indiana_Pacers.png" id="IND" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/Los_Angeles_Clippers.png" id="LAC" class="teamlogo teamlogol">
		<img src="Logo/Los_Angeles_Lakers.png" id="LAL" class="teamlogo teamlogoc">
		<img src="Logo/Memphis_Grizzlies.png" id="MEM" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/Miami_Heat.png" id="MIA" class="teamlogo teamlogol">
		<img src="Logo/Milwaukee_Bucks.png" id="MIL" class="teamlogo teamlogoc">
		<img src="Logo/Minnesota_Timberwolves.png" id="MIN" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/New_Orleans_Pelicans.png" id="NOP" class="teamlogo teamlogol">
		<img src="Logo/New_York_Knicks.png" id="NYK" class="teamlogo teamlogoc">
		<img src="Logo/Oklahoma_City_Thunder.png" id="OKC" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/Orlando_Magic.png" id="ORL" class="teamlogo teamlogol">
		<img src="Logo/Philadelphia_76ers.png" id="PHI" class="teamlogo teamlogoc">
		<img src="Logo/Phoenix_Suns.png" id="PHO" class="teamlogo teamlogor">
		
		</br></br>

		<img src="Logo/Portland_Trail_Blazers.png" id="POR" class="teamlogo teamlogol">
		<img src="Logo/Sacramento_Kings.png" id="SAC" class="teamlogo teamlogoc">
		<img src="Logo/San_Antonio_Spurs.png" id="SAS" class="teamlogo teamlogor">
		
		</br></br>
	
		<img src="Logo/Toronto_Raptors.png" id="TOR" class="teamlogo teamlogol">
		<img src="Logo/Utah_Jazz.png" id="UTA" class="teamlogo teamlogoc">
		<img src="Logo/Washington_Wizards.png" id="WAS" class="teamlogo teamlogor">
		</div>
		
		
		<script>
		
		var imgEl = document.querySelectorAll("img");
		var obj={};
		console.log(imgEl);
		console.log(document.querySelector("img"));
		//document.querySelector("img").addEventListener("click",function(){{alert("hello")}},false);
		
		//console.log("hello",document.getElementById("myForm"));
		obj.link = function()
		{
		//alert("hell1o");
		console.log(document.getElementById("myForm").value);
		document.getElementById("teamname").value=this.id;
		console.log(document.getElementById("teamname").value);
		document.getElementById("myForm").submit(); 
		
		//window.location.href="Session.php";
		
		}
		
		for(var i =0;i<imgEl.length;i++)
		{
		console.log(typeof(imgEl[i]));
		//imgEl[i].addEventListener("click",function(){{alert("hello")}},false);
		imgEl[i].addEventListener("click",obj.link,false);
		}
		</script>
	</body>
</html>
