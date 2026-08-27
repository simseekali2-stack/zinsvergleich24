@extends('layouts.app')

@section('title', 'Impressum - FestgeldFinder24')
@section('meta_description', 'Rechtliche Informationen und Anbieterkennzeichnung gemäß § 5 DDG für FestgeldFinder24 (L&P Kapitalverwaltungs GmbH).')

@section('content')

<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="bg-emerald-500/20 text-emerald-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-emerald-500/30">
            Rechtliche Anbieterkennzeichnung
        </span>
        <h1 class="text-3xl sm:text-4xl font-black">Impressum</h1>
        <p class="text-slate-300 text-sm leading-relaxed">
            Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG) und Aufsichtsbehörden-Registrierung.
        </p>
    </div>
</div>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white p-8 sm:p-12 rounded-2xl border border-slate-200 shadow-xl space-y-8 text-slate-800 leading-relaxed">
            
            <!-- Company & Address -->
            <div>
                <h2 class="text-xl font-bold text-slate-900 border-b border-slate-200 pb-2 mb-4">
                    Anbieter der Website
                </h2>
                <div class="space-y-1 text-base">
                    <p class="font-black text-slate-900 text-lg">L&P Kapitalverwaltungs GmbH</p>
                    <p>Grosse Bleichen 34</p>
                    <p>20354 Hamburg</p>
                    <p>Deutschland</p>
                </div>
            </div>

            <!-- Regulatory & BaFin Numbers -->
            <div class="p-6 bg-slate-900 text-white rounded-xl border border-slate-800 space-y-4">
                <h2 class="text-base font-bold text-amber-400 uppercase tracking-wider flex items-center">
                    <svg class="w-5 h-5 text-amber-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    Aufsichtsbehörde & Registrierung
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                    <div class="bg-slate-800/80 p-4 rounded-lg border border-slate-700">
                        <span class="text-xs text-slate-400 block mb-1">Bundesanstalt für Finanzdienstleistungsaufsicht</span>
                        <span class="font-extrabold text-emerald-400 text-base">BaFin-ID: 10161369</span>
                    </div>
                    <div class="bg-slate-800/80 p-4 rounded-lg border border-slate-700">
                        <span class="text-xs text-slate-400 block mb-1">Registrierungs-Nummer</span>
                        <span class="font-extrabold text-amber-400 text-base">Bak Nr.: 161369</span>
                    </div>
                </div>
            </div>

            <!-- Vertretungsberechtigte & Kontakt -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-slate-200">
                <div>
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Vertreten durch</h3>
                    <p class="text-sm text-slate-700">Geschäftsführung der L&P Kapitalverwaltungs GmbH</p>
                </div>

                <div>
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Kontakt</h3>
                    <p class="text-sm text-slate-700">E-Mail: kontakt@festgeldfinder24.de</p>
                    <p class="text-sm text-slate-700">Web: www.festgeldfinder24.de</p>
                </div>
            </div>

            <!-- Legal Disclaimers -->
            <div class="space-y-6 pt-6 border-t border-slate-200 text-xs text-slate-600">
                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">Haftung für Inhalte</h3>
                    <p>
                        Als Diensteanbieter sind wir gemäß § 7 Abs.1 DDG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 DDG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">Haftung für Links</h3>
                    <p>
                        Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">Urheberrecht</h3>
                    <p>
                        Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">EU-Streitschlichtung</h3>
                    <p>
                        Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: 
                        <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer" class="text-emerald-700 underline">https://ec.europa.eu/consumers/odr</a>. 
                        Unsere E-Mail-Adresse finden Sie oben im Impressum.
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
