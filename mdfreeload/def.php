<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($unit) && $unit!=="common" && $unit!=="payware" && $unit!=="shop") {
 if(file_exists("modul/mdfreeload/$unit"))
        if(!empty("modul/mdfreeload/$unit")) {
                        if(isset($id) && $id>1)  {  
                          $fileforload=$unit.$id.".zip";     
           if(file_exists("modul/mdfreeload/$unit/$fileforload")) {
?>
<!--Форма отдачи файла на скачивание -->
<form action="modul/<?php echo $pos[19] ?>/freeload.php" method="POST">
<input type="hidden" name="nameware" value="<?php echo $id ?>" />
<input type="hidden" name="unitload" value="<? echo $unit ?>" >
<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" >
<br><input class='button' type='submit' name='confirmation' value="Скачать!">
</form>
<?php } 
  }
 }
} ?>
