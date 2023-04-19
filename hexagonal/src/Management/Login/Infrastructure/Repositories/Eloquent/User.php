<?php 

namespace Src\Management\Login\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = "users";


    protected $fillable= [
        'first_name',
        'last_name',
        'email',
        'cellphone',
        'password', 
        'state_id', 
            
    ];

    protected $hidden = [
        'password'
    ];

    
}

?>