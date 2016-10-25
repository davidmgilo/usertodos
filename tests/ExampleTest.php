<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // /todos -> mostra els todos del usuari logat
        $user = factory(\App\User::class);
        $task = factory(\App\Task::class);
        $this->actingAs($user);
        $this->visit('/todos')
             ->see('Laravel');
    }
}
