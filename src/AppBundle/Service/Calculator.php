<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 28/10/2016
 * Time: 17:28
 */

namespace AppBundle\Service;


class Calculator
{
    private $op1;

    Private $op2;

    private $res;

    /**
     * Calculator constructor.
     * @param $op1
     */
    public function __construct($o1,$o2)
    {
        $this->res = 0;
        $this->setOp2($o2);
        $this->setOp1($o1);
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = (int)$op1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = (int)$op2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * @param mixed $res
     */
    public function setRes($res)
    {
        $this->res = (int)$res;
        return $this;
    }

    public function sum(){
        $this->setRes($this->getOp1() + $this->getOp2());
    }
    public function res(){
        $this->setRes($this->getOp1() - $this->getOp2());
    }
    public function mul(){
        $this->setRes($this->getOp1() * $this->getOp2());
    }
    public function div(){
        $this->setRes($this->getOp1() / $this->getOp2());
    }
}