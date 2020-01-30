<!-- sample function -->
<?php
  function greet($name, $color) {
    echo "<p>Hello my name is $name and my favorite color is $color.w</p>";
  }
  greet('Kyle', 'blue');
?>

<!-- sample built in wordpress functions -->
<h1><?php bloginfo('name'); ?></h1>

<p><?php bloginfo('description'); ?></p>

<!-- sample array with while loop-->
<?php
  $names = array('Kyle', 'David', 'Wymer');
  $count = 0;
  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
  }
?>

<p>Hi, my name is <?php echo $names[0];?>!</p>

<!-- sample loop  -->
<?php
  $count = 1;

  while($count < 100) {
    echo "<li>$count</li>";
    $count++;
  }
?>
