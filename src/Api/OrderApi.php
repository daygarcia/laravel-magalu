<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class OrderApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getOrders(int $page = null, int $per_page = null, string $status = null): array
    {
        $path = 'Order';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
            'status'    => $status ?? 'APPROVED',
        ];
        return $this->get($this->configuration->getBasicToken(), $path, $paging);
    }

    public function getOrder(string $order_id): array
    {
        $path = "Order/{$order_id}";
        return $this->get($this->configuration->getBasicToken(), $path);
    }

    public function updateOrder(array $data): array
    {
        $path = 'Order';
        return $this->put($this->configuration->getBasicToken(), $path, $data);
    }
}
