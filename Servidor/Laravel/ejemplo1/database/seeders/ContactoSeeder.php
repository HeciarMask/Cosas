<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contacto1=new Contacto();
        $contacto1->nombre='Jaime';
        $contacto1->apellido='Pedrera';
        $contacto1->direccion='Calle';
        $contacto1->telefono='94534331';
        $contacto1->save();
        $contacto2=new Contacto();
        $contacto2->nombre='Daniel';
        $contacto2->apellido='Cortes';
        $contacto2->direccion='Calle 3';
        $contacto2->telefono='92234331';
        $contacto2->save();
        $contacto3=new Contacto();
        $contacto3->nombre='Lola';
        $contacto3->apellido='Mesa';
        $contacto3->direccion='Calle 3';
        $contacto3->telefono='94534331';
        $contacto3->save();
        */
        Contacto::factory(30)->create();

    }
}
