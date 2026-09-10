<?php


class OrderManager
{
    private array $orders = [];

    public function addOrder(array $order): void
    {
        $this->orders[] = $order;
        $this->saveToDatabase($order);
        $this->notifyCustomer($order);
    }

    private function saveToDatabase(array $order): void
    {
        echo "Saving order #{$order['id']} to database.\n";
    }

    private function notifyCustomer(array $order): void
    {
        echo "Notifying customer about order #{$order['id']}.\n";
    }
}

// استفاده
$manager = new OrderManager();
$manager->addOrder(['id' => 201, 'item' => 'Laptop', 'customer' => 'Ali']);
