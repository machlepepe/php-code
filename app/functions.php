<?php
    function dd($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

    function view(string $page, array $data) : void
    {
        extract($data); //extract key value pairs
        require __DIR__ . '../../' . $page;
    }
?>