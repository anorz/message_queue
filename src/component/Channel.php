<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/6 0006
 * Time: 17:19
 */

namespace MessageQueue\Component;

use MessageQueue\Contract\ChannelInterface;

class Channel implements ChannelInterface ,\ArrayAccess
{

    public function __construct()
    {
        
    }
    
    public function getConnection()
    {
        
    }
}
