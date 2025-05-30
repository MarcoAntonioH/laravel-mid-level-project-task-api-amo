<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Concerns\HasUuids;
use Illuminate\Auditing\Contracts\Auditable;
use Illuminate\Auditing\Auditable as AuditingTrait;

class Task extends Model
{
   use HasUuids,AuditingTrait;
    protected $keytype = 'string';
    public $incrementing = false;

    protected $Fillable = ['project_id','title','decription','status','priority','due_date'];
    public function project ()
    {
        return $this -> belongsTo(project::class);
    }
}
