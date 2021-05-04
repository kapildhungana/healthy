<?php
include("simple_html_dom.php");
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</head>
<body>
<!-- <header class="nav">
        <span >
            <img src="icon.png">
            </span>
        <span class="bold">Healthy living</span>
        <span class="left">
            <button><a class="link" href="login.php">login</a></button>
            <button><a class="link" href="signup.php">signup</a></button>
        </span>
    </header> -->
    <ul>
      <li><img src="image/icon.png"></li>
      <li>Healthy life</li>
      <li><?php echo $_SESSION['username']?></li>
      <li style="float:right"><a href="logout.php">Signout</a></li>
    </ul>
     <div class="diet">
        <h5>Diet plan for you:</h5><br>
        <li><?php echo $_SESSION['id']?></li>


     </div>
     <div class="chall">
        <h5>Todays daily challenges:</h5><br>
        <div >
            <input class="check" type="checkbox" name="Burn 250 calories" id="id1" onclick=progress()>Burn 250 calories
        </div>
        <div >
            <input class="check" type="checkbox" name="Drink 4 liters of water" id="id2" onclick=progress()>Drink 4 liters of water
        </div>
        <div>
            <input class="check" type="checkbox" name="Meditate for 30 mins" id="id3" onclick=progress()>Meditate for 30 mins
        </div>
        <div>
            <input class="check" type="checkbox" name="Follow the diet given above" id="id4" onclick=progress()>Follow the diet given above
        </div>
        <br>
        <div id="myProgress">
          <div id="myBar"></div>
        </div>
     </div>

          
    <div class="news">
         <h3 style="color:blue">Corona virus info:</h3>
         <h4 style="color:blue">World wide:</h4>
         <?php 
         $html=file_get_html('https://www.worldometers.info/coronavirus/');
         $t=$html->find('#maincounter-wrap span',0)->plaintext;
         $r=$html->find('#maincounter-wrap span',1)->plaintext;
         $d=$html->find('#maincounter-wrap span',2)->plaintext;
         echo "<h5 style=\"color:grey\">Total Cases:    $t</h5>
               <h5 style=\"color:red\">Total Deaths:   $d</h5>
               <h5 style=\"color:green\">Total Recovery: $r</h5>"?>
        <h4 style="color:blue">In Nepal:</h4>
         <?php 
         $html1=file_get_html('https://www.worldometers.info/coronavirus/country/nepal/');
         $t1=$html1->find('#maincounter-wrap span',0)->plaintext;
         $r1=$html1->find('#maincounter-wrap span',1)->plaintext;
         $d1=$html1->find('#maincounter-wrap span',2)->plaintext;
         echo "<h5 style=\"color:grey\">Total Cases:    $t1</h5>
               <h5 style=\"color:red\">Total Deaths:   $d1</h5>
               <h5 style=\"color:green\">Total Recovery: $r1</h5>"?>

        <h4 style="color:blue">In India:</h4>
         <?php 
         $html2=file_get_html('https://www.worldometers.info/coronavirus/country/india/');
         $t2=$html2->find('#maincounter-wrap span',0)->plaintext;
         $r2=$html2->find('#maincounter-wrap span',1)->plaintext;
         $d2=$html2->find('#maincounter-wrap span',2)->plaintext;
         echo "<h5 style=\"color:grey\">Total Cases:    $t2</h5>
               <h5 style=\"color:red\">Total Deaths:   $d2</h5>
               <h5 style=\"color:green\">Total Recovery: $r2</h5>"?>

        <h4 style="color:blue">In USA:</h4>
         <?php 
         $html3=file_get_html('https://www.worldometers.info/coronavirus/country/us/');
         $t3=$html3->find('#maincounter-wrap span',0)->plaintext;
         $r3=$html3->find('#maincounter-wrap span',1)->plaintext;
         $d3=$html3->find('#maincounter-wrap span',2)->plaintext;
         echo "<h5 style=\"color:grey\">Total Cases:    $t3</h5>
               <h5 style=\"color:red\">Total Deaths:   $d3</h5>
               <h5 style=\"color:green\">Total Recovery: $r3</h5>"?>
        
        <h4>For more information on corona:<a href="https://www.worldometers.info/coronavirus/country/">link</a> </h4>
        <h3>(This section is just to fill up the page)</h3>
        
         
     </div>
     <div class="idea">
            
     </div>
    
</body>
<script>
    function progress(){
    //console.log("clicked");
    var ch=document.getElementsByClassName("check");
    var c=0;
    for(i=0;i<ch.length;i++){
         if(ch[i].checked==true){
           c+=1;
       }
    }
    document.getElementById("myBar").style.width=25*c+"%";
    // var pro=document.getElementsByClassName("progress");
    //     for(j=0;j<pro.length;j++){
    //         if(pro[j].className==c){
    //             document.getElementsByClassName(j).style.display=block;
    //         }
    //         else{
                
    //         }
    //     }
        
    }
    function Clicked(){
    console.log("clicked!!")
} 
</script>
</html>