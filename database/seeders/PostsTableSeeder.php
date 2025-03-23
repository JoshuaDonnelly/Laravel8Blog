<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        Post::truncate();

        Post::create([
            'title' => 'LeBron James: The King of Basketball',
            'content' => 'LeBron James has dominated the game like no other. Since stepping into the league, he was labeled the chosen one, but was he really going to live up to the hype? Turns out, he did that and more. Four MVPs, four championships, and the all-time leading scorer? Yeah, hes that guy.
            LeBron is a force of nature on the court—built like a tank, moves like a guard, and sees the game like a coach. He changed the way basketball is played, proving you can do it all: score, pass, defend, lead. That 2016 championship with the Cavs? Legendary. Down 3-1 against the Warriors, came back and brought Cleveland its first-ever NBA title. If that’s not greatness, what is?
            But it’s bigger than basketball. LeBron’s out here changing lives, from his I PROMISE School helping kids in Akron to speaking out on social justice. He’s not just a hooper; he’s a leader, a businessman, and an inspiration.
            Even in his late 30s, he’s still putting up insane numbers, defying age like it’s nothing. When it’s all said and done, LeBron’s legacy isn’t just about basketball—it’s about impact, on and off the court. GOAT status? You decide.',
            'slug' => SlugService::createSlug(Post::class, 'slug', 'LeBron James: The King of Basketball'),
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP3q2gXInZINvZXr7rBIfnwre8r6mNO3ebng&s',
            'user_id' => null,
            'category' => '2000s-2020s',
        ]);
        Post::create([
            'title' => 'Steph Curry, The Baby Faced Assassin: 4000 and Counting',
            'content' => 'Steph Curry has changed the way basketball is played
             with his unmatched shooting ability. Since coming to the league Steph
             was always underated, standing at just 6 foot 2 inches. Sure he was good, but was he good enough to win
             a chip? Then Curry and the Warriors created one of the most dominant dynastys
             in basetball History. In a team with Kevin Durant, Klay thompson, Steph Curry
             was the golden boy. Curry made history and changed the NBA forever for 
             showing the old heads 3 is more than 2. 1 MVP, 4 Championships and well into
             his thirties his is still killing it out there. Steph now leads all time 3 point
             made and is the first ever NBA player to hit 4000 three pointers in their career.
             What an inspiration!',
            'slug' => SlugService::createSlug(Post::class, 'slug', 'Steph Curry: Revolutionizing the Game'),
            'image_path' => 'https://cdn.nba.com/teams/uploads/sites/1610612744/2025/03/feat-image_-curry-20250305.png',
            'user_id' => null,
            'category' => '2010s-2020s',
        ]);
        Post::create([
            'title' => 'Luka Dončić: The Most Shocking Trade In NBA History',
            'content' => 'Luka Dončić is taking the NBA by storm with his incredible performances at a young age, 
            at the Dallas Mavericks he was a superstar since the day they drafted him.
            Luka brought Dallas to their first NBA finals since the Drik era in Texas.
            Luka\'s dominance as a ball handler and shot creator has made him one of the 
            premiere players in today\'s NBA. Dallas seemed destined to win the championship (or
            at least make it back to the finals) this year. So you can forgive us 
            here at NBAFans.com for being dumbfounded by the jaw-dropping news
            that the Mavericks traded their star, home-grown talent, for an injury
            ridden Anthony Davis and some pocket change. The Lakers who seemed destined
            for rebuilding for the forseable future with LeBron aging, but now
            out of nowhere, they are contenders! For the Lakers, Dončić 
            would be the ultimate successor to LeBron James, ensuring the team 
            remains a championship contender. His ability to score, facilitate, 
            and take over games would fit perfectly alongside or after LeBron, making LA a top destination for future free agents as well.
            For the Mavericks, if they struggle to build a true title contender around Dončić, this trade would offer them a way to remain competitive while resetting their roster. Davis is still a top-tier two-way player, Reaves is an emerging star, and the draft picks provide long-term flexibility.
            This move would instantly shift the power balance in the Western Conference. The Lakers would pair Dončić with one of the most storied franchises in NBA history, while the Mavericks could build a new identity. Though unlikely, blockbuster trades have reshaped the league before, and if tensions ever rise in Dallas, this could be a scenario worth considering. ',
            'slug' => SlugService::createSlug(Post::class, 'slug', 'The Rise of Luka Dončić'),
            'image_path' => 'https://www.usatoday.com/gcdn/authoring/authoring-images/2025/02/25/USAT/80096393007-usatsi-25488481.jpg?crop=4116,2315,x0,y422&width=660&height=371&format=pjpg&auto=webp',
            'user_id' => null,
            'category' => '2010s-2020s',
        ]);
        Post::create([
            'title' => 'Kobe Bryant: The Black Mamba',
            'content' => 'Kobe Bryant. Few names send shivers of ice cold plays down your veins compared to the black mamba. Know for his relentless will to improve and win, Kobe dominated the mid to late 2000s winning the most recent 3-peat in the NBA. Kobe Bryant’s legacy transcends basketball. More than just a five-time NBA champion and Lakers icon, he embodied relentless work ethic, passion, and the “Mamba Mentality,” inspiring athletes and fans worldwide.

Beyond basketball, Kobe’s influence reached far. His transition into storytelling, with an Academy Award-winning short film, Dear Basketball, showcased his ability to inspire beyond sports. He became an advocate for women’s basketball, mentoring young players, including his daughter Gianna, and championing the growth of the WNBA.

His tragic passing in 2020 only strengthened his legacy, reminding the world of his impact, not just as a player but as a mentor, father, and inspiration. The Mamba Mentality—his philosophy of hard work, resilience, and striving for greatness—continues to influence generations of athletes and dreamers.

Kobe Bryant’s name will forever be synonymous with excellence. His impact on basketball and life itself ensures that his legacy will never fade.',
            'slug' => SlugService::createSlug(Post::class, 'slug', 'Kobe Bryant: The Black Mamba'),
            'image_path' => 'https://ca-times.brightspotcdn.com/dims4/default/9e4feaf/2147483647/strip/true/crop/2604x1656+0+554/resize/1200x763!/quality/75/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F52%2Fde%2F0fae5ecf45ebbb2dc162542b8420%2F2460266-sp-0413-lakers18-wjs.JPG',
            'user_id' => null,
            'category' => '2000s-2010s',
        ]);
        Post::create([
            'title' => 'The Legacy of Michael Jordan',
            'content' => 'Michael Jordan. The name alone is basketball royalty. Six rings, five MVPs, 10 scoring titles—he didn’t just play the game, he owned it. From the moment he stepped onto an NBA court, MJ was different. The mentality, the swagger, the drive—he wanted to win at all costs, and he did.

Jordan wasn’t just a scorer; he was a killer on the court. The way he moved, the way he took over games, the way he hit shot after shot with everything on the line—unreal. The Bulls’ two three-peats? Legendary. His Game 6 shot against the Jazz in ‘98? Straight out of a movie. Every time he played, it felt like history was being made.

And let’s not forget the impact off the court. Air Jordan sneakers? Global phenomenon. Space Jam? Iconic. He made basketball bigger than just a sport—he made it culture. Every kid wanted to be like Mike, and honestly, who wouldn’t?

Even today, his influence is everywhere. Players still chase his greatness, fans still debate if anyone will ever surpass him, and his legacy is still untouchable. MJ wasn’t just the best of his era—he set the standard for greatness. GOAT talk? Yeah, that’s him.',
            'slug' => SlugService::createSlug(Post::class, 'slug', 'The Legacy of Michael Jordan'),
            'image_path' => 'https://cst.brightspotcdn.com/dims4/default/b8ca396/2147483647/strip/false/crop/3029x2033+0+0/resize/1486x997!/quality/90/?url=https%3A%2F%2Fcdn.vox-cdn.com%2Fthumbor%2FHjqqPSsaNXycLiwZOhYvrFuP70o%3D%2F0x0%3A3029x2033%2F3029x2033%2Ffilters%3Afocal%281308x913%3A1309x914%29%2Fcdn.vox-cdn.com%2Fuploads%2Fchorus_asset%2Ffile%2F19902432%2F101527P_MICHAEL_JORDAN_BULLS.jpg',
            'user_id' => null,
            'category' => '1980s-1990s',
        ]);
    }
}
