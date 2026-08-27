@extends('layouts.app')

@section('title', 'Festgeld-Übersicht 2026 - Zinskonditionen & Banken - FestgeldFinder24')
@section('meta_description', 'Übersicht der besten Festgeld-Angebote in Deutschland. Garantierte Zinsen bis zu 4,10 % p.a. mit 100.000 € gesetzlicher Einlagensicherung.')

@section('content')

<!-- Header Banner -->
<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl space-y-4">
        <span class="bg-amber-500 text-slate-950 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
            GEPRÜFTE ANBIETERÜBERSICHT 2026
        </span>
        <h1 class="text-3xl sm:text-4xl font-black font-serif">Festgeld-Zinssätze im Überblick</h1>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
            Aktuelle Konditionen europäischer Partnerbanken mit gesetzlicher EU-Einlagensicherung. Vertragsgarantierter Zinsertrag ohne Kursrisiko.
        </p>
    </div>
</div>

<!-- Main Offers Table Section -->
<div class="py-12 bg-slate-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        
        <div class="space-y-4">
            @foreach($offers as $offer)
            <div class="bg-white rounded-2xl p-6 border border-slate-300 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col md:flex-row items-center justify-between gap-6">
                
                <!-- Bank Info -->
                <div class="flex items-center space-x-4 w-full md:w-1/2">
                    <img src="{{ $offer['bank_logo'] }}" alt="{{ $offer['bank_name'] }}" class="h-12 w-32 object-contain bg-slate-50 p-2 rounded-xl border border-slate-200">
                    <div>
                        <h3 class="font-extrabold text-slate-900 text-base flex items-center">
                            <span>{{ $offer['bank_name'] }}</span>
                            @if($offer['featured'])
                            <span class="ml-2 bg-amber-100 text-amber-800 text-[10px] font-extrabold px-2 py-0.5 rounded-full border border-amber-300">
                                {{ $offer['highlight'] }}
                            </span>
                            @endif
                        </h3>
                        <div class="text-xs text-amber-500 font-bold mt-1">
                            ★ {{ $offer['rating'] }} <span class="text-slate-400 font-normal">({{ $offer['reviews_count'] }} Bewertungen)</span>
                        </div>
                        <div class="text-[11px] text-slate-500 mt-0.5">
                            Einlagensicherung: <strong class="text-slate-700">{{ $offer['guarantee'] }}</strong>
                        </div>
                    </div>
                </div>

                <!-- Rate Callout & Term -->
                <div class="flex items-center space-x-8 text-center justify-center">
                    <div>
                        <span class="text-[11px] text-slate-400 font-semibold block uppercase">Laufzeit</span>
                        <span class="text-sm font-bold text-slate-800 block mt-1">
                            {{ $offer['term'] }}
                        </span>
                    </div>

                    <div>
                        <span class="text-[11px] text-slate-400 font-semibold block uppercase">Zinssatz p.a.</span>
                        <span class="text-2xl font-black text-emerald-700 bg-emerald-50 px-4 py-1 rounded-lg border border-emerald-200 inline-block mt-1">
                            {{ number_format($offer['interest_rate'], 2, ',', '.') }} %
                        </span>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="w-full md:w-auto text-right">
                    <a href="#angebot" class="block w-full md:w-auto text-center px-6 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs rounded-xl shadow transition-all">
                        Jetzt Festgeld Eröffnen &rarr;
                    </a>
                    <span class="text-[10px] text-slate-400 block mt-1.5 text-center md:text-right">Kostenfreie Kontoeröffnung</span>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
