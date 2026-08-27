@extends('layouts.app')

@section('title', $article['title'] . ' - FestgeldFinder24')
@section('meta_description', $article['excerpt'])

@section('content')

<!-- Article Header -->
<div class="bg-slate-900 text-white pt-8 pb-12 border-b border-slate-800 shadow-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center space-x-2 text-xs text-slate-400">
            <a href="{{ route('home') }}" class="hover:text-white">Startseite</a>
            <span>/</span>
            <a href="{{ route('news.index') }}" class="hover:text-white">Finanznachrichten</a>
            <span>/</span>
            <span class="text-emerald-400 font-medium truncate max-w-xs">{{ $article['title'] }}</span>
        </nav>

        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-md uppercase tracking-wider shadow">
            {{ $article['category'] }}
        </div>

        <h1 class="text-3xl sm:text-4xl font-black leading-tight text-white font-serif">
            {{ $article['title'] }}
        </h1>

        <!-- Author Bar -->
        <div class="flex items-center space-x-4 pt-2 text-xs text-slate-300 border-t border-slate-800/80">
            <div class="w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center font-bold text-white text-sm shadow">
                {{ substr($article['author'], 0, 1) }}
            </div>
            <div>
                <div class="font-bold text-white">{{ $article['author'] }}</div>
                <div class="text-slate-400 text-[11px]">{{ $article['author_role'] }}</div>
            </div>
            <span class="text-slate-600">•</span>
            <div>
                <span class="text-slate-400">Veröffentlicht am:</span>
                <span class="font-semibold text-slate-200">{{ $article['date'] }}</span>
            </div>
            <span class="text-slate-600">•</span>
            <div>
                <span class="text-slate-400">Lesezeit:</span>
                <span class="font-semibold text-amber-400">{{ $article['read_time'] }}</span>
            </div>
        </div>

    </div>
</div>

<!-- Main Body Section -->
<div class="py-12 bg-slate-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Main Article Content (8 Cols) -->
            <main class="lg:col-span-8 bg-white p-6 sm:p-10 rounded-2xl border border-slate-300 shadow-md">
                
                <!-- Main Featured Banner Image -->
                <div class="mb-8 rounded-xl overflow-hidden shadow-lg aspect-video relative">
                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover">
                </div>

                <!-- Key Takeaways Box -->
                @if(!empty($article['key_takeaways']))
                <div class="mb-8 p-6 bg-slate-900 text-white rounded-xl border border-slate-800 shadow-lg">
                    <h3 class="text-sm font-extrabold text-amber-400 uppercase tracking-wider mb-3 flex items-center">
                        <svg class="w-5 h-5 text-amber-400 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                        Wichtigste Erkenntnisse im Überblick (Key Takeaways)
                    </h3>
                    <ul class="space-y-2 text-xs sm:text-sm text-slate-200">
                        @foreach($article['key_takeaways'] as $point)
                        <li class="flex items-start space-x-2">
                            <span class="text-emerald-400 font-bold">•</span>
                            <span>{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Rich Text Article Content -->
                <div class="prose prose-slate max-w-none prose-p:leading-relaxed prose-p:text-slate-700 prose-p:text-base prose-p:font-serif prose-headings:font-bold prose-headings:text-slate-900 prose-headings:font-serif">
                    {!! $article['content'] !!}
                </div>

                <!-- Author Bio Box -->
                <div class="mt-12 pt-6 border-t border-slate-200 bg-slate-50 p-6 rounded-xl flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-full bg-slate-900 text-white flex items-center justify-center font-extrabold text-lg flex-shrink-0">
                        {{ substr($article['author'], 0, 1) }}
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">{{ $article['author'] }}</h4>
                        <p class="text-xs text-slate-500 font-medium mb-1">{{ $article['author_role'] }}</p>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Wirtschafts- und Finanzredakteur bei FestgeldFinder24. Berichtet über Makroökonomie, Geldpolitik der EZB und Konjunkturentwicklungen.
                        </p>
                    </div>
                </div>

                <!-- Action CTA Box -->
                <div class="mt-8 p-6 bg-gradient-to-r from-emerald-700 to-emerald-800 rounded-xl text-white flex flex-col sm:flex-row items-center justify-between shadow-lg">
                    <div>
                        <h4 class="font-extrabold text-lg font-serif">Weitere Wirtschaftsmeldungen lesen</h4>
                        <p class="text-xs text-emerald-100 mt-1">Bleiben Sie stets informiert über Konjunktur, Märkte und Zinsen.</p>
                    </div>
                    <a href="{{ route('news.index') }}" class="mt-4 sm:mt-0 px-6 py-3 bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs rounded-lg transition-colors shadow">
                        Zum Nachrichten-Archiv &rarr;
                    </a>
                </div>

            </main>

            <!-- Right Sidebar (4 Cols) -->
            <aside class="lg:col-span-4 space-y-8">
                
                <!-- Related News Articles -->
                <div class="bg-white p-6 rounded-2xl border border-slate-300 shadow-md space-y-4">
                    <h3 class="text-base font-bold text-slate-900 font-serif border-b border-slate-200 pb-3">
                        Weitere Berichte & Analysen
                    </h3>

                    <div class="space-y-4">
                        @foreach(array_slice($relatedArticles, 0, 4) as $rel)
                        <div class="group">
                            <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider block mb-1">{{ $rel['category'] }}</span>
                            <h4 class="text-xs font-bold text-slate-800 font-serif group-hover:text-red-700 transition-colors leading-snug">
                                <a href="{{ route('news.show', $rel['slug']) }}">
                                    {{ $rel['title'] }}
                                </a>
                            </h4>
                        </div>
                        @endforeach
                    </div>
                </div>

            </aside>

        </div>

    </div>
</div>

@endsection
