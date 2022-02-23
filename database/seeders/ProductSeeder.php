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
               "size_id" =>1,
               "image" => "1644943124-The Creation Of Adam.jpg",
               "description" => "This picture, in a sense, depicts more than the creation of the first man, in fact, it shows the very start of what would later become the human race. Adam's figure is curved as he stretches out to God, taking one's mind to the idea that man is made in the likeness of God himself. The way the two dominant figures relate and correspond to each other, one can almost see the closeness that Adam has with his creator. Michelangelo made the Creation of Adam in such a way that the figure of Adam echoes the figure of God, almost as if one is nothing but an extension of the other. God's form, in turn, is stretched out to reach Adam. However, God appears to be in some suspended imperceptible shape that houses him and other angelic figures. The angels within Michelangelo's frame differ from the typical impression of angels in that they do not have wings. These angels hold up the support that God is painted upon, and there appears to be some drapery whipping out in their background. In this figure, God's form has been made clear, almost as if he were human. He is elderly, but even with his long grey hair and equally long beard, his body is masculine and somewhat youthful.",
                "artist_id" =>3,
                "start_price"=>1000,
                "current_price" =>0,
               "date_start" =>'2022-02-25',
               "date_end"=>'2022-03-05',
               "status_id"=>2,
               "deleted_at" => NULL,
               "created_at"=>'2022-02-15 09:38:44',
               "updated_at"=>'2022-02-15 09:38:44'
           ],
            [
                "id"   =>2,
                "name" =>"Sunday Afternoon On The Island",
                "size_id" =>2,
                "image" => "1644944034-Sunday Afternoon On The Island.jpg",
                "description" => "In 1879, Georges Seurat enlisted as a soldier in the French army and arrived back home in 1880. Later, he ran a small painter's studio in Paris, and in 1883 showed his work publicly for the first time. The following year, Seurat began to work on La Grande Jatte and exhibited the painting in the spring of 1886 with the Impressionists.[2] With La Grande Jatte, Seurat was immediately acknowledged as the leader of a new and rebellious form of Impressionism called Neo-Impressionism.
                Seurat painted A Sunday Afternoon between May 1884 and March 1885, and from October 1885 to May 1886, focusing meticulously on the landscape of the park.[4] He reworked the original and completed numerous preliminary drawings and oil sketches. He sat in the park, creating numerous sketches of the various figures in order to perfect their form. He concentrated on issues of colour, light, and form. The painting is approximately 2 by 3 metres (6.6 ft × 9.8 ft) in size.
                Inspired by optical effects and perception inherent in the color theories of Michel Eugène Chevreul, Ogden Rood and others, Seurat adapted this scientific research to his painting.[5] Seurat contrasted miniature dots or small brushstrokes of colors that when unified optically in the human eye were perceived as a single shade or hue. He believed that this form of painting, called Divisionism at the time (a term he preferred)[6] but now known as Pointillism, would make the colors more brilliant and powerful than standard brushstrokes. The use of dots of almost uniform size came in the second year of his work on the painting, 1885–86. To make the experience of the painting even more vivid, he surrounded it with a frame of painted dots, which in turn he enclosed with a pure white, wooden frame, which is how the painting is exhibited today at the Art Institute of Chicago.
                Northwest portion of La Grande Jatte in 2018. The Island of la Grande Jatte is located at the very gates of Paris, lying in the Seine between Neuilly and Levallois-Perret, a short distance from where La Défense business district currently stands. Although for many years it was an industrial site, it is today the site of a public garden and a housing development. When Seurat began the painting in 1884, the island was a bucolic retreat far from the urban center.",
                "artist_id" =>6,
                "start_price"=>1500,
                "current_price" =>0,
                "date_start" =>'2022-02-26',
                "date_end"=>'2022-03-10',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-23 09:38:44',
                "updated_at"=>'2022-03-07 09:38:44'
            ],
            [
                "id"   =>3,
                "name" =>"The Sleeping Gypsy",
                "size_id" =>2,
                "image" => "1644944398-The Sleeping Gypsy.jpg",
                "description" => 'Rousseau described the subject of The Sleeping Gypsy as: "A wandering Negress, a mandolin player, lies with her jar beside her (a vase with drinking water), overcome by fatigue in a deep sleep. A lion chances to pass by, picks up her scent yet does not devour her. There is a moonlight effect, very poetic." A toll collector for the city of Paris, Rousseau was largely a self-taught painter, although he had ambitions of entering the academy. This was never realized, but his sharp colors, fantastic imagery, and precise outlines—derived from the style and subject matter of popular print culture—struck a chord with a younger generation of avant-garde painters, including Pablo Picasso, Vasily Kandinsky, and Frida Kahlo.',
                "artist_id" =>8,
                "start_price"=>3400,
                "current_price" =>0,
                "date_start" =>'2022-02-23',
                "date_end"=>'2022-03-06',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>4,
                "name" =>"View Of Toledo",
                "size_id" =>4,
                "image" => "1644944676-View Of Toledo.jpg",
                "description" => 'View of Toledo is a landscape portrait. The painting is vibrant with blues, black, white, and vivid greens. It is made up of all earth tones. Most notable is the distinct color contrast between the darkness of the skies above and the vibrance of green in the hills below. View of Toledo shows viewers an image of darkness, or moodiness that is present in Toledo. Observers can see that the sky grows exceptionally dark near the city. El Greco creates a palette full of dramatic colors. While contemplating View of Toledo, people can see the contrast from light to dark. There are rolling hills depicted with Toledo at the top. The city of Toledo is very grey in contrast to the vibrant green of the hills. On the opposite end the city itself is also a light contrast to the dark color of the sky. El Greco uses pure colors to his advantage.[4] The location of the Castle of San Servando, on the left, is accurately depicted. However, many other landmarks that are clearly referring to Toledo are not in the correct location that is true to the city. Walter Liedtke believes this is because El Greco painted the View of Toledo more as a future or a hope to what it would look like.[2] Art historians, Jonathon Brown and Richard Kagan, have also hinted to the theory that El Greco painted the city of Toledo in an alternate way to fit his imagination or ideal version of Toledo.[5]',
                "artist_id" =>2,
                "start_price"=>4500,
                "current_price" =>0,
                "date_start" =>'2022-02-26',
                "date_end"=>'2022-03-10',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>5,
                "name" =>"A Cotton Office In New Orleans",
                "size_id" =>6,
                "image" => "1644945260-A Cotton Office In New Orleans.jpg",
                "description" => "Edgar Degas had familial ties to Creole New Orleans. Germain Musson, Degas's maternal grandfather, was born of French descent in Port-Au-Prince. In the aftermath of the Haitian Revolution, he relocated in 1810 to New Orleans where he established himself as a cotton exporter.[2] Musson married Marie Céleste Désirée Rillieux who was from a prominent Creole family. They had five New Orleans-born children including Degas's mother, Marie-Célestine Musson, and Michel Musson. After his wife died in 1819, Germain Musson moved his family to Paris. He relocated back to New Orleans after the 1832 marriage of his daughter Marie-Célestine to Auguste Degas. When Edgar was born, Auguste arranged the purchase of a New Orleans cottage in his son's name.[3]Edgar Degas made his first and only trip to the United States and the birthplace of his mother in the fall of 1872 at the behest of his brother René. René at the time was running a cotton brokerage in New Orleans with their other brother Achille. René had married his first cousin Estelle Musson, daughter of Michel Musson.[4] Before he left for New Orleans, Edgar was at an artistic crossroads. He was still uncertain about focusing his painting on contemporary subjects and had not yet found much success selling his art.[5]
                During his stay in New Orleans, Edgar Degas resided in Michel Musson's rented mansion in the Garden District.[6] Degas lived with his uncle; René, Estelle and their family; Michel Musson's other two daughters (one of whom was married to businessman William Bell) and their families. He spent much time painting these family members, especially Estelle.[7] However, Degas expressed dissatisfaction with this work in letters to his friends Henri Rouart[8] and James Tissot.[9]
                Michel Musson and his partners ran a cotton factoring firm whose office was in close proximity to Achille and René's business. William Bell and his business partner Frederick Nash Ogden worked in the cotton trade close by. Degas would spend some time each day in his brothers' office receiving and responding to mail, reading newspapers, and overhearing his brothers' and their associates' commercial conversations. Degas would write to Tissot that, in New Orleans, \"One speaks of nothing but cotton.\"[10] ",
                "artist_id" =>11,
                "start_price"=>4600,
                "current_price" =>0,
                "date_start" =>'2022-02-28',
                "date_end"=>'2022-03-07',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>6,
                "name" =>"The Ninth Wave",
                "size_id" =>7,
                "image" => "1644945573-The Ninth Wave.jpg",
                "description" => "Born in port town of Feodisia in Crimea, after studing in the Fine Art Academy in Saint-Petersburg, Aivazovsky was eternally in love with the sea. His inspiration was coming from his childhood memories from the years spent on the seaside of the Black Sea, the cold and stormy Baltic sea during his student years and some expeditions taken with the Russian fleet.
                The painter was mesmerized by the power of sea, reportedly not feeling fear even in the most risky situations. Once a ship was in a terrible storm, some said everyone on that ship was dead. By great luck, the ship reached a port, although the memories of this storm stayed with Aivazovsky and became a foundation to many of his paintings.
                The majority of Aivazovsky masterpieces very often depict strong storms and shipwrecks. He shows us the irresistible strength of nature while humans are lost among the waves and don’t seem to have much opportunity to fight back.
                The ‘Ninth Wave’ is somehow different. Some legends say, in every storm the ‘ninth wave’ is the strongest and the most dangerous one. In Aivazovsky’s painting we see exactly that: a huge, ‘ninth’ wave approaching several people who survived a shipwreck. Humans are holding to a piece of a mast. Although, in contrast to a dramatic name, the whole atmosphere and colour palette of the painting is optimistic: we see a sunrise upon the sea, the night storm is over and the survivors have a hope",
                "artist_id" =>3,
                "start_price"=>3200,
                "current_price" =>0,
                "date_start" =>'2022-02-22',
                "date_end"=>'2022-03-09',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>7,
                "name" =>"Pilgrimage To Cythera",
                "size_id" =>4,
                "image" => "1644945893-Pilgrimage To Cythera.jpg",
                "description" => "The painting portrays a \"fête galante\"; an amorous celebration or party enjoyed by the aristocracy of France after the death of Louis XIV, which is generally seen as a period of dissipation and pleasure, and peace, after the sombre last years of the previous reign.
                The work celebrates love, with many cupids flying around the couples and pushing them closer together, as well as the statue of Venus (the goddess of sexual love). There are three pairs of lovers in the foreground. While the couple on the right by the statue are still engaged in their passionate tryst, another couple rises to follow a third pair down the hill, although the woman of the third pair glances back fondly at the goddess’s sacred grove. At the foot of the hill, several more happy couples are preparing to board the golden boat at the left. With its light and wispy brushstrokes, the hazy landscape in the background does not give to any clues about the season, or whether it is dawn or dusk.
                It has often been noted that, despite the title, the people on the island seem to be leaving rather than arriving, especially since they have already paired up. Many art historians have come up with a variety of interpretations of the allegory of the voyage to the island of love. Watteau himself purposely did not give an answer.
                In the ancient world, Cythera, one of the Greek islands, was thought to be the birthplace of Venus, goddess of love. Thus, the island became sacred to the goddess and love. However, the subject of Cythera may have been inspired by certain 17th century operas or an illustration of a minor play. In Florent Carton Dancourt's Les Trois Cousines (The Three Cousins), a girl dressed as a pilgrim steps out from the chorus line and invites the audience to join her on a voyage to the island, where everyone will meet their ideal partner. ",
                "artist_id" =>13,
                "start_price"=>5000,
                "current_price" =>0,
                "date_start" =>'2022-02-23',
                "date_end"=>'2022-03-08',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>8,
                "name" =>"A Bar At The Folies Bergere",
                "size_id" =>3,
                "image" => "1644946326-A Bar At The Folies Bergere.jpg",
                "description" => 'The painting exemplifies Manet\'s commitment to Realism in its detailed representation of a contemporary scene. Many features have puzzled critics but almost all of them have been shown to have a rationale, and the painting has been the subject of numerous popular and scholarly articles.
                The central figure stands before a mirror, although critics—accusing Manet of ignorance of perspective and alleging various impossibilities in the painting—have debated this point since the earliest reviews were published. In 2000, however, a photograph taken from a suitable point of view of a staged reconstruction was shown to reproduce the scene as painted by Manet. According to this reconstruction, \"the conversation that many have assumed was transpiring between the barmaid and gentleman is revealed to be an optical trick—the man stands outside the painter\'s field of vision, to the left, and looks away from the barmaid, rather than standing right in front of her.\" As it appears, the observer should be standing to the right and closer to the bar than the man whose reflection appears at the right edge of the picture. This is an unusual departure from the central point of view usually assumed when viewing pictures drawn according to perspective.
                Asserting the presence of the mirror has been crucial for many modern interpreters.[4] It provides a meaningful parallel with Las Meninas, a masterpiece by an artist Manet admired, Diego Velázquez. There has been a considerable development of this topic since Michel Foucault broached it in his book The Order of Things (1966).[5]
                The art historian Jeffrey Meyers describes the intentional play on perspective and the apparent violation of the operations of mirrors: \"Behind her, and extending for the entire length of the four-and-a-quarter-foot painting, is the gold frame of an enormous mirror. The French philosopher Maurice Merleau-Ponty has called a mirror \'the instrument of a universal magic that changes things into spectacles, spectacles into things, me into others, and others into me.\' We, the viewers, stand opposite the barmaid on the other side of the counter and, looking at the reflection in the mirror, see exactly what she sees... A critic has noted that Manet\'s \'preliminary study shows her placed off to the right, whereas in the finished canvas she is very much the centre of attention.\' Though Manet shifted her from the right to the center, he kept her reflection on the right. Seen in the mirror, she seems engaged with a customer; in full face, she\'s self-protectively withdrawn and remote.\"
                The painting is rich in details which provide clues to social class and milieu. The woman at the bar is a real person, known as Suzon, who worked at the Folies-Bergère in the early 1880s. For his painting, Manet posed her in his studio. By including a dish of oranges in the foreground, Manet identifies the barmaid as a prostitute, according to art historian Larry L. Ligo, who says that Manet habitually associated oranges with prostitution in his paintings.[7] T.J. Clark says that the barmaid is \"intended to represent one of the prostitutes for which the Folies-Bergère was well-known", who is represented "as both a salesperson and a commodity—something to be purchased along with a drink."[7] ',
                "artist_id" =>7,
                "start_price"=>1500,
                "current_price" =>0,
                "date_start" =>'2022-02-23',
                "date_end"=>'2022-03-10',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>9,
                "name" =>"The Great Wave Off Kanagawa",
                "size_id" =>10,
                "image" => "1644946647-The Great Wave Off Kanagawa.jpg",
                "description" => 'Hokusai (1760 – 1849) began painting when he was six. At age twelve, his father sent him to work at a bookstore. At sixteen, he was apprenticed as an engraver and spent three years learning the trade. At the same time he began to produce his own illustrations. At eighteen he was accepted as an apprentice to Katsukawa Shunshō, one of the foremost ukiyo-e artists of the time.
                 In 1804 he became famous as an artist when, during a festival in Edo (later named Tokyo), he completed a 240m² painting of a Buddhist monk named Daruma. In 1814, he published the first of fifteen volumes of sketches entitled Manga.
                 His Thirty-six Views of Mount Fuji, from which The Great Wave comes, was produced from c1830 when Hokusai was around seventy years old. The series is considered his masterpiece. It made use of the recently introduced Prussian blue pigment; at first, the images were largely printed in blue tones (aizuri-e), including the key-blocks for the outlines. After its success was assured, multicolored versions of the prints were released.',
                "artist_id" =>12,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-06',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>10,
                "name" =>"A Friend In Need",
                "size_id" =>8,
                "image" => "1644946980-A Friend In Need.jpg",
                "description" => "It’s not commonly known, but Dogs Playing Poker by Cassius Marcellus Coolidge refers to not just one painting, but 18 of them! The series includes the artist’s original Poker Game (1894) painting, along with 16 other oil paintings commissioned in 1903 by Brown & Bigelow to advertise cigars, and an additional 1910 painting. All eighteen of these paintings feature comical, humanized dogs; however, only eleven of the paintings actually depict poker-faced pups playing cards around a table.
                A Friend in Need (1903) is arguably one of the most popular (and thereby most recognizable) paintings ever. However, unlike other iconic works such as Da Vinci’s Mona Lisa, Botticelli’s The Birth of Venus, and Van Gogh’s Starry Night, Coolidge’s paintings were never considered by critics to be genuine “art.” Instead, when they were first published, Coolidge’s oil-on-canvas paintings left people in hysterics. Art historian and director of the Chrysler Museum of Art in Virginia, William Hennessey, even went so far as to publicly mock the series on April Fools Day in 2002 by releasing a press release claiming he was trying to acquire the series for the museum’s collection. However, Hennessey later admitted, “I’ve always liked them,” and he isn’t alone.",
                "artist_id" =>5,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-04',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>11,
                "name" =>"Red Balloon",
                "size_id" =>5,
                "image" => "1644948015-Red Balloon.jpg",
                "description" => "Paul Klee’s persistent shifts in style, technique, and subject matter indicate a deliberate and highly playful evasion of aesthetic categorization. Nevertheless, it is virtually impossible to confuse a work by Klee with one by any other artist, even though many have emulated his idiosyncratic, enigmatic art. So accepted was his work that Klee was embraced over the years by the Blue Rider group, the European Dada contingent, the Surrealists, and the Bauhaus faculty, with whom he taught for a decade in Weimar and Dessau.
                As part of the early 20th-century avant-garde, Klee formulated a personal abstract pictorial language. His vocabulary, which oscillates freely between the figurative and the nonrepresentational, communicates through a unique symbology that is more expressive than descriptive. Klee conveyed his meanings through an often whimsical fusion of form and text, frequently writing the titles to his works on the mats upon which they are mounted and including words within the images themselves. Such is the case with The Bavarian Don Giovanni, in which Klee indicated his admiration for the Mozart opera as well as for certain contemporary sopranos, while hinting at his own amorous pursuits. A veiled self-portrait, the figure climbing the ladder is surrounded by five women’s names, an allusion to the operatic scene in which Don Giovanni’s servant Leporello recites a list of his master’s 2,065 love affairs. Citing Klee’s confession that his “infatuations changed with every soubrette at the opera,” art historian K. Porter Aichele has identified the Emma and Thères of the watercolor as the singers Emma Carelli and Thérèse Rothauser. The others—Cenzl, Kathi, and Mari—refer to models with whom Klee had fleeting romantic interludes.",
                "artist_id" =>3,
                "start_price"=>1800,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>12,
                "name" =>"Boulevard Montmartre Spring",
                "size_id" =>6,
                "image" => "1644948252-Boulevard Montmartre Spring.jpg",
                "description" => "One of a series of fourteen works painted between February and April, Boulevard Montmartre: Spring epitomizes Pissarro’s ability to seize unique moments, such as a specific hour or season. From his hotel room overlooking the boulevard, he captured the life and movement of the street in small, rapid brushstrokes. Pissarro considered his work very modern in conception: “I am delighted to be able to paint these Paris streets that people have come to call ugly, but which are so silvery, so luminous and vital.”
                Until 1935, Boulevard Montmartre: Spring was in the collection of Max Silberberg, a Jewish industrialist and art collector from Breslau, Germany. It was then sold in a forced sale by Paul Graupe’s auction house in Berlin. Max Silberberg and most of his family perished in the Holocaust.
                In 1999, representatives of the Silberberg Estate asked the Museum and its American Friends to make restitution of the painting. Ownership was restored to Max Silberberg’s daughter-in-law and heir. Boulevard Montmartre: Spring remains in Jerusalem on extended loan through her generosity.
                Formerly a bequest of John and Frances L. Loeb, New York, to American Friends of the Israel Museum, Now extended loan from the daughter-in-law of Max Silberberg, Breslau",
                "artist_id" =>1,
                "start_price"=>6000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>13,
                "name" =>"The Garden Of Earthly Delights",
                "size_id" =>4,
                "image" => "1644948436-The Garden Of Earthly Delights.jpg",
                "description" => "The Garden of Earthly Delights is the modern title given to a triptych oil painting on oak panel painted by the Early Netherlandish master Hieronymus Bosch, between 1490 and 1510, when Bosch was between 40 and 60 years old. It has been housed in the Museo del Prado in Madrid, Spain since 1939.
                As little is known of Bosch's life or intentions, interpretations of his intent range from an admonition of worldly fleshy indulgence, to a dire warning on the perils of life's temptations, to an evocation of ultimate sexual joy. The intricacy of its symbolism, particularly that of the central panel, has led to a wide range of scholarly interpretations over the centuries. Twentieth-century art historians are divided as to whether the triptych's central panel is a moral warning or a panorama of paradise lost.
                Bosch painted three large triptychs (the others are The Last Judgment of c. 1482 and The Haywain Triptych of c. 1516) that can be read from left to right and in which each panel was essential to the meaning of the whole. Each of these three works presents distinct yet linked themes addressing history and faith. Triptychs from this period were generally intended to be read sequentially, the left and right panels often portraying Eden and the Last Judgment respectively, while the main subject was contained in the center piece. It is not known whether The Garden was intended as an altarpiece, but the general view is that the extreme subject matter of the inner center and right panels make it unlikely that it was intended to function in a church or monastery, but was instead commissioned by a lay patron.",
                "artist_id" =>4,
                "start_price"=>5400,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-27',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>14,
                "name" =>"The Seed Of Areoi",
                "size_id" =>6,
                "image" => "1644948623-The Seed Of Areoi.jpg",
                "description" => 'In spring 1891 Gauguin traveled to the South Pacific island of Tahiti, then a French colony. He hoped to find an enchanting paradise, far from the modern metropolis of Paris. However, by the time of Gauguin\'s arrival Tahiti had been profoundly altered by French colonization: poverty and sickness were rampant. Still, in his paintings of the island Gauguin included elements of the imaginary, configuring Tahiti as a pre-modern land of leisure. His use of bright, flat, and unrealistic colors and his interest in recovering a \"pure\" subject, closer to nature, were greatly influential to the next generation of European artists, including the Fauves and German Expressionists.',
                "artist_id" =>2,
                "start_price"=>2300,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-05',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>15,
                "name" =>"Abstract Art Mono Light Blue",
                "size_id" =>7,
                "image" => "1644949220-Abstract Art Mono Light Blue.jpg",
                "description" => 'Abstraction indicates a departure from reality in depiction of imagery in art. This departure from accurate representation can be slight, partial, or complete. Abstraction exists along a continuum. Even art that aims for verisimilitude of the highest degree can be said to be abstract, at least theoretically, since perfect representation is impossible. Artwork which takes liberties, altering for instance color and form in ways that are conspicuous, can be said to be partially abstract. Total abstraction bears no trace of any reference to anything recognizable. In geometric abstraction, for instance, one is unlikely to find references to naturalistic entities. Figurative art and total abstraction are almost mutually exclusive. But figurative and representational (or realistic) art often contain partial abstraction.
                Both geometric abstraction and lyrical abstraction are often totally abstract. Among the very numerous art movements that embody partial abstraction would be for instance fauvism in which color is conspicuously and deliberately altered vis-a-vis reality, and cubism, which alters the forms of the real life entities depicted.',
                "artist_id" =>7,
                "start_price"=>1300,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],

            [
                "id"   =>16,
                "name" =>"Medieval Buildings And Towns",
                "size_id" =>6,
                "image" => "1644949443-Medieval Buildings And Towns.jpg",
                "description" => 'Central Asian art primarily consists of works by the Turkic peoples of the Eurasian Steppe, while East Asian art includes works from China, Japan, and Korea. South Asian art encompasses the arts of the Indian subcontinent, with Southeast Asian art including the art of Thailand, Laos, Vietnam, Indonesia, and the Philippines. West Asian art encompasses the arts of the Near East, including the ancient art of Mesopotamia, and more recently becoming dominated by Islamic art.
                In many ways, the history of art in Asia parallels the development of Western art. The art histories of Asia and Europe are greatly intertwined, with Asian art greatly influencing European art, and vice versa; the cultures mixed through methods such as the Silk Road transmission of art, the cultural exchange of the Age of Discovery and colonization, and through the internet and modern globalization.
                Excluding prehistoric art, the art of Mesopotamia represents the oldest forms of art in Asia.',
                "artist_id" =>6,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-20',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>17,
                "name" =>"The Horses Of San Marco In The Piazzetta",
                "size_id" =>4,
                "image" => "1644950303-The Horses Of San Marco In The Piazzetta.jpg",
                "description" => "When the Venetians took Constantinople in 1204 during the Fourth Crusade, they brought back important artefacts to Venice, including four magnificent gilt-bronze Greek or Roman horses. These were installed above the central arch of the west façade of San Marco, the focal point of Venetian life, as symbols of the power of Venice and Venetian pride. Their removal to Paris by Napoleon in 1798 was therefore devastating; they were eventually returned in 1815.
                Canaletto has taken down the horses from San Marco and placed them on high pedestals in front of the Basilica. Among the visitors studying the horses is a group of Procurators and Senators on the right, gazing up at them in awe. The dating takes an unusual form. The nearest pedestal has the Latin inscription, \"A B VRB. COND. MCCCXXXII\", above and below the Grimani arms under the ducal cap. Pietro Grimani reigned as Doge from June 1741 to March 1752. The inscription states that the date is 1,332 years after the foundation of Venice, which traditionally took place in AD 421. The date of the painting would therefore be 1753, which is after Grimani's death and nine years after the rest of the series. It has been plausibly suggested that Canaletto added a third X in error, which would make the date 1743. If this X was intended to be a I, the date would be 1744, which matches the date of the rest of the paintings in this series of 13 overdoors commissioned from Canaletto by Consul Joseph Smith. This use of the date of the foundation of Venice both emphasises the signifiance of the horses and links the Venetian Republic with ancient Rome.",
                "artist_id" =>3,
                "start_price"=>8700,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>18,
                "name" =>"Entrance To The Grand Canal Looking East",
                "size_id" =>6,
                "image" => "1644950605-Entrance To The Grand Canal Looking East.jpg",
                "description" => "Get hand painted museum quality reproduction of \"The entrance to the Grand Canal, looking east from the Salute towards the Bacino di San Marco, the Doge\'s Palace and Riva degli Schiavoni beyond\" by (Giovanni Antonio Canal) Canaletto. The Reproduction will be hand painted by one of our talented artist. \"The entrance to the Grand Canal, looking east from the Salute towards the Bacino di San Marco, the Doge\'s Palace and Riva degli Schiavoni beyond\" by (Giovanni Antonio Canal) Canaletto Reproduction will come with Free Certificate of Authenticity that verifies the authenticity of the hand painted fine art reproduction you purchased.",
                "artist_id" =>4,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-03',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>19,
                "name" =>"The Riva Degli Schiavoni",
                "size_id" =>3,
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
                "size_id" =>5,
                "image" => "1644951317-The Punta Della Dogana.jpg",
                "description" => "The building was restored by Tadao Ando from January 2008 to March 2009, funded by François Pinault,  a French billionaire and art collector.  He signed a 33-year agreement with the city.  The building had been empty for decades prior, with failed plans to turn it into apartments or a hotel. Dogana da Mar's stuccoed brick exterior was restored without additions, and is the only part of the original structure left intact. Cosmetic imperfections and the stucco were repaired, and bad areas were reinforced with stainless steel anchors, but areas with visible brick were left exposed. The interiors were left bare without surface treatment, and bricks were replaced sparingly. The room partitions from the last two centuries were replaced with parallel, rectangular halls. The roof was replaced by a similar roof with timber gables, with added skylights. The new floors are made of exposed and polished concrete, in some places covered with linoleum.  Frank Peter Jäger called these smooth surfaces Ando's trademark, along with glass and steel fixtures that clash with the raw irregularities of the unfinished walls. He added that, for Ando, this combination \"symbolizes the union of past, present, and future\", the building, his architecture, and the art within it, respectively.  Ando wanted to make the western entrance\'s face out of concrete slabs, but the change was opposed by the city.  Exibart\'s Jacqueline Ceresoli described the building as having \"industrial and minimalist soul\" with red brick walls.",
                "artist_id" =>9,
                "start_price"=>1000,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-26',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],

            [
                "id"   =>21,
                "name" =>"London Whitehall And The Privy Garden From Richmond House",
                "size_id" =>9,
                "image" => "1644951596-London Whitehall And The Privy Garden From Richmond House.jpg",
                "description" => "His work and its companion picture (The Thames and the City of London from Richmond House), have become the most widely admired paintings executed by Canaletto during his stay in England. They were painted for the Duke of Richmond, and probably based upon sketches made from views from the upper windows of his London home, Richmond House. The Duke himself is depicted with a servant in the courtyard at the lower right.
                Whitehall is shown as an open space surrounded by small buildings, unfamiliar to modern Londoners accustomed to vast government offices covering the area. The Tudor Treasury Gate at the left was demolished in 1759 to ease the flow of traffic, but the Banqueting House, left of centre in the middle-distance, and church of St Martin-in-the-Fields beyond and to the right of it, remain.
                A sense of order has been imposed on the urban sprall; the main buildings lie parallel to the picture plane, and the perspective is conveniently established by the walls and pathways which run towards the centre of the composition. Everything - from the chickens in the foreground to the houses half a mile away - is observed with a crispness of equal insistence, so creating a vivid record of this unexpected view of the capital during the reign of George II.
                Canaletto later reinterpreted the scene from a lower viewpoint, and produced an even wider panorama (one of his most spectacular), which includes a view of the Thames at the left.",
                "artist_id" =>1,
                "start_price"=>2600,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-08',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>22,
                "name" =>"San Marco The Interior",
                "size_id" =>10,
                "image" => "1644980358-San Marco The Interior.jpg",
                "description" => "No artist is more closely associated with vedute, the views of Venice, than Canaletto, who attracted the patronage of wealthy tourists at a time when the Grand Tour was becoming fashionable. His paintings were sought after as “souvenirs” for aristocrats and distinguished visitors, and were also prized by those who would themselves have wished to travel to Italy. His views of Venice are often composite studies. He would convincingly manipulate perspective to enhance dramatic effect. These characteristics are apparent in this interior view — unusual in his works — of the famous eleventh-century Byzantine Basilica of San Marco. Rich in ornamentation, the painting is full of incident: a priest officiating at the left, praying worshippers and wandering visitors.",
                "artist_id" =>6,
                "start_price"=>1700,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>23,
                "name" =>"The Molo And The Piazzetta San Marco, Venice",
                "size_id" =>4,
                "image" => "1644980516-The Molo And The Piazzetta San Marco, Venice.jpg",
                "description" => 'This view, laterally truncated and simplified for pictorial effect, is supposedly from the Bacino just south of the Palazzo Ducale (Doge’s Palace), looking north-west to the campanile of San Marco (St Mark’s) from close to the Molo quay, judging by the relative proportions of the palace and the two columns at the entrance to the Piazzetta. The tower would be on the diagonal from such an angle, and the palace appears proportionately too large, even allowing for its nearness. As Ian Warrell has observed:
                From this study it is only just possible to determine that there is an arcade at ground level, above which sits a highly decorated gallery, with quatrefoil openings set into the spaces between ogee arches. The use of white paint, however, nicely differentiates the marble of these two levels from the warmer colours of the upper walls
                A more specific detail is the Austrian sentry box silhouetted at the corner of the palace, seen again in a contemporary night-time view of the Piazzetta.  Beyond the columns, the Libreria Sansoviniana and the Zecca are compressed, and the whole waterfront running west to the entrance of the Grand Canal is effectively omitted in order to include the domes of the Salute to the south-south-east at the far left.',
                "artist_id" =>3,
                "start_price"=>3600,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-27',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>24,
                "name" =>"Rome - The Arch Of Constantine",
                "size_id" =>6,
                "image" => "1644981171-Rome - The Arch Of Constantine.jpg",
                "description" => 'The arch, which was constructed between 312 and 315 AD, was dedicated by the Senate to commemorate ten years (decennalia) of Constantine\'s reign (306–337) and his victory over the then reigning emperor Maxentius (306–312) at the Battle of Milvian Bridge on 28 October 312, as described on its attic inscription, and officially opened on 25 July 315. Not only did the Roman senate give the arch for Constantine\'s victory, they also were celebrating decennia, a series of games that happens every decade for the Romans. On this occasion they also said many prayers. However, Constantine had actually entered Rome on 29 October 312, amidst great rejoicing, and the Senate then commissioned the monument. Constantine then left Rome within two months and did not return until 326.
                The location, between the Palatine Hill and the Caelian Hill, spanned the ancient route of Roman triumphs (Via triumphalis) at its origin, where it diverged from the Via sacra.This route was that taken by the emperors when they entered the city in triumph. This route started at the Campus Martius, led through the Circus Maximus, and around the Palatine Hill; immediately after the Arch of Constantine, the procession would turn left at the Meta Sudans and march along the Via sacra to the Forum Romanum and on to the Capitoline Hill, passing through both the Arches of Titus and Septimius Severus.
                During the Middle Ages, the Arch of Constantine was incorporated into one of the family strongholds of ancient Rome, as shown in the painting by Herman van Swanevelt, here. Works of restoration were first carried out in the 18th century, the last excavations have taken place in the late 1990s, just before the Great Jubilee of 2000. The arch served as the finish line for the marathon athletic event for the 1960 Summer Olympics.',
                "artist_id" =>9,
                "start_price"=>5400,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>25,
                "name" =>"The Reception Of The French Ambassador In Venice",
                "size_id" =>5,
                "image" => "1644981171-Rome - The Arch Of Constantine.jpg",
                "description" => 'Get hand painted museum quality reproduction of "Arrival of the French Ambassador in Venice 1740s" by (Giovanni Antonio Canal) Canaletto. The Reproduction will be hand painted by one of our talented artist. "Arrival of the French Ambassador in Venice 1740s" by (Giovanni Antonio Canal) Canaletto Reproduction will come with Free Certificate of Authenticity that verifies the authenticity of the hand painted fine art reproduction you purchased.',
                "artist_id" =>7,
                "start_price"=>2500,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],

            [
                "id"   =>26,
                "name" =>"Saints John and Paul School And The De San Marco",
                "size_id" =>8,
                "image" => "1644981752-Saints John and Paul School And The De San Marco.jpg",
                "description" => 'Don\'t settle for cheap prints when you can own a beautiful handmade oil painting reproduction of Saints John and Paul School And The De San Marco by Canaletto. This recreated Canaletto\'s replica is manually reproduced with oil by our master artists, defining every brushstroke to reinvigorate an original to its glory. Each Saints John and Paul School And The De San Marco reproduction created by our expert artists is completely handmade in our own studio using the best materials available to ensure the durability and preservation quality of a true masterpiece.
                Our squads of top-notch artisans adhere to strict quality standards that demand that all our reproductions be created with the highest attention to detail, style, technique and aesthetics, without the use of any digital methods or computer tricks to enhance your oil painting. The quality of their work is evident from our unmistakable museum-quality painting reproductions. It is our endeavor to recreate every facet of your Saints John and Paul School And The De San Marco oil painting in the most precise manner to grant you a fulfilling sense of why our artworks can proudly adorn the walls of your home.
                Please note: Because our reproductions are hand painted, there might be some minor variations between the original paintings and our reproductions. We always notify you when the painting is complete so you can review the painting online before accepting it. You may approve or reach us with your suggestions for improvement, and we will deliver modifications until the painting meets your approval',
                "artist_id" =>5,
                "start_price"=>3900,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-03-10',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>27,
                "name" =>"Old Walton Bridge Over The Thames",
                "size_id" =>8,
                "image" => "1644982115-Old Walton Bridge Over The Thames.jpg",
                "description" => 'Construction of the bridge by a Mr White of Weybridge was started in 1748 and was completed in 1750. The construction was paid for by Samuel Dicker who was the MP for Plymouth and owned property in Walton on Thames. By paying for its construction Dicker also obtained the right to collect tolls from users of the bridge under the statute. Opponents to its construction comprised ferry operators, who foresaw an impact their livelihoods; the bargees who thought it would make the river unnavigable; and a minority of residents of Walton-on-Thames who were worried about an influx of undesirable elements from substantially rural and wayfaring villages of West Middlesex north of the river. Despite the late opposition following his Act, Dicker pressed on with construction, probably motivated by his own desire for easy access to London (Hampton Court Bridge allowing the shortcut from the south bank across Hampton Court Park\'s major meander was opened at the end of 1753) and for the financial benefits the tolls would bring.
                Etheridge\'s Mathematical Bridge in Cambridge.
                The design of the bridge was by William Etheridge who also designed the smaller but similar Mathematical Bridge across the River Cam at Queens\' College, Cambridge, and had been responsible for the construction of many of the timber centres of the Westminster Bridge while working as James King\'s foreman. First constructed between 1749 and 1750, this bridge still stands, although it has been rebuilt twice, most recently in 1905. The Old Walton Bridge was supported by four central stone piers connected by three arches built of wooden beams and joists. The span of the central arch was 130 feet (39 m), at the time the widest unsupported span in England (it was surpassed by William Edwards Bridge at Pontypridd). The other two main arches were each 44 feet (13 m), though Dicker later suggested that the design would have allowed for side spans of 70 ft or more. Away from the water were five further small brickwork arches on each side of the river. On the strength of their success with Walton Bridge Etheridge and Dicker put forward two proposals for a bridge at Blackfriars, one for building in stone and the other in timber. The stone-built proposal was accepted but several changes to Etheridge\'s design led to him leaving the project before it was completed.
                Although considered an impressive feat of engineering at the time of its construction, the bridge stood for only 33 years. Dicker died in London in 1760 and his estates in the area were sold. The bridge passed to his nephew, Michael Dicker Sanders, but he found it difficult to meet the costs of its upkeep. A report on the condition of the bridge in 1778 suggested that decay in the wooden frame made it unsuitable for use, and it was dismantled in 1783 to make way for a stone-clad brickwork bridge which was completed in 1788 and eventually collapsed in 1859 (71 years).',
                "artist_id" =>10,
                "start_price"=>6700,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-01',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>28,
                "name" =>"Thania Petersen Art",
                "size_id" =>4,
                "image" => "1644984391-Thania Petersen.jpg",
                "description" => 'Tanne Manne revises the way we see things, putting into question fictitious meaning and false cultures imposed onto groups of people by other groups of people. Often understood through othering lenses, Petersen uses cultural tropes like the ‘passion gap’ (gap-toothed smiles) situating her work within the context of the Cape Flats in Cape Town and its Cape-Malay community, while memorialising narratives of slave liberation when fleeing slaves would pull out their branded front teeth. Her work looks at food as activism and reciprocal cultural memory. She includes the ‘hertzoggie’ and ‘tweegevreetjie’ cookies in her composition in reference to the 1920s when the ‘‘Cape Malay’’ community was misled by a white politician, General Hertzog, in favour of their votes. The ‘Cape Malay’ community celebrated his election victory by gifting him the ‘hertzoggie’, while his later racist deceit is commemorated through ‘tweegevreetjie’ (two-faced) cookie',
                "artist_id" =>8,
                "start_price"=>1300,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>29,
                "name" =>"Felrath Hines Artwork",
                "size_id" =>6,
                "image" => "1644983612-Felrath Hines Artwork.jpg",
                "description" => 'Art is a diverse range of human activity, and resulting product, that involves creative or imaginative talent expressive of technical proficiency, beauty, emotional power, or conceptual ideas.
                There is no generally agreed definition of what constitutes art, and ideas have changed over time. The three classical branches of visual art are painting, sculpture, and architecture. Theatre, dance, and other performing arts, as well as literature, music, film and other media such as interactive media, are included in a broader definition of the arts. Until the 17th century, art referred to any skill or mastery and was not differentiated from crafts or sciences. In modern usage after the 17th century, where aesthetic considerations are paramount, the fine arts are separated and distinguished from acquired skills in general, such as the decorative or applied arts.
                The nature of art and related concepts, such as creativity and interpretation, are explored in a branch of philosophy known as aesthetics. The resulting artworks are studied in the professional fields of art criticism and the history of art.',
                "artist_id" =>3,
                "start_price"=>2400,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>30,
                "name" =>"Sam Middleton Art",
                "size_id" =>8,
                "image" => "1644984047-Sam Middleton Art.jpg",
                "description" => 'Middleton moved to the Netherlands as part of a wave of African American artists, along with Deborah Simon, Sherard Van Dyke and Lorina Harris. He remained in Europe to escape racism and lack of opportunity for African Americans in the United States, but was uninvolved with the civil rights movement. Because of his expatriate status, and the fact that his artwork wasn’t focused on his race, Middleton’s paintings are largely absent from African American art collections in the United States. He did, however, become a figure in the Dutch art community, and opened his doors to other African American artists who came to the Netherlands, helping them gain traction in Europe. Middleton was able to display exhibitions of his artwork in a prominent Dutch art gallery, an opportunity that was limited to very few Black artists in America. He lived in Amsterdam for many years but, fascinated by the landscape, settled in Oterleek and Schagen in North Holland in 1973. Music, (both classical and jazz) and the landscape of North Holland, created the climate of his abstract expressionist work. Middleton’s style evolved to reflect newfound inspirations, like the expansive tulip fields of the country. His paintings became fuller and softer, while maintaining their distinct jazz connections.
                Middleton taught at Atelier \'63 in Haarlem and the Royal Academy of Art in ‘s Hertogenbosch, jobs that provided enough income to fuel his artistic career. He married twice, had three sons, one daughter and eight grandchildren, one great.',
                "artist_id" =>12,
                "start_price"=>3200,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-02',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>31,
                "name" =>"Henry Mzili Mujunga Art",
                "size_id" =>5,
                "image" => "1644984734-Henry Mzili Mujunga.jpg",
                "description" => 'Henry Mujunga ‘Mzili’ (b. 1971, Uganda) is an artist whose works reference his immediate environment. Fascinated by mundane human scenes and by the delicacy of plants and flowers he establishes intimate connection with his subjects. Family is currently one of the most common motifs in his paintings, where he creates scenarios of heroism – the intimate and every-day kind of heroism which brings to light human strength and empathy.
                Red Blanket and Devine is a contemplation of our present in relation to the past. It shows a woman joyfully playing a West African talking drum as she is lying down on a blanket. An ancestral sculpture to the left of the figure represents the past; a mask/net covering her face represents the present. The figure can be interpreted as the medium playing the talking drum as a means to communicate between the past and the present.',
                "artist_id" =>13,
                "start_price"=>2200,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>32,
                "name" =>"Frances Goodman Art",
                "size_id" =>5,
                "image" => "1644984974-Frances Goodman Art.jpg",
                "description" => "Frances Goodman (b. 1975, South Africa) is an artist whose practice considers the materials and labour of the beauty industry. Goodman deftly deploys fake nails, false eyelashes, among many other items found in the beauty isle, to create works that are simultaneously seductive and appalling. The repetitive and meticulous gestures used to make her works mimic the repetitive and meticulous labours of nail salons and beauty maintenance regimes. By employing these materials and efforts Goodman's work draws attention to popular culture definitions that narrow the possibilities of female identity to extremes of consumption, aspiration, obsession, desire and anxiety.
                Metallic Magnificence makes use of individual artificial fingernails, which individually are rigid, temporary, and dispensable objects. But, when combined, the Goodman conjures organic, seemingly living forms that defy their inanimate composition. While they appear sumptuous and seductive, the sheer variety of bright colours and ouroboros-like shapes result in an appearance that is somewhat frightening – these works possess a definite venomous quality, their shapes and shades confronting the viewer like a vivid warning sign. Despite being an extension of the quintessentially attractive female body, nails can scratch and draw blood, especially during the throes of passion (or death).",
                "artist_id" =>10,
                "start_price"=>1350,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>33,
                "name" =>"Zohra Opoku Art",
                "size_id" =>4,
                "image" => "1644985177-Zohra Opoku Art.jpg",
                "description" => "Zohra Opoku (b.1976, Germany) is an artist whose practice is centred around the rich cultures of textiles and design which are mobilised through her practice photography, sculpture and installation. She conceptualizes West African traditions, spirituality, the thread of family lineage as they relate to self-authorship and the politics of her hybrid identity. A globalized social consumption and the commodification of all things African are a driving force in what she sees.
                 The Myths of Eternal Life, Opoku’s latest body of work, is an exercise that seeks to be both healing and transformative. The series explores the afterlife, particularly inspired by the Egyptian papyrus Book Of The Dead, a guidebook for the journey beyond this world and existence. Silkscreened collage imagery of tree branches represent impressions of being, connecting plants and body parts to become one. The work moves through cycles of light and darkness, alongside gods who reside within them. Beside depicting images of her dreams, the shadows represent the border between the denial and acceptance. This series is a celestial exploration from the origin of Africa, that delves into the unknown of life and death - specifically in pursuit of healing where the fragments of body symbolize metaphors for the human spirit.",
                "artist_id" =>2,
                "start_price"=>2450,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>34,
                "name" =>"René Tavares Art",
                "size_id" =>7,
                "image" => "1644985398-René Tavares Art.jpg",
                "description" => 'Pop art is an art movement that emerged in the United Kingdom and the United States during the mid- to late-1950s. The movement presented a challenge to traditions of fine art by including imagery from popular and mass culture, such as advertising, comic books and mundane mass-produced objects. One of its aims is to use images of popular (as opposed to elitist) culture in art, emphasizing the banal or kitschy elements of any culture, most often through the use of irony. It is also associated with the artists\' use of mechanical means of reproduction or rendering techniques. In pop art, material is sometimes visually removed from its known context, isolated, or combined with unrelated material.
                Amongst the early artists that shaped the pop art movement were Eduardo Paolozzi and Richard Hamilton in Britain, and Larry Rivers, Ray Johnson. Robert Rauschenberg and Jasper Johns among others in the United States. Pop art is widely interpreted as a reaction to the then-dominant ideas of abstract expressionism, as well as an expansion of those ideas. Due to its utilization of found objects and images, it is similar to Dada. Pop art and minimalism are considered to be art movements that precede postmodern art, or are some of the earliest examples of postmodern art themselves.
                Pop art often takes imagery that is currently in use in advertising. Product labeling and logos figure prominently in the imagery chosen by pop artists, seen in the labels of Campbell\'s Soup Cans, by Andy Warhol. Even the labeling on the outside of a shipping box containing food items for retail has been used as subject matter in pop art, as demonstrated by Warhol\'s Campbell\'s Tomato Juice Box, 1964 (pictured)',
                "artist_id" =>13,
                "start_price"=>5500,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-01',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>35,
                "name" =>"Hussein Salim Art",
                "size_id" =>6,
                "image" => "1644985639-Hussein Salim Art.jpg",
                "description" => 'Pop art is an art movement that emerged in the United Kingdom and the United States during the mid- to late-1950s. The movement presented a challenge to traditions of fine art by including imagery from popular and mass culture, such as advertising, comic books and mundane mass-produced objects. One of its aims is to use images of popular (as opposed to elitist) culture in art, emphasizing the banal or kitschy elements of any culture, most often through the use of irony. It is also associated with the artists\' use of mechanical means of reproduction or rendering techniques. In pop art, material is sometimes visually removed from its known context, isolated, or combined with unrelated material.
                Amongst the early artists that shaped the pop art movement were Eduardo Paolozzi and Richard Hamilton in Britain, and Larry Rivers, Ray Johnson. Robert Rauschenberg and Jasper Johns among others in the United States. Pop art is widely interpreted as a reaction to the then-dominant ideas of abstract expressionism, as well as an expansion of those ideas. Due to its utilization of found objects and images, it is similar to Dada. Pop art and minimalism are considered to be art movements that precede postmodern art, or are some of the earliest examples of postmodern art themselves.
                Pop art often takes imagery that is currently in use in advertising. Product labeling and logos figure prominently in the imagery chosen by pop artists, seen in the labels of Campbell\'s Soup Cans, by Andy Warhol. Even the labeling on the outside of a shipping box containing food items for retail has been used as subject matter in pop art, as demonstrated by Warhol\'s Campbell\'s Tomato Juice Box, 1964 (pictured)',
                "artist_id" =>5,
                "start_price"=>1100,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-26',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],

            [
                "id"   =>36,
                "name" =>"Ashley Walters Art",
                "size_id" =>6,
                "image" => "1644986260-Ashley Walters Art.jpg",
                "description" => 'On the face of it, the phrase should have a fairly simple meaning - something like: "art made by the common people, notably from rural areas." Except the phrase implies a degree of cultural insularity, which - thanks to the explosion of mass-market culture - has more or less disappeared. To complicate matters further, the general nostalgia for traditional artifacts has led to the emergence of a growing crafts industry, as any search of the Internet - for terms such as "folk art designs", "folk art decorations", "folk art paintings" or "folk crafts" - will reveal. These folk products are typically manufactured in local, decidedly unfolkish urban centres, or in Third World sweatshops - neither operation having an intimate connection with the sort of historical traditions that typically characterize authentic folk arts.
                During the 19th century, it was the Industrial Revolution that undermined "folk art"; in the 20th century it was mass-produced culture - everything from sodas and denin jeans, to TV programs; in the 21st century it is computers, the Internet and globalization. In general, therefore, "folk art" is a dying activity, and now survives only in isolated areas whose inhabitants have a proud tradition of handicrafts and making things for themselves.',
                "artist_id" =>13,
                "start_price"=>3300,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>37,
                "name_id" =>"Tranh Dong Ho Thanh Giong",
                "size_id" =>7,
                "image" => "1644986709-Tranh Dong Ho Thanh Giong.jpg",
                "description" => '“Thanh Giong” - “Thanh Giong AR” is an augmented reality book that not only tells the story of the hero Phu Dong Thien Vuong (Saint Giong) in ordinary images or text, but in each image, there\'s is a video with lively sound and color. The book contributes to encourage all readers to understand the value of the treasure of Vietnamese fairy tales and bring an interesting and engaging interactive experience.
                “Thanh Giong” is the first project of fairy tales illustration book using augmented reality technology in Vietnam, which is the beginning of a series of Vietnamese fairy tales using augmented reality technology.',
                "artist_id" =>11,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-20',
                "date_end"=>'2022-03-04',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>38,
                "name" =>"Tranh Dong Ho Rong",
                "size_id" =>10,
                "image" => "1644986881-Tranh Dong Ho Rong.jpg",
                "description" => 'Because Đông Hồ paintings are mainly bought and displayed on the occasion of Tết (Lunar New Year celebration), contents are often humorous and optimistic with bright and powerful colours such as red, yellow, and white. The most popular and best-selling paintings are Lợn đàn, Gà đàn, and Chăn trâu thổi sáo, which represent the wish for prosperity, happiness and luck in the New Year. Together with the illustration, a Đông Hồ painting also has some Hán tự to literally describe the meaning. Sometimes, Đông Hồ paintings are shown in couplet or quartet to fully express the signification of the set, for example, the Vinh Hoa (eminence) and the Phú quý (prosperity and honour) should be taken in a couple. In addition, Đông Hồ paintings are a medium to express the social concern of craftsmen through subtle social, political, and cultural criticism. For example, before World War I, Đông Hồ villagers produced a set of four prints entitled Văn Minh tiến bộ (The Progress of Civilization) in which the Westernization of the Vietnamese society was delicately criticized through the satirical portrayal of contemporary Vietnamese people dressing and behaving like French people.[5] Some Đông Hồ paintings became famous for their interesting themes like the picture Đám cưới chuột (Rat\'s wedding) which features a wedding march of rats with the rat bride and groom and other rat guests delivering gifts to a big cat in hope that the cat will leave the happy couple alone.',
                "artist_id" =>2,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-21',
                "date_end"=>'2022-03-04',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>39,
                "name" =>"Tranh Dong Ho Thanh Ga",
                "size_id" =>7,
                "image" => "1644987016-Tranh Dong Ho Thanh Ga.jpg",
                "description" => 'Because Đông Hồ paintings are mainly bought and displayed on the occasion of Tết (Lunar New Year celebration), contents are often humorous and optimistic with bright and powerful colours such as red, yellow, and white. The most popular and best-selling paintings are Lợn đàn, Gà đàn, and Chăn trâu thổi sáo, which represent the wish for prosperity, happiness and luck in the New Year. Together with the illustration, a Đông Hồ painting also has some Hán tự to literally describe the meaning. Sometimes, Đông Hồ paintings are shown in couplet or quartet to fully express the signification of the set, for example, the Vinh Hoa (eminence) and the Phú quý (prosperity and honour) should be taken in a couple. In addition, Đông Hồ paintings are a medium to express the social concern of craftsmen through subtle social, political, and cultural criticism. For example, before World War I, Đông Hồ villagers produced a set of four prints entitled Văn Minh tiến bộ (The Progress of Civilization) in which the Westernization of the Vietnamese society was delicately criticized through the satirical portrayal of contemporary Vietnamese people dressing and behaving like French people.[5] Some Đông Hồ paintings became famous for their interesting themes like the picture Đám cưới chuột (Rat\'s wedding) which features a wedding march of rats with the rat bride and groom and other rat guests delivering gifts to a big cat in hope that the cat will leave the happy couple alone.',
                "artist_id" =>11,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-21',
                "date_end"=>'2022-03-08',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>40,
                "name" =>"European Downtown Art",
                "size_id" =>5,
                "image" => "1644987213-European Downtown.jpg",
                "description" => 'The art of Ethiopia, with a long Christian tradition, is also different from that of most of Africa, where traditional African religion (with Islam in the north) was dominant until the 20th century. African art includes prehistoric and ancient art, Islamic art of West Africa, the Christian art of East Africa, and the traditional artifacts of these and other regions. Much African sculpture was historically in wood and other natural materials that have not survived from earlier than a few centuries ago, although rare older pottery and metal figures can be found from a number of areas. Some of the earliest decorative objects, such as shell beads and evidence of paint, have been discovered in Africa, dating to the Middle Stone Age. Masks are important elements in the art of many peoples, along with human figures, and are often highly stylized. There is a vast variety of styles, often varying within the same context of origin and depending on the use of the object, but wide regional trends are apparent; sculpture is most common among "groups of settled cultivators in the areas drained by the Niger and Congo rivers" in West Africa. Direct images of deities are relatively infrequent, but masks in particular are or were often made for ritual ceremonies. Since the late 19th century there has been an increasing amount of African art in Western collections, the finest pieces of which are displayed as part of the history of colonization.',
                "artist_id" =>6,
                "start_price"=>9900,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-02',
                "status_id"=>1 ,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>41,
                "name" =>"Franz Marc Art",
                "size_id" =>4,
                "image" => "1644988381-Franz Marc Art.jpg",
                "description" => 'African art has had an important influence on European Modernist art, which was inspired by their interest in abstract depiction. It was this appreciation of African sculpture that has been attributed to the very concept of "African art", as seen by European and American artists and art historians.
                West African cultures developed bronze casting for reliefs, like the famous Benin Bronzes, to decorate palaces and for highly naturalistic royal heads from around the Bini town of Benin City, Edo State, as well as in terracotta or metal, from the 12th–14th centuries. Akan goldweights are a form of small metal sculptures produced over the period 1400–1900; some apparently represent proverbs, contributing a narrative element rare in African sculpture; and royal regalia included impressive gold sculptured elements. Many West African figures are used in religious rituals and are often coated with materials placed on them for ceremonial offerings. The Mande-speaking peoples of the same region make pieces from wood with broad, flat surfaces and arms and legs shaped like cylinders. In Central Africa, however, the main distinguishing characteristics include heart-shaped faces that are curved inward and display patterns of circles and dots.',
                "artist_id" =>1,
                "start_price"=>2800,
                "current_price" =>0,
                "date_start" =>'2022-02-25',
                "date_end"=>'2022-03-08',
                "status_id"=>2 ,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>42,
                "name" =>"Marc Chagall Art",
                "size_id" =>3,
                "image" => "1644988595-Marc Chagall Art.jpg",
                "description" => 'Chinese art is visual art that, whether ancient or modern, originated in or is practiced in China or by Chinese artists. The Chinese art in the Republic of China (Taiwan) and that of overseas Chinese can also be considered part of Chinese art where it is based in or draws on Chinese heritage and Chinese culture. Early "Stone Age art" dates back to 10,000 BC, mostly consisting of simple pottery and sculptures. After this early period Chinese art, like Chinese history, is typically classified by the succession of ruling dynasties of Chinese emperors, most of which lasted several hundred years.
                Chinese art has arguably the oldest continuous tradition in the world, and is marked by an unusual degree of continuity within, and consciousness of, that tradition, lacking an equivalent to the Western collapse and gradual recovery of classical styles. The media that have usually been classified in the West since the Renaissance as the decorative arts are extremely important in Chinese art, and much of the finest work was produced in large workshops or factories by essentially unknown artists, especially in Chinese ceramics.',
                "artist_id" =>8,
                "start_price"=>4300,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-03-10',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>43,
                "name" =>"Katharina Grosse Art",
                "size_id" =>5,
                "image" => "1644988837-Katharina Grosse Art.jpg",
                "description" => 'Mention Vincent van Gogh (Dutch, 1853–1890) and one of the first things likely to come to many people’s minds is the fact that he cut off his own ear. This stark act, committed in 1888, marked the beginning of the depression that would plague him until the end of his life. But to know van Gogh is to get past the caricature of the tortured, misunderstood artist and to become acquainted instead with the hardworking, deeply religious, and difficult man. Van Gogh found his place in art and produced emotional, visually arresting paintings over the course of a career that lasted only a decade.
                Largely self-taught, van Gogh produced more than 2,000 oil paintings, watercolors, drawings, and sketches, which became in demand only after his death. He also wrote scores of letters, especially to his brother Theo, in which he worked out his thoughts about art. “Always continue walking a lot and loving nature, for that’s the real way to learn to understand art better and better,” he wrote in 1874. “Painters understand nature and love it, and teach us to see.”1
                It was nature, and the people living closely to it, that first stirred van Gogh’s artistic inclinations. In this he was not alone. Landscapes remained a popular subject in late-nineteenth-century art. Driven in part by their dissatisfaction with the modern city, many artists sought out places resembling earthly paradises, where they could observe nature firsthand, feeding its psychological and spiritual resonances into their work. Van Gogh was particularly taken with the peasants he saw working the countryside; his early compositions featured portraits of Dutch peasants and rural landscapes, rendered in dark, moody tones.',
                "artist_id" =>6,
                "start_price"=>4600,
                "current_price" =>0,
                "date_start" =>'2022-02-27',
                "date_end"=>'2022-03-10',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>44,
                "name" =>"The Starry Night",
                "size_id" =>7,
                "image" => "1644989161-The Starry Night.jpg",
                "description" => 'The oil-on-canvas painting is dominated by a night sky roiling with chromatic blue swirls, a glowing yellow crescent moon, and stars rendered as radiating orbs. One or two cypress trees, often described as flame-like, tower over the foreground to the left, their dark branches curling and swaying to the movement of the sky that they partly obscure. Amid all this animation, a structured village sits in the distance on the lower right of the canvas. Straight controlled lines make up the small cottages and the slender steeple of a church, which rises as a beacon against rolling blue hills. The glowing yellow squares of the houses suggest the welcoming lights of peaceful homes, creating a calm corner amid the painting’s turbulence.
                While at the asylum, he painted during bursts of productivity that alternated with moods of despair. As an artist who preferred working from observation, van Gogh was limited to the subjects that surrounded him—his own likeness, views outside his studio window, and the surrounding countryside that he could visit with a chaperone.',
                "artist_id" =>6,
                "start_price"=>10000,
                "current_price" =>0,
                "date_start" =>'2022-02-18',
                "date_end"=>'2022-03-02',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>45,
                "name" =>"Tiger Face Art",
                "size_id" =>8,
                "image" => "1644989338-Tiger Face Art.jpg",
                "description" => 'As Deleuze and Guattari wrote, “art is continually haunted by the animal”. The desire to assign symbolism to animals sharing our world connects human cultures across time. Ever since humans first started drawing on cave walls, the animal world served as an endless source of fascination. Whether artists have used them literally or figuratively, with or without human subjects, depictions of animals in art remind us not only of themselves, but also of the qualities and traits we assign to them. Animals have been represented in a variety of ways, as symbols, teachers of moral lessons, aesthetic and scientific muses, talking creatures, or companions. Commanding the composition and constructing meanings, they have served as vessels for happiness, distress, environmental issues, gender roles, and more. From first cave drawings to later decorational, symbolical or allegorical representations, the portrayal of animals in visual arts reveals a lot about our times and the relationship between our two worlds colliding.',
                "artist_id" =>9,
                "start_price"=>1000,
                "current_price" =>0,
                "date_start" =>'2022-02-23',
                "date_end"=>'2022-03-05',
                "status_id"=>2,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>46,
                "name" =>"Virginia Chihota Art",
                "size_id" =>9,
                "image" => "1644989507-Virginia Chihota Art.jpg",
                "description" => 'The very first flower ever to be represented in the arts may be the lotus flower. Ancient Egyptians adorned amulets, ceramics and papyrus paintings with the lotus flower, which to them symbolized the sun, according to My Modern Met. A contributor wrote,
                “In addition to ornamental decorations, Egyptians also employed flowers as an artistic medium. In King Tutankhamun’s tomb, for example, multiple collar necklaces made of dyed linen and cut blossoms—including sunflowers, cornflowers, poppies, and blue lotuses—were found among his many trinkets and treasures.”
                The idea of representing flowers in the arts may have started in ancient Egypt, but it certainly didn’t end there. Flowers were also widely represented in art pieces created in the major periods of art history.',
                "artist_id" =>2,
                "start_price"=>1200,
                "current_price" =>0,
                "date_start" =>'2022-02-20',
                "date_end"=>'2022-02-28',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>47,
                "name" =>"Sakamoto Portrait Art",
                "size_id" =>3,
                "image" => "1644989776-Sakamoto Portrait Art.jpg",
                "description" => 'The Art of the United Kingdom refers to all forms of visual art in or associated with the United Kingdom since the formation of the Kingdom of Great Britain in 1707 and encompasses English art, Scottish art, Welsh art and Irish art, and forms part of Western art history. During the 18th century, Britain began to reclaim the leading place England had previously played in European art during the Middle Ages, being especially strong in portraiture and landscape art.
                Increased British prosperity at the time led to a greatly increased production of both fine art and the decorative arts, the latter often being exported. The Romantic period resulted from very diverse talents, including the painters William Blake, J. M. W. Turner, John Constable and Samuel Palmer. The Victorian period saw a great diversity of art, and a far bigger quantity created than before. Much Victorian art is now out of critical favour, with interest concentrated on the Pre-Raphaelites and the innovative movements at the end of the 18th century.
                The training of artists, which had long been neglected, began to improve in the 18th century through private and government initiatives, and greatly expanded in the 19th century. Public exhibitions and the later opening of museums brought art to a wider public, especially in London. In the 19th century publicly displayed religious art once again became popular after a virtual absence since the Reformation, and, as in other countries, movements such as the Pre-Raphaelite Brotherhood and the Glasgow School contended with established Academic art.',
                "artist_id" =>10,
                "start_price"=>4400,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-03-03',
                "status_id"=>1,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>48,
                "name" =>"Jacqueline Humphries",
                "size_id" =>4,
                "image" => "1644989939-Jacqueline Humphries.jpg",
                "description" => 'The Art of the United Kingdom refers to all forms of visual art in or associated with the United Kingdom since the formation of the Kingdom of Great Britain in 1707 and encompasses English art, Scottish art, Welsh art and Irish art, and forms part of Western art history. During the 18th century, Britain began to reclaim the leading place England had previously played in European art during the Middle Ages, being especially strong in portraiture and landscape art.
                Increased British prosperity at the time led to a greatly increased production of both fine art and the decorative arts, the latter often being exported. The Romantic period resulted from very diverse talents, including the painters William Blake, J. M. W. Turner, John Constable and Samuel Palmer. The Victorian period saw a great diversity of art, and a far bigger quantity created than before. Much Victorian art is now out of critical favour, with interest concentrated on the Pre-Raphaelites and the innovative movements at the end of the 18th century.
                The training of artists, which had long been neglected, began to improve in the 18th century through private and government initiatives, and greatly expanded in the 19th century. Public exhibitions and the later opening of museums brought art to a wider public, especially in London. In the 19th century publicly displayed religious art once again became popular after a virtual absence since the Reformation, and, as in other countries, movements such as the Pre-Raphaelite Brotherhood and the Glasgow School contended with established Academic art.',
                "artist_id" =>4,
                "start_price"=>1000,
                "current_price" =>0,
                "date_start" =>'2022-02-15',
                "date_end"=>'2022-02-23',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>49,
                "name" =>"Hedda Sterne",
                "size_id" =>6,
                "image" => "1644990064-Hedda Sterne.jpg",
                "description" => 'The Art of the United Kingdom refers to all forms of visual art in or associated with the United Kingdom since the formation of the Kingdom of Great Britain in 1707 and encompasses English art, Scottish art, Welsh art and Irish art, and forms part of Western art history. During the 18th century, Britain began to reclaim the leading place England had previously played in European art during the Middle Ages, being especially strong in portraiture and landscape art.
                Increased British prosperity at the time led to a greatly increased production of both fine art and the decorative arts, the latter often being exported. The Romantic period resulted from very diverse talents, including the painters William Blake, J. M. W. Turner, John Constable and Samuel Palmer. The Victorian period saw a great diversity of art, and a far bigger quantity created than before. Much Victorian art is now out of critical favour, with interest concentrated on the Pre-Raphaelites and the innovative movements at the end of the 18th century.
                The training of artists, which had long been neglected, began to improve in the 18th century through private and government initiatives, and greatly expanded in the 19th century. Public exhibitions and the later opening of museums brought art to a wider public, especially in London. In the 19th century publicly displayed religious art once again became popular after a virtual absence since the Reformation, and, as in other countries, movements such as the Pre-Raphaelite Brotherhood and the Glasgow School contended with established Academic art.',
                "artist_id" =>8,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-12',
                "date_end"=>'2022-02-21',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>50,
                "name" =>"Alma Thomas Art",
                "size_id" =>10,
                "image" => "1644990313-Alma Thomas Art.jpg",
                "description" => 'The Art of the United Kingdom refers to all forms of visual art in or associated with the United Kingdom since the formation of the Kingdom of Great Britain in 1707 and encompasses English art, Scottish art, Welsh art and Irish art, and forms part of Western art history. During the 18th century, Britain began to reclaim the leading place England had previously played in European art during the Middle Ages, being especially strong in portraiture and landscape art.
                Increased British prosperity at the time led to a greatly increased production of both fine art and the decorative arts, the latter often being exported. The Romantic period resulted from very diverse talents, including the painters William Blake, J. M. W. Turner, John Constable and Samuel Palmer. The Victorian period saw a great diversity of art, and a far bigger quantity created than before. Much Victorian art is now out of critical favour, with interest concentrated on the Pre-Raphaelites and the innovative movements at the end of the 18th century.
                The training of artists, which had long been neglected, began to improve in the 18th century through private and government initiatives, and greatly expanded in the 19th century. Public exhibitions and the later opening of museums brought art to a wider public, especially in London. In the 19th century publicly displayed religious art once again became popular after a virtual absence since the Reformation, and, as in other countries, movements such as the Pre-Raphaelite Brotherhood and the Glasgow School contended with established Academic art.',
                "artist_id" =>9,
                "start_price"=>2000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-22',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
            [
                "id"   =>51,
                "name" =>"Large Reclining Figure",
                "size_id" =>8,
                "image" => "1644990462-Large Reclining Figure.jpg",
                "description" => 'The Art of the United Kingdom refers to all forms of visual art in or associated with the United Kingdom since the formation of the Kingdom of Great Britain in 1707 and encompasses English art, Scottish art, Welsh art and Irish art, and forms part of Western art history. During the 18th century, Britain began to reclaim the leading place England had previously played in European art during the Middle Ages, being especially strong in portraiture and landscape art.
                Increased British prosperity at the time led to a greatly increased production of both fine art and the decorative arts, the latter often being exported. The Romantic period resulted from very diverse talents, including the painters William Blake, J. M. W. Turner, John Constable and Samuel Palmer. The Victorian period saw a great diversity of art, and a far bigger quantity created than before. Much Victorian art is now out of critical favour, with interest concentrated on the Pre-Raphaelites and the innovative movements at the end of the 18th century.
                The training of artists, which had long been neglected, began to improve in the 18th century through private and government initiatives, and greatly expanded in the 19th century. Public exhibitions and the later opening of museums brought art to a wider public, especially in London. In the 19th century publicly displayed religious art once again became popular after a virtual absence since the Reformation, and, as in other countries, movements such as the Pre-Raphaelite Brotherhood and the Glasgow School contended with established Academic art.',
                "artist_id" =>5,
                "start_price"=>1000,
                "current_price" =>0,
                "date_start" =>'2022-02-17',
                "date_end"=>'2022-02-21',
                "status_id"=>3,
                "deleted_at" => NULL,
                "created_at"=>'2022-02-15 09:38:44',
                "updated_at"=>'2022-02-15 09:38:44'
            ],
        ]);
    }
}
