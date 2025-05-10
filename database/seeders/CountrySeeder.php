<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Cameroon',
                    'code' => 'cm',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Benin',
                    'code' => 'bj',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Madagascar',
                    'code' => 'mg',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Rwanda',
                    'code' => 'rw',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Seychelles',
                    'code' => 'sc',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Cote d’Ivoire',
                    'code' => 'ci',
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Egypt',
                    'code' => 'eg',
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Mauritius',
                    'code' => 'mu',
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Burkina Faso',
                    'code' => 'bf',
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Eritrea',
                    'code' => 'er',
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Sao Tome and Principe',
                    'code' => 'st',
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Angola',
                    'code' => 'ao',
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Libya',
                    'code' => 'ly',
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Zimbabwe',
                    'code' => 'zw',
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Guinea',
                    'code' => 'gn',
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Sierra Leone',
                    'code' => 'sl',
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'Reunion',
                    'code' => 're',
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => 'Gabon',
                    'code' => 'ga',
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'Ghana',
                    'code' => 'gh',
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'Tanzania',
                    'code' => 'tz',
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'Mali',
                    'code' => 'ml',
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'Somalia',
                    'code' => 'so',
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'Mauritania',
                    'code' => 'mr',
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'Uganda',
                    'code' => 'ug',
                ),
            24 =>
                array(
                    'id' => 25,
                    'name' => 'Chad',
                    'code' => 'td',
                ),
            25 =>
                array(
                    'id' => 26,
                    'name' => 'Mayotte',
                    'code' => 'yt',
                ),
            26 =>
                array(
                    'id' => 27,
                    'name' => 'Comoros',
                    'code' => 'km',
                ),
            27 =>
                array(
                    'id' => 28,
                    'name' => 'Botswana',
                    'code' => 'bw',
                ),
            28 =>
                array(
                    'id' => 29,
                    'name' => 'Senegal',
                    'code' => 'sn',
                ),
            29 =>
                array(
                    'id' => 30,
                    'name' => 'Eswatini',
                    'code' => 'sz',
                ),
            30 =>
                array(
                    'id' => 31,
                    'name' => 'Guinea-Bissau',
                    'code' => 'gw',
                ),
            31 =>
                array(
                    'id' => 32,
                    'name' => 'DR Congo',
                    'code' => 'cd',
                ),
            32 =>
                array(
                    'id' => 33,
                    'name' => 'Central African Republic',
                    'code' => 'cf',
                ),
            33 =>
                array(
                    'id' => 34,
                    'name' => 'Lesotho',
                    'code' => 'ls',
                ),
            34 =>
                array(
                    'id' => 35,
                    'name' => 'Congo',
                    'code' => 'cg',
                ),
            35 =>
                array(
                    'id' => 36,
                    'name' => 'South Africa',
                    'code' => 'za',
                ),
            36 =>
                array(
                    'id' => 37,
                    'name' => 'Liberia',
                    'code' => 'lr',
                ),
            37 =>
                array(
                    'id' => 38,
                    'name' => 'Tunisia',
                    'code' => 'tn',
                ),
            38 =>
                array(
                    'id' => 39,
                    'name' => 'Zambia',
                    'code' => 'zm',
                ),
            39 =>
                array(
                    'id' => 40,
                    'name' => 'Niger',
                    'code' => 'ne',
                ),
            40 =>
                array(
                    'id' => 41,
                    'name' => 'Western Sahara',
                    'code' => 'eh',
                ),
            41 =>
                array(
                    'id' => 42,
                    'name' => 'Togo',
                    'code' => 'tg',
                ),
            42 =>
                array(
                    'id' => 43,
                    'name' => 'Namibia',
                    'code' => 'na',
                ),
            43 =>
                array(
                    'id' => 44,
                    'name' => 'Mozambique',
                    'code' => 'mz',
                ),
            44 =>
                array(
                    'id' => 45,
                    'name' => 'Ethiopia',
                    'code' => 'et',
                ),
            45 =>
                array(
                    'id' => 46,
                    'name' => 'Morocco',
                    'code' => 'ma',
                ),
            46 =>
                array(
                    'id' => 47,
                    'name' => 'Malawi',
                    'code' => 'mw',
                ),
            47 =>
                array(
                    'id' => 48,
                    'name' => 'Nigeria',
                    'code' => 'ng',
                ),
            48 =>
                array(
                    'id' => 49,
                    'name' => 'Cabo Verde',
                    'code' => 'cv',
                ),
            49 =>
                array(
                    'id' => 50,
                    'name' => 'Burundi',
                    'code' => 'bi',
                ),
            50 =>
                array(
                    'id' => 51,
                    'name' => 'Algeria',
                    'code' => 'dz',
                ),
            51 =>
                array(
                    'id' => 52,
                    'name' => 'Djibouti',
                    'code' => 'dj',
                ),
            52 =>
                array(
                    'id' => 53,
                    'name' => 'Guadeloupe',
                    'code' => 'gp',
                ),
            53 =>
                array(
                    'id' => 54,
                    'name' => 'Equatorial Guinea',
                    'code' => 'gq',
                ),
            54 =>
                array(
                    'id' => 55,
                    'name' => 'Sudan',
                    'code' => 'sd',
                ),
            55 =>
                array(
                    'id' => 56,
                    'name' => 'Kenya',
                    'code' => 'ke',
                ),
            56 =>
                array(
                    'id' => 57,
                    'name' => 'Singapore',
                    'code' => 'sg',
                ),
            57 =>
                array(
                    'id' => 58,
                    'name' => 'South Korea',
                    'code' => 'kr',
                ),
            58 =>
                array(
                    'id' => 59,
                    'name' => 'Syria',
                    'code' => 'sy',
                ),
            59 =>
                array(
                    'id' => 60,
                    'name' => 'Uzbekistan',
                    'code' => 'uz',
                ),
            60 =>
                array(
                    'id' => 61,
                    'name' => 'Bahrain',
                    'code' => 'bh',
                ),
            61 =>
                array(
                    'id' => 62,
                    'name' => 'Japan',
                    'code' => 'jp',
                ),
            62 =>
                array(
                    'id' => 63,
                    'name' => 'Jordan',
                    'code' => 'jo',
                ),
            63 =>
                array(
                    'id' => 64,
                    'name' => 'Vietnam',
                    'code' => 'vn',
                ),
            64 =>
                array(
                    'id' => 65,
                    'name' => 'Kyrgyzstan',
                    'code' => 'kg',
                ),
            65 =>
                array(
                    'id' => 66,
                    'name' => 'Thailand',
                    'code' => 'th',
                ),
            66 =>
                array(
                    'id' => 67,
                    'name' => 'Sri Lanka',
                    'code' => 'lk',
                ),
            67 =>
                array(
                    'id' => 68,
                    'name' => 'United Arab Emirates',
                    'code' => 'ae',
                ),
            68 =>
                array(
                    'id' => 69,
                    'name' => 'Laos',
                    'code' => 'la',
                ),
            69 =>
                array(
                    'id' => 70,
                    'name' => 'Afghanistan',
                    'code' => 'af',
                ),
            70 =>
                array(
                    'id' => 71,
                    'name' => 'Macau',
                    'code' => 'mo',
                ),
            71 =>
                array(
                    'id' => 72,
                    'name' => 'Tajikistan',
                    'code' => 'tj',
                ),
            72 =>
                array(
                    'id' => 73,
                    'name' => 'North Korea',
                    'code' => 'kp',
                ),
            73 =>
                array(
                    'id' => 74,
                    'name' => 'Palestine',
                    'code' => 'ps',
                ),
            74 =>
                array(
                    'id' => 75,
                    'name' => 'Hong Kong',
                    'code' => 'hk',
                ),
            75 =>
                array(
                    'id' => 76,
                    'name' => 'Iraq',
                    'code' => 'iq',
                ),
            76 =>
                array(
                    'id' => 77,
                    'name' => 'Lebanon',
                    'code' => 'lb',
                ),
            77 =>
                array(
                    'id' => 78,
                    'name' => 'Kuwait',
                    'code' => 'kw',
                ),
            78 =>
                array(
                    'id' => 79,
                    'name' => 'Brunei',
                    'code' => 'bn',
                ),
            79 =>
                array(
                    'id' => 80,
                    'name' => 'Maldives',
                    'code' => 'mv',
                ),
            80 =>
                array(
                    'id' => 81,
                    'name' => 'Indonesia',
                    'code' => 'id',
                ),
            81 =>
                array(
                    'id' => 82,
                    'name' => 'Israel',
                    'code' => 'il',
                ),
            82 =>
                array(
                    'id' => 83,
                    'name' => 'Mongolia',
                    'code' => 'mn',
                ),
            83 =>
                array(
                    'id' => 84,
                    'name' => 'Oman',
                    'code' => 'om',
                ),
            84 =>
                array(
                    'id' => 85,
                    'name' => 'India',
                    'code' => 'in',
                ),
            85 =>
                array(
                    'id' => 86,
                    'name' => 'Myanmar',
                    'code' => 'mm',
                ),
            86 =>
                array(
                    'id' => 87,
                    'name' => 'Malaysia',
                    'code' => 'my',
                ),
            87 =>
                array(
                    'id' => 88,
                    'name' => 'East Timor',
                    'code' => 'tl',
                ),
            88 =>
                array(
                    'id' => 89,
                    'name' => 'Yemen',
                    'code' => 'ye',
                ),
            89 =>
                array(
                    'id' => 90,
                    'name' => 'Bhutan',
                    'code' => 'bt',
                ),
            90 =>
                array(
                    'id' => 91,
                    'name' => 'Cambodia',
                    'code' => 'kh',
                ),
            91 =>
                array(
                    'id' => 92,
                    'name' => 'Pakistan',
                    'code' => 'pk',
                ),
            92 =>
                array(
                    'id' => 93,
                    'name' => 'Bangladesh',
                    'code' => 'bd',
                ),
            93 =>
                array(
                    'id' => 94,
                    'name' => 'Saudi Arabia',
                    'code' => 'sa',
                ),
            94 =>
                array(
                    'id' => 95,
                    'name' => 'Turkmenistan',
                    'code' => 'tm',
                ),
            95 =>
                array(
                    'id' => 96,
                    'name' => 'Qatar',
                    'code' => 'qa',
                ),
            96 =>
                array(
                    'id' => 97,
                    'name' => 'Nepal',
                    'code' => 'np',
                ),
            97 =>
                array(
                    'id' => 98,
                    'name' => 'Kazakhstan',
                    'code' => 'kz',
                ),
            98 =>
                array(
                    'id' => 99,
                    'name' => 'Philippines',
                    'code' => 'ph',
                ),
            99 =>
                array(
                    'id' => 100,
                    'name' => 'Taiwan',
                    'code' => 'tw',
                ),
            100 =>
                array(
                    'id' => 101,
                    'name' => 'China',
                    'code' => 'cn',
                ),
            101 =>
                array(
                    'id' => 102,
                    'name' => 'Iran',
                    'code' => 'ir',
                ),
            102 =>
                array(
                    'id' => 103,
                    'name' => 'Costa Rica',
                    'code' => 'cr',
                ),
            103 =>
                array(
                    'id' => 104,
                    'name' => 'Cuba',
                    'code' => 'cu',
                ),
            104 =>
                array(
                    'id' => 105,
                    'name' => 'Dominican',
                    'code' => 'do',
                ),
            105 =>
                array(
                    'id' => 106,
                    'name' => 'Mexico',
                    'code' => 'mx',
                ),
            106 =>
                array(
                    'id' => 107,
                    'name' => 'Nicaragua',
                    'code' => 'ni',
                ),
            107 =>
                array(
                    'id' => 108,
                    'name' => 'Panama',
                    'code' => 'pa',
                ),
            108 =>
                array(
                    'id' => 109,
                    'name' => 'Netherlands Antilles',
                    'code' => 'an',
                ),
            109 =>
                array(
                    'id' => 110,
                    'name' => 'El Salvador',
                    'code' => 'sv',
                ),
            110 =>
                array(
                    'id' => 111,
                    'name' => 'Puerto Rico',
                    'code' => 'pr',
                ),
            111 =>
                array(
                    'id' => 112,
                    'name' => 'Saint Vincent and the Grenadines',
                    'code' => 'vc',
                ),
            112 =>
                array(
                    'id' => 113,
                    'name' => 'Honduras',
                    'code' => 'hn',
                ),
            113 =>
                array(
                    'id' => 114,
                    'name' => 'Guatemala',
                    'code' => 'gt',
                ),
            114 =>
                array(
                    'id' => 115,
                    'name' => 'Georgia',
                    'code' => 'ge',
                ),
            115 =>
                array(
                    'id' => 116,
                    'name' => 'Armenia',
                    'code' => 'am',
                ),
            116 =>
                array(
                    'id' => 117,
                    'name' => 'Azerbaijan',
                    'code' => 'az',
                ),
            117 =>
                array(
                    'id' => 118,
                    'name' => 'Belarus',
                    'code' => 'by',
                ),
            118 =>
                array(
                    'id' => 119,
                    'name' => 'Russia',
                    'code' => 'ru',
                ),
            119 =>
                array(
                    'id' => 120,
                    'name' => 'Ukraine',
                    'code' => 'ua',
                ),
            120 =>
                array(
                    'id' => 121,
                    'name' => 'Hungary',
                    'code' => 'hu',
                ),
            121 =>
                array(
                    'id' => 122,
                    'name' => 'Iceland',
                    'code' => 'is',
                ),
            122 =>
                array(
                    'id' => 123,
                    'name' => 'Malta',
                    'code' => 'mt',
                ),
            123 =>
                array(
                    'id' => 124,
                    'name' => 'Monaco',
                    'code' => 'mc',
                ),
            124 =>
                array(
                    'id' => 125,
                    'name' => 'Norway',
                    'code' => 'no',
                ),
            125 =>
                array(
                    'id' => 126,
                    'name' => 'Romania',
                    'code' => 'ro',
                ),
            126 =>
                array(
                    'id' => 127,
                    'name' => 'San Marino',
                    'code' => 'sm',
                ),
            127 =>
                array(
                    'id' => 128,
                    'name' => 'Sweden',
                    'code' => 'se',
                ),
            128 =>
                array(
                    'id' => 129,
                    'name' => 'Switzerland',
                    'code' => 'ch',
                ),
            129 =>
                array(
                    'id' => 130,
                    'name' => 'Estonia',
                    'code' => 'ee',
                ),
            130 =>
                array(
                    'id' => 131,
                    'name' => 'Latvia',
                    'code' => 'lv',
                ),
            131 =>
                array(
                    'id' => 132,
                    'name' => 'Lithuania',
                    'code' => 'lt',
                ),
            132 =>
                array(
                    'id' => 133,
                    'name' => 'Moldova',
                    'code' => 'md',
                ),
            133 =>
                array(
                    'id' => 134,
                    'name' => 'Turkey',
                    'code' => 'tr',
                ),
            134 =>
                array(
                    'id' => 135,
                    'name' => 'Slovenia',
                    'code' => 'si',
                ),
            135 =>
                array(
                    'id' => 136,
                    'name' => 'Czech',
                    'code' => 'cz',
                ),
            136 =>
                array(
                    'id' => 137,
                    'name' => 'Slovakia',
                    'code' => 'sk',
                ),
            137 =>
                array(
                    'id' => 138,
                    'name' => 'North Macedonia',
                    'code' => 'mk',
                ),
            138 =>
                array(
                    'id' => 139,
                    'name' => 'Bosnia Herzegovina',
                    'code' => 'ba',
                ),
            139 =>
                array(
                    'id' => 140,
                    'name' => 'Vatican City State',
                    'code' => 'va',
                ),
            140 =>
                array(
                    'id' => 141,
                    'name' => 'Netherlands',
                    'code' => 'nl',
                ),
            141 =>
                array(
                    'id' => 142,
                    'name' => 'Croatia',
                    'code' => 'hr',
                ),
            142 =>
                array(
                    'id' => 143,
                    'name' => 'Greece',
                    'code' => 'gr',
                ),
            143 =>
                array(
                    'id' => 144,
                    'name' => 'Ireland',
                    'code' => 'ie',
                ),
            144 =>
                array(
                    'id' => 145,
                    'name' => 'Belgium',
                    'code' => 'be',
                ),
            145 =>
                array(
                    'id' => 146,
                    'name' => 'Cyprus',
                    'code' => 'cy',
                ),
            146 =>
                array(
                    'id' => 147,
                    'name' => 'Denmark',
                    'code' => 'dk',
                ),
            147 =>
                array(
                    'id' => 148,
                    'name' => 'United Kingdom',
                    'code' => 'gb',
                ),
            148 =>
                array(
                    'id' => 149,
                    'name' => 'Germany',
                    'code' => 'de',
                ),
            149 =>
                array(
                    'id' => 150,
                    'name' => 'France',
                    'code' => 'fr',
                ),
            150 =>
                array(
                    'id' => 151,
                    'name' => 'Italy',
                    'code' => 'it',
                ),
            151 =>
                array(
                    'id' => 152,
                    'name' => 'Luxembourg',
                    'code' => 'lu',
                ),
            152 =>
                array(
                    'id' => 153,
                    'name' => 'Portugal',
                    'code' => 'pt',
                ),
            153 =>
                array(
                    'id' => 154,
                    'name' => 'Poland',
                    'code' => 'pl',
                ),
            154 =>
                array(
                    'id' => 155,
                    'name' => 'Spain',
                    'code' => 'es',
                ),
            155 =>
                array(
                    'id' => 156,
                    'name' => 'Albania',
                    'code' => 'al',
                ),
            156 =>
                array(
                    'id' => 157,
                    'name' => 'Andorra',
                    'code' => 'ad',
                ),
            157 =>
                array(
                    'id' => 158,
                    'name' => 'Liechtenstein',
                    'code' => 'li',
                ),
            158 =>
                array(
                    'id' => 159,
                    'name' => 'Serbia',
                    'code' => 'rs',
                ),
            159 =>
                array(
                    'id' => 160,
                    'name' => 'Austria',
                    'code' => 'at',
                ),
            160 =>
                array(
                    'id' => 161,
                    'name' => 'Bulgaria',
                    'code' => 'bg',
                ),
            161 =>
                array(
                    'id' => 162,
                    'name' => 'Finland',
                    'code' => 'fi',
                ),
            162 =>
                array(
                    'id' => 163,
                    'name' => 'Gibraltar',
                    'code' => 'gi',
                ),
            163 =>
                array(
                    'id' => 164,
                    'name' => 'Dominica',
                    'code' => 'dm',
                ),
            164 =>
                array(
                    'id' => 165,
                    'name' => 'Bermuda',
                    'code' => 'bm',
                ),
            165 =>
                array(
                    'id' => 166,
                    'name' => 'Canada',
                    'code' => 'ca',
                ),
            166 =>
                array(
                    'id' => 167,
                    'name' => 'United States',
                    'code' => 'us',
                ),
            167 =>
                array(
                    'id' => 168,
                    'name' => 'Greenland',
                    'code' => 'gl',
                ),
            168 =>
                array(
                    'id' => 169,
                    'name' => 'Tonga',
                    'code' => 'to',
                ),
            169 =>
                array(
                    'id' => 170,
                    'name' => 'Australia',
                    'code' => 'au',
                ),
            170 =>
                array(
                    'id' => 171,
                    'name' => 'Cook Islands',
                    'code' => 'ck',
                ),
            171 =>
                array(
                    'id' => 172,
                    'name' => 'Nauru',
                    'code' => 'nr',
                ),
            172 =>
                array(
                    'id' => 173,
                    'name' => 'New Caledonia',
                    'code' => 'nc',
                ),
            173 =>
                array(
                    'id' => 174,
                    'name' => 'Vanuatu',
                    'code' => 'vu',
                ),
            174 =>
                array(
                    'id' => 175,
                    'name' => 'Solomon Islands',
                    'code' => 'sb',
                ),
            175 =>
                array(
                    'id' => 176,
                    'name' => 'Samoa',
                    'code' => 'ws',
                ),
            176 =>
                array(
                    'id' => 177,
                    'name' => 'Tuvalu',
                    'code' => 'tv',
                ),
            177 =>
                array(
                    'id' => 178,
                    'name' => 'Micronesia',
                    'code' => 'fm',
                ),
            178 =>
                array(
                    'id' => 179,
                    'name' => 'Marshall Islands',
                    'code' => 'mh',
                ),
            179 =>
                array(
                    'id' => 180,
                    'name' => 'Kiribati',
                    'code' => 'ki',
                ),
            180 =>
                array(
                    'id' => 181,
                    'name' => 'French Polynesia',
                    'code' => 'pf',
                ),
            181 =>
                array(
                    'id' => 182,
                    'name' => 'New Zealand',
                    'code' => 'nz',
                ),
            182 =>
                array(
                    'id' => 183,
                    'name' => 'Fiji',
                    'code' => 'fj',
                ),
            183 =>
                array(
                    'id' => 184,
                    'name' => 'Papua New Guinea',
                    'code' => 'pg',
                ),
            184 =>
                array(
                    'id' => 185,
                    'name' => 'Palau',
                    'code' => 'pw',
                ),
            185 =>
                array(
                    'id' => 186,
                    'name' => 'Chile',
                    'code' => 'cl',
                ),
            186 =>
                array(
                    'id' => 187,
                    'name' => 'Colombia',
                    'code' => 'co',
                ),
            187 =>
                array(
                    'id' => 188,
                    'name' => 'Guyana',
                    'code' => 'gy',
                ),
            188 =>
                array(
                    'id' => 189,
                    'name' => 'Paraguay',
                    'code' => 'py',
                ),
            189 =>
                array(
                    'id' => 190,
                    'name' => 'Peru',
                    'code' => 'pe',
                ),
            190 =>
                array(
                    'id' => 191,
                    'name' => 'Suriname',
                    'code' => 'sr',
                ),
            191 =>
                array(
                    'id' => 192,
                    'name' => 'Venezuela',
                    'code' => 've',
                ),
            192 =>
                array(
                    'id' => 193,
                    'name' => 'Uruguay',
                    'code' => 'uy',
                ),
            193 =>
                array(
                    'id' => 194,
                    'name' => 'Ecuador',
                    'code' => 'ec',
                ),
            194 =>
                array(
                    'id' => 195,
                    'name' => 'Antigua and Barbuda',
                    'code' => 'ag',
                ),
            195 =>
                array(
                    'id' => 196,
                    'name' => 'Aruba',
                    'code' => 'aw',
                ),
            196 =>
                array(
                    'id' => 197,
                    'name' => 'Bahamas',
                    'code' => 'bs',
                ),
            197 =>
                array(
                    'id' => 198,
                    'name' => 'Barbados',
                    'code' => 'bb',
                ),
            198 =>
                array(
                    'id' => 199,
                    'name' => 'Cayman Islands',
                    'code' => 'ky',
                ),
            199 =>
                array(
                    'id' => 200,
                    'name' => 'Grenada',
                    'code' => 'gd',
                ),
            200 =>
                array(
                    'id' => 201,
                    'name' => 'Haiti',
                    'code' => 'ht',
                ),
            201 =>
                array(
                    'id' => 202,
                    'name' => 'Jamaica',
                    'code' => 'jm',
                ),
            202 =>
                array(
                    'id' => 203,
                    'name' => 'Martinique',
                    'code' => 'mq',
                ),
            203 =>
                array(
                    'id' => 204,
                    'name' => 'Montserrat',
                    'code' => 'ms',
                ),
            204 =>
                array(
                    'id' => 205,
                    'name' => 'Trinidad and Tobago',
                    'code' => 'tt',
                ),
            205 =>
                array(
                    'id' => 206,
                    'name' => 'Saint Kitts and Nevis',
                    'code' => 'kn',
                ),
            206 =>
                array(
                    'id' => 207,
                    'name' => 'Saint Pierre and Miquelon',
                    'code' => 'pm',
                ),
            207 =>
                array(
                    'id' => 208,
                    'name' => 'Argentina',
                    'code' => 'ar',
                ),
            208 =>
                array(
                    'id' => 209,
                    'name' => 'Belize',
                    'code' => 'bz',
                ),
            209 =>
                array(
                    'id' => 210,
                    'name' => 'Bolivia',
                    'code' => 'bo',
                ),
            210 =>
                array(
                    'id' => 211,
                    'name' => 'Brazil',
                    'code' => 'br',
                ),
            211 =>
                array(
                    'id' => 212,
                    'name' => 'American Samoa',
                    'code' => 'as',
                ),
            212 =>
                array(
                    'id' => 213,
                    'name' => 'Aland Islands',
                    'code' => 'ax',
                ),
            213 =>
                array(
                    'id' => 214,
                    'name' => 'Saint Barthélemy',
                    'code' => 'bl',
                ),
            214 =>
                array(
                    'id' => 215,
                    'name' => 'Bonaire, Sint Eustatius and Saba',
                    'code' => 'bq',
                ),
            215 =>
                array(
                    'id' => 216,
                    'name' => 'Bouvet Island',
                    'code' => 'bv',
                ),
            216 =>
                array(
                    'id' => 217,
                    'name' => 'Cocos (Keeling) Islands',
                    'code' => 'cc',
                ),
            217 =>
                array(
                    'id' => 218,
                    'name' => 'Curaçao',
                    'code' => 'cw',
                ),
            218 =>
                array(
                    'id' => 219,
                    'name' => 'Christmas Island',
                    'code' => 'cx',
                ),
            219 =>
                array(
                    'id' => 220,
                    'name' => 'Falkland Islands (Malvinas)',
                    'code' => 'fk',
                ),
            220 =>
                array(
                    'id' => 221,
                    'name' => 'Faroe Islands',
                    'code' => 'fo',
                ),
            221 =>
                array(
                    'id' => 222,
                    'name' => 'French Guiana',
                    'code' => 'gf',
                ),
            222 =>
                array(
                    'id' => 223,
                    'name' => 'Guernsey',
                    'code' => 'gg',
                ),
            223 =>
                array(
                    'id' => 224,
                    'name' => 'South Georgia and the South Sandwich Islands',
                    'code' => 'gs',
                ),
            224 =>
                array(
                    'id' => 225,
                    'name' => 'Guam',
                    'code' => 'gu',
                ),
            225 =>
                array(
                    'id' => 226,
                    'name' => 'Heard Island and McDonald Islands',
                    'code' => 'hm',
                ),
            226 =>
                array(
                    'id' => 227,
                    'name' => 'Isle of Man',
                    'code' => 'im',
                ),
            227 =>
                array(
                    'id' => 228,
                    'name' => 'British Indian Ocean Territory',
                    'code' => 'io',
                ),
            228 =>
                array(
                    'id' => 229,
                    'name' => 'Jersey',
                    'code' => 'je',
                ),
            229 =>
                array(
                    'id' => 230,
                    'name' => 'Saint Lucia',
                    'code' => 'lc',
                ),
            230 =>
                array(
                    'id' => 231,
                    'name' => 'Saint Martin',
                    'code' => 'mf',
                ),
            231 =>
                array(
                    'id' => 232,
                    'name' => 'Northern Mariana Islands',
                    'code' => 'mp',
                ),
            232 =>
                array(
                    'id' => 233,
                    'name' => 'Norfolk Island',
                    'code' => 'nf',
                ),
            233 =>
                array(
                    'id' => 234,
                    'name' => 'Niue',
                    'code' => 'nu',
                ),
            234 =>
                array(
                    'id' => 236,
                    'name' => 'Pitcairn',
                    'code' => 'pn',
                ),
            235 =>
                array(
                    'id' => 237,
                    'name' => 'Saint Helena',
                    'code' => 'sh',
                ),
            236 =>
                array(
                    'id' => 238,
                    'name' => 'Svalbard and Jan Mayen Islands',
                    'code' => 'sj',
                ),
            237 =>
                array(
                    'id' => 239,
                    'name' => 'Sint Maarten',
                    'code' => 'sx',
                ),
            238 =>
                array(
                    'id' => 240,
                    'name' => 'Turks and Caicos Islands',
                    'code' => 'tc',
                ),
            239 =>
                array(
                    'id' => 241,
                    'name' => 'French Southern Territories',
                    'code' => 'tf',
                ),
            240 =>
                array(
                    'id' => 242,
                    'name' => 'Tokelau',
                    'code' => 'tk',
                ),
            241 =>
                array(
                    'id' => 243,
                    'name' => 'United States Minor Outlying Islands',
                    'code' => 'um',
                ),
            242 =>
                array(
                    'id' => 244,
                    'name' => 'British Virgin Islands',
                    'code' => 'vg',
                ),
            243 =>
                array(
                    'id' => 245,
                    'name' => 'United States Virgin Islands',
                    'code' => 'vi',
                ),
            244 =>
                array(
                    'id' => 246,
                    'name' => 'Wallis and Futuna Islands',
                    'code' => 'wf',
                ),
            245 =>
                array(
                    'id' => 247,
                    'name' => 'Kosovo',
                    'code' => 'xk',
                ),
            246 =>
                array(
                    'id' => 248,
                    'name' => 'Montenegro',
                    'code' => 'me',
                ),
            247 =>
                array(
                    'id' => 249,
                    'name' => 'Anguilla',
                    'code' => 'ai',
                ),
            248 =>
                array(
                    'id' => 250,
                    'name' => 'Gambia',
                    'code' => 'gm',
                ),
            249 =>
                array(
                    'id' => 251,
                    'name' => 'South Sudan',
                    'code' => 'ss',
                ),
        ));
    }
}
