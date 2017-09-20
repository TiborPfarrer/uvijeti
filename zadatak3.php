<!--dijeli broj sa dva manja broja i gleda jeli djeljivi s tim brojevima-->

<?php
$var=950;
$var1=5;
$var2=10;

if (($var%$var1==0) AND ($var%$var2==0))
{
    echo "broj ",$var," je djeljiv sa ",$var1, " i sa ", $var2;
}
elseif ($var%$var1==0)
{
    echo "broj ",$var," je djeljiv sa ",$var1;
}
elseif ($var%$var2==0)
{
    echo "broj ",$var," je djeljiv sa ",$var2;
}
else
{
    echo "broj nije djeljiv sa ",$var1," niti sa ", $var2;
}
?>