# Space API

So you can use the Space API, you are firstly going to need to add this PHP code

```php
<?php
$contents = file_get_contents("https://api.tylermwise.com/spacedata");
$data = json_decode($contents);
?>
```

So you can get the certain part of data on this API you can use any part of the following code

```php
<?php echo $data->credit; ?>
<?php echo $data->timestamp; ?>
<?php echo $data->iss_latitude; ?>
<?php echo $data->iss_longitude; ?>
<?php echo $data->people_in_space; ?>
<?php echo $data->people_names[0]; ?>
```

{% hint style="info" %}
The timestamp data is when the JSON last updated.
{% endhint %}

## Space Station information

If you are wanting to get the latitude and longitude the following code will work. This updates every second so you can get accurate data.

```php
<?php echo $data->iss_latitude; ?>
<?php echo $data->iss_longitude; ?>
```

## People in Space

If you are wanting to get the number of people in space this code will return a number for example '7'

```php
<?php echo $data->people_in_space; ?>
```



## API Credit

If you are wanting to credit our API we ask you to use this line of code, this means we can update this if we change the URL in the future.

```php
<?php echo $data->timestamp; ?>
```

