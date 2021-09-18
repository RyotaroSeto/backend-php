<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Resources\CraftsmanResource;
use App\Models\Craftsman;
use Illuminate\Support\Facades\DB;


class TestMyBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $users = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->where('users.id', '=', 1)
            ->get();
        dump($users[0]);

        return 0;
    }
}
