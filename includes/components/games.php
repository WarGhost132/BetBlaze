<?php
$games =
    [
        [
            'image' => 'assets/images/games/aviator.webp',
            'title' => 'Aviator'
        ],
        [
            'image' => 'assets/images/games/olympus.webp',
            'title' => 'Olympus'
        ],
        [
            'image' => 'assets/images/games/plinko.webp',
            'title' => 'Plinko'
        ],
        [
            'image' => 'assets/images/games/mines.webp',
            'title' => 'Mines'
        ],
        [
            'image' => 'assets/images/games/aviatrix.webp',
            'title' => 'Aviatrix'
        ],
        [
            'image' => 'assets/images/games/buffalo_gold.webp',
            'title' => 'Buffalo Gold'
        ],
        [
            'image' => 'assets/images/games/mega_moolah.webp',
            'title' => 'Mega Moolah'
        ],
        [
            'image' => 'assets/images/games/book_of_ra.webp',
            'title' => 'Book of Ra'
        ],
        [
            'image' => 'assets/images/games/starburst.webp',
            'title' => 'Starburst'
        ],
        [
            'image' => 'assets/images/games/lighting_roulette.webp',
            'title' => 'Lightning Roulette'
        ],
        [
            'image' => 'assets/images/games/sweet_bonanza.webp',
            'title' => 'Sweet Bonanza'
        ],
        [
            'image' => 'assets/images/games/crazy_time.webp',
            'title' => 'Crazy Time'
        ],
        [
            'image' => 'assets/images/games/blackjack_party.webp',
            'title' => 'Blackjack Party'
        ],
        [
            'image' => 'assets/images/games/gonzo\'s_quest.webp',
            'title' => 'Gonzo\'s Quest'
        ],
        [
            'image' => 'assets/images/games/royale_roulette.webp',
            'title' => 'Roulette Royale'
        ],
    ];
?>

<div class="games__wrapper d-flex flex-wrap justify-content-center justify-content-sm-between">
    <?php foreach ($games as $game): ?>
        <div data-aos="fade-up" class="game__card d-flex flex-inline flex-sm-column align-items-center justify-content-sm-between my-3 pb-sm-3 overflow-hidden">
            <img src="<?= $game['image'] ?>" alt="">
            <p class="game__card__title text-center d-none d-sm-block lh-1 px-1"><strong><?= $game['title'] ?></strong></p>
            <button class="games__button text-uppercase d-none d-sm-block">Play now</button>
            <div class="w-100 d-flex flex-column align-items-center d-block d-sm-none">
                <p class="game__card__title text-center lh-1 px-1"><strong><?= $game['title'] ?></strong></p>
                <button class="games__button text-uppercase">Play now</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>