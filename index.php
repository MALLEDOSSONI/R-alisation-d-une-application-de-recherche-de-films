<?php
$films = [
    [
        '1', 'Impitoyable',
        '1992',
        'William Munny, tireur à la retraite du Old West, accepte à contrecœur un dernier emploi, avec l’aide de son ancien partenaire et d’un jeune homme.'
    ],
    [
        '2', 'Reservoir Dogs ',
        '1992',
        'Lorsqu’un simple vol de bijoux tourne horriblement mal, les criminels survivants commencent à soupçonner que l’un d’entre eux est un informateur de la police.'
    ],
    [
        '3', 'les evadés',
        '1994',
        'Deux hommes emprisonnés se lient pendant plusieurs années, trouvant réconfort et finalement rédemption par des actes de décence commune.'
    ],
    [
        '4', ' Fight Club ',
        '1994',
        'Un employé de bureau insomniaque et un savonnier diabolique forment un club de combat clandestin qui évolue vers quelque chose de beaucoup, beaucoup plus.'
    ],
    [
        '5', ' Forrest Gump',
        '1994',
        'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with'
    ],
    [
        '6', ' Léon',
        '1994',
        'Mathilda, une jeune fille de 12 ans, est recueillie à contrecœur par Léon, un assassin professionnel, après le meurtre de sa famille. Léon et Mathilda forment une relation inhabituelle, alors qu’elle devient sa protégée et apprend l’assassin.'
    ],
    [
        '7', 'La haine',
        '1995',
        '24 hours in the lives of three young men in the French suburbs the day after a violent riot'
    ],
    [
        '8', 'Seven',
        '1995',
        'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives'
    ],
    [
        '9', ' Usual Suspects',
        '1995',
        'A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a seemingly random police lineup'
    ],
    [
        '10', 'La vie est belle ',
        '1997',
        'When an open-minded Jewish librarian and his son become victims of the Holocaust, he uses a perfect mixture of will, humor, and imagination to protect his son from the dangers around their camp'
    ],
    [
        '11', '  Will Hunting',
        '1997',
        'Will Hunting, a janitor at M.I.T., has a gift for mathematics, but needs help from a psychologist to find direction in his life.'
    ],
    [
        '12', 'Avengers: Infinity War',
        '2018',
        'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe'
    ],
    [
        '13', 'Spider-Man: New Generation',
        '2018',
        'Teen Miles Morales becomes Spider-Man of his reality, crossing his path with five counterparts from other dimensions to stop a threat for all realities'
    ],
    [
        '14', 'Capharnaum',
        '2018',
        'While serving a five-year sentence for a violent crime, a 12-year-old boy sues his parents for neglect'
    ],
    [
        '15', 'Dangal',
        '2016',
        'Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression'
    ],
    [
        '16', 'Tu ne tueras point ',
        '2016',
        'World War II American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot'
    ],
    [
        '17', 'Mademoiselle',
        '2016',
        'A woman is hired as a handmaiden to a Japanese heiress, but secretly she is involved in a plot to defraud her'
    ],
    [
        '18', 'Les Émotifs anonymes',
        '2010',
        "Deux hommes emprisonnés se lient pendant plusieurs années, trouvant réconfort et finalement rédemption par des actes de décence commune."
    ],
    [
        '19', 'Killing Bono',
        '2011',
        'Deux hommes emprisonnés se lient pendant plusieurs années, trouvant réconfort et finalement rédemption par des actes de décence commune.'
    ],
    [
        '20', ' Robin des Bois - Prince des voleurs',
        '1991',
        "Deux hommes emprisonnés se lient pendant plusieurs années, trouvant réconfort et finalement rédemption par des actes de décence commune."
    ],
    [
        '21', 'À la recherche du bonheur',
        '2006',
        "Deux hommes emprisonnés se lient pendant plusieurs années, trouvant réconfort et finalement rédemption par des actes de décence commune."
    ],
    [
        '22', 'Le Professionnel ',
        '1981',
        'Fabien73 a mis 8/10 et a écrit une critique.'
    ],
    [
        '23', 'les evadés',
        '1994',
        'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'
    ],
    [
        '24', ' Fight Club ',
        '1994',
        'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.'
    ],
    [
        '25', ' Forrest Gump',
        '1994',
        'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with'
    ],
    [
        '26', ' Léon',
        '1994',
        'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin'
    ],
    [
        '27', 'La haine',
        '1995',
        '24 hours in the lives of three young men in the French suburbs the day after a violent riot'
    ],
    [
        '28', 'Seven',
        '1995',
        'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives'
    ]
];
$search = $_GET['search'];
$films_filtered = array_filter($films, function ($film) {
    global $films;
    global $search;
    for ($i = 0; $i <= count($films); $i++) {
        if ($film[$i] === $search) {
        }
    }
    return $film[$i];
});
var_dump($films_filtered);
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application de Recherche film</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">FILM</a>
            <form class="d-flex" role="search" action="index.php" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Movie</th>
                    <th>Year</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($films as $film) { ?>
                <tr>
                    <?php foreach ($film as $field) { ?>
                    <td><?php echo $field; ?></td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>