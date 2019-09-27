<?php

namespace App\ReadRepository\Shop\Order;

use App\Entity\Shop\Order\Order;

class OrderReadRepository
{
    public function findByUserIdAndId(int $userId, int $id): ?Order
    {
        $order = Order::where('id', $id)
            ->where('user_id', $userId)
            ->first();

        return $order;
    }
}