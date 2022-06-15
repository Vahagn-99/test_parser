<?php

namespace App\Imports;

interface ProductCreateInterface
{
    /**
     * Validate the given class instance.
     *
     * @return void
     */
    public function toCreateProduct();
}
