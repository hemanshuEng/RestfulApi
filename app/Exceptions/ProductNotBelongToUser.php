<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{
    public function render()
    {
        return ['Errors' => 'Product Not Belongs to user'];
    }
}
