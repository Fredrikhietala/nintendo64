<?php

namespace App\Console\Commands;

use App\GoldenEye;
use App\MarioKart;
use App\MarioParty;
use App\SuperSmashBros;
use App\Total;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportResults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:results';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importing result from json';

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
        $this->info("Starting input ...");
        $marioKartData = Storage::get('mariokart.json');
        $kartData = json_decode($marioKartData, true);

        foreach ($kartData as $kartItem) {
            $this->info("Updating result: ".$kartItem['id']);
            $marioKart = MarioKart::findOrNew($kartItem['id']);
            $marioKart->fill($kartItem)->save();
        }

        $this->info("Mario Kart results imported");

        $superSmashData = Storage::get('supersmashbros.json');
        $smashData = json_decode($superSmashData, true);

        foreach ($smashData as $smashItem) {
            $this->info("Updating result: ".$smashItem['id']);
            $superSmash = SuperSmashBros::findOrNew($smashItem['id']);
            $superSmash->fill($smashItem)->save();
        }

        $this->info("Super Smash results imported");

        $marioPartyData = Storage::get('marioparty.json');
        $partyData = json_decode($marioPartyData, true);

        foreach ($partyData as $partyItem) {
            $this->info("Updating result: ".$partyItem['id']);
            $marioParty = MarioParty::findOrNew($partyItem['id']);
            $marioParty->fill($partyItem)->save();
        }

        $this->info("Mario Party results imported");

        $goldenEyeData = Storage::get('goldeneye.json');
        $goldenData = json_decode($goldenEyeData, true);

        foreach ($goldenData as $goldenItem) {
            $this->info("Updating result: ".$goldenItem['id']);
            $goldenEye = GoldenEye::findOrNew($goldenItem['id']);
            $goldenEye->fill($goldenItem)->save();
        }

        $this->info("GoldenEye results imported");

        $totalData = Storage::get('total.json');
        $data = json_decode($totalData, true);

        foreach ($data as $item) {
            $this->info("Updating result: ".$item['id']);
            $total = Total::findOrNew($item['id']);
            $total->fill($item)->save();
        }

        $this->info("All results imported");
    }
}
