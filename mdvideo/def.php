<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2016 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 0.9.2
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($unit)) {
$viewvideo=$unit.$id;
if(file_exists("modul/mdvideo/$unit/"))
        if(file_exists("modul/mdvideo/$unit/$viewvideo.ogg")) { 
?>
<video width="100%" height="auto" controls="">
   <source src="modul/<?php echo $pos[17] ?>/<?php echo $unit ?>/<?php echo $viewvideo ?>.ogg" type='video/ogg; codecs="theora, vorbis"'>
   <source src="modul/<?php echo $pos[17] ?>/<?php echo $unit ?>/<?php echo $viewvideo ?>.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
   <!--<source src="1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
   <a href="modul/<?php echo $pos[17] ?>/<?php echo $unit ?>/<?php echo $id ?>.mp4">Скачайте видео</a>.
  </video><?php }
} ?>
