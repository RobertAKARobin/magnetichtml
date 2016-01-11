<?php

function tag($text){
  $text = htmlentities($text);
  if(preg_match("/^(\&amp;|&lt;!D)/", $text)){
    $tag = "<span class='c'>";
  }else if(preg_match("/^\&lt;[\/a-zA-Z0-9]*\&gt;$/", $text)){
    $tag = "<span>";
  }else if(preg_match("/(^-|^\&lt;!|^,*w)/", $text)){
    $tag = "<span class='b'>";
  }else{
    $tag = "<span class='c'>";
    $text = preg_replace_callback("/(^&lt;[a-z]+|\/?&gt;$)/", function($match){
      return "<span class='t'>" . $match[0]. "</span>";
    }, $text);
    $text = preg_replace_callback("/\#/", function($match){
      return "<span class='b'>" . $match[0] . "</span>";
    }, $text);
  }
  $text = preg_replace("/,/", "&nbsp;", $text);
  return $tag . "&nbsp;" . $text . "&nbsp;" . "</span>" . PHP_EOL;
}

function tagsFromString($text){
  $output = "";
  $tags = preg_split("/\n/", $text);
  foreach($tags as $row){
    $row = preg_split("/\s\s/", $row);
    $line = "";
    foreach($row as $tag){
      $line .= tag($tag);
    }
    $output .= "<div class=\"tags\">" . PHP_EOL . $line . "</div>" . PHP_EOL;
  }
  return $output;
}

?>
