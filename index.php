<!DOCTYPE html>
<html> 
<head>
<meta content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' name='viewport'/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>

<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" /> 


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
  crossorigin="anonymous"
/>
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
  crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js" integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>










</head>
<body>

<style>

.buttoncs {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 30px;
  border: 1px solid #4CAF50 ;
border-style: dotted dashed solid double;

  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: 'Holtwood One SC', serif;
  font-size: 20px;
  background-image: linear-gradient(315deg, #fff000 0%, #d83c3c 74%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  padding: 0px 0px 0px 0px;
  margin-top:0px;
  margin-bottom:0px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}
  


h5{ 




	text-shadow: 1px 1px 1px white;
background-color: rgb(150, 150, 150);
width:70%; 
	font-size: 16px;
	line-height: 16px;
margin: 3px 3px 3px 3px;
	padding: 10px 15px;
	border: 1px solid #4CAF50 ;
	outline: 1px;
	font-weight: 900;
	cursor: pointer;
	border-radius: 34px;
	transition: 0.25s;
border-style: dotted dashed solid double;



 }



button{
	font-size: 20px;
	line-height: 25px;
margin: 3px 3px 3px 3px;
	padding: 8px 12px;
	border: 1px solid #4CAF50 ;
	outline: 1px;
	font-weight: 1000;
	cursor: pointer;
	border-radius: 34px;
	transition: 0.25s;
border-style: dotted dashed solid double;

 
}

button.neu-light{
	background-color: rgb(247, 239, 244);
	filter: drop-shadow(3.4px 3.4px 3.4px rgb(183, 177, 181)) drop-shadow(-3.4px -3.4px 3.4px white);
	-webkit-filter: drop-shadow(3.4px 3.4px 3.4px rgb(183, 177, 181)) drop-shadow(-3.4px -3.4px 3.4px white);
	box-shadow: inset 4.3px 4.3px 7px #fff;
}
button.neu-light:hover{
	filter: drop-shadow(5px 5px 3.4px rgb(183, 177, 181));
	-webkit-filter: drop-shadow(5px 5px 3.4px rgb(183, 177, 181));
	box-shadow: inset 2.5px 2.5px 2.5px #fff;
}
button.neu-light:active{
	filter: drop-shadow(0px 0px 0px rgb(183, 177, 181));
	-webkit-filter: drop-shadow(0px 0px 0px rgb(183, 177, 181));
	box-shadow: inset 4.3px 4.3px 7px rgb(183, 177, 181);
	
}
button.neu-light.active{
	filter: unset;
	box-shadow: unset;
	filter: drop-shadow(3px 1px 18px rgb(255, 255, 255));
	-webkit-filter: drop-shadow(3px 1px 18px rgb(255, 255, 255));
    box-shadow: inset 5.3px 5.3px 7px rgba(183, 177, 181, 0.34);
    border: 1px solid rgb(255, 255, 255);
	color: #666;
	text-shadow: 1px 1px 1px white;
}
.btn-action{
	color: #444;
}
.btn-action:hover{
	color: #321;
}

</style>
<div style="margin: 4px, 4px;

        padding: 4px;
        width: 100%;

        overflow-x: auto;

        overflow-y: hidden;

        white-space: nowrap;";>


<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Sports';">Sports</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Entertainment';">Entertainment</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Movies';">Movies</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=News';">News</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Music';">Music</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Kids';">Kids</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Lifestyle';">Lifestyle</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Infotainment';">Infotainment</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Devotional';">Devotional</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Business';">Business</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Educational';">Educational</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=Shopping';">Shopping</button>
	 

<button id="btn" type="button" class="neu-light btn-action" onclick="window.location.href = 'index.php?cat=JioDarshan';">JioDarshan</button>    

</div>









<center>




<select class='button' data-attribute='l' id='ddlAge'> <option value='0'>Language-All</option> <option value='English'>English</option><option value='Hindi'>Hindi</option><option value='Marathi'>Marathi</option><option value='Punjabi'>Punjabi</option><option value='Urdu'>Urdu</option><option value='Bengali'>Bengali</option><option value='Malayalam'>Malayalam</option><option value='Tamil'>Tamil</option><option value='Gujarati'>Gujarati</option><option value='Odia'>Odia</option><option value='Telugu'>Telugu</option><option value='Bhojpuri'>Bhojpuri</option><option value='Kannada'>Kannada</option><option value='Assamese'>Assamese</option><option value='Nepali'>Nepali</option><option value='French'>French</option> </select>

 



<div class="no-items section" id="search_top" name="Search (Top)"></div><input class="fin" placeholder="Load All Channels then Search here.." type="text">
<div class="main" id="ch_list">


<a  href="jioplay.php?id=144&token=StreamHub.m3u8">
<div id="144" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" class="loading">
<div class="tvv-name2">Colors HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=291&token=StreamHub.m3u8">
<div id="291" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" class="loading">
<div class="tvv-name2">Sony HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=167&token=StreamHub.m3u8">
<div id="167" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png" class="loading">
<div class="tvv-name2">Zee TV HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=154&token=StreamHub.m3u8">
<div id="154" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" class="loading">
<div class="tvv-name2">Sony SAB Live</div>
</div>
</a>



<a  href="jioplay.php?id=472&token=StreamHub.m3u8">
<div id="472" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png" class="loading">
<div class="tvv-name2">And TV HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=279&token=StreamHub.m3u8">
<div id="279" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png" class="loading">
<div class="tvv-name2">Rishtey Live</div>
</div>
</a>



<a  href="jioplay.php?id=473&token=StreamHub.m3u8">
<div id="473" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png" class="loading">
<div class="tvv-name2">Zee Anmol Live</div>
</div>
</a>



<a  href="jioplay.php?id=474&token=StreamHub.m3u8">
<div id="474" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" class="loading">
<div class="tvv-name2">Sony Pal Live</div>
</div>
</a>



<a  href="jioplay.php?id=471&token=StreamHub.m3u8">
<div id="471" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" class="loading">
<div class="tvv-name2">Sony SAB HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=445&token=StreamHub.m3u8">
<div id="445" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png" class="loading">
<div class="tvv-name2">Zee Marathi Live</div>
</div>
</a>



<a  href="jioplay.php?id=755&token=StreamHub.m3u8">
<div id="755" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png" class="loading">
<div class="tvv-name2">Colors Marathi HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=757&token=StreamHub.m3u8">
<div id="757" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png" class="loading">
<div class="tvv-name2">Colors Kannada HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=689&token=StreamHub.m3u8">
<div id="689" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png" class="loading">
<div class="tvv-name2">Zee Kannada Live</div>
</div>
</a>



<a  href="jioplay.php?id=1157&token=StreamHub.m3u8">
<div id="1157" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png" class="loading">
<div class="tvv-name2">Comedy Central HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=638&token=StreamHub.m3u8">
<div id="638" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png" class="loading">
<div class="tvv-name2">Zee Telugu Live</div>
</div>
</a>



<a  href="jioplay.php?id=628&token=StreamHub.m3u8">
<div id="628" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png" class="loading">
<div class="tvv-name2">Zee Tamil Live</div>
</div>
</a>



<a  href="jioplay.php?id=196&token=StreamHub.m3u8">
<div id="196" class="tvv-item" data-g="Entertainment" data-l="Gujarati">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Gujarati</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png" class="loading">
<div class="tvv-name2">Colors Gujarati Live</div>
</div>
</a>



<a  href="jioplay.php?id=625&token=StreamHub.m3u8">
<div id="625" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png" class="loading">
<div class="tvv-name2">Zee Bangla Live</div>
</div>
</a>



<a  href="jioplay.php?id=756&token=StreamHub.m3u8">
<div id="756" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png" class="loading">
<div class="tvv-name2">Colors Bengali HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=481&token=StreamHub.m3u8">
<div id="481" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png" class="loading">
<div class="tvv-name2">Epic Live</div>
</div>
</a>



<a  href="jioplay.php?id=1158&token=StreamHub.m3u8">
<div id="1158" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png" class="loading">
<div class="tvv-name2">Colors Infinity HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=414&token=StreamHub.m3u8">
<div id="414" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png" class="loading">
<div class="tvv-name2">Zee Yuva Live</div>
</div>
</a>



<a  href="jioplay.php?id=1171&token=StreamHub.m3u8">
<div id="1171" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png" class="loading">
<div class="tvv-name2">PTC Punjabi Live</div>
</div>
</a>



<a  href="jioplay.php?id=527&token=StreamHub.m3u8">
<div id="527" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/ID.PNG" class="loading">
<div class="tvv-name2">Investigation Discovery Live</div>
</div>
</a>



<a  href="jioplay.php?id=528&token=StreamHub.m3u8">
<div id="528" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png" class="loading">
<div class="tvv-name2">DD India Live</div>
</div>
</a>



<a  href="jioplay.php?id=202&token=StreamHub.m3u8">
<div id="202" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png" class="loading">
<div class="tvv-name2">DD National Live</div>
</div>
</a>



<a  href="jioplay.php?id=532&token=StreamHub.m3u8">
<div id="532" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png" class="loading">
<div class="tvv-name2">Dabangg Live</div>
</div>
</a>



<a  href="jioplay.php?id=429&token=StreamHub.m3u8">
<div id="429" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png" class="loading">
<div class="tvv-name2">Colors Tamil HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=536&token=StreamHub.m3u8">
<div id="536" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png" class="loading">
<div class="tvv-name2">DD Madhya Pradesh Live</div>
</div>
</a>



<a  href="jioplay.php?id=538&token=StreamHub.m3u8">
<div id="538" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png" class="loading">
<div class="tvv-name2">DD Rajasthan (Jaipur) Live</div>
</div>
</a>



<a  href="jioplay.php?id=629&token=StreamHub.m3u8">
<div id="629" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png" class="loading">
<div class="tvv-name2">ETV Telugu Live</div>
</div>
</a>



<a  href="jioplay.php?id=533&token=StreamHub.m3u8">
<div id="533" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png" class="loading">
<div class="tvv-name2">Raj Pariwar Live</div>
</div>
</a>



<a  href="jioplay.php?id=539&token=StreamHub.m3u8">
<div id="539" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png" class="loading">
<div class="tvv-name2">DD Bihar Live</div>
</div>
</a>



<a  href="jioplay.php?id=540&token=StreamHub.m3u8">
<div id="540" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png" class="loading">
<div class="tvv-name2">DD Uttar Pradesh Live</div>
</div>
</a>



<a  href="jioplay.php?id=419&token=StreamHub.m3u8">
<div id="419" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png" class="loading">
<div class="tvv-name2">Jaya TV HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=844&token=StreamHub.m3u8">
<div id="844" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png" class="loading">
<div class="tvv-name2">Mazavali Manorama HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=847&token=StreamHub.m3u8">
<div id="847" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png" class="loading">
<div class="tvv-name2">MK TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=785&token=StreamHub.m3u8">
<div id="785" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png" class="loading">
<div class="tvv-name2">Colors Super Live</div>
</div>
</a>



<a  href="jioplay.php?id=857&token=StreamHub.m3u8">
<div id="857" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png" class="loading">
<div class="tvv-name2">Vendhar TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=904&token=StreamHub.m3u8">
<div id="904" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png" class="loading">
<div class="tvv-name2">Sanjha TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=919&token=StreamHub.m3u8">
<div id="919" class="tvv-item" data-g="Entertainment" data-l="Bhojpuri">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bhojpuri</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Anjan_TV.png" class="loading">
<div class="tvv-name2">Anjan TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=951&token=StreamHub.m3u8">
<div id="951" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png" class="loading">
<div class="tvv-name2">Garv Punjabi Live</div>
</div>
</a>



<a  href="jioplay.php?id=959&token=StreamHub.m3u8">
<div id="959" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png" class="loading">
<div class="tvv-name2">JUSPunjabi Live</div>
</div>
</a>



<a  href="jioplay.php?id=963&token=StreamHub.m3u8">
<div id="963" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png" class="loading">
<div class="tvv-name2">Arre HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=796&token=StreamHub.m3u8">
<div id="796" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png" class="loading">
<div class="tvv-name2">Peppers TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=722&token=StreamHub.m3u8">
<div id="722" class="tvv-item" data-g="Entertainment" data-l="Odia">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Odia</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png" class="loading">
<div class="tvv-name2">Zee Sarthak Live</div>
</div>
</a>



<a  href="jioplay.php?id=634&token=StreamHub.m3u8">
<div id="634" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png" class="loading">
<div class="tvv-name2">Flower TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=648&token=StreamHub.m3u8">
<div id="648" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png" class="loading">
<div class="tvv-name2">Mazhavil Manorama Live</div>
</div>
</a>



<a  href="jioplay.php?id=690&token=StreamHub.m3u8">
<div id="690" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png" class="loading">
<div class="tvv-name2">DD Bangla Live</div>
</div>
</a>



<a  href="jioplay.php?id=824&token=StreamHub.m3u8">
<div id="824" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png" class="loading">
<div class="tvv-name2">Puthu Yugam Live</div>
</div>
</a>



<a  href="jioplay.php?id=691&token=StreamHub.m3u8">
<div id="691" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png" class="loading">
<div class="tvv-name2">Saam Tv Live</div>
</div>
</a>



<a  href="jioplay.php?id=198&token=StreamHub.m3u8">
<div id="198" class="tvv-item" data-g="Entertainment" data-l="Odia">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Odia</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png" class="loading">
<div class="tvv-name2">Colors Oriya Live</div>
</div>
</a>



<a  href="jioplay.php?id=765&token=StreamHub.m3u8">
<div id="765" class="tvv-item" data-g="Entertainment" data-l="Assamese">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Assamese</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png" class="loading">
<div class="tvv-name2">Jonack Live</div>
</div>
</a>



<a  href="jioplay.php?id=623&token=StreamHub.m3u8">
<div id="623" class="tvv-item" data-g="Entertainment" data-l="Assamese">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Assamese</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png" class="loading">
<div class="tvv-name2">Rang Live</div>
</div>
</a>



<a  href="jioplay.php?id=635&token=StreamHub.m3u8">
<div id="635" class="tvv-item" data-g="Entertainment" data-l="Assamese">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Assamese</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png" class="loading">
<div class="tvv-name2">Rengoni Live</div>
</div>
</a>



<a  href="jioplay.php?id=692&token=StreamHub.m3u8">
<div id="692" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png" class="loading">
<div class="tvv-name2">ETV Plus Live</div>
</div>
</a>



<a  href="jioplay.php?id=1146&token=StreamHub.m3u8">
<div id="1146" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" class="loading">
<div class="tvv-name2">Sony Marathi SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=695&token=StreamHub.m3u8">
<div id="695" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png" class="loading">
<div class="tvv-name2">DD Sahayadri Live</div>
</div>
</a>



<a  href="jioplay.php?id=697&token=StreamHub.m3u8">
<div id="697" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" class="loading">
<div class="tvv-name2">Sony aath Live</div>
</div>
</a>



<a  href="jioplay.php?id=698&token=StreamHub.m3u8">
<div id="698" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png" class="loading">
<div class="tvv-name2">Aakash Aath Live</div>
</div>
</a>



<a  href="jioplay.php?id=699&token=StreamHub.m3u8">
<div id="699" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png" class="loading">
<div class="tvv-name2">DD Malayalam Live</div>
</div>
</a>



<a  href="jioplay.php?id=701&token=StreamHub.m3u8">
<div id="701" class="tvv-item" data-g="Entertainment" data-l="Bhojpuri">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bhojpuri</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png" class="loading">
<div class="tvv-name2">Dangal Live</div>
</div>
</a>



<a  href="jioplay.php?id=702&token=StreamHub.m3u8">
<div id="702" class="tvv-item" data-g="Entertainment" data-l="Odia">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Odia</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png" class="loading">
<div class="tvv-name2">DD Oriya Live</div>
</div>
</a>



<a  href="jioplay.php?id=705&token=StreamHub.m3u8">
<div id="705" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png" class="loading">
<div class="tvv-name2">Polimer TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=707&token=StreamHub.m3u8">
<div id="707" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png" class="loading">
<div class="tvv-name2">Raj TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=708&token=StreamHub.m3u8">
<div id="708" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png" class="loading">
<div class="tvv-name2">Makkal TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=710&token=StreamHub.m3u8">
<div id="710" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png" class="loading">
<div class="tvv-name2">Kairali TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=711&token=StreamHub.m3u8">
<div id="711" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png" class="loading">
<div class="tvv-name2">Captain tv Live</div>
</div>
</a>



<a  href="jioplay.php?id=712&token=StreamHub.m3u8">
<div id="712" class="tvv-item" data-g="Entertainment" data-l="Urdu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Urdu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png" class="loading">
<div class="tvv-name2">DD urdu Live</div>
</div>
</a>



<a  href="jioplay.php?id=706&token=StreamHub.m3u8">
<div id="706" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png" class="loading">
<div class="tvv-name2">DD Saptagiri Live</div>
</div>
</a>



<a  href="jioplay.php?id=713&token=StreamHub.m3u8">
<div id="713" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png" class="loading">
<div class="tvv-name2">DD9 chandana (kannada) Live</div>
</div>
</a>



<a  href="jioplay.php?id=714&token=StreamHub.m3u8">
<div id="714" class="tvv-item" data-g="Entertainment" data-l="Gujarati">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Gujarati</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png" class="loading">
<div class="tvv-name2">DD Girnar Live</div>
</div>
</a>



<a  href="jioplay.php?id=715&token=StreamHub.m3u8">
<div id="715" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png" class="loading">
<div class="tvv-name2">DD Punjabi Live</div>
</div>
</a>



<a  href="jioplay.php?id=716&token=StreamHub.m3u8">
<div id="716" class="tvv-item" data-g="Entertainment" data-l="Urdu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Urdu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png" class="loading">
<div class="tvv-name2">DD Kashir Live</div>
</div>
</a>



<a  href="jioplay.php?id=719&token=StreamHub.m3u8">
<div id="719" class="tvv-item" data-g="Entertainment" data-l="Nepali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Nepali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png" class="loading">
<div class="tvv-name2">Nepal one Live</div>
</div>
</a>



<a  href="jioplay.php?id=720&token=StreamHub.m3u8">
<div id="720" class="tvv-item" data-g="Entertainment" data-l="Assamese">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Assamese</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png" class="loading">
<div class="tvv-name2">DD13 Guwahati NE Live</div>
</div>
</a>



<a  href="jioplay.php?id=723&token=StreamHub.m3u8">
<div id="723" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png" class="loading">
<div class="tvv-name2">Amrita TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=726&token=StreamHub.m3u8">
<div id="726" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png" class="loading">
<div class="tvv-name2">DD5 Podhigai Live</div>
</div>
</a>



<a  href="jioplay.php?id=727&token=StreamHub.m3u8">
<div id="727" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png" class="loading">
<div class="tvv-name2">Vasanth TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=728&token=StreamHub.m3u8">
<div id="728" class="tvv-item" data-g="Entertainment" data-l="Urdu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Urdu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png" class="loading">
<div class="tvv-name2">Zee Salaam Live</div>
</div>
</a>



<a  href="jioplay.php?id=730&token=StreamHub.m3u8">
<div id="730" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png" class="loading">
<div class="tvv-name2">Kasturi Live</div>
</div>
</a>



<a  href="jioplay.php?id=731&token=StreamHub.m3u8">
<div id="731" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png" class="loading">
<div class="tvv-name2">Kairali WE TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=734&token=StreamHub.m3u8">
<div id="734" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png" class="loading">
<div class="tvv-name2">Vissa TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=736&token=StreamHub.m3u8">
<div id="736" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png" class="loading">
<div class="tvv-name2">Maiboli Live</div>
</div>
</a>



<a  href="jioplay.php?id=1066&token=StreamHub.m3u8">
<div id="1066" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/TheQIndia.png" class="loading">
<div class="tvv-name2">The Q Live</div>
</div>
</a>



<a  href="jioplay.php?id=1920&token=StreamHub.m3u8">
<div id="1920" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/TheQ_Kahaniyan.png" class="loading">
<div class="tvv-name2">The Q Kahaniyan Live</div>
</div>
</a>



<a  href="jioplay.php?id=1076&token=StreamHub.m3u8">
<div id="1076" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Andy_Haryana.png" class="loading">
<div class="tvv-name2">Andy Haryana Live</div>
</div>
</a>



<a  href="jioplay.php?id=1100&token=StreamHub.m3u8">
<div id="1100" class="tvv-item" data-g="Entertainment" data-l="Bhojpuri">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bhojpuri</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dishum_TV.png" class="loading">
<div class="tvv-name2">Dishum TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1144&token=StreamHub.m3u8">
<div id="1144" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png" class="loading">
<div class="tvv-name2">Namma TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1151&token=StreamHub.m3u8">
<div id="1151" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png" class="loading">
<div class="tvv-name2">Rangamanch Live</div>
</div>
</a>



<a  href="jioplay.php?id=534&token=StreamHub.m3u8">
<div id="534" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png" class="loading">
<div class="tvv-name2">Dillagi TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=535&token=StreamHub.m3u8">
<div id="535" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png" class="loading">
<div class="tvv-name2">Dhamaal TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=866&token=StreamHub.m3u8">
<div id="866" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png" class="loading">
<div class="tvv-name2">Jio Exclusive HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1232&token=StreamHub.m3u8">
<div id="1232" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png" class="loading">
<div class="tvv-name2">Hi Dost! Live</div>
</div>
</a>



<a  href="jioplay.php?id=978&token=StreamHub.m3u8">
<div id="978" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/TEST1_HD.png" class="loading">
<div class="tvv-name2">TEST1 HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=979&token=StreamHub.m3u8">
<div id="979" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/TEST2_HD.png" class="loading">
<div class="tvv-name2">TEST2 HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=158&token=StreamHub.m3u8">
<div id="158" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Plus_HD.png" class="loading">
<div class="tvv-name2">Star Plus HD IP Live</div>
</div>
</a>



<a  href="jioplay.php?id=367&token=StreamHub.m3u8">
<div id="367" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Utsav.png" class="loading">
<div class="tvv-name2">Star Utsav HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=443&token=StreamHub.m3u8">
<div id="443" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet.png" class="loading">
<div class="tvv-name2">Asianet HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=368&token=StreamHub.m3u8">
<div id="368" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Vijay.png" class="loading">
<div class="tvv-name2">Star Vijay HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=317&token=StreamHub.m3u8">
<div id="317" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Jalsha.png" class="loading">
<div class="tvv-name2">Star Jalsha HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=758&token=StreamHub.m3u8">
<div id="758" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_TV.png" class="loading">
<div class="tvv-name2">Maa TV HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=759&token=StreamHub.m3u8">
<div id="759" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_Gold.png" class="loading">
<div class="tvv-name2">Maa Gold HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=931&token=StreamHub.m3u8">
<div id="931" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Bharat_HD.png" class="loading">
<div class="tvv-name2">Star Bharat HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=181&token=StreamHub.m3u8">
<div id="181" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Plus.png" class="loading">
<div class="tvv-name2">Asianet Plus HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=336&token=StreamHub.m3u8">
<div id="336" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Pravah.png" class="loading">
<div class="tvv-name2">Star Pravah HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=370&token=StreamHub.m3u8">
<div id="370" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna.png" class="loading">
<div class="tvv-name2">Suvarna HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=458&token=StreamHub.m3u8">
<div id="458" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Suvarna_HD.png" class="loading">
<div class="tvv-name2">Suvarna Plus HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1326&token=StreamHub.m3u8">
<div id="1326" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_SD.png" class="loading">
<div class="tvv-name2">Colors Marathi SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1368&token=StreamHub.m3u8">
<div id="1368" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_SD.png" class="loading">
<div class="tvv-name2">Colors SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1369&token=StreamHub.m3u8">
<div id="1369" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bangla_SD.png" class="loading">
<div class="tvv-name2">Colors Bangla SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1370&token=StreamHub.m3u8">
<div id="1370" class="tvv-item" data-g="Entertainment" data-l="Kannada">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Kannada</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_SD.png" class="loading">
<div class="tvv-name2">Colors Kannada SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1518&token=StreamHub.m3u8">
<div id="1518" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Moon_Tv.png" class="loading">
<div class="tvv-name2">Moon TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1730&token=StreamHub.m3u8">
<div id="1730" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab1_TV.png" class="loading">
<div class="tvv-name2">Punjab1 TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1739&token=StreamHub.m3u8">
<div id="1739" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/V24_TV.png" class="loading">
<div class="tvv-name2">V24 TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1762&token=StreamHub.m3u8">
<div id="1762" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Vision.png" class="loading">
<div class="tvv-name2">Channel Vision Live</div>
</div>
</a>



<a  href="jioplay.php?id=1798&token=StreamHub.m3u8">
<div id="1798" class="tvv-item" data-g="Entertainment" data-l="Bhojpuri">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bhojpuri</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Pasand.png" class="loading">
<div class="tvv-name2">Pasand Live</div>
</div>
</a>



<a  href="jioplay.php?id=1799&token=StreamHub.m3u8">
<div id="1799" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_Yuva_Alpha.png" class="loading">
<div class="tvv-name2">Studio Yuva Alpha Live</div>
</div>
</a>



<a  href="jioplay.php?id=1834&token=StreamHub.m3u8">
<div id="1834" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Green_Chillies_TV.png" class="loading">
<div class="tvv-name2">Green Chillies Live</div>
</div>
</a>



<a  href="jioplay.php?id=1209&token=StreamHub.m3u8">
<div id="1209" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png" class="loading">
<div class="tvv-name2">Kalaignar TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1279&token=StreamHub.m3u8">
<div id="1279" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png" class="loading">
<div class="tvv-name2">Manoranjan Grand Live</div>
</div>
</a>



<a  href="jioplay.php?id=1299&token=StreamHub.m3u8">
<div id="1299" class="tvv-item" data-g="Entertainment" data-l="Odia">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Odia</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png" class="loading">
<div class="tvv-name2">Manjari TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1325&token=StreamHub.m3u8">
<div id="1325" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png" class="loading">
<div class="tvv-name2">Colors Infinity SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1327&token=StreamHub.m3u8">
<div id="1327" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png" class="loading">
<div class="tvv-name2">Comedy Central SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1360&token=StreamHub.m3u8">
<div id="1360" class="tvv-item" data-g="Entertainment" data-l="Marathi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Marathi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi_HD.png" class="loading">
<div class="tvv-name2">Zee Marathi HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1371&token=StreamHub.m3u8">
<div id="1371" class="tvv-item" data-g="Entertainment" data-l="Tamil">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Tamil</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil.png" class="loading">
<div class="tvv-name2">Colors Tamil Live</div>
</div>
</a>



<a  href="jioplay.php?id=1393&token=StreamHub.m3u8">
<div id="1393" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" class="loading">
<div class="tvv-name2">Sony Wah Live</div>
</div>
</a>



<a  href="jioplay.php?id=1396&token=StreamHub.m3u8">
<div id="1396" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" class="loading">
<div class="tvv-name2">Sony SD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1475&token=StreamHub.m3u8">
<div id="1475" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/TEST11_HD.png" class="loading">
<div class="tvv-name2">TEST11 HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1476&token=StreamHub.m3u8">
<div id="1476" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/TEST12_HD.png" class="loading">
<div class="tvv-name2">TEST12 HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1514&token=StreamHub.m3u8">
<div id="1514" class="tvv-item" data-g="Entertainment" data-l="Malayalam">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Malayalam</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png" class="loading">
<div class="tvv-name2">Kannur One Live</div>
</div>
</a>



<a  href="jioplay.php?id=1535&token=StreamHub.m3u8">
<div id="1535" class="tvv-item" data-g="Entertainment" data-l="Bhojpuri">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bhojpuri</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhojpuri.png" class="loading">
<div class="tvv-name2">Surya Bhojpuri Live</div>
</div>
</a>



<a  href="jioplay.php?id=1603&token=StreamHub.m3u8">
<div id="1603" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/HitsIndia_HD.png" class="loading">
<div class="tvv-name2">HITS HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1868&token=StreamHub.m3u8">
<div id="1868" class="tvv-item" data-g="Entertainment" data-l="Punjabi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Punjabi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_Plus.png" class="loading">
<div class="tvv-name2">Punjab Plus Live</div>
</div>
</a>



<a  href="jioplay.php?id=1881&token=StreamHub.m3u8">
<div id="1881" class="tvv-item" data-g="Entertainment" data-l="English">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">English</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/E_NBCU.png" class="loading">
<div class="tvv-name2">E! Live</div>
</div>
</a>



<a  href="jioplay.php?id=1925&token=StreamHub.m3u8">
<div id="1925" class="tvv-item" data-g="Entertainment" data-l="Bhojpuri">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bhojpuri</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/MH1_DilSe.png" class="loading">
<div class="tvv-name2">MH1 Dil Se Live</div>
</div>
</a>



<a  href="jioplay.php?id=1956&token=StreamHub.m3u8">
<div id="1956" class="tvv-item" data-g="Entertainment" data-l="Odia">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Odia</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sidharth_TV.png" class="loading">
<div class="tvv-name2">Sidharth TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1961&token=StreamHub.m3u8">
<div id="1961" class="tvv-item" data-g="Entertainment" data-l="Hindi">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Hindi</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shemaroo_TV.png" class="loading">
<div class="tvv-name2">Shemaroo TV Live</div>
</div>
</a>



<a  href="jioplay.php?id=1973&token=StreamHub.m3u8">
<div id="1973" class="tvv-item" data-g="Entertainment" data-l="Telugu">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Telugu</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_HD.png" class="loading">
<div class="tvv-name2">ETV HD Live</div>
</div>
</a>



<a  href="jioplay.php?id=1977&token=StreamHub.m3u8">
<div id="1977" class="tvv-item" data-g="Entertainment" data-l="Bengali">
<div class="tvv-name-s">Entertainment</div><div class="tvv-name-t">Bengali</div>
<br>
<img src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_HD.png" class="loading">
<div class="tvv-name2">Zee Bangla HD Live</div>
</div>
</a>
</div>

</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> 
<script>


  
  function changeText() {
    document.getElementById("btn").innerHTML = "satisfaction";
  }
  
/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});
$(document).ready(function(){var t=$("select.button"),e=$("#headerCount");e.html("select a filter or use search"),t.on("change",function(){t.attr("disabled","disabled");var a=$("#ch_list").find(".tvv-item");a.hide();var i=[];t.each(function(){var t=$(this),e=t.find(":selected").length,a="";if(e>0&&"0"!=t.val()){if(1==e)a+="[data-"+t.data("attribute")+'*="'+t.val()+'"]';else{var l="[data-"+t.data("attribute")+'*="';a+=l+t.val().toString().replaceAll(",",'"],'+l)+'"]'}i.push(a)}});var l=a;i.length>0&&$.each(i,function(t,e){l=l.filter(e)}),l.show(),e.html(l.length+" channels filtered"),t.removeAttr("disabled"),$(".filterinput").val("")}),$(".filterinput").keyup(function(){var t=$(this).val();$("select.button").prop("selectedIndex",0),$(".tvv-item").each(function(){$(this).text().search(new RegExp(t,"i"))<0?$(this).fadeOut():($(this).show(),0)})})});
$(document).ready(function() { var dftr = $('select.dftr'), headerCount = $('#headerCount'); headerCount.html('select a filter or use search'); dftr.on('change', function() { dftr.attr('disabled', 'disabled'); var records = $('#tvvTable').find('.tvv-item'); records.hide(); var critriaAttributes = []; dftr.each(function() { var $this = $(this), $selectedLength = $this.find(':selected').length, $critriaAttribute = ''; if ($selectedLength > 0 && $this.val() != '0') { if ($selectedLength == 1) { $critriaAttribute += '[data-' + $this.data('attribute') + '*="' + $this.val() + '"]'; } else { var $startDataAttribute = '[data-' + $this.data('attribute') + '*="', $endDataAttribute = '"]', $selectedValues = $this.val().toString(); $critriaAttribute += $startDataAttribute + $selectedValues.replaceAll(',', ($endDataAttribute + ',' + $startDataAttribute)) + $endDataAttribute; } critriaAttributes.push($critriaAttribute); } }); var $showRecords = records; if (critriaAttributes.length > 0) { $.each(critriaAttributes, function(i, filterValue) { $showRecords = $showRecords.filter(filterValue); }); } $showRecords.show(); headerCount.html($showRecords.length + ' channels filtered'); dftr.removeAttr('disabled'); $(".fin").val(''); }); $(".fin").keyup(function() { var filter = $(this).val(), count = 0; $('select.dftr').prop('selectedIndex',0); $(".tvv-item").each(function() { if ($(this).text().search(new RegExp(filter, "i")) < 0) { $(this).fadeOut(); } else { $(this).show(); count++; } }); }); });




