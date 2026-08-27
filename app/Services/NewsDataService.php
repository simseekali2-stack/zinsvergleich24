<?php

namespace App\Services;

class NewsDataService
{
    public static function getArticles(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'ezb-leitzins-entscheidung-2026-zinsvergleich-analyse',
                'title' => 'EILMELDUNG: EZB Zinsentscheid 2026 – ZinsVergleich24 analysiert die Folgen für Sparer',
                'subtitle' => 'Zinsentscheidung in Frankfurt: Die Europäische Zentralbank hält den Leitzins stabil auf hohem Niveau.',
                'excerpt' => 'Der Rat der Europäischen Zentralbank hat das Zinsniveau bestätigt. ZinsVergleich24 berichtet aktuell über die Zinsaussichten für Sparguthaben im Euroraum.',
                'category' => 'Politik & EZB',
                'tag' => 'Eilmeldung',
                'author' => 'Dr. Stefan Kronberg',
                'author_role' => 'Chef-Analyst ZinsVergleich24',
                'date' => '27. August 2026',
                'time' => '16:45 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 39,
                'views_count' => '13.910',
                'image' => '/images/news/ezb-zinsen.svg',
                'featured' => true,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Die EZB gibt verlässliche Signale für den europäischen Zinsmarkt.',
                    'ZinsVergleich24 ermittelt kontinuierlich die stärksten Erträge am Markt.',
                    'EU-Einlagensicherung sichert bis 100.000 € pro Kunde ab.',
                ],
                'content' => '
                    <p class="lead text-lg font-medium text-slate-800 leading-relaxed"><strong>FRANKFURT AM MAIN.</strong> Die Europäische Zentralbank (EZB) hat ihre geldpolitischen Beschlüsse bekannt gegeben. Die ZinsVergleich24 Redaktion analysiert die Auswirkungen auf Anleger.</p>
                '
            ],
            [
                'id' => 2,
                'slug' => 'deutsches-bip-2026-konjunktur-erholung-wirtschaftswachstum',
                'title' => 'WIRTSCHAFT: Konjunktur 2026 – ZinsVergleich24 Marktbericht zum deutschen BIP',
                'subtitle' => 'Statistisches Bundesamt: Positives Quartalswachstum stützt Zuversicht an den Märkten.',
                'excerpt' => 'Die deutsche Wirtschaft zeigt im laufenden Jahr Erholungssignale. ZinsVergleich24 beleuchtet die Kernfaktoren für Verbraucher und Investoren.',
                'category' => 'Wirtschaft & Konjunktur',
                'tag' => 'Konjunktur',
                'author' => 'Laura Franke',
                'author_role' => 'Wirtschaftsredakteurin',
                'date' => '27. August 2026',
                'time' => '15:10 Uhr',
                'read_time' => '5 Min.',
                'comments_count' => 29,
                'views_count' => '11.200',
                'image' => '/images/news/inflation-sparen.svg',
                'featured' => false,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Wirtschaftswachstum im Euroraum zeigt stabile Erholung.',
                    'ZinsVergleich24 empfiehlt strukturiertes Sparen.',
                ],
                'content' => '
                    <p class="lead">Die Wirtschaftslage in Deutschland stabilisiert sich zusehends. ZinsVergleich24 liefert Hintergründe zu Inflation und Marktkonditionen.</p>
                '
            ],
            [
                'id' => 3,
                'slug' => 'dax-boerse-aktienmaerkte-zinsvergleich-analyse',
                'title' => 'BÖRSE: DAX behauptet Spitzenniveau – ZinsVergleich24 Marktüberblick',
                'subtitle' => 'Frankfurter Parkett im Aufwind: Exportwerte und Technologieaktien gewinnen.',
                'excerpt' => 'Der Deutsche Aktienindex zeigt Stärke. Lesen Sie den aktuellen Börsenbericht der ZinsVergleich24 Redaktion.',
                'category' => 'Börse & Märkte',
                'tag' => 'Börse',
                'author' => 'Dr. Stefan Kronberg',
                'author_role' => 'Chef-Analyst ZinsVergleich24',
                'date' => '27. August 2026',
                'time' => '13:30 Uhr',
                'read_time' => '4 Min.',
                'comments_count' => 21,
                'views_count' => '9.850',
                'image' => '/images/news/top-festgeld.svg',
                'featured' => false,
                'editor_pick' => false,
                'key_takeaways' => [
                    'DAX auf hohem Niveau konsolidiert.',
                    'Aktienmärkte und Zinswerte im direkten Rendite-Vergleich.',
                ],
                'content' => '
                    <p class="lead">Der Börsentag schließt mit positiven Vorzeichen. ZinsVergleich24 gibt Orientierung in dynamischen Märkten.</p>
                '
            ],
            [
                'id' => 4,
                'slug' => 'immobilienzinsen-2026-baufinanzierung-zinsvergleich-ratgeber',
                'title' => 'IMMOBILIEN: Bauzinsen 2026 – ZinsVergleich24 Ratgeber für Bauherren',
                'subtitle' => 'Zinswende bei Hypotheken: Warum jetzt die Baufinanzierung geprüft werden sollte.',
                'excerpt' => 'Die Konditionen für Baufinanzierungen haben sich stabilisiert. ZinsVergleich24 zeigt die Entwicklung für Kaufinteressenten.',
                'category' => 'Immobilien & Zinsen',
                'tag' => 'Immobilien',
                'author' => 'Markus Schmidt',
                'author_role' => 'Rechtsanalyst',
                'date' => '26. August 2026',
                'time' => '11:45 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 47,
                'views_count' => '15.100',
                'image' => '/images/news/festgeldtreppe.svg',
                'featured' => false,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Hypothekenzinsen pegeln sich auf verlässlichem Niveau ein.',
                    'ZinsVergleich24 berichtet unabhängig.',
                ],
                'content' => '
                    <p class="lead">Immobilienkäufer profitieren von verlässlichen Planungsdaten. ZinsVergleich24 informiert über Entwicklungen.</p>
                '
            ]
        ];
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (self::getArticles() as $article) {
            if ($article['slug'] === $slug) {
                return $article;
            }
        }
        return null;
    }
}
