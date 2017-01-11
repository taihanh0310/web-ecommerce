<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Social extends Model {

    protected $table = 'social_logins';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}