<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LandingPageTest extends DuskTestCase
{
    /**
     * @test
     *
     * @return void
     * @throws \Throwable
     */
    public function canSeeTextOnHomepage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    /**
     * @test
     *
     * @return void
     * @throws \Throwable
     */
    public function canFollowLinkOnHomepage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel')
                ->click('#sponsor')
                ->assertUrlIs('https://github.com/sponsors/taylorotwell');
        });
    }
}
