<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Task;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
/*
    public function test_example()
    {
        $task = Task::factory()->count(10)->create();

        $response = $this->get('/');

        $response
        ->assertOk();

        $response
        ->assertStatus(200);
    }
*/

/*
    public function test_add()
    {
        $tasks = Task::factory()->count(10)->create();

        $response = $this->getJson('api/tasks');

        dd($response->json());

        $response
            -> assertOk()
            -> assertJsonCount($tasks->count());
    }

*/

    public function test_store()
    {
        $data = [
            'title' => 'テスト投稿'
        ];

        $response = $this->postJson('api/tasks', $data);
        dd($response->json());

        $response ->assertCreated() -> assertJsonFragment($data);

    }
/*
    public function test_update()
    {
        $task = Task::factory()->create();

        $task->title = '書き換え';

        $response = $this->patchJson("api/tasks/{$task->id}", $task->toArray());

        //dd($response->json());

        $reponse ->assertOk() -> assertJsonFragment($task->toArray());
    }


    public function test_destroy()
    {

        $response = $this->deleteJson('api/tasks/1');

        dd($response->json());

        $response
            -> assertOk();

    }

    */
}
