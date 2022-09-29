<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:users {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Users for your App';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfUsers = $this->argument('count');
  
        for ($i = 0; $i < $numberOfUsers; $i++) { 
            User::factory()->create();
        }  
  
        return 0;
    }
}
