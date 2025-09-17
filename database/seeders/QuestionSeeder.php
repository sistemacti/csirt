<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('questions')->count() === 0) {
            $data = [
                'title'=>'Preguntas Frecuentes',
                'description'=>json_encode([
                    [
                        'question'=>'¿Pregunta 1?',
                        'answer'=>'lorem ipsum dolor sit amet consectetur adipisicing elit.'
                    ],
                    [
                        'question'=>'¿Pregunta 2?',
                        'answer'=>'lorem ipsum dolor sit amet consectetur adipisicing elit.'
                    ],
                    [
                        'question'=>'¿Pregunta 3?',
                        'answer'=>'lorem ipsum dolor sit amet consectetur adipisicing elit.'
                    ],
                    [
                        'question'=>'¿Pregunta 4?',
                        'answer'=>'lorem ipsum dolor sit amet consectetur adipisicing elit.'
                    ],
                    [
                        'question'=>'¿Pregunta 5?',
                        'answer'=>'lorem ipsum dolor sit amet consectetur adipisicing elit.'
                    ],
                ])
            ];

            Question::create($data);
        }
    }
}
