<?php


use Phinx\Seed\AbstractSeed;

class UserData extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                "name" 			=> "Fitzgerald Mcconnell",
                "cpf" 			=> "61625553785",
                "email" 		=> "massa.Vestibulum@metus.co.uk",
                "phone_number" 	=> "(07) 3713 7457",
                "created_at" 	=> "2020-01-30 11:04:35",
                "updated_at" 	=> "2020-04-05 15:20:40"
            ],
            [
                "name" 			=> "Igor Sheppard",
                "cpf" 			=> "93627206224",
                "email" 		=> "sagittis@placerataugue.org",
                "phone_number" 	=> "(03) 6603 4574",
                "created_at" 	=> "2019-12-07 19:15:04",
                "updated_at" 	=> "2020-06-24 03:12:41"
            ],  
            [   
                "name" 			=> "Clinton Sheppard",
                "cpf" 			=> "94768873527",
                "email" 		=> "Aenean.sed.pede@Phasellusat.net",
                "phone_number" 	=> "(01) 4098 2239",
                "created_at" 	=> "2019-09-17 13:30:18",
                "updated_at" 	=> "2019-09-20 11:55:29"
            ],  
            [   
                "name" 			=> "Lunea Mccarty",
                "cpf" 			=> "86132820624",
                "email" 		=> "facilisis@sitamet.org",
                "phone_number" 	=> "(05) 5414 3055",
                "created_at" 	=> "2019-10-23 09:42:55",
                "updated_at" 	=> "2020-02-16 15:22:45"
            ],  
            [   
                "name" 			=> "Stone Solis",
                "cpf" 			=> "79712814216",
                "email" 		=> "In@ornarelectus.net",
                "phone_number" 	=> "(04) 7694 6278",
                "created_at" 	=> "2020-05-19 09:51:25",
                "updated_at" 	=> "2020-04-27 19:00:59"
            ],  
            [   
                "name" 			=> "Eric Perry",
                "cpf" 			=> "92166023029",
                "email" 		=> "ut.pellentesque.eget@Nunc.co.uk",
                "phone_number" 	=> "(09) 8038 0022",
                "created_at" 	=> "2020-03-25 00:46:25",
                "updated_at" 	=> "2019-11-13 21:53:44"
            ],  
            [   
                "name" 			=> "Omar Buchanan",
                "cpf" 			=> "36144595233",
                "email" 		=> "at.velit.Cras@ornareFusce.net",
                "phone_number" 	=> "(06) 4196 9674",
                "created_at" 	=> "2019-09-27 05:17:00",
                "updated_at" 	=> "2020-04-30 23:50:00"
            ],  
            [   
                "name" 			=> "Eagan Rivera",
                "cpf" 			=> "29742562988",
                "email" 		=> "vel.arcu@diamdictumsapien.ca",
                "phone_number" 	=> "(05) 6502 3047",
                "created_at" 	=> "2020-07-20 14:48:22",
                "updated_at" 	=> "2020-06-19 07:54:01"
            ],  
            [   
                "name" 			=> "Honorato Decker",
                "cpf" 			=> "56621427491",
                "email" 		=> "nunc.ullamcorper.eu@Nunclaoreetlectus.org",
                "phone_number" 	=> "(05) 0394 1077",
                "created_at" 	=> "2020-07-10 22:11:22",
                "updated_at" 	=> "2019-11-21 03:59:10"
            ],  
            [   
                "name" 			=> "Phillip Espinoza",
                "cpf" 			=> "81968400350",
                "email" 		=> "vitae.posuere.at@amet.ca",
                "phone_number" 	=> "(07) 5130 7471",
                "created_at" 	=> "2020-03-30 10:02:02",
                "updated_at" 	=> "2020-01-25 21:57:58"
            ],  
            [   
                "name" 			=> "Rahim Everett",
                "cpf" 			=> "59118065317",
                "email" 		=> "Duis.dignissim.tempor@etmagnis.net",
                "phone_number" 	=> "(01) 1268 3213",
                "created_at" 	=> "2020-05-03 08:39:51",
                "updated_at" 	=> "2020-08-17 20:32:01"
            ],  
            [   
                "name" 			=> "Devin Pittman",
                "cpf" 			=> "50842291109",
                "email" 		=> "consectetuer@diamDuismi.org",
                "phone_number" 	=> "(01) 8189 1449",
                "created_at" 	=> "2019-09-30 17:02:44",
                "updated_at" 	=> "2020-01-21 14:19:59"
            ],  
            [   
                "name" 			=> "Keely Ray",
                "cpf" 			=> "36847592783",
                "email" 		=> "Aenean.eget@metus.co.uk",
                "phone_number" 	=> "(01) 8022 1216",
                "created_at" 	=> "2020-03-05 19:29:01",
                "updated_at" 	=> "2020-01-18 08:39:18"
            ],  
            [   
                "name" 			=> "Conan Odonnell",
                "cpf" 			=> "40506156133",
                "email" 		=> "Nunc@sit.co.uk",
                "phone_number" 	=> "(01) 5247 3517",
                "created_at" 	=> "2019-09-11 00:22:34",
                "updated_at" 	=> "2020-03-28 02:46:09"
            ],  
            [   
                "name" 			=> "Teagan Walsh",
                "cpf" 			=> "36995826760",
                "email" 		=> "vulputate.velit@lobortisrisusIn.net",
                "phone_number" 	=> "(01) 0528 8628",
                "created_at" 	=> "2019-09-18 05:40:28",
                "updated_at" 	=> "2020-01-04 09:04:23"
            ],  
            [   
                "name" 			=> "Quin Santiago",
                "cpf" 			=> "62752223694",
                "email" 		=> "egestas.lacinia.Sed@QuisquevariusNam.edu",
                "phone_number" 	=> "(04) 7963 4294",
                "created_at" 	=> "2019-11-04 14:11:31",
                "updated_at" 	=> "2020-04-17 18:27:37"
            ],  
            [   
                "name" 			=> "Patience Owens",
                "cpf" 			=> "33489749059",
                "email" 		=> "libero.Integer@tempusmauriserat.com",
                "phone_number" 	=> "(09) 4892 8563",
                "created_at" 	=> "2019-09-19 02:27:05",
                "updated_at" 	=> "2020-04-04 01:56:44"
            ],   
            [    
                "name" 			=> "Ori Lang",
                "cpf" 			=> "80797662435",
                "email" 		=> "vitae.posuere@imperdietdictum.net",
                "phone_number" 	=> "(08) 8526 1908",
                "created_at" 	=> "2020-03-12 07:40:11",
                "updated_at" 	=> "2020-02-27 01:07:35"
            ],  
            [   
                "name" 			=> "Randall Johnson",
                "cpf" 			=> "26665550019",
                "email" 		=> "tortor@nibh.net",
                "phone_number" 	=> "(07) 9293 8140",
                "created_at" 	=> "2020-04-05 18:06:03",
                "updated_at" 	=> "2019-10-19 04:53:15"
            ],  
            [   
                "name" 			=> "Wesley Hull",
                "cpf" 			=> "35614205286",
                "email" 		=> "magna@bibendum.edu",
                "phone_number" 	=> "(06) 3878 6082",
                "created_at" 	=> "2020-06-29 14:37:30",
                "updated_at" 	=> "2020-01-13 11:54:47"
            ],  
            [   
                "name" 			=> "Orson Knox",
                "cpf" 			=> "29621392314",
                "email" 		=> "elementum@sagittis.ca",
                "phone_number" 	=> "(02) 3027 3379",
                "created_at" 	=> "2020-03-08 01:44:14",
                "updated_at" 	=> "2020-01-25 17:43:19"
            ],  
            [   
                "name" 			=> "Gay Acevedo",
                "cpf" 			=> "81926592210",
                "email" 		=> "ultrices.Duis@lectusconvallisest.co.uk",
                "phone_number" 	=> "(09) 0367 1746",
                "created_at" 	=> "2020-01-02 20:59:48",
                "updated_at" 	=> "2019-09-26 19:55:30"
            ],  
            [   
                "name" 			=> "Vivien Mcfadden",
                "cpf" 			=> "68236074155",
                "email" 		=> "Phasellus@atiaculis.net",
                "phone_number" 	=> "(02) 1508 7328",
                "created_at" 	=> "2020-07-03 17:09:46",
                "updated_at" 	=> "2020-02-21 08:12:44"
            ],  
            [   
                "name" 			=> "Zia Coleman",
                "cpf" 			=> "59237853588",
                "email" 		=> "a.odio@Duisvolutpatnunc.com",
                "phone_number" 	=> "(09) 7300 8405",
                "created_at" 	=> "2020-04-28 10:33:31",
                "updated_at" 	=> "2020-01-12 03:41:23"
            ],  
            [   
                "name" 			=> "Cyrus Fuentes",
                "cpf" 			=> "59572284570",
                "email" 		=> "Suspendisse.tristique@aliquam.com",
                "phone_number" 	=> "(01) 0886 1395",
                "created_at" 	=> "2020-08-29 12:11:00",
                "updated_at" 	=> "2020-02-27 00:30:44"
            ],  
            [   
                "name" 			=> "Barry Mercado",
                "cpf" 			=> "81540045105",
                "email" 		=> "Curabitur.ut.odio@egestaslacinia.co.uk",
                "phone_number" 	=> "(01) 4965 3092",
                "created_at" 	=> "2020-06-03 03:13:21",
                "updated_at" 	=> "2020-03-05 15:59:46"
            ],  
            [   
                "name" 			=> "Mufutau Burton",
                "cpf" 			=> "17670448302",
                "email" 		=> "sed.hendrerit.a@infaucibus.edu",
                "phone_number" 	=> "(02) 9833 6553",
                "created_at" 	=> "2020-04-02 19:22:00",
                "updated_at" 	=> "2020-08-29 16:44:08"
            ],  
            [   
                "name" 			=> "Piper Bradley",
                "cpf" 			=> "70063060521",
                "email" 		=> "sociis.natoque@elita.org",
                "phone_number" 	=> "(02) 0794 6477",
                "created_at" 	=> "2020-02-21 22:26:04",
                "updated_at" 	=> "2019-11-29 10:01:05"
            ],  
            [   
                "name" 			=> "Griffith Langley",
                "cpf" 			=> "54771693774",
                "email" 		=> "scelerisque@etpede.net",
                "phone_number" 	=> "(06) 4021 8108",
                "created_at" 	=> "2019-10-19 16:33:48",
                "updated_at" 	=> "2020-06-22 17:05:17"
            ],  
            [   
                "name" 			=> "Zena Blake",
                "cpf" 			=> "34381517024",
                "email" 		=> "dignissim.Maecenas@odio.org",
                "phone_number" 	=> "(09) 8874 7968",
                "created_at" 	=> "2020-07-23 15:49:32",
                "updated_at" 	=> "2020-05-30 08:29:34"
            ],  
            [   
                "name" 			=> "Dawn Holland",
                "cpf" 			=> "49575894098",
                "email" 		=> "erat.volutpat.Nulla@Etiam.com",
                "phone_number" 	=> "(05) 3102 9364",
                "created_at" 	=> "2020-07-12 06:41:58",
                "updated_at" 	=> "2019-09-10 23:40:23"
            ],  
            [   
                "name" 			=> "Elton Barrett",
                "cpf" 			=> "15223150253",
                "email" 		=> "interdum.Sed.auctor@mauris.net",
                "phone_number" 	=> "(09) 0741 2924",
                "created_at" 	=> "2020-07-05 15:43:50",
                "updated_at" 	=> "2020-01-11 14:11:55"
            ],   
            [    
                "name" 			=> "Bryar Rutledge",
                "cpf" 			=> "84566775918",
                "email" 		=> "Duis.sit.amet@pharetranibh.net",
                "phone_number" 	=> "(09) 1997 4002",
                "created_at" 	=> "2019-10-22 23:35:37",
                "updated_at" 	=> "2019-12-02 15:18:22"
            ],  
            [   
                "name" 			=> "Abra Bowers",
                "cpf" 			=> "57137800638",
                "email" 		=> "vitae@sagittis.net",
                "phone_number" 	=> "(01) 0897 1990",
                "created_at" 	=> "2020-07-09 08:13:01",
                "updated_at" 	=> "2019-09-12 15:31:05"
            ],  
            [   
                "name" 			=> "Macon Norris",
                "cpf" 			=> "12096224580",
                "email" 		=> "lobortis.mauris.Suspendisse@loremluctusut.edu",
                "phone_number" 	=> "(07) 6619 4735",
                "created_at" 	=> "2020-06-04 04:58:16",
                "updated_at" 	=> "2020-04-10 04:58:57"
            ],  
            [   
                "name" 			=> "Signe Cooley",
                "cpf" 			=> "58271834212",
                "email" 		=> "turpis.non@apurusDuis.ca",
                "phone_number" 	=> "(08) 7427 9607",
                "created_at" 	=> "2020-06-23 22:25:24",
                "updated_at" 	=> "2020-02-02 21:08:16"
            ],  
            [   
                "name" 			=> "Rowan Jarvis",
                "cpf" 			=> "59311212648",
                "email" 		=> "malesuada@sodalesatvelit.com",
                "phone_number" 	=> "(02) 2655 4700",
                "created_at" 	=> "2019-09-19 08:54:33",
                "updated_at" 	=> "2020-07-22 21:52:07"
            ],  
            [   
                "name" 			=> "Amber Charles",
                "cpf" 			=> "32821344854",
                "email" 		=> "justo@euismodmauriseu.edu",
                "phone_number" 	=> "(01) 3626 3446",
                "created_at" 	=> "2020-06-06 03:54:15",
                "updated_at" 	=> "2020-04-20 11:43:31"
            ],  
            [   
                "name" 			=> "Ulysses Bradshaw",
                "cpf" 			=> "27182156336",
                "email" 		=> "scelerisque@mauris.co.uk",
                "phone_number" 	=> "(06) 5433 7767",
                "created_at" 	=> "2019-12-11 08:22:56",
                "updated_at" 	=> "2019-12-29 20:08:55"
            ],  
            [   
                "name" 			=> "Lani Delacruz",
                "cpf" 			=> "85299425055",
                "email" 		=> "enim@velnislQuisque.co.uk",
                "phone_number" 	=> "(02) 8732 2830",
                "created_at" 	=> "2019-09-28 15:52:22",
                "updated_at" 	=> "2019-11-12 15:01:38"
            ],  
            [   
                "name" 			=> "Aileen Atkins",
                "cpf" 			=> "53555988969",
                "email" 		=> "in.consectetuer.ipsum@nasceturridiculusmus.net",
                "phone_number" 	=> "(08) 7969 3670",
                "created_at" 	=> "2020-04-06 08:32:19",
                "updated_at" 	=> "2020-08-28 00:50:18"
            ],  
            [   
                "name" 			=> "Vincent Curry",
                "cpf" 			=> "39349293549",
                "email" 		=> "tristique@atlacus.org",
                "phone_number" 	=> "(01) 0295 7451",
                "created_at" 	=> "2020-04-27 11:41:18",
                "updated_at" 	=> "2020-05-22 17:56:05"
            ],  
            [   
                "name" 			=> "Fay Schmidt",
                "cpf" 			=> "39736482194",
                "email" 		=> "faucibus@Namtempordiam.net",
                "phone_number" 	=> "(07) 0375 7484",
                "created_at" 	=> "2020-02-15 16:06:12",
                "updated_at" 	=> "2020-01-20 03:08:10"
            ],  
            [   
                "name" 			=> "Ruth Haney",
                "cpf" 			=> "93126915874",
                "email" 		=> "adipiscing@tellusfaucibus.com",
                "phone_number" 	=> "(07) 0242 0226",
                "created_at" 	=> "2020-01-23 06:00:25",
                "updated_at" 	=> "2020-08-08 05:21:41"
            ],  
            [   
                "name" 			=> "Michelle Vega",
                "cpf" 			=> "26165681584",
                "email" 		=> "mauris.ipsum.porta@at.ca",
                "phone_number" 	=> "(02) 5478 4909",
                "created_at" 	=> "2019-12-03 21:17:38",
                "updated_at" 	=> "2020-02-13 19:45:07"
            ],  
            [   
                "name" 			=> "Damian Robinson",
                "cpf" 			=> "43881659793",
                "email" 		=> "ac@scelerisque.com",
                "phone_number" 	=> "(07) 4233 6134",
                "created_at" 	=> "2020-07-25 19:13:49",
                "updated_at" 	=> "2020-06-27 21:20:32"
            ],  
            [   
                "name" 			=> "Zeus Chandler",
                "cpf" 			=> "46175738778",
                "email" 		=> "Cras.lorem.lorem@Aliquam.net",
                "phone_number" 	=> "(07) 0126 1941",
                "created_at" 	=> "2020-03-03 20:47:00",
                "updated_at" 	=> "2019-12-22 21:27:54"
            ],  
            [   
                "name" 			=> "Sierra Guy",
                "cpf" 			=> "72097043469",
                "email" 		=> "facilisis@disparturient.ca",
                "phone_number" 	=> "(03) 3803 9377",
                "created_at" 	=> "2019-12-21 09:33:24",
                "updated_at" 	=> "2020-01-29 00:23:13"
            ],  
            [   
                "name" 			=> "Kenneth Mathis",
                "cpf" 			=> "88991379699",
                "email" 		=> "vestibulum.Mauris@nullaCraseu.edu",
                "phone_number" 	=> "(09) 2135 3328",
                "created_at" 	=> "2020-02-14 18:25:14",
                "updated_at" 	=> "2020-01-20 00:43:21"
            ],  
            [   
                "name" 			=> "Emerson Bruce",
                "cpf" 			=> "44014349371",
                "email" 		=> "Fusce@neque.org",
                "phone_number" 	=> "(01) 5982 1059",
                "created_at" 	=> "2020-08-10 06:59:35",
                "updated_at" 	=> "2019-11-12 00:42:10"
            ],  
            [   
                "name" 			=> "Kasper Valentine",
                "cpf" 			=> "46994479688",
                "email" 		=> "scelerisque@penatibuset.com",
                "phone_number" 	=> "(07) 1851 8531",
                "created_at" 	=> "2020-08-25 11:46:49",
                "updated_at" 	=> "2020-02-05 21:04:16"
            ],  
            [   
                "name" 			=> "Celeste Trujillo",
                "cpf" 			=> "62945015672",
                "email" 		=> "eget.dictum@purus.com",
                "phone_number" 	=> "(05) 1774 2022",
                "created_at" 	=> "2020-04-18 02:03:00",
                "updated_at" 	=> "2020-05-03 12:52:23"
            ],  
            [   
                "name" 			=> "Christine Woodard",
                "cpf" 			=> "91070385063",
                "email" 		=> "at.libero.Morbi@libero.co.uk",
                "phone_number" 	=> "(08) 3565 0269",
                "created_at" 	=> "2020-08-01 19:16:29",
                "updated_at" 	=> "2020-06-07 13:09:40"
            ],  
            [   
                "name" 			=> "Forrest Conner",
                "cpf" 			=> "92386565180",
                "email" 		=> "nibh.enim.gravida@ipsumprimisin.co.uk",
                "phone_number" 	=> "(07) 5432 9677",
                "created_at" 	=> "2020-03-08 14:14:36",
                "updated_at" 	=> "2020-06-29 07:02:53"
            ],  
            [  
                "name" 			=> "Quintessa Taylor",
                "cpf" 			=> "32020616304",
                "email" 		=> "et.netus@maurissagittis.net",
                "phone_number" 	=> "(08) 8055 6754",
                "created_at" 	=> "2019-10-08 20:56:58",
                "updated_at" 	=> "2020-06-08 08:40:26"
            ],  
            [   
                "name" 			=> "Piper Wynn",
                "cpf" 			=> "98926900488",
                "email" 		=> "lectus@arcu.ca",
                "phone_number" 	=> "(08) 3439 7479",
                "created_at" 	=> "2020-05-22 03:51:16",
                "updated_at" 	=> "2020-07-17 21:30:28"
            ],  
            [   
                "name" 			=> "Shay Harrington",
                "cpf" 			=> "53406294326",
                "email" 		=> "gravida.sagittis.Duis@gravidamauris.com",
                "phone_number" 	=> "(02) 6937 3279",
                "created_at" 	=> "2020-03-04 18:33:14",
                "updated_at" 	=> "2020-06-06 00:52:02"
            ],  
            [   
                "name" 			=> "Connor Sheppard",
                "cpf" 			=> "65292396949",
                "email" 		=> "non@erosProinultrices.org",
                "phone_number" 	=> "(06) 4975 2816",
                "created_at" 	=> "2019-11-23 06:21:02",
                "updated_at" 	=> "2019-12-13 20:13:16"
            ],  
            [   
                "name" 			=> "Ira Pittman",
                "cpf" 			=> "82462611985",
                "email" 		=> "adipiscing.elit.Aliquam@interdumSed.edu",
                "phone_number" 	=> "(08) 5008 2221",
                "created_at" 	=> "2020-03-19 15:19:49",
                "updated_at" 	=> "2020-06-07 20:17:06"
            ],  
            [   
                "name" 			=> "Lydia Gilliam",
                "cpf" 			=> "85614135945",
                "email" 		=> "In.ornare@Sedauctorodio.org",
                "phone_number" 	=> "(05) 5119 9425",
                "created_at" 	=> "2020-06-16 22:22:33",
                "updated_at" 	=> "2019-12-23 13:01:15"
            ],  
            [   
                "name" 			=> "Slade Jordan",
                "cpf" 			=> "12415727771",
                "email" 		=> "amet.luctus@velarcueu.net",
                "phone_number" 	=> "(08) 8522 6330",
                "created_at" 	=> "2020-07-29 12:01:54",
                "updated_at" 	=> "2020-08-05 07:08:51"
            ],  
            [   
                "name" 			=> "Elaine Henry",
                "cpf" 			=> "69416225378",
                "email" 		=> "tortor@rutrum.net",
                "phone_number" 	=> "(06) 6346 1061",
                "created_at" 	=> "2020-07-19 12:56:32",
                "updated_at" 	=> "2020-08-19 20:28:48"
            ],  
            [   
                "name" 			=> "Isadora Higgins",
                "cpf" 			=> "23765586971",
                "email" 		=> "ac.fermentum@disparturient.co.uk",
                "phone_number" 	=> "(09) 6454 1849",
                "created_at" 	=> "2019-12-07 21:48:42",
                "updated_at" 	=> "2020-04-10 12:33:14"
            ],  
            [   
                "name" 			=> "Clark Reid",
                "cpf" 			=> "65175150920",
                "email" 		=> "egestas.a.dui@Cum.com",
                "phone_number" 	=> "(09) 8358 3932",
                "created_at" 	=> "2020-07-05 18:23:41",
                "updated_at" 	=> "2019-09-15 18:17:43"
            ],  
            [   
                "name" 			=> "Frances Whitley",
                "cpf" 			=> "65110563938",
                "email" 		=> "sociis.natoque.penatibus@ornareplaceratorci.ca",
                "phone_number" 	=> "(07) 8767 6348",
                "created_at" 	=> "2020-05-04 13:31:19",
                "updated_at" 	=> "2020-05-27 21:02:28"
            ],  
            [   
                "name" 			=> "Cadman Townsend",
                "cpf" 			=> "50021326805",
                "email" 		=> "lorem@ullamcorpervelit.com",
                "phone_number" 	=> "(04) 5550 5792",
                "created_at" 	=> "2020-06-08 22:44:17",
                "updated_at" 	=> "2020-01-31 08:15:41"
            ],  
            [   
                "name" 			=> "Dahlia Jennings",
                "cpf" 			=> "29393866110",
                "email" 		=> "nibh.vulputate.mauris@urnaNunc.co.uk",
                "phone_number" 	=> "(07) 4183 3724",
                "created_at" 	=> "2020-05-09 22:19:55",
                "updated_at" 	=> "2019-10-29 21:02:12"
            ],  
            [   
                "name" 			=> "Candice Blair",
                "cpf" 			=> "52002781408",
                "email" 		=> "sapien@ornareFuscemollis.co.uk",
                "phone_number" 	=> "(07) 5377 7294",
                "created_at" 	=> "2020-01-04 19:58:28",
                "updated_at" 	=> "2020-01-15 06:25:01"
            ],  
            [   
                "name" 			=> "Latifah Baxter",
                "cpf" 			=> "94054094794",
                "email" 		=> "ut@faucibusMorbi.org",
                "phone_number" 	=> "(09) 8424 5104",
                "created_at" 	=> "2020-08-23 23:51:58",
                "updated_at" 	=> "2020-06-04 18:01:19"
            ],  
            [   
                "name" 			=> "Emmanuel Delacruz",
                "cpf" 			=> "15978672025",
                "email" 		=> "facilisis.eget@arcuMorbi.net",
                "phone_number" 	=> "(08) 3905 1110",
                "created_at" 	=> "2020-07-12 18:47:08",
                "updated_at" 	=> "2020-03-29 00:47:12"
            ],  
            [   
                "name" 			=> "Ferris Noble",
                "cpf" 			=> "33615789197",
                "email" 		=> "eu.turpis@condimentum.com",
                "phone_number" 	=> "(01) 1243 2322",
                "created_at" 	=> "2020-01-25 00:24:26",
                "updated_at" 	=> "2019-11-21 17:34:43"
            ],  
            [   
                "name" 			=> "Nyssa Suarez",
                "cpf" 			=> "37432940863",
                "email" 		=> "Mauris@Donecluctusaliquet.co.uk",
                "phone_number" 	=> "(02) 1793 4852",
                "created_at" 	=> "2020-08-14 12:57:44",
                "updated_at" 	=> "2020-05-01 08:06:43"
            ],  
            [   
                "name" 			=> "Hannah Gordon",
                "cpf" 			=> "30606621871",
                "email" 		=> "vulputate@nequesedsem.net",
                "phone_number" 	=> "(06) 9535 2866",
                "created_at" 	=> "2020-06-08 13:47:58",
                "updated_at" 	=> "2020-01-19 15:12:26"
            ],  
            [   
                "name" 			=> "Zachary Dudley",
                "cpf" 			=> "46432332601",
                "email" 		=> "dignissim@Duisdignissimtempor.com",
                "phone_number" 	=> "(07) 2694 2630",
                "created_at" 	=> "2020-01-14 03:01:58",
                "updated_at" 	=> "2020-05-07 12:14:46"
            ],  
            [   
                "name" 			=> "Craig Silva",
                "cpf" 			=> "17998242164",
                "email" 		=> "quam.Curabitur@ametorci.net",
                "phone_number" 	=> "(05) 5884 5149",
                "created_at" 	=> "2020-02-10 20:20:34",
                "updated_at" 	=> "2019-09-06 15:43:54"
            ],  
            [   
                "name" 			=> "Jason Price",
                "cpf" 			=> "59711090145",
                "email" 		=> "turpis.In@Namtempor.com",
                "phone_number" 	=> "(05) 3586 8487",
                "created_at" 	=> "2020-07-15 07:10:06",
                "updated_at" 	=> "2020-02-14 11:29:19"
            ],  
            [   
                "name" 			=> "Miranda Rice",
                "cpf" 			=> "74985768979",
                "email" 		=> "ligula.elit@Aeneaneget.com",
                "phone_number" 	=> "(08) 7914 9390",
                "created_at" 	=> "2020-06-10 12:39:19",
                "updated_at" 	=> "2020-01-01 23:32:24"
            ],  
            [   
                "name" 			=> "Ava Harvey",
                "cpf" 			=> "71105001304",
                "email" 		=> "egestas.urna@PhasellusornareFusce.ca",
                "phone_number" 	=> "(01) 5500 1030",
                "created_at" 	=> "2019-10-30 00:19:31",
                "updated_at" 	=> "2020-04-28 22:44:25"
            ],  
            [   
                "name" 			=> "Ria Mcfadden",
                "cpf" 			=> "56585831578",
                "email" 		=> "placerat.eget.venenatis@Aliquamultrices.ca",
                "phone_number" 	=> "(08) 3918 7194",
                "created_at" 	=> "2020-07-18 17:15:53",
                "updated_at" 	=> "2020-05-28 01:33:49"
            ],  
            [   
                "name" 			=> "Connor Steele",
                "cpf" 			=> "50644492817",
                "email" 		=> "dis@lacusEtiam.ca",
                "phone_number" 	=> "(01) 2388 7414",
                "created_at" 	=> "2019-10-13 11:59:16",
                "updated_at" 	=> "2020-05-01 15:58:58"
            ],  
            [   
                "name" 			=> "Mia Dyer",
                "cpf" 			=> "77112178310",
                "email" 		=> "natoque.penatibus@sed.org",
                "phone_number" 	=> "(02) 4551 7656",
                "created_at" 	=> "2019-12-25 09:39:37",
                "updated_at" 	=> "2020-02-17 03:41:00"
            ],  
            [   
                "name" 			=> "Dieter Cole",
                "cpf" 			=> "53956335916",
                "email" 		=> "Sed@temporbibendumDonec.org",
                "phone_number" 	=> "(04) 9229 1714",
                "created_at" 	=> "2020-02-12 03:00:01",
                "updated_at" 	=> "2020-08-09 10:41:49"
            ],  
            [   
                "name" 			=> "Elmo Morse",
                "cpf" 			=> "62248938312",
                "email" 		=> "Phasellus.vitae@disparturientmontes.co.uk",
                "phone_number" 	=> "(08) 8395 9937",
                "created_at" 	=> "2020-07-25 16:29:15",
                "updated_at" 	=> "2019-11-17 17:31:09"
            ],  
            [   
                "name" 			=> "Orla Craft",
                "cpf" 			=> "37262852305",
                "email" 		=> "mi@Vivamusnonlorem.org",
                "phone_number" 	=> "(04) 7147 7444",
                "created_at" 	=> "2020-06-05 15:07:40",
                "updated_at" 	=> "2020-08-21 16:46:27"
            ],  
            [   
                "name" 			=> "Zane Puckett",
                "cpf" 			=> "67337001450",
                "email" 		=> "pretium@loremsit.co.uk",
                "phone_number" 	=> "(03) 3327 5492",
                "created_at" 	=> "2020-02-05 00:16:04",
                "updated_at" 	=> "2020-08-17 23:49:24"
            ],  
            [   
                "name" 			=> "Irma Lawrence",
                "cpf" 			=> "53942914487",
                "email" 		=> "odio.Nam@nuncsed.com",
                "phone_number" 	=> "(01) 7453 4631",
                "created_at" 	=> "2020-08-29 14:52:50",
                "updated_at" 	=> "2020-06-27 16:56:54"
            ],  
            [   
                "name" 			=> "Justina Hopkins",
                "cpf" 			=> "26335961219",
                "email" 		=> "sollicitudin.a@sem.org",
                "phone_number" 	=> "(09) 8894 6511",
                "created_at" 	=> "2020-05-03 00:32:11",
                "updated_at" 	=> "2020-02-14 00:37:03"
            ],  
            [   
                "name" 			=> "Timon Ballard",
                "cpf" 			=> "76656491880",
                "email" 		=> "dui.semper.et@velit.co.uk",
                "phone_number" 	=> "(01) 3346 2542",
                "created_at" 	=> "2020-06-24 07:09:46",
                "updated_at" 	=> "2019-11-24 15:58:35"
            ],  
            [   
                "name" 			=> "Ursa Delgado",
                "cpf" 			=> "39610538074",
                "email" 		=> "mollis.Phasellus@tristiquepellentesque.edu",
                "phone_number" 	=> "(05) 4785 8556",
                "created_at" 	=> "2020-03-17 21:35:55",
                "updated_at" 	=> "2020-01-26 15:47:41"
            ],  
            [   
                "name" 			=> "Asher Long",
                "cpf" 			=> "59739689433",
                "email" 		=> "tellus.Suspendisse.sed@ultricies.co.uk",
                "phone_number" 	=> "(01) 9316 0536",
                "created_at" 	=> "2020-04-28 01:14:11",
                "updated_at" 	=> "2020-08-27 10:48:00"
            ],  
            [   
                "name" 			=> "Cole Wong",
                "cpf" 			=> "26656195581",
                "email" 		=> "pede.nonummy.ut@consequat.ca",
                "phone_number" 	=> "(05) 9512 2184",
                "created_at" 	=> "2020-01-26 01:48:19",
                "updated_at" 	=> "2019-09-06 13:50:11"
            ],  
            [   
                "name" 			=> "Quintessa Williamson",
                "cpf" 			=> "63805501028",
                "email" 		=> "lobortis.Class@mattis.com",
                "phone_number" 	=> "(05) 7759 0426",
                "created_at" 	=> "2020-03-13 06:20:57",
                "updated_at" 	=> "2019-10-18 18:48:54"
            ],  
            [   
                "name" 			=> "Gabriel Soto",
                "cpf" 			=> "85971983352",
                "email" 		=> "egestas.rhoncus@lobortisauguescelerisque.com",
                "phone_number" 	=> "(01) 3489 2525",
                "created_at" 	=> "2020-07-01 15:46:28",
                "updated_at" 	=> "2020-05-15 11:31:23"
            ],  
            [   
                "name" 			=> "Shafira Terry",
                "cpf" 			=> "54012675843",
                "email" 		=> "Suspendisse.aliquet@necmollisvitae.edu",
                "phone_number" 	=> "(03) 7201 4640",
                "created_at" 	=> "2020-05-25 01:44:30",
                "updated_at" 	=> "2019-12-08 17:29:42"
            ],  
            [   
                "name" 			=> "Linus Mcconnell",
                "cpf" 			=> "72933845390",
                "email" 		=> "nonummy.ac@scelerisquesed.ca",
                "phone_number" 	=> "(04) 9314 3709",
                "created_at" 	=> "2020-04-09 07:10:45",
                "updated_at" 	=> "2020-03-30 00:55:44"
            ],  
            [   
                "name" 			=> "Barrett West",
                "cpf" 			=> "47661844913",
                "email" 		=> "cursus@vulputateeuodio.net",
                "phone_number" 	=> "(07) 0089 6446",
                "created_at" 	=> "2020-03-26 06:02:50",
                "updated_at" 	=> "2020-03-25 01:53:54"
            ],  
            [   
                "name" 			=> "Yoshi Bridges",
                "cpf" 			=> "42504437134",
                "email" 		=> "Aliquam.ultrices@consectetuer.co.uk",
                "phone_number" 	=> "(04) 2854 5975",
                "created_at" 	=> "2020-04-30 09:52:58",
                "updated_at" 	=> "2020-01-25 13:59:02"
            ],  
            [   
                "name" 			=> "Reese Bailey",
                "cpf" 			=> "61768211379",
                "email" 		=> "tempus.non@etnunc.edu",
                "phone_number" 	=> "(08) 1733 0645",
                "created_at" 	=> "2020-04-11 15:11:45",
                "updated_at" 	=> "2019-10-27 07:20:52"
            ],   
            [    
                "name" 			=> "Jesse Cooke",
                "cpf" 			=> "56306083713",
                "email" 		=> "tortor.Nunc.commodo@lectusante.net",
                "phone_number" 	=> "(07) 3071 7107",
                "created_at" 	=> "2019-10-01 00:29:57",
                "updated_at" 	=> "2020-02-17 23:04:10"
            ],   
            [    
                "name" 			=> "Tanya Anderson",
                "cpf" 			=> "49976677074",
                "email" 		=> "ullamcorper.eu@lectuspedeet.com",
                "phone_number" 	=> "(02) 9043 7978",
                "created_at" 	=> "2020-05-29 20:09:29",
                "updated_at" 	=> "2019-11-13 17:46:39"
            ]
        ];

        $post = $this->table('user');
        $post->insert($data)
                ->saveData();
    }
}
