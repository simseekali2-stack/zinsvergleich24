@extends('layouts.app')

@section('title', 'Tagesgeld-Vergleich 2026 - Täglich verfügbar & Hohe Zinsen - FestgeldFinder24')
@section('meta_description', 'Vergleichen Sie die besten Tagesgeld-Konten in Deutschland. Täglich verfügbares Guthaben mit Top-Zinsen und 100.000 € Einlagensicherung.')

@section('content')

<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl space-y-4">
        <span class="bg-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
            FLEXIBLER NOTGROSCHEN
        </span>
        <h1 class="text-3xl sm:text-4xl font-black">Tagesgeld-Vergleich 2026</h1>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
            Bleiben Sie 100 % liquide und sichern Sie sich dennoch Zinsen von bis zu 3,60 % p.a. mit täglicher Verfügbarkeit.
        </p>
    </div>
</div>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        
        @foreach($offers as $offer)
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-md flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center space-x-4 w-full md:w-1/3">
                <img src="{{ $offer['bank_logo'] }}" alt="{{ $offer['bank_name'] }}" class="h-12 w-32 object-contain bg-slate-50 p-2 rounded-xl border border-slate-200">
                <div>
                    <h3 class="font-extrabold text-slate-900 text-base">{{ $offer['bank_name'] }}</h3>
                    <div class="text-xs text-amber-500 font-bold mt-1">★ {{ $offer['rating'] }}</div>
                    <div class="text-[11px] text-slate-500 mt-0.5">Einlagensicherung: {{ $offer['guarantee'] }}</div>
                </div>
            </div>

            <div class="text-center w-full md:w-1/3">
                <span class="text-xs text-slate-400 font-semibold block uppercase">Variabler Zinssatz</span>
                <span class="text-2xl font-black text-emerald-700 bg-emerald-50 px-4 py-1 rounded-lg border border-emerald-200 inline-block mt-1">
                    {{ number_format($offer['interest_rate'], 2, ',', '.') }} % p.a.
                </span>
                <span class="text-[11px] text-slate-500 block mt-1 font-medium">{{ $offer['bonus_term'] }}</span>
            </div>

            <div class="w-full md:w-auto text-right">
                <a href="#tagesgeld" class="block w-full md:w-auto text-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl shadow transition-all">
                    Tagesgeld Eröffnen &rarr;
                </a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
