<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class CategoryApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getCategories(int $page = null, int $per_page = null, int $level = null): array
    {
        $path = 'Category';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
            'level'     => $level ?? 0,
        ];
        return $this->get($this->configuration->getBasicToken(), $path, $paging);
    }

    public function getCategory(string $category_id): array
    {
        $path = "Category/{$category_id}";
        return $this->get($this->configuration->getBasicToken(), $path);
    }

    public function createCategory(array $data): array
    {
        $path = 'Category';
        return $this->post($this->configuration->getBasicToken(), $path, $data);
    }
}
