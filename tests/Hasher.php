<?php

use PHPUnit\Framework\Test;
use Geekghc\Hasher\MD5Hasher;

class Hasher extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }
    public function testMD5HasherMake()
    {
        $password = md5("password");
        $passwordTwo =  $this->hasher->make('password');
        $this->assertEquals($password,$passwordTwo);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $passwordTwo =  $this->hasher->make('password',['salt'=>'jelly']);
        $password = md5('passwordjelly');
        $this->assertEquals($password,$passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5("password");
        $passwordCheck =  $this->hasher->check('password',$password);
        $this->assertTrue($passwordCheck);
    }
}