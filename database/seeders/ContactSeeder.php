<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory(10)->create();

        foreach (Contact::all() as $contact) {
            $users = User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $contact->users()->attach($users);
        }

        // TODO fix randomisation.
    }
}
