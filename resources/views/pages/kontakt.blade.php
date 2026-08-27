@extends('layouts.app')

@section('title', 'Kontakt - ' . config('app.name', 'ZinsVergleich24'))
@section('meta_description', 'Kontaktieren Sie uns bei Fragen zu Sparzinsen, Festgeld und Finanzberichten.')

@section('content')

<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="bg-indigo-500/20 text-indigo-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-indigo-500/30">
            Kundenservice & Support
        </span>
        <h1 class="text-3xl sm:text-4xl font-black">Kontaktieren Sie uns</h1>
        <p class="text-slate-300 text-sm leading-relaxed max-w-2xl mx-auto">
            Haben Sie Fragen, Feedback oder Anregungen zu unseren Berichten und Zinsvergleichen? Wir sind gerne für Sie da.
        </p>
    </div>
</div>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(session('success'))
            <div class="mb-8 p-4 bg-emerald-50 border-l-4 border-emerald-500 rounded-r-xl shadow-sm text-emerald-900 flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <div>
                        <p class="font-bold text-sm">Vielen Dank für Ihre Nachricht!</p>
                        <p class="text-xs text-emerald-700 mt-0.5">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Address & Information Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-md space-y-6">
                    <h2 class="text-lg font-bold text-slate-900 border-b border-slate-200 pb-3">
                        Kontaktdaten
                    </h2>

                    <div class="flex items-start space-x-4">
                        <div class="bg-indigo-50 p-3 rounded-xl text-indigo-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider">Anschrift</h3>
                            <p class="font-bold text-slate-900 text-sm mt-1">Oskar Ehrenfried Heinrich, Sebastian Hartrott Geschäftsführer</p>
                            <p class="text-xs text-slate-600">Ortsstr. 42</p>
                            <p class="text-xs text-slate-600">07426 Allendorf</p>
                            <p class="text-xs text-slate-600 font-semibold">Deutschland</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 border-t border-slate-100 pt-5">
                        <div class="bg-indigo-50 p-3 rounded-xl text-indigo-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider">Online Support</h3>
                            <p class="text-xs text-slate-600 mt-1">Nutzen Sie unser schnelles Kontaktformular für direkte Anfragen.</p>
                        </div>
                    </div>

                    <div class="bg-slate-900 p-5 rounded-xl text-white space-y-2 text-xs">
                        <span class="text-amber-400 font-bold uppercase tracking-wider text-[10px]">Rechtliche Hinweise</span>
                        <p class="text-slate-300 leading-relaxed">
                            Erfahren Sie mehr über unsere Anbieterkennzeichnung im 
                            <a href="{{ route('impressum') }}" class="text-amber-400 underline hover:text-amber-300">Impressum</a>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 sm:p-10 rounded-2xl border border-slate-200 shadow-md">
                    <h2 class="text-xl font-bold text-slate-900 mb-2">Nachricht Senden</h2>
                    <p class="text-xs text-slate-500 mb-6">Bitte füllen Sie alle Felder aus. Wir antworten Ihnen so schnell wie möglich.</p>

                    <form action="{{ route('kontakt.submit') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Ihr Name *</label>
                                <input type="text" id="name" name="name" required placeholder="z.B. Max Mustermann" 
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Ihre E-Mail-Adresse *</label>
                                <input type="email" id="email" name="email" required placeholder="max@beispiel.de" 
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Betreff *</label>
                            <input type="text" id="subject" name="subject" required placeholder="Worum geht es?" 
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Ihre Nachricht *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Schreiben Sie hier Ihre Nachricht..." 
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-indigo-700 hover:bg-indigo-800 text-white font-extrabold text-xs uppercase tracking-wider rounded-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                Nachricht Absenden
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
