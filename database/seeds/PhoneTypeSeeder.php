<?php

use Illuminate\Database\Seeder;

use App\PhoneType;

class PhoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phone_types = new PhoneType();
        $phone_types->name = 'Casa';
        $phone_types->save();

        $phone_types = new PhoneType();
        $phone_types->name = 'Celular';
        $phone_types->save();

        $phone_types = new PhoneType();
        $phone_types->name = 'Oficina';
        $phone_types->save();
    }
}