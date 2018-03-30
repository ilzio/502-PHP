<?php

//recebe uma string como parametro, analize e transforma em um timestamp unix

echo strtotime("now");
echo "<br>";

echo strtotime("+1 year");
echo "<br>";
echo strtotime("+1 week");
echo "<br>";
echo strtotime("+1 day 2 weeks 4 hours 1 second");
echo "<br>";

echo strtotime("+10 centuries");
echo "<br>";

//com date e strtotime como segundo parametro, e' mas util

echo date("d/m/Y", strtotime("+1 year")); //shows today next year
echo "<br>";
echo date("d/m/Y", strtotime("+200 year")); //shows today next year
