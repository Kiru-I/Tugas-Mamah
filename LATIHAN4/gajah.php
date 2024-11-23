Latihan 11.1
<?
    $a = 5;
    $b = 7;
    if ($a < $b)
    {
        echo "\$a lebih kecil daripada \$b";
    }
?>

Latihan 11.2
<?
    $a = 5;
    $b = 3;
    echo "\$a = $a <BR>";
    echo "\$b = $b <BR>";
    if ($a < $b)
    {
        echo '$a lebih kecil daripada $b';
    }
    else
    {
        echo '$a lebih besar daripada $b';
    }
?>

Latihan 11.3
<?
    $a = 5;
    $b = 7;
    echo "\$a = $a <BR>";
    echo "\$b = $b <BR>";
    if ($a == $b):
        echo '$s sama dengan $b';
    elseif ($a > $b):
        echo '$a lebih besar daripada $b';
    else:
        echo '$a lebih kecil daripada $b';
    endif;
?>

Latihan 11.4
<?
    $a = 5;
    switch ($a) {
        case 0:
            echo '$a sama dengan 0';
        break;
        case 1:
            echo '$a sama dengan 1';
        break;
        case 2:
            echo '$a sama dengan 2';
        break;
        default:
            echo '$a tidak sama dengan 0, 1, atau 2';
    }
?>

Latihan 11.5
<?
    echo "<H3> Cara 1 </H3>";
    $i = 1;
    while ($i <= 10)
    {
        print $i++;
    }
    echo "<BR>";
    echo "<H3> Cara 2 </H3>";
    $i = 1;
    while ($i <= 10):
        print $i;
        $i++;
    endwhile;
?>

Latihan 11.6
<?
    $i = 2;
    do
    {
        echo "\$i = $i <BR>";
        $i++;
    }
    while ($i < 5);
?>

Latihan 11.7
<?
    for ($i=1;$i<=10;$i++) {
        print $i;
    }
?>

Latihan 11.8
<?
    for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
        }
        echo "\$i = $i <BR>";
    }
?>

Latihan 11.9
<?
    for ($i = 1;$i <= 10;$i++) {
        if (!($i%2)) {
            continue;
        }
        echo "\$i = $i <BR>";
    }
?>