<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/6 0006
 * Time: 17:02
 */

namespace MessageQueue\Contract;


interface MessageQueueInterface
{

    /**
     * 链接消息队列
     * @param array $config
     * @return mixed
     */
    public function connect(array $config);

//    public function bind();
//
//    public function send();
//
//    public function receive();

}

