<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
               "id"   =>1,
               "name" =>"The Creation Of Adam",
               "size" =>"100x100",
               "image" => "1644943124-The Creation Of Adam.jpg",
               "description" => 'Although The Starry Night was painted during the day in Van Gogh\'s ground-floor studio, it would be inaccurate to state that the picture was painted from memory. The view has been identified as the one from his bedroom window, facing east,[1][2][17][18] a view which Van Gogh painted variations of no fewer than twenty-one times,[citation needed] including The Starry Night. \"Through the iron-barred window,\" he wrote to his brother, Theo, around 23 May 1889, \"I can see an enclosed square of wheat ... above which, in the morning, I watch the sun rise in all its glory.\"Van Gogh depicted the view at different times of the day and under various weather conditions, such as the sunrise, moonrise, sunshine-filled days, overcast days, windy days, and one day with rain. While the hospital staff did not allow Van Gogh to paint in his bedroom, he was able there to make sketches in ink or charcoal on paper; eventually, he would base newer variations on previous versions. The pictorial element uniting all of these paintings is the diagonal line coming in from the right depicting the low rolling hills of the Alpilles mountains. In fifteen of the twenty-one versions, cypress trees are visible beyond the far wall enclosing the wheat field. Van Gogh telescoped the view in six of these[vague] paintings, most notably in F717 Wheat Field with Cypresses and The Starry Night, bringing the trees closer to the picture plane.[citation needed]\r\n\r\nOne of the first paintings of the view was F611 Mountainous Landscape Behind Saint-Rémy, now in Copenhagen. Van Gogh made a number of sketches for the painting, of which F1547 The Enclosed Wheatfield After a Storm is typical. It is unclear whether the painting was made in his studio or outside. In his 9 June letter describing it, he mentions he had been working outside for a few days.[19][20][L 3][15] Van Gogh described the second of the two landscapes he mentions he was working on, in a letter to his sister Wil on 16 June 1889.[19][L 4] This is F719 Green Wheat Field with Cypress, now in Prague, and the first painting at the asylum he definitely painted en plein air.[19] F1548 Wheatfield, Saint-Rémy de Provence, now in New York, is a study for it. Two days later, Vincent wrote to Theo stating that he had painted \"a starry sky\"',
                "artist_id" =>3,
                "start_price"=>1000,
                "current_price" =>0,
               "date_start" =>'2022-02-18',
               "date_end"=>'2022-02-23',
               "status_id"=>2,
               "deleted_at" => NULL,
               "created_at"=>'2022-02-15 09:38:44',
               "updated_at"=>'2022-02-15 09:38:44'
           ],
            [
                "id"   =>2,
                "name" =>"Sunday Afternoon On The Island",
                "size" =>"100x100",
                "image" => "1644944034-Sunday Afternoon On The Island.jpg",
                "description" => "In 1879, Georges Seurat enlisted as a soldier in the French army and arrived back home in 1880. Later, he ran a small painter's studio in Paris, and in 1883 showed his work publicly for the first time. The following year, Seurat began to work on La Grande Jatte and exhibited the painting in the spring of 1886 with the Impressionists.[2] With La Grande Jatte, Seurat was immediately acknowledged as the leader of a new and rebellious form of Impressionism called Neo-Impressionism.
                Seurat painted A Sunday Afternoon between May 1884 and March 1885, and from October 1885 to May 1886, focusing meticulously on the landscape of the park.[4] He reworked the original and completed numerous preliminary drawings and oil sketches. He sat in the park, creating numerous sketches of the various figures in order to perfect their form. He concentrated on issues of colour, light, and form. The painting is approximately 2 by 3 metres (6.6 ft × 9.8 ft) in size.
                Inspired by optical effects and perception inherent in the color theories of Michel Eugène Chevreul, Ogden Rood and others, Seurat adapted this scientific research to his painting.[5] Seurat contrasted miniature dots or small brushstrokes of colors that when unified optically in the human eye were perceived as a single shade or hue. He believed that this form of painting, called Divisionism at the time (a term he preferred)[6] but now known as Pointillism, would make the colors more brilliant and powerful than standard brushstrokes. The use of dots of almost uniform size came in the second year of his work on the painting, 1885–86. To make the experience of the painting even more vivid, he surrounded it with a frame of painted dots, which in turn he enclosed with a pure white, wooden frame, which is how the painting is exhibited today at the Art Institute of Chicago.
                Northwest portion of La Grande Jatte in 2018. The Island of la Grande Jatte is located at the very gates of Paris, lying in the Seine between Neuilly and Levallois-Perret, a short distance from where La Défense business district currently stands. Although for many years it was an industrial site, it is today the site of a public garden and a housing development. When Seurat began the painting in 1884, the island was a bucolic retreat far from the urban center.",
                "artist_id" =>6,
                "start_price"=>1500,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-26',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>3,
                "name" =>"The Sleeping Gypsy",
                "size" =>"400x400",
                "image" => "1644944398-The Sleeping Gypsy.jpg",
                "description" => 'Rousseau described the subject of The Sleeping Gypsy as: "A wandering Negress, a mandolin player, lies with her jar beside her (a vase with drinking water), overcome by fatigue in a deep sleep. A lion chances to pass by, picks up her scent yet does not devour her. There is a moonlight effect, very poetic." A toll collector for the city of Paris, Rousseau was largely a self-taught painter, although he had ambitions of entering the academy. This was never realized, but his sharp colors, fantastic imagery, and precise outlines—derived from the style and subject matter of popular print culture—struck a chord with a younger generation of avant-garde painters, including Pablo Picasso, Vasily Kandinsky, and Frida Kahlo.',
                 "artist_id" =>8,
                "start_price"=>3400,
                "current_price" =>0,
                "date_start" =>'2022-02-16',
                "date_end"=>'2022-02-24',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>4,
                "name" =>"View Of Toledo",
                "size" =>"500x500",
                "image" => "1644944676-View Of Toledo.jpg",
                "description" => 'View of Toledo is a landscape portrait. The painting is vibrant with blues, black, white, and vivid greens. It is made up of all earth tones. Most notable is the distinct color contrast between the darkness of the skies above and the vibrance of green in the hills below. View of Toledo shows viewers an image of darkness, or moodiness that is present in Toledo. Observers can see that the sky grows exceptionally dark near the city. El Greco creates a palette full of dramatic colors. While contemplating View of Toledo, people can see the contrast from light to dark. There are rolling hills depicted with Toledo at the top. The city of Toledo is very grey in contrast to the vibrant green of the hills. On the opposite end the city itself is also a light contrast to the dark color of the sky. El Greco uses pure colors to his advantage.[4] The location of the Castle of San Servando, on the left, is accurately depicted. However, many other landmarks that are clearly referring to Toledo are not in the correct location that is true to the city. Walter Liedtke believes this is because El Greco painted the View of Toledo more as a future or a hope to what it would look like.[2] Art historians, Jonathon Brown and Richard Kagan, have also hinted to the theory that El Greco painted the city of Toledo in an alternate way to fit his imagination or ideal version of Toledo.[5]',
                "artist_id" =>2,
                "start_price"=>4500,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-25',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>5,
                "name" =>"A Cotton Office In New Orleans",
                "size" =>"500x500",
                "image" => "1644945260-A Cotton Office In New Orleans.jpg",
                "description" => "Edgar Degas had familial ties to Creole New Orleans. Germain Musson, Degas's maternal grandfather, was born of French descent in Port-Au-Prince. In the aftermath of the Haitian Revolution, he relocated in 1810 to New Orleans where he established himself as a cotton exporter.[2] Musson married Marie Céleste Désirée Rillieux who was from a prominent Creole family. They had five New Orleans-born children including Degas's mother, Marie-Célestine Musson, and Michel Musson. After his wife died in 1819, Germain Musson moved his family to Paris. He relocated back to New Orleans after the 1832 marriage of his daughter Marie-Célestine to Auguste Degas. When Edgar was born, Auguste arranged the purchase of a New Orleans cottage in his son's name.[3]Edgar Degas made his first and only trip to the United States and the birthplace of his mother in the fall of 1872 at the behest of his brother René. René at the time was running a cotton brokerage in New Orleans with their other brother Achille. René had married his first cousin Estelle Musson, daughter of Michel Musson.[4] Before he left for New Orleans, Edgar was at an artistic crossroads. He was still uncertain about focusing his painting on contemporary subjects and had not yet found much success selling his art.[5]
                During his stay in New Orleans, Edgar Degas resided in Michel Musson's rented mansion in the Garden District.[6] Degas lived with his uncle; René, Estelle and their family; Michel Musson's other two daughters (one of whom was married to businessman William Bell) and their families. He spent much time painting these family members, especially Estelle.[7] However, Degas expressed dissatisfaction with this work in letters to his friends Henri Rouart[8] and James Tissot.[9]
                Michel Musson and his partners ran a cotton factoring firm whose office was in close proximity to Achille and René's business. William Bell and his business partner Frederick Nash Ogden worked in the cotton trade close by. Degas would spend some time each day in his brothers' office receiving and responding to mail, reading newspapers, and overhearing his brothers' and their associates' commercial conversations. Degas would write to Tissot that, in New Orleans, \"One speaks of nothing but cotton.\"[10] ",
                "artist_id" =>11,
                "start_price"=>4600,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-25',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>6,
                "name" =>"The Ninth Wave",
                "size" =>"600x600",
                "image" => "1644945573-The Ninth Wave.jpg",
                "description" => "Born in port town of Feodisia in Crimea, after studing in the Fine Art Academy in Saint-Petersburg, Aivazovsky was eternally in love with the sea. His inspiration was coming from his childhood memories from the years spent on the seaside of the Black Sea, the cold and stormy Baltic sea during his student years and some expeditions taken with the Russian fleet.
                The painter was mesmerized by the power of sea, reportedly not feeling fear even in the most risky situations. Once a ship was in a terrible storm, some said everyone on that ship was dead. By great luck, the ship reached a port, although the memories of this storm stayed with Aivazovsky and became a foundation to many of his paintings.
                The majority of Aivazovsky masterpieces very often depict strong storms and shipwrecks. He shows us the irresistible strength of nature while humans are lost among the waves and don’t seem to have much opportunity to fight back.
                The ‘Ninth Wave’ is somehow different. Some legends say, in every storm the ‘ninth wave’ is the strongest and the most dangerous one. In Aivazovsky’s painting we see exactly that: a huge, ‘ninth’ wave approaching several people who survived a shipwreck. Humans are holding to a piece of a mast. Although, in contrast to a dramatic name, the whole atmosphere and colour palette of the painting is optimistic: we see a sunrise upon the sea, the night storm is over and the survivors have a hope",
                "artist_id" =>3,
                "start_price"=>3200,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-28',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>7,
                "name" =>"Pilgrimage To Cythera",
                "size" =>"400x400",
                "image" => "1644945893-Pilgrimage To Cythera.jpg",
                "description" => "The painting portrays a \"fête galante\"; an amorous celebration or party enjoyed by the aristocracy of France after the death of Louis XIV, which is generally seen as a period of dissipation and pleasure, and peace, after the sombre last years of the previous reign.
                The work celebrates love, with many cupids flying around the couples and pushing them closer together, as well as the statue of Venus (the goddess of sexual love). There are three pairs of lovers in the foreground. While the couple on the right by the statue are still engaged in their passionate tryst, another couple rises to follow a third pair down the hill, although the woman of the third pair glances back fondly at the goddess’s sacred grove. At the foot of the hill, several more happy couples are preparing to board the golden boat at the left. With its light and wispy brushstrokes, the hazy landscape in the background does not give to any clues about the season, or whether it is dawn or dusk.
                It has often been noted that, despite the title, the people on the island seem to be leaving rather than arriving, especially since they have already paired up. Many art historians have come up with a variety of interpretations of the allegory of the voyage to the island of love. Watteau himself purposely did not give an answer.
                In the ancient world, Cythera, one of the Greek islands, was thought to be the birthplace of Venus, goddess of love. Thus, the island became sacred to the goddess and love. However, the subject of Cythera may have been inspired by certain 17th century operas or an illustration of a minor play. In Florent Carton Dancourt's Les Trois Cousines (The Three Cousins), a girl dressed as a pilgrim steps out from the chorus line and invites the audience to join her on a voyage to the island, where everyone will meet their ideal partner. ",
                "artist_id" =>13,
                "start_price"=>5000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-27',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>8,
                "name" =>"A Bar At The Folies Bergere",
                "size" =>"400x400",
                "image" => "1644946326-A Bar At The Folies Bergere.jpg",
                "description" => 'The painting exemplifies Manet\'s commitment to Realism in its detailed representation of a contemporary scene. Many features have puzzled critics but almost all of them have been shown to have a rationale, and the painting has been the subject of numerous popular and scholarly articles.
                The central figure stands before a mirror, although critics—accusing Manet of ignorance of perspective and alleging various impossibilities in the painting—have debated this point since the earliest reviews were published. In 2000, however, a photograph taken from a suitable point of view of a staged reconstruction was shown to reproduce the scene as painted by Manet. According to this reconstruction, \"the conversation that many have assumed was transpiring between the barmaid and gentleman is revealed to be an optical trick—the man stands outside the painter\'s field of vision, to the left, and looks away from the barmaid, rather than standing right in front of her.\" As it appears, the observer should be standing to the right and closer to the bar than the man whose reflection appears at the right edge of the picture. This is an unusual departure from the central point of view usually assumed when viewing pictures drawn according to perspective.
                Asserting the presence of the mirror has been crucial for many modern interpreters.[4] It provides a meaningful parallel with Las Meninas, a masterpiece by an artist Manet admired, Diego Velázquez. There has been a considerable development of this topic since Michel Foucault broached it in his book The Order of Things (1966).[5]
                The art historian Jeffrey Meyers describes the intentional play on perspective and the apparent violation of the operations of mirrors: \"Behind her, and extending for the entire length of the four-and-a-quarter-foot painting, is the gold frame of an enormous mirror. The French philosopher Maurice Merleau-Ponty has called a mirror \'the instrument of a universal magic that changes things into spectacles, spectacles into things, me into others, and others into me.\' We, the viewers, stand opposite the barmaid on the other side of the counter and, looking at the reflection in the mirror, see exactly what she sees... A critic has noted that Manet\'s \'preliminary study shows her placed off to the right, whereas in the finished canvas she is very much the centre of attention.\' Though Manet shifted her from the right to the center, he kept her reflection on the right. Seen in the mirror, she seems engaged with a customer; in full face, she\'s self-protectively withdrawn and remote.\"
                The painting is rich in details which provide clues to social class and milieu. The woman at the bar is a real person, known as Suzon, who worked at the Folies-Bergère in the early 1880s. For his painting, Manet posed her in his studio. By including a dish of oranges in the foreground, Manet identifies the barmaid as a prostitute, according to art historian Larry L. Ligo, who says that Manet habitually associated oranges with prostitution in his paintings.[7] T.J. Clark says that the barmaid is \"intended to represent one of the prostitutes for which the Folies-Bergère was well-known", who is represented "as both a salesperson and a commodity—something to be purchased along with a drink."[7] ',
                "artist_id" =>7,
                "start_price"=>1500,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-24',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>9,
                "name" =>"The Great Wave Off Kanagawa",
                "size" =>"400x400",
                "image" => "1644946647-The Great Wave Off Kanagawa.jpg",
                "description" => 'Hokusai (1760 – 1849) began painting when he was six. At age twelve, his father sent him to work at a bookstore. At sixteen, he was apprenticed as an engraver and spent three years learning the trade. At the same time he began to produce his own illustrations. At eighteen he was accepted as an apprentice to Katsukawa Shunshō, one of the foremost ukiyo-e artists of the time.
                 In 1804 he became famous as an artist when, during a festival in Edo (later named Tokyo), he completed a 240m² painting of a Buddhist monk named Daruma. In 1814, he published the first of fifteen volumes of sketches entitled Manga.
                 His Thirty-six Views of Mount Fuji, from which The Great Wave comes, was produced from c1830 when Hokusai was around seventy years old. The series is considered his masterpiece. It made use of the recently introduced Prussian blue pigment; at first, the images were largely printed in blue tones (aizuri-e), including the key-blocks for the outlines. After its success was assured, multicolored versions of the prints were released.',
                "artist_id" =>12,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-24',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>10,
                "name" =>"A Friend In Need",
                "size" =>"600x600",
                "image" => "1644946980-A Friend In Need.jpg",
                "description" => "It’s not commonly known, but Dogs Playing Poker by Cassius Marcellus Coolidge refers to not just one painting, but 18 of them! The series includes the artist’s original Poker Game (1894) painting, along with 16 other oil paintings commissioned in 1903 by Brown & Bigelow to advertise cigars, and an additional 1910 painting. All eighteen of these paintings feature comical, humanized dogs; however, only eleven of the paintings actually depict poker-faced pups playing cards around a table.
                A Friend in Need (1903) is arguably one of the most popular (and thereby most recognizable) paintings ever. However, unlike other iconic works such as Da Vinci’s Mona Lisa, Botticelli’s The Birth of Venus, and Van Gogh’s Starry Night, Coolidge’s paintings were never considered by critics to be genuine “art.” Instead, when they were first published, Coolidge’s oil-on-canvas paintings left people in hysterics. Art historian and director of the Chrysler Museum of Art in Virginia, William Hennessey, even went so far as to publicly mock the series on April Fools Day in 2002 by releasing a press release claiming he was trying to acquire the series for the museum’s collection. However, Hennessey later admitted, “I’ve always liked them,” and he isn’t alone.",
                "artist_id" =>5,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-23',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>11,
                "name" =>"Red Balloon",
                "size" =>"300x300",
                "image" => "1644948015-Red Balloon.jpg",
                "description" => "Paul Klee’s persistent shifts in style, technique, and subject matter indicate a deliberate and highly playful evasion of aesthetic categorization. Nevertheless, it is virtually impossible to confuse a work by Klee with one by any other artist, even though many have emulated his idiosyncratic, enigmatic art. So accepted was his work that Klee was embraced over the years by the Blue Rider group, the European Dada contingent, the Surrealists, and the Bauhaus faculty, with whom he taught for a decade in Weimar and Dessau.
                As part of the early 20th-century avant-garde, Klee formulated a personal abstract pictorial language. His vocabulary, which oscillates freely between the figurative and the nonrepresentational, communicates through a unique symbology that is more expressive than descriptive. Klee conveyed his meanings through an often whimsical fusion of form and text, frequently writing the titles to his works on the mats upon which they are mounted and including words within the images themselves. Such is the case with The Bavarian Don Giovanni, in which Klee indicated his admiration for the Mozart opera as well as for certain contemporary sopranos, while hinting at his own amorous pursuits. A veiled self-portrait, the figure climbing the ladder is surrounded by five women’s names, an allusion to the operatic scene in which Don Giovanni’s servant Leporello recites a list of his master’s 2,065 love affairs. Citing Klee’s confession that his “infatuations changed with every soubrette at the opera,” art historian K. Porter Aichele has identified the Emma and Thères of the watercolor as the singers Emma Carelli and Thérèse Rothauser. The others—Cenzl, Kathi, and Mari—refer to models with whom Klee had fleeting romantic interludes.",
                "artist_id" =>3,
                "start_price"=>1800,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-23',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>12,
                "name" =>"Boulevard Montmartre Spring",
                "size" =>"500x500",
                "image" => "1644948252-Boulevard Montmartre Spring.jpg",
                "description" => "One of a series of fourteen works painted between February and April, Boulevard Montmartre: Spring epitomizes Pissarro’s ability to seize unique moments, such as a specific hour or season. From his hotel room overlooking the boulevard, he captured the life and movement of the street in small, rapid brushstrokes. Pissarro considered his work very modern in conception: “I am delighted to be able to paint these Paris streets that people have come to call ugly, but which are so silvery, so luminous and vital.”
                Until 1935, Boulevard Montmartre: Spring was in the collection of Max Silberberg, a Jewish industrialist and art collector from Breslau, Germany. It was then sold in a forced sale by Paul Graupe’s auction house in Berlin. Max Silberberg and most of his family perished in the Holocaust.
                In 1999, representatives of the Silberberg Estate asked the Museum and its American Friends to make restitution of the painting. Ownership was restored to Max Silberberg’s daughter-in-law and heir. Boulevard Montmartre: Spring remains in Jerusalem on extended loan through her generosity.
                Formerly a bequest of John and Frances L. Loeb, New York, to American Friends of the Israel Museum, Now extended loan from the daughter-in-law of Max Silberberg, Breslau",
                "artist_id" =>1,
                "start_price"=>6000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-26',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>13,
                "name" =>"The Garden Of Earthly Delights",
                "size" =>"500x500",
                "image" => "1644948436-The Garden Of Earthly Delights.jpg",
                "description" => "The Garden of Earthly Delights is the modern title given to a triptych oil painting on oak panel painted by the Early Netherlandish master Hieronymus Bosch, between 1490 and 1510, when Bosch was between 40 and 60 years old. It has been housed in the Museo del Prado in Madrid, Spain since 1939.
                As little is known of Bosch's life or intentions, interpretations of his intent range from an admonition of worldly fleshy indulgence, to a dire warning on the perils of life's temptations, to an evocation of ultimate sexual joy. The intricacy of its symbolism, particularly that of the central panel, has led to a wide range of scholarly interpretations over the centuries. Twentieth-century art historians are divided as to whether the triptych's central panel is a moral warning or a panorama of paradise lost.
                Bosch painted three large triptychs (the others are The Last Judgment of c. 1482 and The Haywain Triptych of c. 1516) that can be read from left to right and in which each panel was essential to the meaning of the whole. Each of these three works presents distinct yet linked themes addressing history and faith. Triptychs from this period were generally intended to be read sequentially, the left and right panels often portraying Eden and the Last Judgment respectively, while the main subject was contained in the center piece. It is not known whether The Garden was intended as an altarpiece, but the general view is that the extreme subject matter of the inner center and right panels make it unlikely that it was intended to function in a church or monastery, but was instead commissioned by a lay patron.",
                "artist_id" =>4,
                "start_price"=>5400,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-24',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>14,
                "name" =>"The Seed Of Areoi",
                "size" =>"500x500",
                "image" => "1644948623-The Seed Of Areoi.jpg",
                "description" => 'In spring 1891 Gauguin traveled to the South Pacific island of Tahiti, then a French colony. He hoped to find an enchanting paradise, far from the modern metropolis of Paris. However, by the time of Gauguin\'s arrival Tahiti had been profoundly altered by French colonization: poverty and sickness were rampant. Still, in his paintings of the island Gauguin included elements of the imaginary, configuring Tahiti as a pre-modern land of leisure. His use of bright, flat, and unrealistic colors and his interest in recovering a \"pure\" subject, closer to nature, were greatly influential to the next generation of European artists, including the Fauves and German Expressionists.',
                "artist_id" =>2,
                "start_price"=>2300,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-25',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>15,
                "name" =>"Abstract Art Mono Light Blue",
                "size" =>"400x400",
                "image" => "1644949220-Abstract Art Mono Light Blue.jpg",
                "description" => 'Abstraction indicates a departure from reality in depiction of imagery in art. This departure from accurate representation can be slight, partial, or complete. Abstraction exists along a continuum. Even art that aims for verisimilitude of the highest degree can be said to be abstract, at least theoretically, since perfect representation is impossible. Artwork which takes liberties, altering for instance color and form in ways that are conspicuous, can be said to be partially abstract. Total abstraction bears no trace of any reference to anything recognizable. In geometric abstraction, for instance, one is unlikely to find references to naturalistic entities. Figurative art and total abstraction are almost mutually exclusive. But figurative and representational (or realistic) art often contain partial abstraction.
                Both geometric abstraction and lyrical abstraction are often totally abstract. Among the very numerous art movements that embody partial abstraction would be for instance fauvism in which color is conspicuously and deliberately altered vis-a-vis reality, and cubism, which alters the forms of the real life entities depicted.',
                "artist_id" =>7,
                "start_price"=>1300,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-24',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>16,
                "name" =>"Medieval Buildings And Towns",
                "size" =>"600x500",
                "image" => "1644949443-Medieval Buildings And Towns.jpg",
                "description" => 'Central Asian art primarily consists of works by the Turkic peoples of the Eurasian Steppe, while East Asian art includes works from China, Japan, and Korea. South Asian art encompasses the arts of the Indian subcontinent, with Southeast Asian art including the art of Thailand, Laos, Vietnam, Indonesia, and the Philippines. West Asian art encompasses the arts of the Near East, including the ancient art of Mesopotamia, and more recently becoming dominated by Islamic art.
                In many ways, the history of art in Asia parallels the development of Western art. The art histories of Asia and Europe are greatly intertwined, with Asian art greatly influencing European art, and vice versa; the cultures mixed through methods such as the Silk Road transmission of art, the cultural exchange of the Age of Discovery and colonization, and through the internet and modern globalization.
                Excluding prehistoric art, the art of Mesopotamia represents the oldest forms of art in Asia.',
                "artist_id" =>6,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-20',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>17,
                "name" =>"The Horses Of San Marco In The Piazzetta",
                "size" =>"400x400",
                "image" => "1644950303-The Horses Of San Marco In The Piazzetta.jpg",
                "description" => "When the Venetians took Constantinople in 1204 during the Fourth Crusade, they brought back important artefacts to Venice, including four magnificent gilt-bronze Greek or Roman horses. These were installed above the central arch of the west façade of San Marco, the focal point of Venetian life, as symbols of the power of Venice and Venetian pride. Their removal to Paris by Napoleon in 1798 was therefore devastating; they were eventually returned in 1815.
                Canaletto has taken down the horses from San Marco and placed them on high pedestals in front of the Basilica. Among the visitors studying the horses is a group of Procurators and Senators on the right, gazing up at them in awe. The dating takes an unusual form. The nearest pedestal has the Latin inscription, \"A B VRB. COND. MCCCXXXII\", above and below the Grimani arms under the ducal cap. Pietro Grimani reigned as Doge from June 1741 to March 1752. The inscription states that the date is 1,332 years after the foundation of Venice, which traditionally took place in AD 421. The date of the painting would therefore be 1753, which is after Grimani's death and nine years after the rest of the series. It has been plausibly suggested that Canaletto added a third X in error, which would make the date 1743. If this X was intended to be a I, the date would be 1744, which matches the date of the rest of the paintings in this series of 13 overdoors commissioned from Canaletto by Consul Joseph Smith. This use of the date of the foundation of Venice both emphasises the signifiance of the horses and links the Venetian Republic with ancient Rome.",
                "artist_id" =>3,
                "start_price"=>8700,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-26',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>18,
                "name" =>"Entrance To The Grand Canal Looking East",
                "size" =>"400x400",
                "image" => "1644950605-Entrance To The Grand Canal Looking East.jpg",
                "description" => "Get hand painted museum quality reproduction of \"The entrance to the Grand Canal, looking east from the Salute towards the Bacino di San Marco, the Doge\'s Palace and Riva degli Schiavoni beyond\" by (Giovanni Antonio Canal) Canaletto. The Reproduction will be hand painted by one of our talented artist. \"The entrance to the Grand Canal, looking east from the Salute towards the Bacino di San Marco, the Doge\'s Palace and Riva degli Schiavoni beyond\" by (Giovanni Antonio Canal) Canaletto Reproduction will come with Free Certificate of Authenticity that verifies the authenticity of the hand painted fine art reproduction you purchased.",
                "artist_id" =>4,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-23',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>19,
                "name" =>"The Riva Degli Schiavoni",
                "size" =>"300x300",
                "image" => "1644951126-The Riva Degli Schiavoni.jpg",
                "description" => 'In the age of the Grand Tour—travel to the famous sites of continental Europe that marked the “finishing touch” of every young gentleman’s education—art became the ultimate souvenir. Born Antonio Canal, Canaletto was the most distinguished 18th-century Italian painter who specialized in vedute (views), paintings of a city or town faithful enough to identify the location. His compelling views of Venice recorded the city for wealthy tourists of the 1700s. The flicker of light on the water, the stance of the gondoliers, and the clearly delineated buildings against a crisp blue sky demonstrate his passion for details and contribute to a sense of the city extending beyond the view shown. The pink 14th-century Doge’s Palace on the left and the Bridge of Sighs, just visible behind the Ponte della Paglia in the shadow to the right of the Palace, are still landmarks for visitors to Venice today.',
                "artist_id" =>7,
                "start_price"=>1000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>20,
                "name" =>"The Punta Della Dogana",
                "size" =>"500x500",
                "image" => "1644951317-The Punta Della Dogana.jpg",
                "description" => "The building was restored by Tadao Ando from January 2008 to March 2009, funded by François Pinault,  a French billionaire and art collector.  He signed a 33-year agreement with the city.  The building had been empty for decades prior, with failed plans to turn it into apartments or a hotel. Dogana da Mar's stuccoed brick exterior was restored without additions, and is the only part of the original structure left intact. Cosmetic imperfections and the stucco were repaired, and bad areas were reinforced with stainless steel anchors, but areas with visible brick were left exposed. The interiors were left bare without surface treatment, and bricks were replaced sparingly. The room partitions from the last two centuries were replaced with parallel, rectangular halls. The roof was replaced by a similar roof with timber gables, with added skylights. The new floors are made of exposed and polished concrete, in some places covered with linoleum.  Frank Peter Jäger called these smooth surfaces Ando's trademark, along with glass and steel fixtures that clash with the raw irregularities of the unfinished walls. He added that, for Ando, this combination \"symbolizes the union of past, present, and future\", the building, his architecture, and the art within it, respectively.  Ando wanted to make the western entrance\'s face out of concrete slabs, but the change was opposed by the city.  Exibart\'s Jacqueline Ceresoli described the building as having \"industrial and minimalist soul\" with red brick walls.",
                "artist_id" =>9,
                "start_price"=>1000,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-24',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>21,
                "name" =>"London Whitehall And The Privy Garden From Richmond House",
                "size" =>"800x800",
                "image" => "1644951596-London Whitehall And The Privy Garden From Richmond House.jpg",
                "description" => "His work and its companion picture (The Thames and the City of London from Richmond House), have become the most widely admired paintings executed by Canaletto during his stay in England. They were painted for the Duke of Richmond, and probably based upon sketches made from views from the upper windows of his London home, Richmond House. The Duke himself is depicted with a servant in the courtyard at the lower right.
                Whitehall is shown as an open space surrounded by small buildings, unfamiliar to modern Londoners accustomed to vast government offices covering the area. The Tudor Treasury Gate at the left was demolished in 1759 to ease the flow of traffic, but the Banqueting House, left of centre in the middle-distance, and church of St Martin-in-the-Fields beyond and to the right of it, remain.
                A sense of order has been imposed on the urban sprall; the main buildings lie parallel to the picture plane, and the perspective is conveniently established by the walls and pathways which run towards the centre of the composition. Everything - from the chickens in the foreground to the houses half a mile away - is observed with a crispness of equal insistence, so creating a vivid record of this unexpected view of the capital during the reign of George II.
                Canaletto later reinterpreted the scene from a lower viewpoint, and produced an even wider panorama (one of his most spectacular), which includes a view of the Thames at the left.",
                "artist_id" =>1,
                "start_price"=>2600,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-24',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
        ]);
    }
}
