<?php
	
	session_start();
	$server='localhost';
	$user = 'root';
	$password='';
	$dbname='mydb';
	
	$conn=mysqli_connect($server,$user,$password,$dbname);
	
	
	
	$tempvar=$_SESSION["teamname"];
	//echo $tempvar;
	$sql = "SELECT * FROM `player_info`\n"."WHERE Tm = \"$tempvar\""."ORDER BY Player ASC";
	$a = array();
	
	if($tempvar == "BRK")
		$tempvar = "BKN";
	if($tempvar == "CHO")
		$tempvar = "CHA";
	if($tempvar == "PHO")
		$tempvar = "PHX";

	//$query = "SELECT ISBN,Author FROM LIST where Author = 'Agatha Christie';";
	$res = mysqli_query($conn,$sql);
	//var_dump($res);
	$row1=mysqli_fetch_assoc($res);
	//var_dump($row1);
	array_push($a,$row1);
	
	while(($row1=mysqli_fetch_assoc($res)) != null)	
	{
		//var_dump($row1);
		//echo "<br>";
		//echo "<br>";
		//echo "<br>";
		array_push($a,$row1);
	}
		
		//echo "<br>";
		//echo "<br>";
		//echo "<br>";
		//var_dump($a);
	for($i=0;$i<sizeof($a);$i++)
	{
		//var_dump ($a[$i]);
		//echo "<br>";
		//echo "<br>";
		//echo "<br>";
	}
?>


	<style type="text/css">
		h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  cursor:pointer;
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

h4{
	font-family:Courier;
}

