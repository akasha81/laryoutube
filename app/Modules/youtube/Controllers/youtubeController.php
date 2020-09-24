<?php
namespace App\Modules\youtube\Controllers;

use App\Http\Controllers\Controller;

class YoutubeController extends Controller

{


     
    

public function index()

{
    
  $video_id = '0KSOMA3QBU0';
  $api_key = '<INSERT_API_KEY_HERE>';
   $json_result = file_get_contents ("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=$video_id&key=$api_key");
    
  $obj = json_decode($json_result);
 // var_dump($obj);
 //var_dump($obj->items[0]);

$title = $obj->items[0]->snippet->title; //название видео
$date = $obj->items[0]->snippet->publishedAt; //дата публикации
//$channelId = $obj->items[0]->snippet->channelId;
//$etag=$obj->items[0]->etag;
$id=$obj->items[0]->id;
$description_big=$obj->items[0]->snippet->description;
$description=substr($description_big,515,strlen($description_big));
// echo 'channelId=='.$channelId;
// add cahel Katy pary
//Get videos from channel by YouTube Data API

$maxResults = 10;
$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$obj->items[0]->snippet->channelId.'&maxResults='.$maxResults.'&key='. $api_key.''));



return view('youtube::index', [
  'id' => $id,
  'description' => $description,
  'title' => $title,
  'date' => $date,
 'videoList' => $videoList,
  

 ]);

}

}