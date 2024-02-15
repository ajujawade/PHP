<?php
echo strcmp("Hello World!","Hello World!");
echo"<br>";
echo strcasecmp("Hello      World!","HELLO WORLD!");
echo"<br>";
echo strncmp("Hello World","Hello Earth!",6);
echo "<br>";
echo strncasecmp("Hello World","hello earth!",6);
echo "<br>";
echo strnatcasecmp("2Hello    World","10Hello WORLD!");
echo "<br>";
echo strnatcmp("10Hello World","2Hello WORLD!");
?>