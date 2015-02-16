<?php
if (!file_exists("content/about_us.txt"))
echo "---- No content yet ----";
else
{ $filehandle = fopen("content/about_us.txt", "r");
  while (!feof($filehandle))
  echo fgets($filehandle); }
  ?>
