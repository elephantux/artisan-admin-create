<?php namespace Elephantux\AdminCreate\Commands;

use App\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class AdminCreate extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin user';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');
        $data = [
            'email' => $email,
            'password' => $password,
            'name' => 'admin',
            'admin' => true
        ];
        User::create($data);

        $this->info('Admin user created!');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['email', InputArgument::REQUIRED, 'Email'],
            ['password', InputArgument::REQUIRED, 'Password'],
        ];
    }


}
