<?php

namespace App\Models;

use LaravelEnso\Tables\Traits\TableCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SourceData extends \FamilyTree365\LaravelGedcom\Models\SourceData
{
    use TableCache, HasFactory;
}
