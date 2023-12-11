
# Panther Backend PHP Developer Test

> [!CAUTION]
> Note - please DO NOT submit pull requests to this repository.

Your task is to complete the `get_dependencies_html()` method in `class.panther_dependencies.php` such that given the below array of dependencies, it will return a string of HTML tags matching the desired output below.

You must only edit and submit the `class.panther_dependencies.php` file. `index.php` has been provided to help you test your code.

For local dependencies, the method should also append a query string to the end of each dependency URL, containing the last modified time of the file (in seconds since the Unix Epoch). The method should also generate a subresource `integrity` hash attribute for local dependencies.

Generating integrity hashes is expensive, thus you should cache the generated hashes to `.cache/dependencies.json`.

You should spend no more than **2 hours** on this task. The goal of this exercise is not necessarily to complete the task, but to demonstrate your approach to problem solving and your ability to write clean, maintainable code.

Please do not use any third-party libraries or frameworks. Your code must run on PHP 7.4 or later. This is a test of *your* PHP skills, not that of Copilot or ChatGPT - if their use is not detected by our plagiarism detection software, it will become obvious at a later date if you are not otherwise capable of writing the code yourself. You may use Google for help, but copy and pasting code is not permitted.

## Getting Started

1. Download this repository
2. Edit only `class.panther_dependencies.php`
3. Once you have finished or the 2 hours is up, send your edited `class.panther_dependencies.php` file back to us

## Input Array

```php
$dependencies_html = dependencies::get_dependencies_html([
    [
        'src' => 'https://zany.sh/favicon.svg?emoji=🔥',
        'attributes' => [
            'rel' => 'icon',
        ]
    ],
    ['src' => 'style/stylesheet.css'],
    ['src' => 'style/recruitment/recruitment.css?pickle=rick'],
    [
        'src' => 'https://code.jquery.com/jquery-3.7.1.min.js',
        'attributes' => [
            'integrity' => 'sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=',
            'crossorigin' => 'anonymous',
        ]
    ],
    ['src' => 'scripts/site.js'],
    ['src' => 'scripts/recruitment/recruitment.js'],
    ['src' => 'https://fonts.googleapis.com/css2?family=Roboto&display=swap'],
]);
```

## Desired Output

```html
<link href="https://zany.sh/favicon.svg?emoji=🔥" rel="icon">
<link href="style/stylesheet.css?m=1672531200" rel="stylesheet" integrity="sha256-generated-hash" crossorigin="anonymous">
<link href="style/recruitment/recruitment.css?pickle=rick&m=1672617600" rel="stylesheet" integrity="sha256-generated-hash" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="scripts/site.js?m=1672704000" integrity="sha256-generated-hash" crossorigin="anonymous"></script>
<script src="scripts/recruitment/recruitment.js?m=1672790400" integrity="sha256-generated-hash" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
```
