@extends('layouts.app')

@section('title', 'FestgeldFinder24 - Zeitung für Wirtschaft, Börse & Finanzen')

@section('content')

<!-- Main News Portal Front Page Grid -->
<section class="py-8 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breaking News Alert Banner -->
        <div class="mb-6 p-3 bg-red-700 text-white rounded-lg shadow-sm flex items-center justify-between text-xs sm:text-sm font-bold">
            <div class="flex items-center space-x-2 overflow-hidden">
                <span class="bg-white text-red-700 font-extrabold px-2 py-0.5 rounded text-[10px] uppercase tracking-wider flex-shrink-0">Eilmeldung</span>
                <span class="truncate">EZB Zinsentscheidung: Festgeld-Zinsen erreichen Jahreshöchststand von 4,10 % p.a.</span>
            </div>
            <a href="{{ route('news.show', $featuredArticle['slug']) }}" class="hidden md:inline-block bg-slate-900 hover:bg-slate-800 text-white text-xs px-3 py-1 rounded font-semibold whitespace-nowrap ml-4">
                Bericht Lesen &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left Main News Front (8 Cols) -->
            <main class="lg:col-span-8 space-y-8">
                
                <!-- Lead Hero Article Box -->
                @if($featuredArticle)
                <article class="bg-white rounded-2xl overflow-hidden border border-slate-300 shadow-md group">
                    <div class="relative aspect-video overflow-hidden">
                        <img src="{{ $featuredArticle['image'] }}" alt="{{ $featuredArticle['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent"></div>
                        <div class="absolute top-4 left-4 flex space-x-2">
                            <span class="bg-news-red text-white text-xs font-black px-3 py-1 rounded uppercase tracking-wider shadow">
                                {{ $featuredArticle['tag'] }}
                            </span>
                            <span class="bg-slate-900/80 text-emerald-400 text-xs font-bold px-3 py-1 rounded backdrop-blur-sm">
                                {{ $featuredArticle['category'] }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 space-y-4">
                        <div class="flex items-center space-x-3 text-xs text-slate-500 font-medium">
                            <span class="text-slate-900 font-bold">{{ $featuredArticle['date'] }}</span>
                            <span>•</span>
                            <span>{{ $featuredArticle['time'] }}</span>
                            <span>•</span>
                            <span class="text-emerald-700 font-semibold">Von {{ $featuredArticle['author'] }}</span>
                            <span>•</span>
                            <span>👁 {{ $featuredArticle['views_count'] }} Aufrufe</span>
                        </div>

                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-serif leading-tight group-hover:text-red-700 transition-colors">
                            <a href="{{ route('news.show', $featuredArticle['slug']) }}">
                                {{ $featuredArticle['title'] }}
                            </a>
                        </h1>

                        <p class="text-slate-700 text-base leading-relaxed font-serif">
                            {{ $featuredArticle['subtitle'] }}
                        </p>

                        <p class="text-slate-600 text-sm line-clamp-3 leading-relaxed">
                            {{ $featuredArticle['excerpt'] }}
                        </p>

                        <div class="pt-4 border-t border-slate-200 flex items-center justify-between">
                            <a href="{{ route('news.show', $featuredArticle['slug']) }}" class="inline-flex items-center font-bold text-sm text-red-700 hover:text-red-800">
                                <span>Vollständigen Bericht lesen</span>
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <span class="text-xs text-slate-400 font-semibold">💬 {{ $featuredArticle['comments_count'] }} Kommentare</span>
                        </div>
                    </div>
                </article>
                @endif

                <!-- Economy & Macro Market Section (Wirtschaft & Konjunktur) -->
                <div>
                    <div class="flex items-center justify-between border-b-2 border-red-700 pb-2 mb-6">
                        <h2 class="text-xl font-black text-slate-900 uppercase tracking-wider font-serif">
                            Wirtschaft, Konjunktur & Märkte
                        </h2>
                        <a href="{{ route('news.index') }}" class="text-xs font-bold text-red-700 hover:underline">
                            Alle Wirtschaftsmeldungen &rarr;
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($secondaryArticles as $article)
                        <article class="bg-white rounded-xl overflow-hidden border border-slate-300 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group">
                            <div>
                                <div class="relative aspect-video overflow-hidden">
                                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute top-2 left-2 bg-slate-900/90 text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase">
                                        {{ $article['category'] }}
                                    </span>
                                </div>

                                <div class="p-5 space-y-2">
                                    <div class="text-[11px] text-slate-400 font-medium">
                                        <span>{{ $article['date'] }}</span> • <span>{{ $article['read_time'] }}</span>
                                    </div>
                                    <h3 class="text-base font-bold text-slate-900 font-serif leading-snug group-hover:text-red-700 transition-colors">
                                        <a href="{{ route('news.show', $article['slug']) }}">
                                            {{ $article['title'] }}
                                        </a>
                                    </h3>
                                    <p class="text-slate-600 text-xs line-clamp-2 leading-relaxed">
                                        {{ $article['excerpt'] }}
                                    </p>
                                </div>
                            </div>

                            <div class="p-5 pt-0">
                                <a href="{{ route('news.show', $article['slug']) }}" class="text-xs font-bold text-emerald-700 hover:underline">
                                    Weiterlesen &rarr;
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>

            </main>

            <!-- Right News Portal Sidebar (4 Cols) -->
            <aside class="lg:col-span-4 space-y-6">
                
                <!-- Most Read Widget (Meistgelesen) -->
                <div class="bg-white p-6 rounded-2xl border border-slate-300 shadow-md space-y-4">
                    <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b-2 border-red-700 pb-2 flex items-center justify-between">
                        <span>🔥 Meistgelesen</span>
                        <span class="text-[10px] text-slate-400 font-normal">Top Berichte</span>
                    </h3>

                    <div class="space-y-4 divide-y divide-slate-100">
                        @foreach($secondaryArticles as $index => $art)
                        <div class="pt-3 first:pt-0 flex items-start space-x-3 group">
                            <span class="text-2xl font-black text-slate-300 group-hover:text-red-700 transition-colors font-serif">
                                0{{ $index + 1 }}
                            </span>
                            <div>
                                <span class="text-[10px] text-emerald-700 font-bold uppercase block">{{ $art['category'] }}</span>
                                <h4 class="text-xs font-bold text-slate-900 font-serif group-hover:text-red-700 transition-colors leading-snug">
                                    <a href="{{ route('news.show', $art['slug']) }}">
                                        {{ $art['title'] }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Redaktions-Empfehlungen -->
                <div class="bg-white p-6 rounded-2xl border border-slate-300 shadow-md space-y-4">
                    <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b-2 border-emerald-600 pb-2">
                        Redaktionsempfehlung
                    </h3>
                    <div class="p-4 bg-emerald-50 rounded-xl border border-emerald-200 text-xs space-y-2">
                        <span class="bg-emerald-700 text-white text-[9px] font-bold px-2 py-0.5 rounded uppercase">Analyse</span>
                        <h4 class="font-bold text-slate-900 font-serif">Deutsches BIP 2026: Konjunktur zieht dank sinkender Energiepreise spürbar an</h4>
                        <p class="text-slate-600 leading-relaxed">Lesen Sie die Analyse zur Lage der deutschen Wirtschaft.</p>
                        <a href="{{ route('news.show', $secondaryArticles[0]['slug'] ?? $featuredArticle['slug']) }}" class="inline-block font-bold text-emerald-800 hover:underline">
                            Zum Artikel &rarr;
                        </a>
                    </div>
                </div>

            </aside>

        </div>

    </div>
</section>

@endsection
