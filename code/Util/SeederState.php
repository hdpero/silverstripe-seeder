<?php

namespace LittleGiant\SilverStripeSeeder\Util;

class SeederState
{
    private $up;
    private $field;
    private $object;
    private $index;

    public function __construct(Field $field = null, \DataObject $object = null, $index = 0, SeederState $up = null)
    {
        $this->field = $field;
        $this->object = $object;
        $this->index = $index;
        $this->up = $up;
    }

    public function up()
    {
        return $this->up;
    }

    public function index()
    {
        return $this->index;
    }

    public function field()
    {
        return $this->field;
    }

    public function down($field, $dataObject, $index = 0)
    {
        return new SeederState($field, $dataObject, $index, $this);
    }
}