<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopularTipoIncidente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            insert into tipoincidentes (id, descricao) values
            (1, 'Ataque Brute Force'),
            (2, 'Credencias vazadas'),
            (3, 'Ataque de DDoS'),
            (4, 'Atividades anormais de usuários')
            ");
    }
}
