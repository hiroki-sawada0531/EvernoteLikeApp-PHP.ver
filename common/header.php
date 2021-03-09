<?php
function getHeader($title) {
    return <<<EOF
    <head>
        <meta charset = "utf-8" />
        <title>SimpleMemo | {$title}</title>
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../pubic/css/main.css" />
        <script defer src="../public/js/all.js"></script>
    </head>
    EOF;
}