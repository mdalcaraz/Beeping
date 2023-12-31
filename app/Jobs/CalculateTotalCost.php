<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\OrderLine;


class CalculateTotalCost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(5); //Verificacion de Asincronismo
        $totalCost = 0;
        $orderLines = OrderLine::with('order', 'product')->get();
        foreach ($orderLines as $line) {
            $totalCost += $line->qty * $line->product->cost;
        }
        echo "Total Cost: " . $totalCost;
    }
}
