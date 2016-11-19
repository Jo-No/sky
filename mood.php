<!DOCTYPE html>
<html>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="mood style.css">
  <head>
    <title> How are you feeling? </title><br>
  </head>

  <body>
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Sky_Logo_seit_Dezember_2015.png" width="100" >
    <h1>How are you feeling?</h1>
    <ul class="topnav" id="nav">
        <li><a href="/home">Moodslider</a></li>
        <li><a href="/upload">Upload content</a></li>
        <li><button onclick="myAjax()">Click here</button></li>
    </ul>

<div>
  <form method="post" action="mood functions.php" >
      <div class="slide">
        <label> Calm </label>
        <input type="range" min="-1" max="1" name="ca">
        <label> Agitated </label>
      </div>
      <div class="slide">
        <label> Happy </label>
        <input type="range" min="-1" max="1" name="hs">
        <label> Sad </label>
      </div>
      <div class="slide">
        <label> Tired </label>
        <input type="range" min="-1" max="1" name="tw">
        <label> Wide Awake </label>
      </div>
      <div class="slide">
        <label> Scared </label>
        <input type="range" min="-1" max="1" name="sf">
        <label> Fearless </label>
      </div>
    <input type="submit" value="Find a film" action="mood suggestion.php">
  </form>
</div>



<ul class="films" >
    <li><img id="1" class="films" src="images/Mad_Max.jpeg" width="100" height="120" padding=10px/><br>
      <label> No content </label></li>
    <li><img id="2" src="images/The_Lion_King.jpeg" width="100" height="120"/><br>
      <label> No content </label></li>
    <li><img id="3" src="images/The_Shining.jpeg" width="100" height="120"/><br>
      <label> No content </label></li>
    <li><img id="4" src="images/Inside_Out.jpeg" width="100" height="120"/><br>
      <label> No content </label></li>
    <li><img id="5" src="images/Alice_In_Wonderland.jpeg" width="100" height="120"/><br>
      <label> No content </label></li>
</ul>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript">
function myAjax () {
$.ajax( { type : 'POST',
          data : { },
          url  : 'films.php',              // <=== CALL THE PHP FUNCTION HERE.
          success: function ( data ) {
            alert( data );               // <=== VALUE RETURNED FROM FUNCTION.
          },
          error: function ( xhr ) {
            alert( "error" );
          }
        });
}
    </script>



  </body>
</html>
