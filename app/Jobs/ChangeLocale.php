<?php

namespace App\Jobs;

use App\Jobs\SetLocale;

class ChangeLocale extends SetLocale
{
	public $lang;
	
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        session()->set('locale', $this->lang);
    }
}
