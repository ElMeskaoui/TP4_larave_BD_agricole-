<?php

namespace Database\Seeders;

use App\Models\Agriculteur;
use App\Models\Employe;
use App\Models\Intervention;
use App\Models\Parcelle;
use App\Models\Tarif;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);


        Tarif::insert([
            [
                'tar_ero'=>'60',
                'tar_description'=>'mi_temps',
            ],
            [
                'tar_ero'=>'110',
                'tar_description'=>'normal',
            ],
            [
                'tar_ero'=>'115',
                'tar_description'=>'special',
            ],
            [
                'tar_ero'=>'119',
                'tar_description'=>'super special',
            ],
        ]);
        Agriculteur::insert([
                [
                    'id'=>'1',
                    'agr_nom'=>'Dulhac',
                    'agr_prn'=>'Anne_Marie',
                    'agr_resid'=>'Arith'
                ],[
                    'id'=>'2',
                    'agr_nom'=>'Martoz',
                    'agr_prn'=>'Christian',
                    'agr_resid'=>'Montargy'
                ],
                [
                    'id'=>'3',
                    'agr_nom'=>'Carrez',
                    'agr_prn'=>'Francois',
                    'agr_resid'=>'Arith'
                ],[
                    'id'=>'4',
                    'agr_nom'=>'Ferrer',
                    'agr_prn'=>'Maritte',
                    'agr_resid'=>'Lenoyer'
                ],
                [
                    'id'=>'5',
                    'agr_nom'=>'Mernaz',
                    'agr_prn'=>'Francine',
                    'agr_resid'=>'Lescheraines'
                ],[
                    'id'=>'6',
                    'agr_nom'=>'Martoz',
                    'agr_prn'=>'Christian',
                    'agr_resid'=>'Lescheraines'
                ]
            ]);

            Employe::insert([
                    [
                        'emp_nss'=>'165070712345678',
                        'emp_nom'=>'Pernet',
                        'emp_prn'=>'Henri',
                        'emp_tarif'=>'super special'
                    ],
                    [
                        'emp_nss'=>'175070712345678',
                        'emp_nom'=>'Grandet',
                        'emp_prn'=>'Marc',
                        'emp_tarif'=>'normal'
                    ],
                    [
                        'emp_nss'=>'280050512345678',
                        'emp_nom'=>'Barnier',
                        'emp_prn'=>'Nicole',
                        'emp_tarif'=>'special'
                    ],
                ]);

                Parcelle::insert([
                    [
                        'par_id'=>'1',
                        'par_lieu'=>'Arith',
                        'par_nom'=>'Le Pre au Vent',
                        'par_superficie'=>'350',
                        'par_prop'=>'1',
                    ],
                    [
                        'par_id'=>'2',
                        'par_lieu'=>'Arith',
                        'par_nom'=>'Le grand Verger',
                        'par_superficie'=>'300',
                        'par_prop'=>'2',
                    ],
                    [
                        'par_id'=>'3',
                        'par_lieu'=>'Montargy',
                        'par_nom'=>'Plan des Bauges',
                        'par_superficie'=>'220',
                        'par_prop'=>'1',
                    ],
                    [
                        'par_id'=>'4',
                        'par_lieu'=>'Arith',
                        'par_nom'=>'Les Pres Rus',
                        'par_superficie'=>'750',
                        'par_prop'=>'4',
                    ],
                    [
                        'par_id'=>'5',
                        'par_lieu'=>'Montargy',
                        'par_nom'=>'Lafosse',
                        'par_superficie'=>'600',
                        'par_prop'=>'1',
                    ],
                    ]);
                    Intervention::insert([
                    [
                        'int_emp_nss'=>'165070712345678',
                        'int_par_id'=>'1',
                        'int_debut'=>'2011-12-14',
                        'int_nb_jrs'=>'5'
                    ],[
                        'int_emp_nss'=>'165070712345678',
                        'int_par_id'=>'2',
                        'int_debut'=>'2012-01-10',
                        'int_nb_jrs'=>'3'
                    ],[
                        'int_emp_nss'=>'165070712345678',
                        'int_par_id'=>'5',
                        'int_debut'=>'2012-01-20',
                        'int_nb_jrs'=>'6'
                    ],[
                        'int_emp_nss'=>'175070712345678',
                        'int_par_id'=>'1',
                        'int_debut'=>'2011-12-11',
                        'int_nb_jrs'=>'3'
                    ],
                    [
                        'int_emp_nss'=>'175070712345678',
                        'int_par_id'=>'2',
                        'int_debut'=>'2012-01-10',
                        'int_nb_jrs'=>'3'
                    ],
                ]);
    
    }
}
