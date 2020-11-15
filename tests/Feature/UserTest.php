<?php
declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRun(): void
    {
        $this->list();
    }

    private function list(): void
    {

        $response = $this->get('/users');

        $structure = [
            'users' => []
        ];
        $response->assertJsonStructure($structure);

        $response->assertStatus(200);
    }
}
