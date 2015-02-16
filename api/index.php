<?php
if (!file_exists("content/index.txt"))
echo "---- No content yet ----";
else
{ $filehandle = fopen("content/index.txt", "r");
  while (!feof($filehandle))
  echo fgets($filehandle); }
  ?>
