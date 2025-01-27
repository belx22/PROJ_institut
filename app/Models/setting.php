<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    //
    use HasFactory;

    protected $fillable = ['header_image', 'promoteur_message', 'flyer_image', 'rentree_date','header_image_extension','flyer_image_extension','logo_image','logo_image_extension'];


}
