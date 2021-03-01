<?php
$contents = file_get_contents("https://tylermwise.com/digital-projects/api/covidstats");
$data = json_decode($contents);
?>

<?php echo $data->about; ?>
<?php echo $data->symptoms; ?>
<?php echo $data->self_isolation; ?>
<?php echo $data->treatments_overview; ?>
<?php echo $data->self_care; ?>
<?php echo $data->other_treatments; ?>
<?php echo $data->prevention; ?>
