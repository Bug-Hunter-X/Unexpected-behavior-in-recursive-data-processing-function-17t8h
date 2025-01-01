```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        } elseif (is_string($value) && strpos($value, ',') !== false) {
            $data[$key] = explode(',', $value); // Split string
        }
    }
    return $data;
}

$input = [
    'name' => 'John Doe',
    'age' => 30,
    'address' => '123 Main St, Anytown, CA',
    'skills' => ['PHP', 'JavaScript', 'MySQL']
];

$processedData = processData($input);
print_r($processedData);
```