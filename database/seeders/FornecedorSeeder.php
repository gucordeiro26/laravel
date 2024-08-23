<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        // Primeira Forma
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 8000';
        $fornecedor->site = 'https://www.fornecedor8000.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'fornecedor8000@gmail.com';
        $fornecedor->save();

        // Segunda Forma
        Fornecedor::create([
            'nome' => 'Fornecedor 4200',
            'site' => 'http://fornecedor4200bomdms.com.br',
            'uf' => 'RJ',
            'email' => 'fornecedor4200@hotmail.com',
        ]);
    }
}
