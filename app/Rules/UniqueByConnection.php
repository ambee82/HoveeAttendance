<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class UniqueByConnection implements ValidationRule
{
    protected $ignoreid;
    protected $table;
    protected $field;
    protected $connection = 'mysql';
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function __construct($connection = 'mysql', $table, $field = 'id', $ignoreid = false)
    {
        $this->ignoreid = $ignoreid;
        $this->table = $table;
        $this->field = $field;
        $this->connection = $connection;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $exist = DB::connection($this->connection)
            ->table($this->table)
            ->where($this->field, $value);

        if ($this->ignoreid) {
            $exist = $exist->where('id', '!=', $this->ignoreid);
        }

        $exist =  $exist->exists();


        if ($exist) {
            $fail('The :attribute has already been taken.');
        }
    }
}