/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #768880, #041d1f);
  background: linear-gradient(to right, #768880, #041d1f);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}
::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
img{
	position:relative;
	left:42.5%;
}

</style>








<html>
	<head>
		<title>Scores</title>
	
		
	<link rel="stylesheet" type="text/css" href="all.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">


		<style type="text/css">
		    ul{
		        padding: 0;
		        list-style: none;
		        background: none;
		    }
		    ul li{
		        display: inline-block;
		        position: relative;
		        line-height: 21px;
		        text-align: left;
		    }
		    ul li a{
		        display: block;
		        padding: 8px 25px;
		        color: White;
		        text-decoration: none;
		        font-family: 'Oswald', sans-serif;

		    }
		    ul li a:hover{
		        color: Red;
		        background: none;
		        font-family: 'Oswald', sans-serif;


		    }
		    ul li ul.dropdown{
		        min-width: 100%; /* Set width of the dropdown */
		        background: none;
		        display: none;
		        position: absolute;
		        z-index: 999;
		        left: 0;
		        font-size: 14px;
		    }
		    ul li:hover ul.dropdown{
		        display: block;	/* Display the dropdown */
		    }
		    ul li ul.dropdown li{
		        display: block;
		    }
		    #dropdown {
		    	position: relative;
		    	text-align: right;
		    	box-sizing: border-box;
		    	right:10%;
		    	padding-top: 10px;
		    	padding-bottom: 10px;

		    }
		  

		</style>
	</head>
	<body>
		<div class="Spacer" style="height:25px"></div>
		<div id = "dropdown">
			<ul>
		        <li><a href="index.html">HOME</a></li>
		        <li><a href="about.html">ABOUT</a></li>
		        <li>
		            <a href="work.html">STATS</a>
		            <ul class="dropdown">
		                <li><a href="Scores.html">SCORES</a></li>
		                <li><a href="records.html">RECORDS</a></li>
		            </ul>
		        </li>
		        <li><a href="schedule.html">SCHEDULE</a></li>
		        <li><a href="Scores.html">MATCH RESULTS</a></li>
		        <li><a href="blog.html">BLOG</a></li>

		    </ul>
		</div>
		<div style= "width:23%; height: 49.5px; position: absolute; padding-left: 10%;box-sizing: border-box;top:45px;">
			<img src = "logo1.png" width = "61.075" style="position: absolute;">
			<a href = "index1.html" style = "position: absolute; font-family: 'Oswald', sans-serif;color: White; font-weight: bold;font-size: 20px;text-decoration: none; left: 65%;">COURT WARRIOR</a>
		</div>
	
		 <br><br>
		<script>
		
				
		var teamabbrv = {"ATL" : "Atlanta Hawks",
		"BKN" :	"Brooklyn Nets",
		"BOS" :	"Boston Celtics",
		"CHA" :	"Charlotte Hornets",
		"CHI" :	"Chicago Bulls",
		"CLE" :	"Cleveland Cavaliers",
		"DAL" :	"Dallas Mavericks",
		"DEN" :	"Denver Nuggets",
		"DET" :	"Detroit Pistons",
		"GSW" :	"Golden State Warriors",
		"HOU" :	"Houston Rockets",
		"IND" :	"Indiana Pacers",
		"LAC" :	"Los Angeles Clippers",
		"LAL" :	"Los Angeles Lakers",
		"MEM" :	"Memphis Grizzlies",
		"MIA" :	"Miami Heat",
		"MIL" :	"Milwaukee Bucks",
		"MIN" :	"Minnesota Timberwolves",
		"NOP" :	"New Orleans Pelicans",
		"NYK" :	"New York Knicks",
		"OKC" :	"Oklahoma City Thunder",
		"ORL" :	"Orlando Magic",
		"PHI" :	"Philadelphia 76ers",
		"PHX" :	"Phoenix Suns",
		"POR" :	"Portland Trail Blazers",
		"SAC" :	"Sacramento Kings",
		"SAS" :	"San Antonio Spurs",
		"TOR" :	"Toronto Raptors",
		"UTA" :	"Utah Jazz",
		"WAS" :	"Washington Wizards"}
		
		var obj1 = <?php echo json_encode($a); ?>;
		console.log(obj1);
			
		var teamn = <?php echo json_encode($tempvar); ?>;
		console.log("Teamname is",teamabbrv[teamn]);
		
		//alert("hello");
		</script>
		
		
		
		<section class="tempsection">
  
  
	<img style="align:center" id ="img1">
	<h4 style="color:rgba(255,255,255,0);font-weight:200" id="invi">Click to Sort</h4>
  <script>
	
	console.log("Console is",teamabbrv[teamn]);
	var str1 = teamabbrv[teamn];
	var str2='';
	console.log(str1);
	str3="Logo/";
	for(var i = 0;i<str1.length;i++)
	{
		console.log(str1[i]);
		if(str1[i]==' ')
		{
			str2+='_';
		}
		else
		{
			str2+=str1[i];
		}
	}
	str2+=".png";
	str3+=str2;
	console.log(str3);
	
	var imgh = document.querySelector("#img1");
	imgh.src = str3;
	console.log("Source",imgh.src);
	imgh.width= "200";
	//imgh.style.margin="0 auto";
	//imgh.height="80%";
	document.body.appendChild(imgh);
	
	var header1 = document.createElement("h1");
	header1.innerHTML = teamabbrv[teamn];
	//document.body.appendChild(header1);
	
   var temp=document.querySelector(".tempsection");
   
   var obj = {};
   obj.AgeAsc = function()
   {
	   window.location.href="AgeAsc.php";
   }
   obj.ASTAsc = function()
   {
	   window.location.href="ASTAsc.php";
   }
   obj.FGAsc = function()
   {
	   window.location.href="FGAsc.php";
   }
   obj.FTAsc = function()
   {
	   window.location.href="FTAsc.php";
   }
   obj.PlayerDesc = function()
   {
	   window.location.href="PlayerDesc.php";
   }
   obj.PosAsc = function()
   {
	   window.location.href="PosAsc.php";
   }
   obj.RkAsc = function()
   {
	   window.location.href="RkAsc.php";
   }
   obj.TRBAsc = function()
   {
	   window.location.href="TRBAsc.php";
   }
  var table1=document.createElement("table");
  var div1=document.createElement("div");
  div1.setAttribute("class","tbl-header");
  table1.setAttribute("cellpadding",0);
  table1.setAttribute("cellspacing",0);
  table1.setAttribute("border",0);
  var thead1=document.createElement("thead");
  var tr1=document.createElement("tr");
  
  var el1=document.createElement("th");//Rank
  el1.addEventListener("click",obj.RkAsc,false); 
  var el2=document.createElement("th");//Name
  el2.addEventListener("click",obj.PlayerDesc,false);
  var el3=document.createElement("th");//Age
  el3.addEventListener("click",obj.AgeAsc,false);
  var el4=document.createElement("th");//Position
  el4.addEventListener("click",obj.PosAsc,false);
  var el5=document.createElement("th");//Average Field Goals
  el5.addEventListener("click",obj.FGAsc,false);
  var el6=document.createElement("th");//Average Free Throws
  el6.addEventListener("click",obj.FTAsc,false);
  var el7=document.createElement("th");//Total Rebounds
  el7.addEventListener("click",obj.TRBAsc,false);
  var el8=document.createElement("th");//Assists
  el8.addEventListener("click",obj.ASTAsc,false);
  
  el1.innerHTML="Rank";
  el2.innerHTML="Name";
  el3.innerHTML="Age";
  el4.innerHTML="Position";
  el5.innerHTML="Average Field Goals Per Game";
  el6.innerHTML="Percentage of Free Throws";
  el7.innerHTML="Average Rebounds Per Game";
  el8.innerHTML="Average Assits Per Game";
  

  tr1.appendChild(el1);
  tr1.appendChild(el2);
  tr1.appendChild(el3);
  tr1.appendChild(el4);
  tr1.appendChild(el5);
  tr1.appendChild(el6);
  tr1.appendChild(el7);
  tr1.appendChild(el8);
  
  thead1.appendChild(tr1);
  table1.appendChild(thead1);
 
  div1.appendChild(table1);
  
 temp.appendChild(div1);
  
  var table2=document.createElement("table");
  var div2=document.createElement("div");
  div2.setAttribute("class","tbl-content");
  
  var tbody2=document.createElement("tbody");
  
  for(i=0;i<Object.keys(obj1).length;i++)
  {
  var tr2=document.createElement("tr");
  
  var el1a=document.createElement("td");
  var el2a=document.createElement("td");
  var el3a=document.createElement("td");
  var el4a=document.createElement("td");
  var el5a=document.createElement("td");
  var el6a=document.createElement("td");
  var el7a=document.createElement("td");
  var el8a=document.createElement("td");
  
 
  el1a.innerHTML=obj1[i]["Rk"];
  el2a.innerHTML=obj1[i]["Player"];
  el3a.innerHTML=obj1[i]["Age"];
  el4a.innerHTML=obj1[i]["Pos"];
  el5a.innerHTML=parseFloat(obj1[i]["FG"]);
  el6a.innerHTML=parseFloat(obj1[i]["FT"]);
  el7a.innerHTML=obj1[i]["TRB"];
  el8a.innerHTML=obj1[i]["AST"];
  
  tr2.appendChild(el1a);
  tr2.appendChild(el2a);
  tr2.appendChild(el3a);
  tr2.appendChild(el4a);
  tr2.appendChild(el5a);
  tr2.appendChild(el6a);
  tr2.appendChild(el7a);
  tr2.appendChild(el8a);
  
  tbody2.appendChild(tr2);
  
 
  }
  table2.appendChild(tbody2);
  div2.appendChild(table2);
  temp.appendChild(div2);
  document.body.appendChild(temp);
 
  </script>
  <script>
	
	var xyz = document.querySelector("#invi");
	console.log(xyz);
	
	var helpme = document.querySelectorAll("th");
	console.log(helpme);
	
	var obj={};
	obj.disp1 = function()
	{
		xyz.style.color="rgba(255,255,255,1)";
	}
	obj.disp2 = function()
	{
		xyz.style.color="rgba(255,255,255,0)";
	}
	for(var i =0;i<helpme.length;i++)
	{
		helpme[i].addEventListener("mouseover",obj.disp1,false);
		helpme[i].addEventListener("mouseout",obj.disp2,false);
	}
	
	</script>
</section>




		
		


	</body>
</html>
