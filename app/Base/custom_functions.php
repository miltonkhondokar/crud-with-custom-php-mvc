<?php

/**
 * make the view file
 *
 * @param string $path
 * @param array $data
 *
 * @return void
 */
function views(string $path, array $data = []):void
{
    extract($data);
    require_once VIEWS. '/'.$path.'.php';
}