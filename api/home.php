<?php
if (!file_exists("content/home.txt"))
echo "---- No content yet ----";
else
{ $filehandle = fopen("content/home.txt", "r");
  while (!feof($filehandle))
  echo fgets($filehandle); }
  ?>
