<?php
$filename = 'file.txt';
if (file_exists($filename)) {
    echo "В последний раз обращение к файлу $filename было произведено: " . date("F d Y H:i:s.", fileatime($filename));
}
////////////////////////////////////////
$filename = 'file.txt';
echo 'Размер файла ' . $filename . ': ' . filesize($filename) . ' байт';//размер файла.
////////////////////////////////////////
/* Получаем статистику файла */
$stat = stat('C:\\OpenServer\\domains\\php290916\\file.txt');

/*
 * Выводим последнее время доступа к файлу, это тоже самое, что и
 * вызов fileatime()
 */
echo 'Последнее время доступа: ' . $stat['atime'];

/*
 * Выводим время изменения файла, это тоже самое, что и
 * вызов filemtime()
 */
echo 'Время изменения: ' . $stat['mtime'];

/* Выводим номер устройства */
echo 'Номер устройства: ' . $stat['dev'];
///////////////////////////////////////
echo filetype('/etc/passwd');  // file
echo filetype('/etc/');        // dir
//////////////////////////////////////
var_dump(is_file('file.txt')) . "\n";
var_dump(is_file('/usr/bin/')) . "\n";
/////////////////////////////////////
$link = 'uploads';

if (is_link($link)) {
    echo(readlink($link));
} else {
    symlink('uploads.php', $link);
}
///////////////////////////////////
var_dump(is_dir('file.txt'));
var_dump(is_dir('bogus_dir/abc'));

var_dump(is_dir('..')); // на одну директорию выше
//////////////////////////////////

?>
