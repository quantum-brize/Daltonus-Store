<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{
    public function customQuery($sql)
    {
        $query = $this->db->query($sql);
        return $query->getResult();
    }

}
?>