<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Ferrys extends Model
{
    use HasFactory;
    protected $fillable =['nom','photo','longueur','largeur','vitesse'];
    public function Equipement(): BelongsToMany
    {
        return $this->BelongsToMany (Equipement::class);
    }
}
 