<?php

namespace Nur13171\FirstPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Wallet extends Model
{
    use  HasFactory;

    protected $guarded=[];

    public function User(){
        return $this->belongsTo(Rexoituser::class,'user_id',"id");
    }
    public function Activity(){
        return $this->belongsTo(Activity::class,'user_id',"user_id");
    }
}
