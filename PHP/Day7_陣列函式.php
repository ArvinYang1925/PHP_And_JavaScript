<?php


$records = [
    [
        "name" => "John Doe",
        "age" => 30
    ],
    [
        "name" => "Jane Smith",
        "age" => 25
    ],
    [
        "name" => "Bob Johnson",
        "age" => 40
    ]
];

// var_dump(array_column($records, "name"));
print_r(array_keys($records));
print_r(array_values($records));


$fruits = [
    "c" => "banana",
    "b" => "apple",
    "a" => "cherry"
];

asort($fruits);

print_r($fruits);

ksort($fruits);

print_r($fruits);


// Example

$employee =  [["name" => "John", "role" => "admin"], ["name" => "Jelly", "role" => "staff"]];

$newEmployee = array_map(function ($item) {
    $item['name'] = $item['name'] . ' good';
    return $item;
}, $employee);

$newEmployee2 = array_filter($employee, function ($item) {
    return true;
});

$person = array_merge($employee[1], ["role" => "admin", "hobby" => "coding"]);
