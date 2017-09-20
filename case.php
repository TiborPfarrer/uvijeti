<!--ispituje jesu li brojevi manji ili veci od broja 500-->
<?php

$var1=140;
$var2=150;

if (($var1<500) AND ($var2<500))
{
    echo "brojevi su manji od 500";
}
elseif (($var1>500) AND ($var2<500))
{
    echo "broj 1 je veci od 500, a broj 2 je manji";
}
elseif (($var1<500) AND ($var2>500))
{
    echo "broj 2 je veci od 500, a broj 1 je manji";
}
else
{
    echo "oba broja su veca od 500";
}
?>