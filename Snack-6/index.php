<?php

// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];

?>

<ul>
    <?php foreach($db as $categories => $fullNames){ ?>
        <?php if($categories == "teachers"){ ?>


            <li style="background-color: gray; margin-bottom: 20px"><?php echo "<strong>$categories</strong>"; ?>
                <ul>
                    <?php foreach($fullNames as $detail){ ?>
                        <li><?php echo $detail["name"] . " " . $detail["lastname"]; ?></li>
                    <?php } ?>
                </ul>
            </li>
    <?php } else { ?>
        <li style="background-color: green"><?php echo "<strong>$categories</strong>" ?>
                <ul>
                    <?php foreach($fullNames as $detail){ ?>
                        <li><?php echo $detail["name"] . " " . $detail["lastname"]; ?></li>
                    <?php } ?>
                </ul>
            </li>
    <?php } ?>




    <?php } ?>
</ul>