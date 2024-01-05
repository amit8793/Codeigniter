<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";

    protected $allowedFields = ['Name', 'Email', 'Phone'];

    protected $returnType = 'array';
}
