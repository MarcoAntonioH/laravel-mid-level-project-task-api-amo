<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Concerns\HasUuids;
use Illuminate\Auditing\Contracts\Auditable;
use Illuminate\Auditing\Auditable as AuditingTrait;


class Proyect extends Model
{
    use HasUuids,AuditingTrait;
    protected $keytype = 'string';
    public $incrementing = false;

    protected $Fillable = ['name','description','status'];
    public function tasks ()
    {
        return $this -> haMany(Task::class);
    }
}
