<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
  
class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $primaryKey = 'id';
    public $fillable = ['name', 'email', 'subject', 'message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "killiandelmoitie@hotmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}