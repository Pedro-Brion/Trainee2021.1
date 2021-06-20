<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function viewADM($name, $data = [])
{
    extract($data);

    return require "app/views/admin/{$name}.view.php";
}

function view($name, $data = [])
{
    extract($data);

    return require "app/views/site/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
