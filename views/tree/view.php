<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 28.03.2019
 * Time: 11:19
 */
$key = 'VKw2YhjOPoSAVQImmsKr1PUC74t1weh9';
$url = "http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key={$key}&limit=1";

$response = file_get_contents($url);

$result = json_decode($response, true);

if(isset($result['data'][0]['user']['banner_image'])) {
   $img = $result['data'][0]['user']['banner_image'];
}
?>

<div class="thumbnail">
    <img class="img-responsive" src="<?=$img?>" alt="photo">
</div>


