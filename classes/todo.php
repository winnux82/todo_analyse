<?php

class ToDo
{

    private int $_id;
    private string $_label;
    private Date $_created_at;



    public function __construct()
    {
    }

    public function save()
    {
        
    }
    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _label
     */
    public function get_label()
    {
        return $this->_label;
    }

    /**
     * Set the value of _label
     *
     * @return  self
     */
    public function set_label($_label)
    {
        $this->_label = $_label;

        return $this;
    }

    /**
     * Get the value of _created_at
     */
    public function get_created_at()
    {
        return $this->_created_at;
    }
}
