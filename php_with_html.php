<?php
/*  html,css-static web
    php-dynamic web (database inculcated)
*/

$h2_color="skyblue";
echo  "<h1 style ='color:green'> php with html</h1>";
echo  "<h3 style ='color:blue'> php with html</h3>";
?>

<?php
$name="anil sidhu";
echo "<h1 style = 'color:orange'>My name is $name</h1>";
?>

<h2 style = 'color:red'>
    My real name is <?php echo $name ?>

</h2>

<h2 style='color:
    <?php echo $h2_color; ?>'>
    <?php echo "This is php website";?>
</h2>

<h2 style='color:
    <?php echo $h2_color; ?>'><?php echo "$name"?></h2>
<h2 style='color:
    <?php echo $h2_color; ?>'>my name is <?php echo "$name"?></h2>
