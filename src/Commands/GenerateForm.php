<?php

namespace Ahuggins\Transformer\Commands;

use DB;
use File;
use Illuminate\Console\Command;
use Ahuggins\Transformer\Services\FormMaker;

class GenerateForm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:form {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a form from table schema.';

    protected $table;

    protected $maker;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(FormMaker $maker)
    {
        parent::__construct();
        $this->maker = $maker;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->table = $this->argument('table');

        $fields = $this->getFieldsFromTable();
        
        $this->maker->makeForm($this->table, $fields);
    }

    protected function getFieldsFromTable()
    {
        return collect(DB::select('DESCRIBE ' . $this->table))->filter(function ($d) {
            return $d->Field != 'created_at' && 
                    $d->Field != 'updated_at' && 
                    $d->Extra != 'auto_increment';
        });
    }
}
