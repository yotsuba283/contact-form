<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
=======
class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'content', 'detail'
    ];
>>>>>>> origin/main
}
