<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'user_id',
        'gander',
        'addres',
        'birth',
        'phone',
        'religion',
    ];

    public function isComplete() {
        $fillable = $this->getFillable();
        foreach($fillable as $key) {
            if(empty($this->$key)) {
                return false;
            }
        }
        return true;
    }
}
