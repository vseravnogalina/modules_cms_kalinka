<?php //if(!defined ('BUGIT')) exit ('Ошибка соединения');
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2016 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 0.9.2
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($_POST['confirmation'])) $confirmation=htmlspecialchars(strip_tags(trim($_POST['confirmation'])));//Разрешение на скачивание	
if(isset($_POST['unitload'])) echo $unitload=htmlspecialchars(strip_tags(trim($_POST['unitload'])));//Узел скачивания, например book
if(isset($_POST['ip'])) {
   echo $ip=htmlspecialchars(strip_tags(trim($_POST['ip']))); //ip адрес скачивающего $ip=str_replace(".","",$ip);
}
if(isset($_POST['nameware'])) $nameware=intval($_POST['nameware']);//id страницы
if(isset($confirmation)) {//Условие: пользователь должен иметь ip адрес и должно быть известно id страницы
  if(isset($ip)) {
    echo $latprod=$unitload.$nameware;//Имя скачиваемого файла 
  }
  else die("Здрасьте, пожалуйста! Вы кто?");
if(isset($latprod)) echo $file= $unitload."/".$latprod.".zip";
if(empty($file)) die("Неверное имя файла!");
if(!file_exists("$file")) die("Файл отсутствует!");
if(isset($confirmation)) header("Location:".$file);
} 
