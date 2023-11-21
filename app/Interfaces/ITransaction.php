<?php

namespace App\Interfaces;

interface ITransaction extends IBase
{
    public function depositTransaction(array $columns = ['*'], array $relations = []);

    public function withdrawTransaction(array $columns = ['*'], array $relations = []);
}
