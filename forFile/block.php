<?php
/*
Если наш веб-сайт посещает множество людей, которые одновременно обращаются к одному и тому же файлу, 
то мы можем столкнуться с некоторыми проблемами. В частности, 
при одновременной попытке записи несколькими пользователями файл может быть поврежден, либо выдать неожиданные результаты, 
если один человек считывает файл, а другой одновременно записывает его. Возникает проблема синхронизации доступа пользователей.

Чтобы ограничить доступ к файлу, в PHP используется функция flock(). 
Эта функция блокирует доступ к файлу, когда он уже занят одним пользователем, а все остальные запросы ставит в очередь. 
При освобождении файла он разблокируется, передается первому в очереди пользователю и снова блокируется.

Функция имеет следующее определение:
*/
// bool flock (resource $handle , int $operation [, int &$wouldblock ])
// Первый параметр - дескриптор файла, возвращаемые функцией fopen().

// Второй параметр указывает на тип блокировки. Он может принимать следующие значения:
// LOCK_SH (или число 1): разделяемая блокировка (чтение файла)
// LOCK_EX (или число 2): исключительная блокировка (запись файла)
// LOCK_UN (или число 3): для снятия блокировки
// LOCK_NB (или число 4): эта константа используется только вместе с одной из предыдущих в битовой маске (LOCK_EX | LOCK_NB), 
// если не надо ждать пока flock() получит блокировку

// Третий необязательный параметр $wouldblock будет содержать true, если блокировка будет блокирующей.

// При успешном выполнении функция flock возвратит значение true, а в случае ошибки - false.
// Используем flock для ограничения доступа к файлу:

  // $fd = fopen("hello.txt", 'r+') or die("Ошибка открытия файла");
  // $str = "Hello World!";
  
  // if (flock($fd, LOCK_EX)) // установка исключительной блокировки на запись
  // {
  //     fseek($fd, 0, SEEK_END); //переход в конец файла
  //     fwrite($fd, "$str") or die("Ошибка записи"); // запись
  //     flock($fd, LOCK_UN); // снятие блокировки
  // }
  // fclose($fd);
?>

<?php
  /*
  При изменении файла блокировка ставится непосредственно перед внесением изменений, а снимается сразу после их внесения. 
  Иначе программа может замедлить свою работу. 
  Поэтому вызов, блокирующий файл: flock($fd, LOCK_EX) поставлен непосредственно перед вызовом функции fwrite($fd, "$str"). 
  А снятие блокировки с помощью константы LOCK_UN идет сразу после записи.
  Обратите внимание, что при открытии файла здесь использовался режим 'r+', 
  а не 'w' или 'w+', так как 'w' и 'w+' уже подразумевают изменение файла. 
  Поэтому при блокировке, даже если надо делать запись, не рекомендуется использование 'w' и 'w+'.
  Если нам надо стереть все содержимое файла и перезаписать файл по-новому, то мы можем воспользоваться функцией ftruncate:
  */
  $fd = fopen("hello.txt", 'r+') or die("Ошибка открытия файла");
  $str = "Hello World!";
  
  if (flock($fd, LOCK_EX)) // установка исключительной блокировки на запись
  {
      ftruncate($fd, 0); // очищаем файл
      fwrite($fd, "$str") or die("Ошибка записи"); // запись
      flock($fd, LOCK_UN); // снятие блокировки
  }
  fclose($fd);
?>