//<![CDATA[
// Lazy Load
(function(a){a.fn.lazyload=function(b){var c={threshold:0,failurelimit:0,event:"scroll",effect:"show",container:window};if(b){a.extend(c,b)}var d=this;if("scroll"==c.event){a(c.container).bind("scroll",function(b){var e=0;d.each(function(){if(a.abovethetop(this,c)||a.leftofbegin(this,c)){}else if(!a.belowthefold(this,c)&&!a.rightoffold(this,c)){a(this).trigger("appear")}else{if(e++>c.failurelimit){return false}}});var f=a.grep(d,function(a){return!a.loaded});d=a(f)})}this.each(function(){var b=this;if(undefined==a(b).attr("original")){a(b).attr("original",a(b).attr("src"))}if("scroll"!=c.event||undefined==a(b).attr("src")||c.placeholder==a(b).attr("src")||a.abovethetop(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.rightoffold(b,c)){if(c.placeholder){a(b).attr("src",c.placeholder)}else{a(b).removeAttr("src")}b.loaded=false}else{b.loaded=true}a(b).one("appear",function(){if(!this.loaded){a("<img />").bind("load",function(){a(b).hide().attr("src",a(b).attr("original"))[c.effect](c.effectspeed);b.loaded=true}).attr("src",a(b).attr("original"))}});if("scroll"!=c.event){a(b).bind(c.event,function(c){if(!b.loaded){a(b).trigger("appear")}})}});a(c.container).trigger(c.event);return this};a.belowthefold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).height()+a(window).scrollTop()}else{var d=a(c.container).offset().top+a(c.container).height()}return d<=a(b).offset().top-c.threshold};a.rightoffold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).width()+a(window).scrollLeft()}else{var d=a(c.container).offset().left+a(c.container).width()}return d<=a(b).offset().left-c.threshold};a.abovethetop=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollTop()}else{var d=a(c.container).offset().top}return d>=a(b).offset().top+c.threshold+a(b).height()};a.leftofbegin=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollLeft()}else{var d=a(c.container).offset().left}return d>=a(b).offset().left+c.threshold+a(b).width()};a.extend(a.expr[":"],{"below-the-fold":"$.belowthefold(a, {threshold : 0, container: window})","above-the-fold":"!$.belowthefold(a, {threshold : 0, container: window})","right-of-fold":"$.rightoffold(a, {threshold : 0, container: window})","left-of-fold":"!$.rightoffold(a, {threshold : 0, container: window})"})})(jQuery);$(function(){$("img").lazyload({placeholder:"https://telegra.ph/file/06cf144fcc8842219a50b.png",effect:"fadeIn",threshold:"-50"})});
//]]>
</script>


<footer>
<div class="floating-container">
<div class="floating-button" id="share-button"><span class="iconify" data-icon="ci:share" data-width="40" data-height="40"></span></div>
</div>
<script>
$('#share-button').on('click', () => {
  if (navigator.share) {
    navigator.share({
        title: 'WATCH live tv ',
        text: 'Watch live tv',
        url: '/',
      })
      .then(() => console.log('Successful share'))
      .catch((error) => console.log('Error sharing', error));
  } else {
    console.log('Share not supported on this browser, do it the old way.');
  }
});
</script>
</footer>

<div class="stwRainbow"></div>
<div class="stwBlurRainbow"></div>

</body>
</html>
