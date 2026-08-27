@extends('layouts.app')

@section('title', 'Zinsrechner & Zinseszins-Rechner 2026 - FestgeldFinder24')
@section('meta_description', 'Berechnen Sie Ihren Zinsertrag für Festgeld und Tagesgeld exakt mit Zinseszins und optionalem Abzug von Abgeltungsteuer.')

@section('content')

<!-- Header Banner with Solid Dark Background -->
<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl space-y-4">
        <span class="inline-block bg-emerald-600 text-white text-xs font-black px-3.5 py-1.5 rounded-full uppercase tracking-wider shadow">
            ZINSESZINS & RENDITE-RECHNER
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-white font-serif tracking-tight">
            Interaktiver Festgeld Zinsrechner
        </h1>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
            Berechnen Sie Ihren Ertrag auf den Cent genau. Berücksichtigen Sie Laufzeiten, unterschiedliche Zinssätze und Zinseszins-Effekte.
        </p>
    </div>
</div>

<div class="py-12 bg-slate-100 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white p-8 rounded-2xl border border-slate-300 shadow-xl space-y-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Anlagesumme (€)</label>
                    <input type="number" id="calc-amount" value="25000" step="1000" class="w-full px-4 py-3 rounded-xl border border-slate-300 font-extrabold text-slate-900 text-lg focus:ring-2 focus:ring-emerald-600 focus:outline-none shadow-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Zinssatz p.a. (%)</label>
                    <input type="number" id="calc-rate" value="4.10" step="0.05" class="w-full px-4 py-3 rounded-xl border border-slate-300 font-extrabold text-emerald-700 text-lg focus:ring-2 focus:ring-emerald-600 focus:outline-none shadow-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Laufzeit (Jahre)</label>
                    <select id="calc-years" class="w-full px-4 py-3 rounded-xl border border-slate-300 font-bold text-slate-900 focus:ring-2 focus:ring-emerald-600 focus:outline-none shadow-sm">
                        <option value="1">1 Jahr</option>
                        <option value="2">2 Jahre</option>
                        <option value="3" selected>3 Jahre</option>
                        <option value="5">5 Jahre</option>
                        <option value="10">10 Jahre</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Zinsgutschrift</label>
                    <select id="calc-compound" class="w-full px-4 py-3 rounded-xl border border-slate-300 font-bold text-slate-900 focus:ring-2 focus:ring-emerald-600 focus:outline-none shadow-sm">
                        <option value="annual">Jährlich (mit Zinseszins)</option>
                        <option value="end">Am Laufzeitende</option>
                    </select>
                </div>
            </div>

            <!-- Calculation Action -->
            <button type="button" onclick="runFullCalc()" class="w-full py-4 bg-emerald-700 hover:bg-emerald-800 text-white font-extrabold text-base rounded-xl transition-colors shadow-lg">
                Ertrag Jetzt Berechnen
            </button>

            <!-- Results Summary Card -->
            <div class="bg-slate-950 text-white p-6 rounded-2xl border border-slate-800 grid grid-cols-1 md:grid-cols-3 gap-6 text-center shadow-inner">
                <div>
                    <span class="text-xs text-slate-400 font-medium block uppercase">Einzahlung</span>
                    <span id="res-deposit" class="text-xl font-bold text-slate-200 mt-1 block">25.000,00 €</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 font-medium block uppercase">Gesamte Zinsen</span>
                    <span id="res-interest" class="text-2xl font-black text-emerald-400 mt-1 block">+ 3.203,89 €</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 font-medium block uppercase">Endkapital</span>
                    <span id="res-total" class="text-2xl font-black text-amber-400 mt-1 block">28.203,89 €</span>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    function runFullCalc() {
        const deposit = parseFloat(document.getElementById('calc-amount').value) || 0;
        const rate = (parseFloat(document.getElementById('calc-rate').value) || 0) / 100;
        const years = parseInt(document.getElementById('calc-years').value) || 1;
        const isCompound = document.getElementById('calc-compound').value === 'annual';

        let total = deposit;
        if (isCompound) {
            total = deposit * Math.pow(1 + rate, years);
        } else {
            total = deposit + (deposit * rate * years);
        }

        const interest = total - deposit;

        document.getElementById('res-deposit').innerText = deposit.toLocaleString('de-DE', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' €';
        document.getElementById('res-interest').innerText = '+ ' + interest.toLocaleString('de-DE', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' €';
        document.getElementById('res-total').innerText = total.toLocaleString('de-DE', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' €';
    }

    document.addEventListener('DOMContentLoaded', runFullCalc);
</script>

@endsection
