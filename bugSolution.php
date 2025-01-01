```php
function processData(array $data): array {
    $stack = [$data];
    $result = [];

    while (!empty($stack)) {
        $current = array_pop($stack);
        foreach ($current as $key => $value) {
            if (is_array($value)) {
                $stack[] = $value;
            } elseif (is_string($value) && strpos($value, ',') !== false) {
                $result[$key] = explode(',', $value);
            } else {
                $result[$key] = $value;
            }
        }
    }
    return $result;
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