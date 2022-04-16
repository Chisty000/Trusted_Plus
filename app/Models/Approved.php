<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Approved extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name', 'website','opening','closing','location','details','phone','category','address'
    ];
}