<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\ChatPage;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ChatTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_send_a_message()
    {
        $user = factory('App\User')->create();

        $this->browse(function (Browser $browser) use ($user) {
          $browser->loginAs($user)
                  ->visit(new ChatPage);
        });
    }
}
