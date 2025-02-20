```php
<?php
function increment_array_value(array $arr, $key, $increment = 1) {
  $arr[$key] = $arr[$key] ?? 0; //Using Null Coalescing Operator
  return [$key => $arr[$key] + $increment];
}

$my_array = ['a' => 1, 'b' => 2];
$updated = increment_array_value($my_array, 'c', 5);
$my_array = array_merge($my_array,$updated);
$updated = increment_array_value($my_array, 'a');
$my_array = array_merge($my_array,$updated);

print_r($my_array);
?>
```