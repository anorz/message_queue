<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/6 0006
 * Time: 17:06
 */
namespace MessageQueue\Contract;

interface ChannelInterface
{
    const PROTOCOL_080 = '0.8';
    const PROTOCOL_091 = '0.9.1';


    public function getConnection();


}