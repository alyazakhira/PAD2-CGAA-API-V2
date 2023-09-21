<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CaseStudy;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseStudy::create([
            'question_type' => 'pusat',
            'instruction_count' => 5,
            'information' => 'Some Information',
            'instruction_1' => "Instruction 1",
            'instruction_2' => "Instruction 2",
            'instruction_3' => "Instruction 3",
            'instruction_4' => "Instruction 4",
            'instruction_5' => "Instruction 5",
            'key_answer_1' => "Key 1",
            'key_answer_2' => "Key 2",
            'key_answer_3' => "Key 3",
            'key_answer_4' => "Key 4",
            'key_answer_5' => "Key 5",
        ]);

        CaseStudy::create([
            'question_type' => 'daerah',
            'instruction_count' => 7,
            'information' => 'Some Information',
            'instruction_1' => "Instruction 1",
            'instruction_2' => "Instruction 2",
            'instruction_3' => "Instruction 3",
            'instruction_4' => "Instruction 4",
            'instruction_5' => "Instruction 5",
            'instruction_6' => "Instruction 6",
            'instruction_7' => "Instruction 7",
            'key_answer_1' => "Key 1",
            'key_answer_2' => "Key 2",
            'key_answer_3' => "Key 3",
            'key_answer_4' => "Key 4",
            'key_answer_5' => "Key 5",
            'key_answer_6' => "Key 6",
            'key_answer_7' => "Key 7",
        ]);
    }
}
