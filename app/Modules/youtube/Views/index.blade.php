<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
     
        <meta name="description" content="test">
        <meta name="keywords" content="youtube API">
        <meta name="author" content="Anna">
        <title>test youtube API</title>
        <!-- Bootstrap core CSS -->
     <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       
		
	
        <style type="text/css">
    .youtube-video h2{font-size: 12px;}
</style>
</head>
<body bgcolor="#4682B4">


<h1 align="center"style="color:#ff0099; font-size:30px">About Katu Pary</h1>

   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
            
            <h4>{!! $title !!}</h4><br>
            Date add : {!! $date !!} </br>
        <iframe 
         src="https://www.youtube.com/embed/{{$id}}?modestbranding=1;rel=0;controls=1;showinfo=0;autoplay=1;iv_load_policy=3"frameborder="0" allowfullscreen>
        </iframe> <p>
        <i> Lyrics</i>  : {!! $description !!} </br>

        @php
       
        foreach($videoList->items as $item){
   
    if(isset($item->id->videoId)){
        echo '<div class="youtube-video">
        <div class="row">
           <div class="col-lg-12">
            <div class="col-lg-4 col-sm-6 col-xs-6 youtube-video">
        
                <iframe width="250" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                    <h2>'. $item->snippet->title .'</h2>
            </div>
         </div>
         </div>
     </div>';
    }
}

          @endphp
    </nav> 
  </div>
</body>
</html>