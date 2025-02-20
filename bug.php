```php
<?php
function increment_array_value(array &$arr, $key, $increment = 1) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; 
  }
  $arr[$key] += $increment; 
}

$my_array = ['a' => 1, 'b' => 2];
increment_array_value($my_array, 'c', 5);
increment_array_value($my_array, 'a');

print_r($my_array);
?>
```