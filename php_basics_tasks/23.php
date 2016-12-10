<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 10.12.2016
 * Time: 15:23
 */
echo "Text1 echo";
echo <<<TWO
<p>Для отображения большого <br> количества текста используют 
синтаксис heredoc</p> 
TWO;
print "Text2 print ";
print_r("Text3 print_r");