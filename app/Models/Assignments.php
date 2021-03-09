<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    public function complete()
    {
        $this->completed_at = true;
        $this->save();
    }
}
