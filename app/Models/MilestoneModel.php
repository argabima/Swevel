<?php

namespace App\Models;

use CodeIgniter\Model;

class MilestoneModel extends Model
{
    protected $table            = 'milestone';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['year', 'description', 'image'];

    // Dates
    protected $useTimestamps = false;
}
