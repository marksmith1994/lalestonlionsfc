<?php
    $access_token = "7899337414.9ebf0e5.41a41d2ccf8e486eb02068742ac002b0";
    $photo_count = 9;

    $json_link = "https://api.instagram.com/v1/users/self/media/recent/?";
    $json_link .="access_token={$access_token}&count={$photo_count}";
    $json = file_get_contents($json_link);
    $pages = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);

    $posts = array();

    foreach ($pages['data'] as $page){

        $pic_text = $page['caption']['text'];
        $pic_link = $page['link'];
        $pic_src=str_replace("http://", "https://", $page['images']['standard_resolution']['url']);

        $posts [] = array(
            'link'  =>  $pic_link,
            'img'   =>  $pic_src
        );

    }

    $html = '';

    foreach ($posts as $p) {
 
        $bg     = ($p['img']) ? $p['img']->src : 'http://placehold.it/300x300';
        
        $html .= '<a href="' . $p['link'] . '>';
            $html .= '<img src="' . $bg . '">';
        $html .= '</a>';

        echo '<pre>' . print_r($p, true) . '</pre>';
    }



    // echo "<div class='col-md-4 item_box'>";
// echo "<a href='{$pic_link}' target='_blank'>";
//   echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
// echo "</a>";
// echo "<p>";
// echo "<p>";
// echo "<div style='color:#888;'>";
//     echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
// echo "</div>";
// echo "</p>";
// echo "<p>{$pic_text}</p>";
// echo "</p>";
// echo "</div>";
?>