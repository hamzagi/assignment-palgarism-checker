<?php


if(isset($_POST['save']))
{	 
   $assignment1 = $_POST['assignment1'];
   $assignment2 = $_POST['assignment2'];
$new_str1 = str_replace(' ', '', $assignment1);
$new_str2 = str_replace(' ', '', $assignment2);


similar_text($new_str1,$new_str2,$percent);
if ($percent > 70) {
   $result = "THE TWO ASSIGNMENTS ARE " . $percent . "% SIMILAR THUS THE TWO ASSIGNMENTS ARE LIKELY TO BE UNAUTHENTIC";
    }if ($percent < 70) {
    $result = "THE TWO ASSIGNMENTS ARE " . $percent . "% SIMILAR THUS THE TWO ASSIGNMENTS ARE LIKELY TO BE AUTHENTIC";
    } 


}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.head{
background: rgb(127, 195, 250);
border-radius: 10px;
padding: 1px;
margin-bottom:10px ;
}

.a{
    background: rgb(255, 160, 250);
    border-radius: 10px;
    padding: 1px;
    margin-bottom: 20px;
    
}
.b{
    background: rgb(130, 238, 171);
    border-radius: 10px;
    margin-left: 15px;
    padding: 20px;
    
}
.c{
    background: rgb(238, 190, 119);
    border-radius: 10px;
    margin-left: 15px;
    padding: 20px;
    
}

.cont{
 background: url(bg.jpg);  
 
}
.dev{
    text-align: right;
    color: white;
    font-size: 10px;
}
.result{
    background-color: violet;
    border-radius: 10px;
    margin-left:10px;
}
    </style>
</head>
<body>
    <div class="cont">
<div class="head">
<h1>ASSIGNMENT PLAGIARISM CHECKER</h1>
</div>
<form action="index.php" method="POST" enctype="multipart/form-data"> 
<div class="a">
<h3>PLEASE ENTER THE RESPECTIVE ASSIGNMENTS IN THE BELOW GIVEN FIELDS</h3>
</div>

<div class="b">
<label for="b">Assignment1</label>
<textarea name="assignment1" id="assignment1" cols="50" rows="15"></textarea>
</div>
<br>
<div class="c">
<label for="c">Assignment2</label>
<textarea name="assignment2" id="assignment1" cols="50" rows="15"></textarea>
</div>
<br>
<input type="submit" name="save">
<br>
<br>
<div class="result">
    <br>
   <h3>RESULT:<?php
echo$result;
?></h3>
   <br>
</div>


</form>
<br>
<br><br>
<div class="dev">
    <p>DEVELOPED BY HAMZA GIRACH</p>
</div>

</div>
</body>
</html>