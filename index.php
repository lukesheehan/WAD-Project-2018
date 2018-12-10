<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BBC sports API</title>
<style>
.card-image{
display: block;
margin-left:40px;
margin-right:45px;
align:center;
}

.card-content{
display: block;
<!--margin-left:45px;-->
align:center;
<!--margin-right:45px;-->
width: 100%;
}

.card{
display: block;
margin: 0 auto;
width:1100px;
align:center;
}


</style>


</style>
  </head>
  <body>
    <h1>BBC sports API</h1>
	
<!--https://github.com/gauravsavanur07/Clickfy/blob/master/resources/views/welcome.blade.php?fbclid=IwAR31XpOKfl0a5QIguRTgv-re24IbD56jSvDLt6R6qytmLuYi2tQ7TbutQs4-->
	
<?php
$urlArticles = file_get_contents('https://newsapi.org/v2/top-headlines?sources=bbc-sport&apiKey=83c30da78b3b4496ba61d1deb5e8cee6');
            $urlArticlesArray = json_decode($urlArticles, true);
             $articles = $urlArticlesArray['articles'];
             for($i = 0; $i < count($articles); $i++) {
               $sites = $urlArticlesArray['articles'][$i];
               $output = "<ul>";
echo' <div class="card">';
echo'  <div class="card-image">';
  echo '<div style="height: 500px;width:1000px">
     <img src="'.$sites['urlToImage'].'" alt=" " style="width: 100%;max-height: 100%" />
</div>';
  echo '  <span class="card-content">'.$sites['content'].'</span>'; 
 echo '  <span class="card-description">'.$sites['description'].'</span>';
  echo '<a href="'.$sites['url'].'" type="button" class="btn btn-primary">Go to full article</a>';
echo '</div>';
echo'</div>';
echo '<br>';
               }

			   

			   
			   
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>