<?php
/**
 * Created by PhpStorm.
 * User: win8
 * Date: 19.4.2016
 * Time: 13:07
 */
class Test extends CI_Controller{

    public function __construct()
    {
   
        Events::register('test', array($this, 'string_return'));
    }

    public function string_return()
    {
        return 'I returned a string. Cakes and Pies!';
    }
}