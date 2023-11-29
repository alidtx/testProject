<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;


    public function suplpier(){

    return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    
    }

    public function material(){

        return $this->belongsTo(Supplier::class, 'item_id', 'id');
        
    }
     
}
