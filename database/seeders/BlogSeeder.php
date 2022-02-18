<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class BlogSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('blogs')->insert([
                [
                    "id" => 1,
                    "content_post" => '
                        Theda Sandiford creates multi-disciplinary experiences that provide a safe space to explore themes such as equity and inclusion, sustainability, and personal well-being.
                        Community art-making is key to this award-winning artist’s process.
                        “Using personal conflict as a starting point,
                        I juxtapose various fibers with a variety of found materials using free form weaving, coiling, knotting, wrapping, and jewelry-making techniques," said Sandiford .
                        "Meticulously collected materials, transformed by their collective memory become ‘social fabric’ weaving together contemporary issues and personal narratives.”
                        We got the chance to ask Theda a few questions about her materials, process, business, and how she uses Artwork Archive to manage it all. Read on below for that interview.
                        While the themes I express via my art have remained consistent throughout my career; identity, microaggressions, and racial trauma, my art practice has evolved through the exploration of different mediums and object materiality.
                        My earliest works were about understanding my place as a Black woman in the world. As my work has evolved,
                        it has expanded to reflect how my experience with racism has impacted my worldview and mental health.
                        Exclusion, gaslighting, and the expectation of failure, all sap my psychological and spiritual energies until I exist,
                        as only a shell of myself.
                        I often feel powerless to question subtle acts of discrimination without facing the imminent consequence of being labeled as an “Angry Black Woman.”',
                    "title" => "Artist Spotlight: Theda Sandiford's Shopping Carts Explore Equity & Sustainability",
                    "image" => "blog1-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "John Dehad",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-10 14:57:40",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 2,
                    "content_post" =>'
                        Are you looking to gain critical exposure for your museum by reaching thousands of viewers?
                        Want to increase engagement and share artworks beyond your gallery walls?
                        Curious about using online shows as a fundraiser for your nonprofit?
                        Then online exhibitions are an excellent addition to your organization’s virtual toolkit.
                        In this webinar—    intended for collection managers, curators, gallerists, and their teams—we provided a deep-dive into Artwork Archive’s Online Exhibitions feature. You’ll leave the presentation inspired to amplify your art program’s exposure and impact.',
                    "title" => "Join our team in this recorded webinar as we go over how you can bring your institution online with virtual exhibits.",
                    "image" => "blog2-img.jpg",
                    "tag" => "Modern",
                    "author" => "John Nathan",
                    "status" => 0,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-13 18:37:53",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 3,
                    "content_post" => '
                    Selling art can be an art form in and of itself.
                    “Always be closing” is a mantra that’s not often associated with the visual arts.
                    However, if you are an independent artist, you should adopt this mentality because every interaction is a possible future sale.
                    And there’s nothing wrong with that attitude.
                    Exposure doesn’t pay the rent, so sales are a necessary part of a thriving studio practice and any sustainable art business.
                    Telling a story is the key to many art sales. The collector, often, is not just buying the artwork, but they are also investing in you.
                    There are usually additional triggers that lead to a sale.
                    Speaking from personal experience as an art dealer,
                    I’ve sold art to collectors because they attended the same university as an artist, or because friends of theirs also own a piece by said artist, among many other reasons that had little to do with the actual artwork itself.
                    Of course, the collector must actually like the artwork. Still, the difference between buying a work they like by X artist vs.
                    buying a work they like from Y artist can boil down to details that are not always obvious in the physical work of art,
                    but rather emerge in conversation about the artist’s practice and/or process, their personal background, and other biographical details. ',
                    "title" => "Art Sales 101 | Best Practices to Grow Your Client Base and Sell More Art",
                    "image" => "blog3-img.jpg",
                    "tag" => "Graphic",
                    "author" => "John Dehad",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-09 05:30:43",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 4,
                    "content_post" => "Let’s address a longstanding practice regarding charitable giving in the art world that needs to end.
                                        It begins with a conversation.
                                        Director of arts organization X asks artist Y to donate an artwork for an upcoming charity fundraiser.
                                        Artist Y is hesitant—they've been asked for work from five different organizations in the last month.
                                        Direct of arts organization X makes a vague mention of tax deductions, and so the artist agrees to donate a small painting.
                                        A few months after the benefit, the artist opens a letter from the organization, saying thanks for the donated work,
                                        and listing its sale price. With this seemingly official letter in hand, it’s easy for the artist to conclude that they can deduct that sale price on their taxes.
                                        But this is wrong. Here’s why:
                                        When an artist makes work, that work is considered (by the IRS) to be a “self-created asset.”
                                        The artist can take a deduction for only the cost of materials. Not the labor.But for most artists, the value of the work derives mainly from the labor that they put into it.
                                        Picture a piece by artist El Anatsui, whose shimmering chain-mail-like tapestries are painstakingly stitched together out of bottle caps.
                                        The materials by themselves are worthless—it’s the labor that makes it art.
                                        And isn’t that the unique alchemy of making art in the first place?
                                        So, if El Anatsui used 30,000 found objects plus $10 of fasteners, and spent 1,000 hours of labor creating a piece, he’d get to deduct $10 for donating that piece.",
                    "title" => "No, You Won’t Get a Charitable Deduction for Donating Your Artwork",
                    "image" => "blog4-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "John Dehad",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-11 10:41:30",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 5,
                    "content_post" => "
                        Last week a hacker managed to infiltrate the computer systems of a contemporary and well-respected art gallery based in Italy. In doing so, they somehow identified almost a dozen of the gallery’s clients and their artists of interest, going back more than one year.
                        The hackers then sent emails to those would-be buyers, posing as the gallerists themselves, and claiming that work by the artist they had coveted was suddenly available on the secondary market. Would they like to make an offer?
                        Like the best cons, this scam contains many truths. These were real artists, whose works the buyers were actually hoping to acquire. Sales offers were quickly confirmed. Invoices were swiftly generated in the mid-five figures and sent out.
                        These invoices were almost identical to the gallery's actual invoices—same formatting, same font, etc.
                        But there were a few red flags, some so minor that they could have been missed. Fortunately,
                        one intrepid art advisor noticed certain inconsistencies and raised the alarm
                        (meaning: a less experienced and /or paranoid art advisor probably would have fallen victim to this particular fraud). ",
                    "title" => "A New Scam Hits the Art World, Targeting Collectors and Art Advisors",
                    "image" => "blog5-img.jpg",
                    "tag" => "Illustration",
                    "author" => "John William",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-11 13:59:53",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 6,
                    "content_post" => "Securing funding is critical for your institution. The Artwork Archive team wants to make sure that you have the budget to support your institution's mission along with your your day-to-day needs– staff, programming, collection management, etc..
                                        That’s why we researched this year’s funding opportunities for collecting institutions.
                                        We hope this list provides the contributions you need in the coming year.
                                        Please note that this is not an exhaustive list and that depending on when you read this article, the deadline may have passed for the year.
                                        The majority of these grants are recurring though. It's never too late to plan for 2023!
                                        And if you know of a grant opportunity that is not listed, please share with us at Artwork Archive. ",
                    "title" => "Funding Opportunities for GLAM Institutions: Collection Management Grants, Program Assessments and More",
                    "image" => "blog6-img.jpg",
                    "tag" => "Graphic",
                    "author" => "Charlotte",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-15 14:09:20",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 7,
                    "content_post" => "
                        The Collections Assessment for Preservation (CAP) program is a joint effort of IMLS and the Foundation of the American Institute for
                        Conservation of Historic and Artistic Works to help small and mid-sized museums better care for their collections
                        through a grant and recommendations.
                        DEADLINE: To be announced. Last year’s deadline was September 15, 2021
                        FINE PRINT: A CAP assessment is a study of an institution’s collections, buildings, and building systems,
                        as well as its collections care policies and procedures.
                        The assessment involves a site visit by collections and building assessors,
                        who spend two days touring the museum and interviewing staff and governing officials.
                        The assessors then prepare a comprehensive report that outlines recommendations for improving collections care.",
                    "title" => "THE AMERICAN INSTITUTE FOR CONSERVATION AND THE FOUNDATION FOR THE ADVANCEMENT IN CONSERVATION",
                    "image" => "blog7-img.jpg",
                    "tag" => "Conceptual Art",
                    "author" => "Harper",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-12 00:00:00",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 8,
                    "content_post" => "In search of an artist grant or opportunity? We have you covered.
                                        Whether you want to submit your work to compete in hopes of winning a few extra dollars, or try your hand at an artist residency,
                                        we’ve found some of the best opportunities out there for artists of all nationalities and in all types of media.
                                        A sneak peek of what you'll find this month: an open call for work that has been rejected from a previous juried competition/exhibition,
                                        numerous Black and White competitions, and a bunch of stateside residencies!
                                        Find the perfect opportunity to apply to with our February guide below. Then read on to learn how to make sure you’re ready to hit “send” as
                                        soon as these opportunities arise.",
                    "title" => "The Best Artist Grants & Opportunities in February 2022",
                    "image" => "blog8-img.jpg",
                    "tag" => "Graphic",
                    "author" => "John Dehad",
                    "status" => 0,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-10 15:06:47",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 9,
                    "content_post" => "
                        Sarah advises private individuals and developers through her company Stein-Sapir Art, which she founded in 2013. Her major development projects currently include Extell Development's ONE57 and the Central Park Tower in Manhattan,
                        the “tallest residential tower in the world” and part of a series of ultra-lux NYC developments commonly
                        referred to as “billionaire's row.”
                        Sarah is also the founder and chair of the Madison Square Park Art Council, which is affiliated with the Madison Square Park Conservancy.
                        She sits on the acquisition committee for the Young Collectors Council at the Guggenheim,
                        and thereby votes on new additions to the museum’s permanent contemporary art collection.",
                    "title" => 'The Why of the Buy — 5 Questions for "Billionaire Row" Art Advisor Sarah Stein-Sapir',
                    "image" => "blog9-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "Emma",
                    "status" => 0,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-13 08:40:55",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 10,
                    "content_post" => '
                        Sarah’s career began at Gagosian Gallery’s flagship space on West 24th Street, after studying art history at Columbia University and receiving a Masters in Contemporary Art from the Sotheby’s Institute in New York. Following Gagosian,
                        Sarah worked with the World Wide Head of Contemporary Art at the auction house Phillips de Pury (now Phillips).
                        She then joined Philippe Segalot at the esteemed art advisory firm Giraud Pissarro Segalot,
                        which dealt primarily with late 19th, 20th & 21st century art.
                        She also worked with former Christie’s rainmaker Guy Bennett while starting her own advisory firm.
                        In addition to her work on “billionaire’s row,” Sarah is active in a number of philanthropic causes.
                        She’s on the art advisory board for the Coalition for the Homeless, a friend of RX Art, a volunteer for Free Arts NYC,
                        and a trustee of the Ruth Stanton Foundation.
                        While all of this sounds, frankly, exhausting, Sarah never seems to slow down. “My day-to-day differs depending on the season and which clients/projects are active,” she explains. “Some days I’m going to gallery shows, museum exhibitions or visiting artist studios and other days I’m going to auction previews, hosting clients lunches, or attending evening sales.” ',
                    "title" => "Can you tell us about one favorite artwork you own and why you fell in love with it?",
                    "image" => "blog10-img.jpg",
                    "tag" => "Drawing",
                    "author" => "Olivia",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-10 10:25:47",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 11,
                    "content_post" => "
                        Based on feedback from our esteemed clients over the past year,
                        the Artwork Archive team met the evolving demands of arts administrators and collectors around the world,
                        resulting in a number of updates to our digital collection management platform.
                        In this recorded webinar, intended for collection managers, registrars, gallerists, and their teams,
                        we cover the essential tools that Artwork Archive released in 2021.
                        We also share the best practices our clients are employing to improve their online collaboration with teammates and artists,
                        strengthen their digital collection strategies,
                        and make their respective collections—and cultural missions—more accessible to the public.",
                    "title" => "The Art of Collection Management with Artwork Archive: Essential Tools from 2021",
                    "image" => "blog11-img.jpg",
                    "tag" => "Modern",
                    "author" => "Emma",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-11 12:03:40",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 12,
                    "content_post" => "
                        I came here because I was living in New York and I had a show in Berlin— I intended to stay for three months,
                        just to make the paintings, but the studio that I got was something like six times bigger than my apartment in New York.
                        I had the option of extending it past three months, so I went for it.
                        It completely opened up the possibility of what a studio practice can be when you have space...
                        and when your work previously was about not having space.
                        I started painting and showing my work when I was still in high school. I was already posting work online in 2004 or so,
                        and I actually had a pretty good following early on. So, when I entered college,
                        I was kind of already determined to be an artist because I had so much motivation from those early eyes and that positive feedback.",
                    "title" => "Dispatches from Berlin: A Virtual Studio Visit with Artist Winston Chmielinski",
                    "image" => "blog12-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "Noah",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-04 12:30:47",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 13,
                    "content_post" => "
                        I can see how my background has shaped pretty much every aspect of my life and especially my work.
                        I was really interested in painting a certain way, for example, and everyone else was not really into it at the time.
                        And then, as soon as they got into the thing that I was doing, I was like, “Done! Over.” And then I moved onto the next thing.
                        So now everyone is interested in what I was doing before, but now I’m into blockchain.
                        I do think I've made it more difficult for myself because I kind of get off on not belonging.
                        And I think, only in my 30s, am I beginning to experience belonging on a deeper level.
                        I've fixated on the visual realm because I painted for a decade and so I'm a very visual person.
                        And now I'm experiencing that belonging can happen on every level—and when it happens at a deeper level,
                        it's usually more surprising and maybe more encompassing.",
                    "title" => "Your cultural heritage is both Chinese and Polish, which is quite unique. Do you think that’s played a role in your artistic development?",
                    "image" => "blog13-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "Oliver",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-08 14:28:30",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 14,
                    "content_post" => "
                        The first time actually where I was in the countryside with all this greenery around me.
                        Someone else at the residency named Felicia was like Gaia incarnate—she was picking herbs every night for dinner and was essentially our chef-in-residence.
                        Something got triggered at that time. It was also the same year that I showed this quilt at the Antarctic Pavilion at the Venice Biennale.
                        And the quilt was one of my first textile works. I actually got into that show through proposing this quilt and it was quite exciting because I really wanted to work with a different material. And it was all repurposed fabrics.
                        I just got really tired of the physical and of having too much material around me that I didn't understand.
                        I had already been stretching my own canvases and things, but I got really allergic to plastic and to the chemicals in my paints.
                        I suddenly became more sensitive to using oil paints and the fumes. And I also just started to get fascinated with this idea that maybe there's something to be said for the connection between color and rarity.
                        I feel like that idea has been almost lost in modern society.",
                    "title" => "The journey of an art is challenging. Let me be your guide",
                    "image" => "blog14-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "John Dehad",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-12 19:45:10",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 15,
                    "content_post" => "
                        The last paintings that I did, which were all with mineral pigments, I just was so content doing these super thin layers, which didn't use that much paint and which barely left any marks on the canvas. But, by putting down 15 or 16 layers,
                        I was able to actually create at a pace that felt really safe and warm. Since it's oil,
                        things aren't drying that fast, so I was able to move paint around all day long.
                        I feel like there's something really beautiful and rare about having that space and time to not commit to a layer.
                        If you're working with acrylics, especially like if you're spray painting something,
                        you put that mark down and your gesture better be spot-on because it's going to dry right then and there.
                        But, with these mineral pigments and these oils that don't even show up until the 10th layer or so,
                        it's like you can move the paint around all day and you can just keep feeling it out.
                        Maybe you know that stroke was really just for you to exercise a bit and it shouldn't have been put on the canvas,
                        or maybe that gesture shouldn’t have been recorded, etc.
                    ",
                    "title" => "Slow Progress is sometimes the  best of all",
                    "image" => "blog15-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "John Dehad",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-09 20:30:10",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 16,
                    "content_post" => "
                        I discovered that, through mixing a lot of different resins, and rice starch, I was able to get something that worked.
                        I know that it's archival because Chinese scrolls look amazing, and some of them are 1000 years old—and they used rice and wheat.
                        I wanted to adhere pigment on the canvas in a permanent way without it losing that chalky quality.
                        I really want it to be like a dusting of color, but with a lot of saturation.
                        So, at the moment, I'm working on color fields. It was during COVID that all this kind of transpired.
                        I was basically surrounded by too many people in my own living room,
                        it was like all my paintings had something recognizable as figuratively influenced.
                        All I wanted was to wake up and feel like I was floating in fields of color.
                        But I wanted them to be visceral. And so all of the paintings have a lot of 3d elements.
                        So the surface catches the light in as many different ways as possible.
                    ",
                    "title" => "Is Being Social the Key Of Business Success",
                    "image" => "blog16-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "Mary Jane",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-13 16:30:05",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 17,
                    "content_post" => "
                        That all being said, I also made an agreement with myself to spend about a year and a half exploring the digital side of things.
                        The reason being that I really love materials, and I think that—for me—my biggest dream with making material objects is that they look better in person than on Instagram. It’s almost a weird double life that I'm living. I'm collecting more materials than you can imagine with all the pigments and things, but I am spending most of my time in the digital sphere.
                        I’m working with a lot of other people to build a blockchain that’s a digital-physical bridge.
                        My ultimate dream is to make things that I can give away for free.
                        I want to separate any need to sell from the creation of my art,
                        which is interesting because I also think there's a lot of motivation in having a show or having things to sell.
                        There's a lot that can invite people into your world when things are out there but this is a grand experiment for me to see what happens to my art when I'm completely free from those parameters for a couple of years.
                        I know that to have that time as an opportunity is a very rare and beautiful thing—and I love rare and beautiful things.",
                    "title" => "Which is basically the German equivalent of the New York Times Magazine. How did that come about?",
                    "image" => "blog17-img.jpg",
                    "tag" => "New",
                    "author" => "Kingston Max",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-14 14:30:00",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 18,
                    "content_post" => "
                        So, I got an email from him while I was traveling in Bavaria, ironically, since it’s basically the regional source of this magazine.
                        My apartment was sublet out to a family from Brazil that couldn't fly back home during lockdown.
                        And I wasn’t going to kick them out because they would have nowhere to live.
                        So I got an Airbnb for four months and I ended up in this small town in Bavaria with an herbalist and
                        we would go out picking herbs together.
                        And, it was during this time that I got this email from him. ",
                    "title" => "What advice do you have for young artists?",
                    "image" => "blog18-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "John Dehad",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-10 13:26:30",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 19,
                    "content_post" => "
                        I think it’s important to reach out to other artists.
                        Forget about all the other things that you're “supposed to do” or the people you're “supposed to” reach out to,
                        but reach out to other artists and let them know their work has influenced you.
                        I love it—like tears and tears of joy love it— when I get messages on Instagram like,
                        “I found your art 10 years ago and I printed it out and now I'm like a full time artist!”
                        I love these crazy beautiful words from strangers and I just think it's the most amazing thing ever.
                        It's also a gift that you can give so much to a young artist or an emerging artist—you have so much to give already,
                        just from your own experience. ",
                    "title" => "When someone reaches out to me I'm really touched because it means that my art is doing what I wanted it to do.",
                    "image" => "blog19-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "Kerry",
                    "status" => 0,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-15 21:10:57",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 20,
                    "content_post" => "
                        To Prevent Damage: When you’re choosing where you want to display art,
                        avoid hanging pieces on exterior walls, or near water sources like bathrooms and kitchens.
                        Invest in a programmable thermostat and maintain a steady temperature of 55 – 65 degrees.
                        If you live in a particularly humid environment, invest in a dehumidifier. Temperature fluctuation can be incredibly damaging to art,
                        so it’s important to keep temperatures steady and avoid dramatic changes in environment",
                    "title" => "Easy Ways to Avoid 3 Common Art Collection Pitfalls",
                    "image" => "blog20-img.jpg",
                    "tag" => "Contemporary",
                    "author" => "Benjamin",
                    "status" => 0,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-10 14:05:39",
                    "updated_at" => NULL,
                ],
                [
                "id" => 21,
                "content_post" => "
                    LARCHMONT, N.Y. — Clarke Auction Gallery dubbed its February 6 sale the “Awesome Estates Auction,” and it lived up to its name. The undisputed top lot was a Fernand Leger (French, 1881-1955) painting that achieved $375,000.
                    The circa-1954 gouache, titled Les loisirs, depicted figures engaged in leisure activities — a motif the artist repeated throughout his career. This work is markedly similar in composition to his lithograph titled Le Picnic. Opening at $125,000, bidding for the painting steadily climbed, and within a few minutes, one bidder was left standing: a private art collector in the United States.
                    The Leger was one painting in a strong group of fine art offerings that achieved heartening results. Standout works included a signed Alexandre Cabanel (French, 1823-1889) painting, Contemplation or The Italian Servant, which sold for $55,000, to an untitled 1958 map-drawing of Las Vegas by Saul Steinberg (American, 1914-1999) rendered in ink, colored pencil and graphite on paper, which earned $40,000. According to the Saul Steinberg Foundation, the drawing’s original title was Saul Steinberg Stops for the Night.
                    The auction took place about a week before Valentine’s Day, and buyers clearly had gift shopping on their minds. A signed Ilias Lalaounis 18K gold necklace sold for just above its high estimate at $10,000. The lavalier-style necklace featured a hand-hammered and matte finish to its beads, and its drop pendant can be unscrewed for an alternative look.
                ",
                "title" => "Leger art commands stunning price at Clarke’s Awesome Estates auction",
                "image" => "blog21-img.jpg",
                "tag" => "Outsider Art",
                "author" => "Benjamin",
                "status" => 1,
                "deleted_at" => NULL,
                "created_at" => "2022-02-07 14:05:39",
                "updated_at" => NULL,
                ],
                [
                    "id" => 22,
                    "content_post" => "
                        CHICAGO – Potter & Potter Auctions‘ January 29 poster sale was a wall-to-wall success, with images touting the charms of India, Hawaii and Djibouti achieving strong prices.
                        Posters promoting exotic overseas travel and experiences took several of the top slots, led by a Cirque Medrano / Cairoli poster. Estimated at $800-$1,200, it realized $10,200. The 1930s-era color lithograph featured the clown Charlie Cairoli as a young performer with his father, Jean-Marie Cairoli, on the violin.
                        Another compelling lot was Joseph Feher’s Hawaii / United Airlines, which sold for $2,640. It was decorated with a Hawaiian hostess holding a lei and a United Boeing Stratocruiser spotlighted against the sun.
                    ",
                    "title" => "Travel posters cruised past estimates at Potter & Potter",
                    "image" => "blog22-img.jpg",
                    "tag" => "Painting",
                    "author" => "Benjamin",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-15 14:05:39",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 23,
                    "content_post" => "
                        BERKELEY, Calif. – PBA Galleries‘ Comic Books Sale, held on February 3, had an unprecedented 99% sale rate, with 188 lots exceeding the high estimate by more than a third.
                        Attracting great interest was a copy of Seven Seas Comics #4 with a CGC grade of 6.5. It has a classic cover featuring Matt Baker’s tropical beauty Alani the South Sea Girl fighting a great white shark. The copy in the sale achieved $18,750
                        Another strong seller was a Crime Patrol #15 with a CGC grade of 4.0, which sold for $9,375. This edition contains the first Crypt Keeper story, making it highly significant in the annals of EC and pre-Code horror comics titles. In the same field, a Horrific #3 with a CGC grade of 6.0 brought a large amount of bids. It ultimately sold for $5,312.
                        Other horror comics highlights included a copy of Weird Mysteries #5 with a CGC grade of 2.5. Some consider this issue to have the goriest pre-Code cover, and the point is hard to dismiss: it features Bernard Baily’s artwork showing gloved hands removing a brain from an unfortunate individual. The image raised the stakes sky-high in what’s been called the “upward spiral of gruesomeness” of four-color fear. The example of Weird Mysteries #5 in the sale went for $6,875. A different lot that also performed admirably was a copy of Mister Mystery #11 with a CGC grade of 6.0, boasting one of the most stunning covers ever to appear on horror comics. It realized $5,937.
                    ",
                    "title" => "Vintage comic books achieve 99% sell-through at PBA",
                    "image" => "blog23-img.jpg",
                    "tag" => "Primitive Art",
                    "author" => "Lucas",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-13 14:05:39",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 24,
                    "content_post" => "
                        BERKELEY, Calif. – PBA Galleries‘ Comic Books Sale, held on February 3, had an unprecedented 99% sale rate, with 188 lots exceeding the high estimate by more than a third.
                        Attracting great interest was a copy of Seven Seas Comics #4 with a CGC grade of 6.5. It has a classic cover featuring Matt Baker’s tropical beauty Alani the South Sea Girl fighting a great white shark. The copy in the sale achieved $18,750
                        Another strong seller was a Crime Patrol #15 with a CGC grade of 4.0, which sold for $9,375. This edition contains the first Crypt Keeper story, making it highly significant in the annals of EC and pre-Code horror comics titles. In the same field, a Horrific #3 with a CGC grade of 6.0 brought a large amount of bids. It ultimately sold for $5,312.
                        Other horror comics highlights included a copy of Weird Mysteries #5 with a CGC grade of 2.5. Some consider this issue to have the goriest pre-Code cover, and the point is hard to dismiss: it features Bernard Baily’s artwork showing gloved hands removing a brain from an unfortunate individual. The image raised the stakes sky-high in what’s been called the “upward spiral of gruesomeness” of four-color fear. The example of Weird Mysteries #5 in the sale went for $6,875. A different lot that also performed admirably was a copy of Mister Mystery #11 with a CGC grade of 6.0, boasting one of the most stunning covers ever to appear on horror comics. It realized $5,937.
                    ",
                    "title" => "Art from estates and collections headline at Bruneau",
                    "image" => "blog24-img.jpg",
                    "tag" => "Poster Art",
                    "author" => "Lucas",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-19 14:05:39",
                    "updated_at" => NULL,
                ],
                [
                    "id" => 25,
                    "content_post" => "
                       AMERSFOORT, Netherlands – In the year that Piet Mondrian’s 150th birthday will be celebrated, Mondriaanhuis, the birthplace of the painter in Amersfoort, is acquiring nine early Mondrians created during the period of 1899 to 1908. The works will be on show starting February 15.
                       The Mondriaanhuis had had the works on long-term loan since 2010 from an heir of art collector Dr. J.F.S. Esser. After the death of this owner, the works could have been lost to the public. Intensive contact with the heirs has resulted in the paintings and drawings being permanently preserved for the Dutch public art collection.
                        “The fact that the purchase of no fewer than nine works was successful is truly exceptional. We are extremely happy that, with all the support we have received, they can remain in the Mondriaanhuis once and for all. In this way, everyone can continue to enjoy the unique development of this pioneer of abstract art,” said Paul Baltus, director of Mondriaanhuis.
                        At the request of the heirs, the purchase price will not be disclosed. The acquisition was made possible with the support of the Rembrandt Association (partly thanks to its Mevrouw M. Boersma Fund, its Van Lith-Dumont Fund and its VriendenLoterij Aankoopfonds), the Municipality of Amersfoort, Social Culture Fund De Amersfoortse and the Friends of the Mondriaanhuis.
                    ",
                    "title" => "Mondrian museum acquires nine early works by the artist",
                    "image" => "blog25-img.jpg",
                    "tag" => "Stained Glass Art",
                    "author" => "Lucas",
                    "status" => 1,
                    "deleted_at" => NULL,
                    "created_at" => "2022-02-16 14:05:39",
                    "updated_at" => NULL,
                ],
            ]);
        }
    }
