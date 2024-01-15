<?php

$matches = [
    [
        "team-1" => "Lakers",
        "team-2" => "Toronto-Raptors",
        "team-1-score" => 65,
        "team-2-score" => 95
    ],
    [
        "team-1" => "Chicago-Bulls",
        "team-2" =>  "Celtics",
        "team-1-score" => 80,
        "team-2-score" => 55

    ],
    [
        "team-1" => "Grizzlies",
        "team-2" =>   "Golden-state-warrior",
        "team-1-score" => 90,
        "team-2-score" => 120

    ]
];
?>

<ul>
    <?php foreach ($matches as $match) { ?>
    <li>
        <pre>
                <?php echo $match['team-1'] . ' - ' . $match['team-2'] . ': ' . $match['team-1-score'] . ' - ' . $match['team-2-score']; ?>
            </pre>
    </li>
    <?php } ?>
</ul>