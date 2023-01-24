<?php

class ItemModel
{
    protected $CI;
    /**
     * @var bool
     */
    private $is_otro_item = false;
    /**
     * @var string
     */
    private $denominacion = "";
    public function __construct($params)
    {
        $this->is_otro_item = $params['is_otro_item'];
        $this->denominacion = $params['denominacion'];
        $this->CI = &get_instance();
    }
    public function get()
    {
        return $this->CI;
    }
}
