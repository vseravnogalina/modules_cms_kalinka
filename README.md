# modules_cms_kalinka
   Это хранилище папок модулей, встраиваемых в cms kalinka. В ядре предустановлены: модуль входа modcreg и модуль обратной связи mdObr. Модуль Обратная связь имеет настройки, выполняемые через административную панель. Настройки модулей расположены по адресу cms-kalinka/office/set/имя модуля.php. Не все модули имеют настройки. Те, которые имеют, отображаются в специальном блоке административной панели set. Переход к настройкам отображается в боковом меню страницы Общее административной панели.
Отсюда скачивать модули не нужно, потому что для их установки требуется конкретная упаковка. Здесь представлен состав и файлы модулей.

   Modul_freeload обеспечивает скачивание каких-либо файлов с указанной страницы. Файлы для скачивания могут быть как одиночными, так и группой, упакованной в архив zip. С одной страницы можно скачать только 1 файл. Имя скачиваемого на странице файла должно отвечать следующим условиям: имя составное и состоит из имени узла и id страницы. Например, если файл предназначен для скачивания в узле book, на странице 12, имя файла должно быть book12.zip или book12.jpg book12.txt, и так далее. id страницы можно узнать, заглянув в БД или в админке при редактировании статьи.
