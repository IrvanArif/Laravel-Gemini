<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portofolio Irvan Arif Agustian">
    <meta name="keywords" content="QA Engineer, Automation Testing, Cypress, SEO Specialist, Sukabumi">
    <meta name="author" content="Irvan Arif Agustian">
    
    <title>Irvan Arif A. | QA & Web Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Efek smooth scrolling */
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <span class="font-bold text-xl text-blue-900">Irvan.Dev</span>
            <div class="space-x-4 text-sm font-medium">
                <a href="#about" class="hover:text-blue-600">Tentang</a>
                <a href="#projects" class="hover:text-blue-600">Proyek</a>
                <a href="#experience" class="hover:text-blue-600">Pengalaman</a>
            </div>
        </div>
    </nav>

    <header class="bg-slate-900 text-white py-20 px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <div class="w-24 h-24 bg-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center text-3xl font-bold border-4 border-white shadow-lg">
                IA
            </div>
            
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight">Irvan Arif Agustian</h1>
            <p class="text-xl text-blue-300 font-medium mb-6">QA Engineer | CSV Specialist | Laravel Learner</p>
            
            <p class="text-slate-400 max-w-lg mx-auto leading-relaxed mb-8">
                Lulusan Teknik Informatika dengan fokus pada Quality Assurance dan Pengembangan Web. 
                Berpengalaman dalam validasi sistem (CSV) dan otomatisasi pengujian.
            </p>

            <div class="flex justify-center gap-4">
                <a href="https://www.linkedin.com/in/irvan-arif-agustian-63b4aa281/" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition font-semibold shadow-lg hover:-translate-y-1">
                    Connect LinkedIn
                </a>
                <a href="https://github.com/IrvanArif" target="_blank" class="bg-slate-700 hover:bg-slate-600 text-white px-6 py-3 rounded-lg transition font-semibold shadow-lg hover:-translate-y-1">
                    Lihat GitHub
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-6 py-12 max-w-5xl">

        <section class="mb-16 text-center">
            <h2 class="text-2xl font-bold text-slate-800 mb-6">Technical Skills</h2>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach($skills as $skill)
                <span class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover:border-blue-400 hover:text-blue-600 transition cursor-default">
                    {{ $skill->name }}
                </span>
                @endforeach
            </div>
        </section>

        <section id="projects" class="mb-16 scroll-mt-20">
            <div class="flex items-center gap-4 mb-8">
                <div class="h-1 flex-1 bg-slate-200 rounded"></div>
                <h2 class="text-2xl font-bold text-slate-800">Featured Projects</h2>
                <div class="h-1 flex-1 bg-slate-200 rounded"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-md transition flex flex-col h-full">
                    <div class="p-6 flex-1">
                        <h3 class="font-bold text-lg text-slate-900 mb-2">{{ $project->title }}</h3>
                        <p class="text-xs font-bold text-blue-600 mb-3 uppercase tracking-wider">{{ $project->tech_stack }}</p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            {{ $project->description }}
                        </p>
                    </div>
                    @if($project->link)
                    <div class="bg-slate-50 p-4 border-t border-slate-100">
                        <a href="{{ $project->link }}" target="_blank" class="text-blue-600 text-sm font-semibold hover:underline flex items-center gap-1">
                            Lihat Detail &rarr;
                        </a>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </section>

        <section id="experience" class="mb-16 scroll-mt-20">
            <h2 class="text-2xl font-bold text-slate-800 mb-8 border-l-4 border-blue-600 pl-4">Pengalaman Profesional</h2>
            
            <div class="space-y-8 relative border-l-2 border-slate-200 ml-3 pl-8 pb-4">
                @foreach($experiences as $job)
                <div class="relative">
                    <span class="absolute -left-[41px] top-1 h-5 w-5 rounded-full border-4 border-white bg-blue-600"></span>
                    
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-100 hover:border-blue-200 transition">
                        <div class="flex flex-col md:flex-row justify-between md:items-start mb-2">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $job->role }}</h3>
                                <p class="text-blue-600 font-medium">{{ $job->company }}</p>
                            </div>
                            <span class="text-xs font-bold text-slate-500 bg-slate-100 px-3 py-1 rounded-full mt-2 md:mt-0 whitespace-nowrap">
                                {{ $job->period }}
                            </span>
                        </div>
                        <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                            {{ $job->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="mb-12">
             <h2 class="text-2xl font-bold text-slate-800 mb-8 border-l-4 border-blue-600 pl-4">Pendidikan</h2>
            <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-100 flex flex-col md:flex-row justify-between items-center">
                @foreach($educations as $edu)
                <div>
                    <h3 class="font-bold text-lg text-slate-900">{{ $edu->institution }}</h3>
                    <p class="text-blue-600">{{ $edu->degree }}</p>
                </div>
                <div class="text-right mt-4 md:mt-0">
                    <p class="text-sm text-slate-500">{{ $edu->period }}</p>
                    @if($edu->gpa)
                    <p class="text-sm font-bold text-slate-800 bg-green-100 text-green-800 px-3 py-1 rounded-full inline-block mt-2">IPK: {{ $edu->gpa }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </section>

    </main>

    <footer class="bg-slate-900 text-slate-400 py-10 text-center text-sm">
        <div class="container mx-auto px-6">
            <p class="mb-2">&copy; 2026 Irvan Arif Agustian.</p>
            <p>Dibangun dengan <span class="text-white font-bold">Laravel 12</span> & <span class="text-white font-bold">Tailwind CSS</span>.</p>
        </div>
    </footer>

</body>
</html>