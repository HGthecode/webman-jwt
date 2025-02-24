<?php
/**
 * @desc JwtTokenTest.php 描述信息
 * @author Tinywan(ShaoBo Wan)
 * @date 2022/2/24 10:04
 */


namespace hg\Tests;


use hg\Jwt\JwtToken;

class JwtTokenTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function generateToken()
    {
        $user = [
            'id'  => 2022,
            'name'  => 'Tinywan',
            'email' => 'Tinywan@163.com'
        ];
        $token = JwtToken::generateToken($user);
        self::assertIsArray($token);
    }
}