<?php

require_once 'class.panther_dependencies.php';
use panther\dependencies;

$dependencies = [
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
];

$dependencies_html = dependencies::get_dependencies_html($dependencies);
$dependencies_html_encoded = empty($dependencies_html) ? 'None' : htmlspecialchars($dependencies_html);

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Panther Backend PHP Developer Test</title>
        {$dependencies_html}
        <style>
            .cssLoaded.success {
                display: none;
            }

            .fail {
                color: red;
                font-weight: bold;
            }

            .success {
                color: green;
                font-weight: bold;
            }
        </style>
        <script>
            // check jQuery is loaded
            if(typeof jQuery !== 'undefined') {
                $(function() {
                    console.log('✅ jQuery is loaded');
                    $('#jqueryLoaded').attr('class', 'success').text('Yes!');
                });
            }
        </script>
    </head>
    <body>
        <h1>Panther Backend PHP Developer Test</h1>
        <p>Javascript loaded: <span class="fail" id="javascriptLoaded">No!</span></p>
        <p>CSS loaded: <span class="cssLoaded fail">No!</span><span class="cssLoaded success"></span></p>
        <p>jQuery loaded: <span class="fail" id="jqueryLoaded">No!</span></p>

        <h2>Dependency output:</h2>
        <pre>{$dependencies_html_encoded}</pre>
    </body>
</html>
HTML;
?>