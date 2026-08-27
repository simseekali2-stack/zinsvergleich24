@extends('layouts.app')

@section('title', 'Impressum - ' . config('app.name', 'ZinsVergleich24'))
@section('meta_description', 'Rechtliche Informationen und Anbieterkennzeichnung gemäß § 5 DDG.')

@section('content')

<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="bg-emerald-500/20 text-emerald-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-emerald-500/30">
            Rechtliche Anbieterkennzeichnung
        </span>
        <h1 class="text-3xl sm:text-4xl font-black">Impressum</h1>
        <p class="text-slate-300 text-sm leading-relaxed">
            Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG) und § 18 MStV.
        </p>
    </div>
</div>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white p-8 sm:p-12 rounded-2xl border border-slate-200 shadow-xl space-y-8 text-slate-800 leading-relaxed">
            
            <!-- Provider & Address -->
            <div>
                <h2 class="text-xl font-bold text-slate-900 border-b border-slate-200 pb-2 mb-4 flex items-center">
                    <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Anbieter der Website
                </h2>
                <div class="space-y-1 text-base">
                    <p class="font-black text-slate-900 text-xl">L&P Kapitalverwaltungs GmbH</p>
                    <p class="text-slate-700">Grosse Bleichen 34</p>
                    <p class="text-slate-700">20354 Hamburg</p>
                    <p class="text-slate-700 font-semibold">Deutschland</p>
                </div>
            </div>

            <!-- Representative & Contact -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-slate-200">
                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <h3 class="text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Vertreten durch</h3>
                    <p class="text-base font-bold text-slate-900">L&P Kapitalverwaltungs GmbH</p>
                </div>

                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <h3 class="text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Kontakt</h3>
                    <p class="text-sm font-semibold text-slate-800">E-Mail: <a href="{{ route('kontakt') }}" class="text-indigo-600 hover:underline">über Kontaktformular</a></p>
                    <p class="text-sm font-semibold text-slate-800">Web: <a href="{{ url('/') }}" class="text-indigo-600 hover:underline">{{ request()->getHost() }}</a></p>
                </div>
            </div>

            <!-- Content Responsibility -->
            <div class="p-6 bg-slate-900 text-white rounded-xl border border-slate-800 space-y-2">
                <h3 class="text-xs font-bold text-amber-400 uppercase tracking-wider">Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV</h3>
                <p class="text-base font-bold text-white">L&P Kapitalverwaltungs GmbH</p>
                <p class="text-sm text-slate-300">Grosse Bleichen 34</p>
                <p class="text-sm text-slate-300">20354 Hamburg, Deutschland</p>
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
                        <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer" class="text-indigo-600 underline">https://ec.europa.eu/consumers/odr</a>. 
                        Unsere E-Mail-Adresse finden Sie im Kontaktabschnitt dieses Impressums.
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
