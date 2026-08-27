@extends('layouts.app')

@section('title', 'Finanz-Nachrichten & Festgeld Ratgeber - FestgeldFinder24')
@section('meta_description', 'Tägliche Berichte zu EZB-Entscheidungen, Festgeld-Vergleichen, Tagesgeld Zinsen und sicheren Anlagestrategien in Deutschland.')

@section('content')

<!-- Header Section -->
<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="bg-emerald-500/20 text-emerald-300 text-xs font-extrabold px-3 py-1 rounded-full uppercase tracking-wider border border-emerald-500/30">
                Unabhängiger Finanzjournalismus
            </span>
            <h1 class="text-3xl sm:text-4xl font-black">Finanz-Nachrichten & Zins-Analysen</h1>
            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                Tägliche Berichte, Experteneinschätzungen und praxiserprobte Ratgeber rund um Festgeld, Tagesgeld, Inflation und die Europäische Zentralbank.
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex items-center justify-center space-x-2 mt-8 flex-wrap gap-y-2">
            <a href="{{ route('news.index') }}" class="px-4 py-2 rounded-lg text-xs font-bold transition-all {{ !$category ? 'bg-amber-400 text-slate-950 shadow-md' : 'bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                Alle Artikel
            </a>
            <a href="{{ route('news.index', ['category' => 'EZB & Zinsen']) }}" class="px-4 py-2 rounded-lg text-xs font-bold transition-all {{ strtolower($category) === 'ezb & zinsen' ? 'bg-amber-400 text-slate-950 shadow-md' : 'bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                EZB & Zinsen
            </a>
            <a href="{{ route('news.index', ['category' => 'Anlagestrategien']) }}" class="px-4 py-2 rounded-lg text-xs font-bold transition-all {{ strtolower($category) === 'anlagestrategien' ? 'bg-amber-400 text-slate-950 shadow-md' : 'bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                Anlagestrategien
            </a>
            <a href="{{ route('news.index', ['category' => 'Sicherheit & Recht']) }}" class="px-4 py-2 rounded-lg text-xs font-bold transition-all {{ strtolower($category) === 'sicherheit & recht' ? 'bg-amber-400 text-slate-950 shadow-md' : 'bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                Einlagensicherung
            </a>
            <a href="{{ route('news.index', ['category' => 'Steuern & Tipps']) }}" class="px-4 py-2 rounded-lg text-xs font-bold transition-all {{ strtolower($category) === 'steuern & tipps' ? 'bg-amber-400 text-slate-950 shadow-md' : 'bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                Steuern & Freibetrag
            </a>
        </div>
    </div>
</div>

<!-- Main News Grid -->
<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(count($articles) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <article class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <span class="absolute top-3 left-3 bg-emerald-700 text-white text-[10px] font-bold px-2.5 py-1 rounded-md uppercase shadow">
                        {{ $article['category'] }}
                    </span>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div>
                        <div class="flex items-center space-x-2 text-xs text-slate-400 mb-2">
                            <span>{{ $article['date'] }}</span>
                            <span>•</span>
                            <span>{{ $article['read_time'] }} Lesezeit</span>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 group-hover:text-emerald-700 transition-colors leading-snug">
                            <a href="{{ route('news.show', $article['slug']) }}">
                                {{ $article['title'] }}
                            </a>
                        </h2>
                        <p class="text-slate-600 text-xs line-clamp-3 mt-3 leading-relaxed">
                            {{ $article['excerpt'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium">Von {{ $article['author'] }}</span>
                        <a href="{{ route('news.show', $article['slug']) }}" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700">
                            <span>Artikel lesen</span>
                            <svg class="w-3.5 h-3.5 ml-1 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @else
        <div class="text-center py-16 bg-white rounded-2xl border border-slate-200">
            <h3 class="text-lg font-bold text-slate-800">Keine Artikel in dieser Kategorie gefunden.</h3>
            <a href="{{ route('news.index') }}" class="inline-block mt-4 text-xs font-bold text-emerald-600 hover:underline">
                Alle Artikel anzeigen &rarr;
            </a>
        </div>
        @endif

    </div>
</div>

@endsection
