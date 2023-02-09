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
        /* $contacto1 = new Contacto();
        $contacto1->nombre = "Jaime";
        $contacto1->apellido = "Pedrera";
        $contacto1->telefono = "123456789";
        $contacto1->direccion = "Calle Bolonia";
        $contacto1->save();
        $contacto2 = new Contacto();
        $contacto2->nombre = "Daniel";
        $contacto2->apellido = "Cortes";
        $contacto2->telefono = "854697245";
        $contacto2->direccion = "Calle Petanca";
        $contacto2->save();
        $contacto3 = new Contacto();
        $contacto3->nombre = "Pablo";
        $contacto3->apellido = "Salteras";
        $contacto3->telefono = "856749582";
        $contacto3->direccion = "Calle Ramona";
        $contacto3->save(); */

        Contacto::factory(20)->create();
    }


}