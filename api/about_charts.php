<?php
if (!file_exists("content/about_charts.txt"))
echo "---- No content yet ----";
else
{ $filehandle = fopen("content/about_charts.txt", "r");
  while (!feof($filehandle))
  echo fgets($filehandle); }
  ?>
