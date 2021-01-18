<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')
        ->insert([
            'title' => '¿Para qué sirve Composer?',
            'content' => 'Con Composer podemos instalar y 
                          actualizar frameworks como Laravel o 
                          Symfony, así como componentes para 
                          generar PDF, procesar pagos con tarjetas,
                          manipular imágenes y mucho más.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('notes')
        ->insert([
            'title' => 'Instalación de Laravel',
            'content' => File::get(__DIR__.'/notes/instalation.html'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('notes')
        ->insert([
            'title' => 'Rutas y JSON',
            'content' => File::get(__DIR__.'/notes/rutas_y_json.html'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('notes')
        ->insert([
            'title' => 'Front Controller',
            'content' => 'Front Controller es un patrón de 
                            arquitectura donde un controlador
                            maneja todas las solicitudes o 
                            peticiones a un sitio web.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('notes')
        ->insert([
            'title' => 'Cambia el formato de parámetros dinámicos',
            'content' => File::get(__DIR__.'/notes/formato.html'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
