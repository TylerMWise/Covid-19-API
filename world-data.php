<?php
$contents = file_get_contents("https://api.tylermwise.com/covidstats");
$data = json_decode($contents);
?>

<?php echo $data->world_confirmed; ?>
<?php echo $data->world_deaths; ?>
<?php echo $data->world_recovered; ?>
