<?php
$contents = file_get_contents("https://api.tylermwise.com/covidstats");
$data = json_decode($contents);
?>

<?php echo $data->daily_tested; ?>
<?php echo $data->tested; ?>
<?php echo $data->daily_confirmed; ?>
<?php echo $data->infected; ?>
<?php echo $data->deceased; ?>
<?php echo $data->deceased; ?>
