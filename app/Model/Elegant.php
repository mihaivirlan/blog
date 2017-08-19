<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Validator;

abstract class Elegant extends Model
{

    protected $rules = array();
    protected $errors;
    /** The attributes mapped to fields.
     * @var array
     */
    protected $fieldsMapping = [];
    protected $niceNames = [];
    protected $customMessages = [];


    public function errors()
    {
        return $this->errors;
    }

    /**
     * @param $id
     * @return Elegant|bool
     */
    public function getById($id)
    {
        return $this->select("{$this->getTable()}.*")
            ->where("{$this->getTable()}.id", "=", $id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getAll()
    {
        return $this->select("{$this->getTable()}.*");
    }

}
