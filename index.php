<?php  
    require 'functions.php';    
?>

<h1>We can't go to the bar. But we can still tip our bartenders.</h1>
<p>When you grab a drink out of the fridge, hit this button and tip the bartender.</p>

<?php $r = get_random_restaurant(); ?>

<div class="entry">
    <h2><?php echo "$r[1], $r[0]"; ?></h2>
    <p><?php echo "VENMO -- $r[2] | CASHAPP -- $r[3] | PAYPAL -- $r[4]"; ?></p>
    <button onClick="window.location.reload();">Refresh Page</button>
</div>