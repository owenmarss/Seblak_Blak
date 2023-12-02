<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            'name' => 'Owen Marscel',
            'email' => 'owenmarscel@gmail.com',
            'password' => hash::make('adminowen'),
            'role' => 'admin',
        ]);

        User::insert([
            'name' => 'Joel Calvary',
            'email' => 'joelcalvary@gmail.com',
            'password' => hash::make('ownerjoel'),
            'role' => 'owner',
        ]);

        User::insert([
            'name' => 'Steven Saputra',
            'email' => 'stevensaputra@gmail.com',
            'password' => hash::make('managersw'),
            'role' => 'manager',
        ]);

        User::insert([
            'name' => 'Samuel Winata',
            'email' => 'samuelwinata@gmail.com',
            'password' => hash::make('workersamuel'),
            'role' => 'worker',
        ]);
    }
}
