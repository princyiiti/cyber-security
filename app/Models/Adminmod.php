<?php

namespace App\Models;

use CodeIgniter\Model;
use App\libraries\Hash;


class Adminmod extends Model
{   


    protected $table      = 'admin_tbl';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['full_name', 'username', 'password',  'type'];


    public function check_admin_username($username)
    {
        return $this->where('username', $username)->first();
    }
   
}