<?php

namespace Tests\Feature\Http\Controllers\Submission;

use App\Http\Livewire\SubmitYouTubeLiveStream;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionModalTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_includes_the_submission_livewire_component_on_all_pages(): void
    {
        $this->get(route('home'))
            ->assertSeeLivewire(SubmitYouTubeLiveStream::class);

        $this->get(route('archive'))
            ->assertSeeLivewire(SubmitYouTubeLiveStream::class);
    }
}