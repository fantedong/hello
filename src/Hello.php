<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 2018/10/26
 * Time: 9:56
 */
namespace  Hello;
class Hello{

    // 作者
    protected $author;

    /**
     * HelloWorld constructor.
     * @param string $author
     */
    public function __construct($author = 'scort')
    {
        $this->author = $author;
    }

    /**
     * 执行方法
     * @return string
     */
    public function info()
    {
        $info = "Hello World ! \n";
        $info .= "\t--Power By ";
        $info .= $this->author . "\n";
        return $info;
    }

}