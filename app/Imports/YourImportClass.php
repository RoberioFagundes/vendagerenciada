<?php

namespace App\Imports;

use App\Models\ApiProduto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

// app/Imports/YourImportClass.php
class YourImportClass implements ToModel
{
    public function model(array $row)
    {
        // Define how to create a model from the Excel row data
        return new ApiProduto([
            'substancia' => $row[0],
            'cnpj' => $row[1],
            'laboratorio' => $row[1],
            'codigoGgrem' => $row[2],
            'registro' => $row[2],
            'EAN_1' => $row[3],
            'EAN_2' => $row[4],
            'EAN_3' => $row[5],
            'produto' => $row[6],
            'apresentacao' => $row[7],
            'classeTerapeutica' => $row[8],
            'tipoProduto' => $row[9],
            'regimePreco' => $row[10],
            'PFSemImpostos' => $row[12],
            'PF_0' => $row[13],
            'PF_12 PF_12_ALC' => $row[14],
            'PF_17' => $row[15],
            'PF17_ALC' => $row[16],
            'PF_17_5' => $row[17],
            'PF_17_5_ALC' => $row[18],
            'PF_18' => $row[19],
            'PF_18_ALC' => $row[20],
            'PF_19' => $row[21],
            'PF_19_ALC' => $row[22],
            'PF_20' => $row[23],
            'PF_20_ALC' => $row[24],
            'PF_21' => $row[25],
            'PF_21_ALC' => $row[26],
            'PF_22' => $row[27],
            'PF_22_ALC' => $row[28],
            'PMC_Sem_Impostos' => $row[29],
            'PMC' => $row[30],
            'PMC_12' => $row[31],
            'PMC_12_ALC' => $row[32],
            'PMC_17' => $row[33],
            'PMC_17_ALC' => $row[34],
            'PMC_17_5' => $row[35],
            'PMC_17_5_ALC' => $row[36],
            'PMC_18' => $row[37],
            'PMC_18_ALC' => $row[38],
            'PMC_19' => $row[39],
            'PMC_19_ALC' => $row[40],
            'PMC_20' => $row[41],
            'PMC_20_ALC' => $row[42],
            'PMC_21' => $row[43],
            'PMC_21_ALC' => $row[44],
            'PMC_22' => $row[45],
            'PMC_22_ALC' => $row[46],
            'restricao_hospital' => $row[47],
            'CAP' => $row[48],
            'CONFAZ_87' => $row[49],
            'ICMS_0' => $row[50],
            'ANÁLISE_RECURSAL' => $row[51],
            'LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS' => $row[52],
            'COMERCIALIZAÇAO_2022' => $row[53],
            'TARJA' => $row[54]
            // Add more columns as needed
        ]);
    }
}
