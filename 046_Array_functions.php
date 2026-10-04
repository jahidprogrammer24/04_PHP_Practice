<?php
//array functions
//01. array()
$arr = array(1, 2, 3);

//02. array_change_key_case()
$arr = ["Name" => "Jahid"];
print_r(array_change_key_case($arr, CASE_UPPER));
echo "<pre>";

//03. array_chunk()
$arr = [1, 2, 3, 4, 5];
print_r(array_chunk($arr, 3));

echo "<pre>";
//04. array_column()
$data = [
    ["name" => "A", "age" => "20"],
    ["name" => "B", "age" => "30"]
];
print_r(array_column($data, "age"));

echo "<pre>";
//05. array_combine()
$keys = ["a", "b"];
$values = [1, 2];
print_r(array_combine($keys, $values));

//06. array_count_values()
$arr = [1, 2, 3, 10];
print_r(array_count_values($arr));

//07. array_diff()
$a = [1, 2, 3];
$b = [2, 3];
print_r(array_diff($a, $b));

//08. array_diff_assoc()
$a = ["a" => 1, "b" => 2];
$b = ["a" => 2];
print_r(array_diff_assoc($a, $b));

//09. array_diff_key()
$a = ["a" => 1, "b" => 2];
$b = ["a" => 1];
print_r(array_diff_key($a, $b));
//10. array_fill()

//11. array_fill_keys()
print_r(array_fill_keys(["a", "b"], "Hello"));
//12. array_filter()
$arr = [1, 2, 6, 4, 5];
print_r(array_filter($arr, fn($v) => $v % 2 == 0));
//13. array_flip()
$arr = ["a" => 1, "b" => 2];
print_r(array_flip($arr));
//14. array_intersect()
$a = [1, 2, 3];
$b = [2, 3, 4];
print_r(array_intersect($a, $b));
//15. array_key_exists()
$arr = ["a" => 1];
print_r(array_key_exists("a", $arr));
//16. array_map();
$arr = [1, 2, 3];
print_r(array_map(fn($v) => $v * 2, $arr));
//17. array_keys()
$arr = ["a" => 1, "b" => 2];
print_r(array_keys($arr));
//17. array_merge()
print_r(array_merge($a, $b));
//18. array_merge_recursive()
$a = ["a" => ["x" => 1]];
$b = ["a" => ["y" => 2]];
print_r(array_merge_recursive($a, $b));
//19. array_multisort()
$a = [3, 2, 1];
$b = [4, 6, 5];
array_multisort($a, $b);
print_r($a);
print_r($b);
//20. array_pad()
print_r(array_pad([1, 2], 5, 0));
//20. array_pop()
$arr = [1, 2, 3];
array_pop($arr);
print_r($arr);
//21. array_product()
echo array_product([4, 5]);
//22. array_push()
$arr = [1, 2];
array_push($arr, 3);
print_r($arr);
//23. array_rand()
$arr = ["a", "b", "c"];
print_r(array_rand($arr));
//24. array_reduce()
$arr = [1, 2, 3];
echo array_reduce($arr, fn($c, $v) => $c + $v, 0);
//25. array_reverse()
print_r(array_reverse([1, 2, 3]));
//26. array_search()
$arr = ["a" => 10, "b" => 20];
echo array_search(20, $arr);
//27. array_shift()
$arr = [1, 2, 3, 4];
array_shift($arr);
print_r($arr);
//28. array_slice()
print_r(array_slice([1, 2, 3], 1));
//29. array_splice()
$arr = [1, 2, 3, 4];
array_splice($arr, 1, 1, [99]);
print_r($arr);
//30. array_sum()
echo array_sum([1, 2, 3]);
print_r(array_sum([1, 2, 3]));
//30. array_unique()
print_r(array_unique([1, 2, 2, 3]));
//31. array_unshift()
$arr = [2, 3];
array_unshift($arr, 1);
print_r($arr);
//32. array_values()
print_r(array_values(["a" => 1, "b" => 2]));
//33. array_walk()
$arr = [1, 2];
array_walk($arr, fn($v) => print($v));
print_r($arr);
//34. array_walk_recursive()
$arr = [[1, 2, 3], [4, 5, 6]];
array_walk_recursive($arr, fn($v) => print($v));
print_r($arr);
//35. in_array()
var_dump(in_array(2, [1, 2, 3]));
//35. count()
$arr = [1, 2, 3, 4];
echo count($arr);
//sort()
$arr = [3, 2, 1];
sort($arr);
print_r($arr);
//37. rsort()
$arr = [1, 2, 3];
rsort($arr);
print_r($arr);
//38. shuffle()
$arr = [1, 2, 3];
shuffle($arr);
print_r($arr);
//39. range()
print_r(range(1, 10));


//PHP Constants
//01. CASE_LOWER
//02. CASE_UPPER
//03. SORT_ASC
//04. SORT_DESC
//05. SORT_NUMERIC
//06. SORT_STRING
//07. COUNT_NORMAL
//08. COUNT_RECURSIVE


/*
count(), array_push(), array_merge(), array_map(), array_filter(), in_array(), sort().. These are useful for practical purposes.
*/