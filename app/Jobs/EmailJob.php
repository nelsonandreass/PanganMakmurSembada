<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotif;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $destination;
    private $payload;
    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->destination = $data['destination'];
        $this->payload = $data['data'];
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Mail::to($this->destination)->send(new MailNotif($this->payload));
        } catch (Throwable $th) {
            return response()->json("Failed" , 400);
        }
    }
}
