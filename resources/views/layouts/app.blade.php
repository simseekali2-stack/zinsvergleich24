<!DOCTYPE html>
<html lang="de" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZinsVergleich24 - Unabhängiger Zinsvergleich & Nachrichten')</title>
    <meta name="description" content="@yield('meta_description', 'Beste Zinsen für Ihre Ersparnisse. ZinsVergleich24 liefert tägliche Berichte zu EZB-Entscheidungen, Festgeld, Tagesgeld und Markt-Entwicklungen.')">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Merriweather', 'Georgia', 'serif'],
                    },
                    colors: {
                        news: {
                            red: '#DC2626',
                            dark: '#0F172A',
                            blue: '#1D4ED8',
                            cyan: '#06B6D4',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-slate-100 text-slate-900 font-sans antialiased">

    <!-- Top Info Bar -->
    <div class="bg-slate-950 text-slate-300 text-[11px] border-b border-slate-800 py-1.5 px-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-3 text-xs">
                <span class="font-bold text-slate-200">27.08.2026</span>
                <span class="text-slate-700">|</span>
                <span class="text-slate-400 hidden sm:inline">ZinsVergleich24 Portal</span>
                <span class="text-slate-700">|</span>
                <span class="text-cyan-400 font-bold flex items-center text-[11px]">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 mr-1.5 animate-pulse"></span>
                    <span>Zins-Redaktion Aktiv</span>
                </span>
            </div>
            
            <div class="flex items-center space-x-3 text-[11px]">
                <a href="{{ route('news.index') }}" class="hover:text-white transition-colors">Nachrichten-Archiv</a>
                <span class="text-slate-700">•</span>
                <a href="{{ route('impressum') }}" class="text-cyan-400 hover:text-cyan-300 font-bold underline transition-colors">Impressum (L&P GmbH)</a>
            </div>
        </div>
    </div>

    <!-- Live Market Bar -->
    <div class="bg-slate-900 text-white text-xs py-2 border-b border-slate-800 overflow-x-auto no-scrollbar shadow-inner">
        <div class="max-w-7xl mx-auto px-4 flex items-center space-x-6 whitespace-nowrap">
            <span class="bg-blue-700 text-white text-[10px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider flex items-center flex-shrink-0 shadow">
                <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping mr-1.5"></span>
                Zinsvergleich Live
            </span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">EZB Leitzins:</span>
                <span class="font-bold text-cyan-400">3,75%</span>
            </div>
            <span class="text-slate-700">|</span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">DAX:</span>
                <span class="font-bold text-emerald-400">18.420,50 ▲ (+0,42%)</span>
            </div>
            <span class="text-slate-700">|</span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">EUR/USD:</span>
                <span class="font-bold text-slate-200">1,0912 ▲</span>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white border-b border-slate-300 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 sm:py-4">
            <div class="flex items-center justify-between">
                
                <div class="hidden lg:block text-xs text-slate-500 space-y-0.5 border-l-2 border-blue-600 pl-3">
                    <div class="font-bold text-slate-900 uppercase tracking-wider">ZinsVergleich24 Portal</div>
                    <div>Unabhängige Marktberichte</div>
                    <div class="text-[10px] text-slate-400">BaFin-ID: 10161369</div>
                </div>

                <a href="{{ route('home') }}" class="flex flex-col items-center group text-center">
                    <img src="{{ asset('images/logo.svg') }}" alt="ZinsVergleich24" class="h-10 sm:h-14 w-auto transition-transform group-hover:scale-102">
                </a>

                <div class="flex items-center space-x-2">
                    <a href="{{ route('news.index') }}" class="hidden sm:inline-flex px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white font-extrabold text-xs rounded-lg shadow-sm transition-all">
                        Nachrichten Lesen
                    </a>

                    <button id="mobile-toggle-btn" type="button" class="p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none border border-slate-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <div class="bg-slate-950 text-white border-t border-b border-slate-900">
            <div class="max-w-7xl mx-auto px-4">
                <nav class="flex items-center space-x-1 overflow-x-auto py-1.5 no-scrollbar text-xs font-bold uppercase tracking-wider whitespace-nowrap">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded hover:bg-slate-800 transition-colors {{ request()->routeIs('home') ? 'bg-blue-700 text-white' : 'text-slate-300' }}">
                        Startseite
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Politik & EZB']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Politik & EZB
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Wirtschaft & Konjunktur']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Wirtschaft & Konjunktur
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Börse & Märkte']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Börse & Märkte
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Immobilien & Zinsen']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Immobilien & Zinsen
                    </a>
                    <a href="{{ route('impressum') }}" class="px-3 py-2 rounded hover:bg-slate-800 text-cyan-400 hover:text-cyan-300 transition-colors">
                        Impressum
                    </a>
                </nav>
            </div>
        </div>

        <div id="mobile-menu-drawer" class="hidden bg-slate-900 text-white border-b border-slate-800 px-4 py-4 space-y-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded text-sm font-bold bg-slate-800 text-white">Startseite</a>
            <a href="{{ route('news.index', ['category' => 'Politik & EZB']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200">Politik & EZB</a>
            <a href="{{ route('news.index', ['category' => 'Wirtschaft & Konjunktur']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200">Wirtschaft & Konjunktur</a>
            <a href="{{ route('news.index', ['category' => 'Börse & Märkte']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200">Börse & Märkte</a>
            <a href="{{ route('impressum') }}" class="block px-3 py-2 rounded text-sm font-bold text-cyan-400 bg-slate-800/80">Impressum Angaben (L&P GmbH)</a>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer with Royal Blue Accent -->
    <footer class="bg-slate-950 text-slate-400 text-xs border-t-4 border-blue-600 pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-3">
                    <img src="{{ asset('images/logo.svg') }}" alt="ZinsVergleich24" class="h-10 w-auto">
                    <p class="text-slate-400 leading-relaxed text-xs font-serif">
                        ZinsVergleich24 ist das unabhängige Finanzmedien-Portal der L&P Kapitalverwaltungs GmbH.
                    </p>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3 border-b border-slate-800 pb-1">Rubriken</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('news.index', ['category' => 'Wirtschaft & Konjunktur']) }}" class="hover:text-cyan-400">Wirtschaft & Konjunktur</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Börse & Märkte']) }}" class="hover:text-cyan-400">Börse & Märkte</a></li>
                        <li><a href="{{ route('news.index') }}" class="hover:text-cyan-400">Finanznachrichten Archiv</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3 border-b border-slate-800 pb-1">Schwerpunkte</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('news.index', ['category' => 'Politik & EZB']) }}" class="hover:text-cyan-400">EZB Leitzins-Entscheidungen</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Immobilien & Zinsen']) }}" class="hover:text-cyan-400">Bauzinsen & Markt</a></li>
                    </ul>
                </div>
                <div class="bg-slate-900 p-4 rounded-xl border border-slate-800 space-y-2">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider text-cyan-400">Impressum Angaben</h4>
                    <p class="font-bold text-slate-200">L&P Kapitalverwaltungs GmbH</p>
                    <p>Grosse Bleichen 34, 20354 Hamburg</p>
                    <p class="pt-1 text-slate-400"><strong>BaFin-ID:</strong> 10161369</p>
                    <p class="text-slate-400"><strong>Bak Nr.:</strong> 161369</p>
                    <a href="{{ route('impressum') }}" class="inline-block mt-2 text-cyan-400 font-bold hover:underline">Vollständiges Impressum &rarr;</a>
                </div>
            </div>
            <div class="border-t border-slate-900 pt-6 text-center text-slate-400 text-[11px] flex flex-col md:flex-row justify-between items-center">
                <p>&copy; 2026 ZinsVergleich24. Alle Rechte vorbehalten. Herausgegeben von L&P Kapitalverwaltungs GmbH.</p>
                <div class="space-x-4">
                    <a href="{{ route('impressum') }}" class="hover:text-white">Impressum</a>
                    <a href="{{ route('datenschutz') }}" class="hover:text-white">Datenschutz</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-toggle-btn')?.addEventListener('click', function() {
            document.getElementById('mobile-menu-drawer')?.classList.toggle('hidden');
        });
    </script>
</body>
</html>
