<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class demoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
         $response = $this->get('/api/user');

        // Assert that a user with the specified email exists in the database
        $response->assertStatus(200)
            ->assertJsonFragment([
                'email' => 'test_git@gmail.com',
            ]);
    }
}
