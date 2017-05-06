<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/6 0006
 * Time: 17:23
 */
namespace MessageQueue\Component;

use AMQPConnection;
use MessageQueue\Contract\MessageQueueInterface;

class MessageQueue implements MessageQueueInterface
{
    /**
     * 链接配置
     * @var
     */
    protected $config;

    protected $connection = null;

    public function connect(array $credentials)
    {
        if($this->connection){
            return $this->connection;
        }
        $connection = (new AMQPConnection($credentials))->connect();
        if($connection){
            $this->connection = $connection;
            return $connection;
        }
        throw new MessageQueueExceptionInterface("create connection error");
    }


    public function __get($parameter)
    {
        return $this->config[$parameter];
    }
}