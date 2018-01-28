<?php if(!defined('BUGIT')) exit ( "Ошибка соединения" );if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($radiobutton)) {
if(file_exists("../modul/mdvideo"))
 if(file_exists("../modul/mdvideo/$radiobutton")) {
     $modulvid=array();$drmod="../modul/mdvideo/$radiobutton";$skip=array('.','..');
        if(!empty($drmod)) $mdsh=scandir($drmod);
           foreach($mdsh as $shmod) {
             if(!in_array($shmod, $skip)) $modulvid[]=$shmod;
            }
     clearstatcache();	
}

?>
<a href="avpult.php?unit=set&set=mdvideo.php">Изменить выбор узла</a>
    <p>
     Имена файлов должны быть записаны на латинице
   </p>
    <h3>Загрузка файлов</h3>
      <h4>Подготавливаются файлы узла <?php echo $newr; ?> </h4>
          <form class="bord" enctype="multipart/form-data" method="POST">
             <input type="hidden" name="modulname" value="mdvideo">
             <input type="hidden" name="kind" value="video">
             <input type='hidden' name='radiobutton' value="<?php echo $radiobutton ?>" />
<?php         for ($i=0; $i<9; $i++) { ?>
               <p>Выбрать файл:
               <input name="download[]" type="file" />
<?php } ?>
<input type="submit" value="Загрузить" /></p>
</form>
<?php }
if(isset($modulvid) && count($modulvid)>0) {
    echo "<h3>Загружены файлы</h3>";
    echo '<form class="bord" method="POST">
             <input type="hidden" name="kind" value="video">
            <input type="hidden" name="radiobutton" value="'.$radiobutton.'" />
            <select name="delizo" size=1>';
               foreach($modulvid as $val) {
                  echo '<option>'.$val.'</option>';
                  }
        echo '</select>
              <input type="submit" name="takeaway" value="Удалить!">
          </form>';
} 
?>     <h3>Загрузка видеофайлов</h3>
<?php if(empty($radiobutton)) {
          selectUnit($arrblock);
        } ?>
<h3>Администрирование узла Общее - страница настройки модуля Video</h3>
