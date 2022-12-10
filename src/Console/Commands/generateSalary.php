<?php

namespace Nur13171\FirstPackage\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Nur13171\FirstPackage\Models\Wallet;

class generateSalary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary {amount}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Wallet::where('status','=',0)->update([
            'salary_amount' => $this->argument('amount'),
            'cash_amount' =>$this->argument('amount'),
            'status' =>1,
            'created_at' => Carbon::now()
        ]);

        echo "Salary Generate Successfully";
    }
}
