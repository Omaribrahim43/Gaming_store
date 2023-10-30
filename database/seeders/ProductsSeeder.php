<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg/220px-The_Legend_of_Zelda_Breath_of_the_Wild.jpg',
                'price' => '59.99',
                'description' => 'Explore the vast kingdom of Hyrule, solve puzzles, and battle enemies in this open-world adventure.',
            ],
            [
                'name' => 'Cyberpunk 2077',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Cyberpunk_2077_box_art.jpg/220px-Cyberpunk_2077_box_art.jpg',
                'price' => '39.99',
                'description' => 'Set in a dystopian future, you play as V, a mercenary navigating a cyber-enhanced world filled with intrigue and danger.',
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/4/44/Red_Dead_Redemption_II.jpg',
                'price' => '49.99',
                'description' => 'Join Arthur Morgan in an epic tale of outlaws and lawmen as you explore the American Wild West.',
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202211/0711/kh4MUIuMmHlktOHar3lVl6rY.png',
                'price' => '29.99',
                'description' => 'Embark on a high-fantasy adventure as Geralt of Rivia, a monster hunter, in this open-world RPG.',
            ],
            [
                'name' => 'Overwatch',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/51/Overwatch_cover_art.jpg/220px-Overwatch_cover_art.jpg',
                'price' => '19.99',
                'description' => 'Team-based first-person shooter where heroes with unique abilities battle it out in fast-paced matches.',
            ],
            [
                'name' => 'Minecraft',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/5/51/Minecraft_cover.png',
                'price' => '26.95',
                'description' => 'An open-world sandbox game where you can build, explore, and survive in a blocky world of endless possibilities.',
            ],
            [
                'name' => 'Resident Evil Village',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2c/Resident_Evil_Village.png',
                'price' => '49.99',
                'description' => 'Experience survival horror as Ethan Winters in a village overrun by grotesque creatures.',
            ],
            [
                'name' => 'Super Mario Odyssey',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/8/8d/Super_Mario_Odyssey.jpg',
                'price' => '49.94',
                'description' => 'Join Mario on a globe-trotting adventure to rescue Princess Peach in this 3D platformer.',
            ],
            [
                'name' => 'Call of Duty: Warzone',
                'image' => 'https://store-images.s-microsoft.com/image/apps.64530.13739535057760905.9506aae3-1290-433f-9d84-f3d91000412d.008a24a1-3dd2-4284-acd0-c538b29428b2',
                'price' => '10.99',
                'description' => 'A free-to-play battle royale game set in the Call of Duty universe, featuring fast-paced action.',
            ],
            [
                'name' => 'Animal Crossing: New Horizons',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/1f/Animal_Crossing_New_Horizons.jpg/220px-Animal_Crossing_New_Horizons.jpg',
                'price' => '49.99',
                'description' => 'Create your own virtual island paradise, interact with anthropomorphic animals, and enjoy a relaxing life simulation.',
            ],
            [
                'name' => 'Stardew Valley',
                'image' => 'https://assets-prd.ignimgs.com/2021/12/20/stardewvalley-1640044262769.jpg',
                'price' => '14.99',
                'description' => 'A farming simulation game where you can build and manage your farm, raise animals, mine for resources, and form relationships with the townspeople.',
            ],
            [
                'name' => 'Among Us',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/9/9a/Among_Us_cover_art.jpg',
                'price' => '4.99',
                'description' => 'A multiplayer game of teamwork and deception, where you work with a crew on a spaceship while trying to identify the impostors among you.',
            ],
            [
                'name' => 'Counter-Strike: Global Offensive (CS:GO)',
                'image' => 'https://www.gamespot.com/a/uploads/scale_medium/mig/7/2/0/5/2227205-i2cs9uzmq4yua.jpg',
                'price' => '32.99',
                'description' => 'A popular first-person shooter with competitive gameplay, where players join terrorist or counter-terrorist teams.',
            ],
            [
                'name' => 'The Elder Scrolls V: Skyrim',
                'image' => 'https://assets-prd.ignimgs.com/2021/08/19/elder-scrolls-skyrim-button-2017-1629409446732.jpg',
                'price' => '19.99',
                'description' => 'An epic fantasy RPG with a vast open world, dragons, and countless quests, where you play as the Dragonborn.',
            ],
            [
                'name' => 'Valorant',
                'image' => 'https://i.pinimg.com/originals/7e/8e/ba/7e8eba8818971329dd1fdbaa8480b869.jpg',
                'price' => '9.99',
                'description' => 'A tactical first-person shooter that combines precise shooting with unique agent abilities in a team-based format.',
            ],
            [
                'name' => 'Horizon Zero Dawn',
                'image' => 'https://picfiles.alphacoders.com/157/thumb-157018.jpg',
                'price' => '49.99',
                'description' => 'An action RPG set in a post-apocalyptic world filled with robotic creatures, where you play as Aloy, a skilled hunter.',
            ],
            [
                'name' => 'The Last of Us Part II',
                'image' => 'https://image.api.playstation.com/vulcan/img/rnd/202010/2618/w48z6bzefZPrRcJHc7L8SO66.png',
                'price' => '59.99',
                'description' => 'A post-apocalyptic action-adventure game that follows the journey of Ellie in a world filled with danger and moral choices.',
            ],
            [
                'name' => 'God of War (2018)',
                'image' => 'https://picfiles.alphacoders.com/198/198638.jpg',
                'price' => '19.99',
                'description' => 'An epic adventure where Kratos, the God of War, embarks on a journey with his son through the realms of Norse mythology.',
            ],
            [
                'name' => 'Spider-Man: Miles Morales',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202008/1020/PRfYtTZQsuj3ALrBXGL8MjAH.jpg',
                'price' => '49.99',
                'description' => 'Play as Miles Morales, the new Spider-Man, and protect New York City in this action-packed superhero game.',
            ],
            [
                'name' => 'Demon\'s Souls (2020)',
                'image' => 'https://image.api.playstation.com/vulcan/img/rnd/202011/1717/GemRaOZaCMhGxQ9dRhnQQyT5.png',
                'price' => '69.99',
                'description' => 'A remake of the classic action RPG that sets you on a challenging journey in a dark, immersive world.',
            ],
            [
                'name' => 'Ghost of Tsushima',
                'image' => '',
                'price' => '59.99',
                'description' => 'Step into the shoes of Jin Sakai, a samurai, in an open-world adventure set in feudal Japan during the Mongol invasion.',
            ],
            [
                'name' => 'Halo Infinite',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/b/b6/Ghost_of_Tsushima.jpg',
                'price' => '59.99',
                'description' => 'The next installment in the iconic Halo series, featuring Master Chief and a new epic adventure on the ring world of Zeta Halo.',
            ],
            [
                'name' => 'Forza Horizon 5',
                'image' => 'https://assets-prd.ignimgs.com/2021/08/24/forza-horizon-5-button-fin-1629830068379.jpg',
                'price' => '59.99',
                'description' => 'An open-world racing game set in Mexico, offering a stunning visual experience and a wide variety of cars and events.',
            ],
            [
                'name' => 'Gears 5',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/e/e4/Gears_5_cover_art.png',
                'price' => '39.99',
                'description' => 'A third-person shooter that continues the Gears of War saga with intense combat and a gripping storyline.',
            ],
            [
                'name' => 'FIFA 22',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/6/6c/FIFA_22_Cover.jpg',
                'price' => '59.99',
                'description' => 'The latest installment in the FIFA series, offering realistic football action and gameplay improvements.',
            ],
            [
                'name' => 'The Medium',
                'image' => 'https://sm.ign.com/ign_nordic/cover/t/the-medium/the-medium_kwe9.jpg',
                'price' => '49.99',
                'description' => 'A psychological horror game with a unique dual-reality gameplay mechanic, where you explore both the spirit world and the real world.',
            ],
        ]);
    }
}
