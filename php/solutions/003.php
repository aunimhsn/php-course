<?php
$articles = [
    [
        'id' => 1,
        'title' => 'Is Flutter Engage gonna be awesome?',
        'content' => 'A new web front-end framework for...',
        'category' => 'Web',
    ],
    [
        'id' => 2,
        'title' => 'Roadtrip to Sweden',
        'content' => 'What do you have to know about the cost of living in Sweden...',
        'category' => 'Travel',
    ],
    [
        'id' => 3,
        'title' => 'A query language for your API',
        'content' => 'GraphQL is a query language for APIs and a runtime for fulfilling those queries with your existing data.',
        'category' => 'Web',
    ],
    [
        'id' => 4,
        'title' => 'Michael Jordan, the legend',
        'content' => 'Basketball is one of the greatest game ever...',
        'category' => 'Sport',
    ]
];


/**
 * Filter articles by their category, 
 * allow the user to input a category then display the filtered articles.
 * If there's no article, just return "Sorry, no results found."
 * 
 */

function sanitize(string $word) {
    return trim(strtolower($word));
}

echo "Please enter a category \n";
$category = readline();
$results = [];

foreach($articles as $article) {
    if(sanitize($category) === sanitize($article['category'])) {
        $results[] = $article;
    }
}

if (count($results)) var_dump($results);
else echo "Sorry, no results found.\n";

?>