<?php

use App\User;
use App\Teacher;
use App\Materia;
use App\MateriaTeacher;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        // DB::statement("SET foreign_key_checks=0");
        // Materia::truncate();
        // Teacher::truncate();
        // User::truncate();
        // MateriaTeacher::truncate();
        // DB::statement("SET foreign_key_checks=1");
        
        
        // $cantidadUser = 20;
        // $cantidadTeacher = 5;
        // $cantidadMaterias = 8;
        

        // factory(User::class, $cantidadUser)->create();
        // factory(Materia::class, $cantidadMaterias)->create();

        // factory(Teacher::class, $cantidadTeacher)->create()->each(
        //     function($teacher){
        //         //$materias = Materia::all()->random(mt_rand(1, 3))->pluck('id');
        //         //$materias = Materia::all()->inRandomOrder()->limit(3)->pluck('id');
        //         $materias = Materia::inRandomOrder()->limit(3)->pluck('id');

        //         $teacher->materias()->attach($materias);
        //     }
        // );

        
            //DB::table('users')->where('rol',User::USER_TEACHER);


            /**
             * Usuarios que son profesores
             */
            // $UsuariosMaestros = App\User::where('rol','teacher')->toSql();
            // dd($UsuariosMaestros);

            /**
             *  Id de profesores que dan matematicas
             */
            // $profesoresDeMatematicas = DB::table('materias')
            //                                 ->where('nombre','quimica')
            //                                 ->where('nivel','cbc')
            //                                 ->teachers()->get()
            //                                 ->toSql();

            $profesoresDeMatematicas = App\Materia::where('nombre','quimica')
                                            ->where('nivel','cbc')
                                            ->pivot('teacher_id')
                                            ->toSql();                                

            dd($profesoresDeMatematicas);

    }
}
