<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAI\Laravel\Facades\OpenAI;

class AskAi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ask:ai';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asking for help the to AI';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ask = $this->ask('Your question?');

        try {
            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $ask],
                ],
                'max_tokens' => 100,
            ]);

            $this->warn($ask);
            $this->info($result['choices'][0]['message']['content']);
        } catch (\OpenAI\Exceptions\ErrorException $e) {
            $this->error('OpenAI API Error: ' . $e->getMessage());
        }
    }
}
