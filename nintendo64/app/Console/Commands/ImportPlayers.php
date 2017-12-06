<?php

namespace App\Console\Commands;

use App\Player;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportPlayers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:players';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importing players from json';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info("Starting input of ...");
        $jsondata = Storage::get('players.json');
        $data = json_decode($jsondata, true);

        foreach ($data as $item) {
            $this->info("Updating player: ".$item['id']);
            $player = Player::findOrNew($item['id']);
            $player->fill($item)->save();
        }

        $this->info("Players imported");
    }
}
