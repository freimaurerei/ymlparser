<?php

namespace LireinCore\YMLParser\Offer;

class Param
{
    use \LireinCore\YMLParser\TYML;
    use \LireinCore\YMLParser\TError;
    
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $unit;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return bool
     */
    public function isValid()
    {
        if ($this->name === null)
            $this->setError("Param: missing required attribute 'name'");
        elseif (!$this->name)
            $this->setError("Param: incorrect value in attribute 'name'");

        if (!$this->value)
            $this->setError("Param: incorrect value");

        return empty($this->errors);
    }

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        foreach ($attributes as $name => $value) {
            $this->setField($name, $value);
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUnit($value)
    {
        $this->unit = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}