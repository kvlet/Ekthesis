<?php

namespace App\Traits;

use Dcblogdev\Dropbox\Resources\Files;

class DropboxFiles extends Files {

    public function __construct(){
        parent::__construct();
    }

    protected function normalizePath(string $path): string
    {
        if (preg_match("/^id:.*|^rev:.*|^(ns:[0-9]+(\/.*)?)/", $path) === 1) {
            return $path;
        }

        $path = trim($path, '/');

        return ($path === '') ? '' : '/'.$path;
    }

    public function getThumbnail(string $path, string $format = 'jpeg', string $size = 'w64h64'): string
    {
        $arguments = [
            'path' => $this->normalizePath($path),
            'format' => $format,
            'size' => $size,
        ];


        $response =  $this->post('files/get_thumbnail', $arguments);

        return (string) $response->getBody();
    }

}
