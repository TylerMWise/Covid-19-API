# Covid UK Data API
If you are wanting to have a Covid 19 data page, thise API will certainly help. Too start off you need to add this PHP code

```php
<?php
$contents = file_get_contents("https://tylermwise.com/digital-projects/api/covidstats");
$data = json_decode($contents);
?>
```

Now to get the chosen bit of data you can use any of these bits of code:
```php
<?php echo $data->daily_tested; ?>
<?php echo $data->tested; ?>
<?php echo $data->daily_confirmed; ?>
<?php echo $data->infected; ?>
<?php echo $data->deceased; ?>
<?php echo $data->deceased; ?>
```
Each one echos a different piece of the JSON code. If you want to read what ones there are you can find the JSON names and whats in them here tylermwise.com/digital-projects/api/covidstat


# Covid World Data API
If you are wanting to get the Covid 19 data from around the world, you can do it the same as the UK Data just with other tags:

```php
<?php
$contents = file_get_contents("https://tylermwise.com/digital-projects/api/covidstats");
$data = json_decode($contents);
?>
```

This is how you get the world data:
```php
<?php echo $data->world_confirmed; ?>
<?php echo $data->world_deaths; ?>
<?php echo $data->world_recovered; ?>
```

# Covid information API
Instead of the scary numbers, you can get the advice on how to stay safe:

```php
<?php
$contents = file_get_contents("https://tylermwise.com/digital-projects/api/covidstats");
$data = json_decode($contents);
?>
```

This is the Information data code:
```php
<?php echo $data->about; ?>
<?php echo $data->symptoms; ?>
<?php echo $data->self_isolation; ?>
<?php echo $data->treatments_overview; ?>
<?php echo $data->self_care; ?>
<?php echo $data->other_treatments; ?>
<?php echo $data->prevention; ?>
```

# API Credit
This is optional, but we want to give this API to everyone, so we would really like it if you used this bit of code, as it tells users where the data came from:

```php
<?php echo $data->credit;
```
