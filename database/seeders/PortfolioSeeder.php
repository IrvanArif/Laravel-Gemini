<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        
        Experience::create([
            'company' => 'PT Simex Pharmaceutical Indonesia',
            'role' => 'Magang, Teknologi Informasi',
            'period' => 'Des 2025 - Jun 2026',
            'description' => 'Menyusun Protokol Kualifikasi Installasi dan Operasi. Migrasi data sistem informasi lama ke baru.'
        ]);
        
        Experience::create([
            'company' => 'PT Anugrah Kreasi Digital',
            'role' => 'Magang, Digital Marketing',
            'period' => 'Sep 2024 - Des 2024',
            'description' => 'Riset kata kunci SEO. Menulis artikel SEO on-page yang meningkatkan 5 situs PBN.'
        ]);
        
        Experience::create([
            'company' => 'PT Neuronworks Indonesia',
            'role' => 'Magang, Quality Assurance',
            'period' => 'Feb 2024 - Agt 2024',
            'description' => 'Eksekusi tes case, Automation Testing (Cypress) untuk UI, dan dokumentasi bug di Gitlab.'
        ]);        
        
        Experience::create([
            'company' => 'BLUD RSUD Sekarwangi',
            'role' => 'Cleaning Service', 
            'period' => 'Jan 2021 - Sep 2021',
            'description' => 'Menjaga kebersihan ruang perawat dan pasien serta suplai logistik.'
        ]);
        
        Education::create([
            'institution' => 'Universitas Nusa Putra',
            'degree' => 'S1 Teknik Informatika',
            'period' => 'Sep 2021 - Sep 2025',
            'gpa' => '3.53/4.00'
        ]);
        
        $skills = [
            'Cypress (Automation)', 
            'Manual Testing', 
            'SEO On-Page', 
            'Laravel (Learning)', 
            'PHP', 
            'Copywriting'
        ];
        
        Project::create([
            'title' => 'NLP Text Summarization (T5-small)',
            'tech_stack' => 'Python, Streamlit, Hugging Face',
            'description' => 'Implementasi model Transformer T5-small untuk peringkasan teks otomatis dalam pembuatan Meta Deskripsi SEO Bahasa Indonesia.',
            'link' => 'https://huggingface.co/Irvan14'
        ]);
        
        Project::create([
            'title' => 'Aplikasi Mobile Baca Komik',
            'tech_stack' => 'Flutter, Dart',
            'description' => 'Aplikasi mobile untuk membaca komik yang dipresentasikan pada Seminar Nasional Teknologi Informasi Mekatronika.',
            'link' => 'https://github.com/IrvanArif' 
        ]);
        
        Project::create([
            'title' => 'Optimasi SEO & PBN Network',
            'tech_stack' => 'SEO On-Page, WordPress, Analytics',
            'description' => 'Meningkatkan performa 5 situs PBN dalam 3 bulan dan melakukan audit artikel yang belum memenuhi standar SEO.',
            'link' => null
        ]);
        
        foreach ($skills as $skillName) {
            Skill::create(['name' => $skillName]);
        }
    }
}