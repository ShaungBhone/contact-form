<?php

namespace ShaungBhone\ContactForm\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install contact form.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        //Livewire...
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Livewire'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/app/Http/Livewire',
        app_path('Http/Controllers/Livewire'));

        //Routes...
        copy(__DIR__.'/../../stubs/default/routes/web.php', base_path('routes/web.php'));

        $this->info('Contact Form installed successfully.');
    }
}
