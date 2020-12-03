<?php

class Request
{
    public $data = [];
    public $query = [];

    public function __construct()
    {
        $this->data = $this->mergeData($_REQUEST, $_FILES);
    }

    private function mergeData(array $post, array $file)
    {
        $post = $this->cleanInput($post);
        return array_merge($post, $file);
    }

    private function cleanInput($data)
    {
        if (is_array($data)) {
            $cleaned = [];
            foreach ($data as $key => $value) {
                $cleaned[$key] = $this->cleanInput($value);
            }
            return $cleaned;
        }
        return trim(htmlspecialchars($data, ENT_QUOTES));
    }

    public function uri()
    {
        if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function root()
    {
        return $this->getHost();
    }

    public function getHost()
    {
        return $this->protocol() . '://' . $this->host();
    }

    public function protocol()
    {
        return $this->isSSL() ? 'https' : 'http';
    }

    public function isSSL()
    {
        return isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off";
    }

    public function host()
    {
        return $_SERVER['HTTP_HOST'];
    }


}