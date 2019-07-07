<?php

$loggedIn = false;

$arr = [1, 5, 4, 8, 45, 9];

## You can use ternary operator in PHP

# The following is an example of a nested ternary operator
//
//$age = 7;
//$score = 12;
//
//echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

?>

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if ($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach ($arr as $value): ?>
        <?php echo $value; ?>
    <?php endforeach;?>
</div>

<div>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor;?>
</div>


