<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Document extends Model
{
    use HasFactory;

    use \Mpociot\Versionable\VersionableTrait;

    public function users(): HasMany
    {
        return $this->hasMany(CUsersDocuments::class);
    }
    
}
