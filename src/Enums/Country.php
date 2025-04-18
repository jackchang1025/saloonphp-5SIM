<?php

namespace Weijiajia\Saloonphp\FiveSim\Enums;

/**
 * https://5sim.net/docs#get-countries-list
 */
enum Country: string
{
    case AFGHANISTAN = 'afghanistan';
    case ALBANIA = 'albania';
    case ALGERIA = 'algeria';
    case ANGOLA = 'angola';
    case ANTIGUA_AND_BARBUDA = 'antiguaandbarbuda';
    case ARGENTINA = 'argentina';
    case ARMENIA = 'armenia';
    case ARUBA = 'aruba';
    case AUSTRALIA = 'australia';
    case AUSTRIA = 'austria';
    case AZERBAIJAN = 'azerbaijan';
    case BAHAMAS = 'bahamas';
    case BAHRAIN = 'bahrain';
    case BANGLADESH = 'bangladesh';
    case BARBADOS = 'barbados';
    case BELARUS = 'belarus';
    case BELGIUM = 'belgium';
    case BELIZE = 'belize';
    case BENIN = 'benin';
    case BHUTAN = 'bhutane';
    case BOSNIA_AND_HERZEGOVINA = 'bih';
    case BOLIVIA = 'bolivia';
    case BOTSWANA = 'botswana';
    case BRAZIL = 'brazil';
    case BULGARIA = 'bulgaria';
    case BURKINA_FASO = 'burkinafaso';
    case BURUNDI = 'burundi';
    case CAMBODIA = 'cambodia';
    case CAMEROON = 'cameroon';
    case CANADA = 'canada';
    case CAPE_VERDE = 'capeverde';
    case CHAD = 'chad';
    case CHILE = 'chile';
    case COLOMBIA = 'colombia';
    case COMOROS = 'comoros';
    case CONGO = 'congo';
    case COSTA_RICA = 'costarica';
    case CROATIA = 'croatia';
    case CYPRUS = 'cyprus';
    case CZECH_REPUBLIC = 'czech';
    case DENMARK = 'denmark';
    case DOMINICAN_REPUBLIC = 'dominicana';
    case EAST_TIMOR = 'easttimor';
    case ECUADOR = 'ecuador';
    case EGYPT = 'egypt';
    case ENGLAND = 'england';
    case EQUATORIAL_GUINEA = 'equatorialguinea';
    case ESTONIA = 'estonia';
    case ETHIOPIA = 'ethiopia';
    case FINLAND = 'finland';
    case FRANCE = 'france';
    case FRENCH_GUIANA = 'frenchguiana';
    case GABON = 'gabon';
    case GAMBIA = 'gambia';
    case GEORGIA = 'georgia';
    case GERMANY = 'germany';
    case GHANA = 'ghana';
    case GIBRALTAR = 'gibraltar';
    case GREECE = 'greece';
    case GUADELOUPE = 'guadeloupe';
    case GUATEMALA = 'guatemala';
    case GUINEA_BISSAU = 'guineabissau';
    case GUYANA = 'guyana';
    case HAITI = 'haiti';
    case HONDURAS = 'honduras';
    case HONG_KONG = 'hongkong';
    case HUNGARY = 'hungary';
    case INDIA = 'india';
    case INDONESIA = 'indonesia';
    case IRELAND = 'ireland';
    case ISRAEL = 'israel';
    case ITALY = 'italy';
    case IVORY_COAST = 'ivorycoast';
    case JAMAICA = 'jamaica';
    case JAPAN = 'japan';
    case JORDAN = 'jordan';
    case KAZAKHSTAN = 'kazakhstan';
    case KENYA = 'kenya';
    case KUWAIT = 'kuwait';
    case KYRGYZSTAN = 'kyrgyzstan';
    case LAOS = 'laos';
    case LATVIA = 'latvia';
    case LESOTHO = 'lesotho';
    case LIBERIA = 'liberia';
    case LITHUANIA = 'lithuania';
    case LUXEMBOURG = 'luxembourg';
    case MACAU = 'macau';
    case MADAGASCAR = 'madagascar';
    case MALAWI = 'malawi';
    case MALAYSIA = 'malaysia';
    case MALDIVES = 'maldives';
    case MAURITANIA = 'mauritania';
    case MAURITIUS = 'mauritius';
    case MEXICO = 'mexico';
    case MOLDOVA = 'moldova';
    case MONGOLIA = 'mongolia';
    case MOROCCO = 'morocco';
    case MOZAMBIQUE = 'mozambique';
    case NAMIBIA = 'namibia';
    case NEPAL = 'nepal';
    case NETHERLANDS = 'netherlands';
    case NEW_CALEDONIA = 'newcaledonia';
    case NEW_ZEALAND = 'newzealand';
    case NICARAGUA = 'nicaragua';
    case NIGERIA = 'nigeria';
    case NORTH_MACEDONIA = 'northmacedonia';
    case NORWAY = 'norway';
    case OMAN = 'oman';
    case PAKISTAN = 'pakistan';
    case PANAMA = 'panama';
    case PAPUA_NEW_GUINEA = 'papuanewguinea';
    case PARAGUAY = 'paraguay';
    case PERU = 'peru';
    case PHILIPPINES = 'philippines';
    case POLAND = 'poland';
    case PORTUGAL = 'portugal';
    case PUERTO_RICO = 'puertorico';
    case REUNION = 'reunion';
    case ROMANIA = 'romania';
    case RUSSIA = 'russia';
    case RWANDA = 'rwanda';
    case SAINT_KITTS_AND_NEVIS = 'saintkittsandnevis';
    case SAINT_LUCIA = 'saintlucia';
    case SAINT_VINCENT_AND_GRENADINES = 'saintvincentandgrenadines';
    case SALVADOR = 'salvador';
    case SAMOA = 'samoa';
    case SAUDI_ARABIA = 'saudiarabia';
    case SENEGAL = 'senegal';
    case SERBIA = 'serbia';
    case SEYCHELLES = 'seychelles';
    case SIERRA_LEONE = 'sierraleone';
    case SINGAPORE = 'singapore';
    case SLOVAKIA = 'slovakia';
    case SLOVENIA = 'slovenia';
    case SOLOMON_ISLANDS = 'solomonislands';
    case SOUTH_AFRICA = 'southafrica';
    case SPAIN = 'spain';
    case SRI_LANKA = 'srilanka';
    case SURINAME = 'suriname';
    case SWAZILAND = 'swaziland';
    case SWEDEN = 'sweden';
    case SWITZERLAND = 'switzerland';
    case TAIWAN = 'taiwan';
    case TAJIKISTAN = 'tajikistan';
    case TANZANIA = 'tanzania';
    case THAILAND = 'thailand';
    case TRINIDAD_AND_TOBAGO = 'tit';
    case TOGO = 'togo';
    case TUNISIA = 'tunisia';
    case TURKMENISTAN = 'turkmenistan';
    case UGANDA = 'uganda';
    case UKRAINE = 'ukraine';
    case UNITED_KINGDOM = 'uk';
    case URUGUAY = 'uruguay';
    case USA = 'usa';
    case UZBEKISTAN = 'uzbekistan';
    case VENEZUELA = 'venezuela';
    case VIETNAM = 'vietnam';
    case ZAMBIA = 'zambia';
    case CHINA = 'china'; // 注：列表中没有，但常用

    /**
     * 从ISO国家代码获取5SIM国家代码
     *
     * @param string $isoCode ISO国家代码（如：US, CN, RU等）
     * @return string|null 对应的5SIM国家代码，如果没有匹配则返回null
     */
    public static function fromIsoCode(string $isoCode): ?string
    {
        $map = [
            'AF' => self::AFGHANISTAN->value,
            'AL' => self::ALBANIA->value,
            'DZ' => self::ALGERIA->value,
            'AO' => self::ANGOLA->value,
            'AG' => self::ANTIGUA_AND_BARBUDA->value,
            'AR' => self::ARGENTINA->value,
            'AM' => self::ARMENIA->value,
            'AW' => self::ARUBA->value,
            'AU' => self::AUSTRALIA->value,
            'AT' => self::AUSTRIA->value,
            'AZ' => self::AZERBAIJAN->value,
            'BS' => self::BAHAMAS->value,
            'BH' => self::BAHRAIN->value,
            'BD' => self::BANGLADESH->value,
            'BB' => self::BARBADOS->value,
            'BY' => self::BELARUS->value,
            'BE' => self::BELGIUM->value,
            'BZ' => self::BELIZE->value,
            'BJ' => self::BENIN->value,
            'BT' => self::BHUTAN->value,
            'BA' => self::BOSNIA_AND_HERZEGOVINA->value,
            'BO' => self::BOLIVIA->value,
            'BW' => self::BOTSWANA->value,
            'BR' => self::BRAZIL->value,
            'BG' => self::BULGARIA->value,
            'BF' => self::BURKINA_FASO->value,
            'BI' => self::BURUNDI->value,
            'KH' => self::CAMBODIA->value,
            'CM' => self::CAMEROON->value,
            'CA' => self::CANADA->value,
            'CV' => self::CAPE_VERDE->value,
            'TD' => self::CHAD->value,
            'CL' => self::CHILE->value,
            'CN' => self::CHINA->value,
            'CO' => self::COLOMBIA->value,
            'KM' => self::COMOROS->value,
            'CG' => self::CONGO->value,
            'CR' => self::COSTA_RICA->value,
            'HR' => self::CROATIA->value,
            'CY' => self::CYPRUS->value,
            'CZ' => self::CZECH_REPUBLIC->value,
            'DK' => self::DENMARK->value,
            'DO' => self::DOMINICAN_REPUBLIC->value,
            'TL' => self::EAST_TIMOR->value,
            'EC' => self::ECUADOR->value,
            'EG' => self::EGYPT->value,
            'GB-ENG' => self::ENGLAND->value, // 注：非标准ISO代码
            'GQ' => self::EQUATORIAL_GUINEA->value,
            'EE' => self::ESTONIA->value,
            'ET' => self::ETHIOPIA->value,
            'FI' => self::FINLAND->value,
            'FR' => self::FRANCE->value,
            'GF' => self::FRENCH_GUIANA->value,
            'GA' => self::GABON->value,
            'GM' => self::GAMBIA->value,
            'GE' => self::GEORGIA->value,
            'DE' => self::GERMANY->value,
            'GH' => self::GHANA->value,
            'GI' => self::GIBRALTAR->value,
            'GR' => self::GREECE->value,
            'GP' => self::GUADELOUPE->value,
            'GT' => self::GUATEMALA->value,
            'GW' => self::GUINEA_BISSAU->value,
            'GY' => self::GUYANA->value,
            'HT' => self::HAITI->value,
            'HN' => self::HONDURAS->value,
            'HK' => self::HONG_KONG->value,
            'HU' => self::HUNGARY->value,
            'IN' => self::INDIA->value,
            'ID' => self::INDONESIA->value,
            'IE' => self::IRELAND->value,
            'IL' => self::ISRAEL->value,
            'IT' => self::ITALY->value,
            'CI' => self::IVORY_COAST->value,
            'JM' => self::JAMAICA->value,
            'JP' => self::JAPAN->value,
            'JO' => self::JORDAN->value,
            'KZ' => self::KAZAKHSTAN->value,
            'KE' => self::KENYA->value,
            'KW' => self::KUWAIT->value,
            'KG' => self::KYRGYZSTAN->value,
            'LA' => self::LAOS->value,
            'LV' => self::LATVIA->value,
            'LS' => self::LESOTHO->value,
            'LR' => self::LIBERIA->value,
            'LT' => self::LITHUANIA->value,
            'LU' => self::LUXEMBOURG->value,
            'MO' => self::MACAU->value,
            'MG' => self::MADAGASCAR->value,
            'MW' => self::MALAWI->value,
            'MY' => self::MALAYSIA->value,
            'MV' => self::MALDIVES->value,
            'MR' => self::MAURITANIA->value,
            'MU' => self::MAURITIUS->value,
            'MX' => self::MEXICO->value,
            'MD' => self::MOLDOVA->value,
            'MN' => self::MONGOLIA->value,
            'MA' => self::MOROCCO->value,
            'MZ' => self::MOZAMBIQUE->value,
            'NA' => self::NAMIBIA->value,
            'NP' => self::NEPAL->value,
            'NL' => self::NETHERLANDS->value,
            'NC' => self::NEW_CALEDONIA->value,
            'NZ' => self::NEW_ZEALAND->value,
            'NI' => self::NICARAGUA->value,
            'NG' => self::NIGERIA->value,
            'MK' => self::NORTH_MACEDONIA->value,
            'NO' => self::NORWAY->value,
            'OM' => self::OMAN->value,
            'PK' => self::PAKISTAN->value,
            'PA' => self::PANAMA->value,
            'PG' => self::PAPUA_NEW_GUINEA->value,
            'PY' => self::PARAGUAY->value,
            'PE' => self::PERU->value,
            'PH' => self::PHILIPPINES->value,
            'PL' => self::POLAND->value,
            'PT' => self::PORTUGAL->value,
            'PR' => self::PUERTO_RICO->value,
            'RE' => self::REUNION->value,
            'RO' => self::ROMANIA->value,
            'RU' => self::RUSSIA->value,
            'RW' => self::RWANDA->value,
            'KN' => self::SAINT_KITTS_AND_NEVIS->value,
            'LC' => self::SAINT_LUCIA->value,
            'VC' => self::SAINT_VINCENT_AND_GRENADINES->value,
            'SV' => self::SALVADOR->value,
            'WS' => self::SAMOA->value,
            'SA' => self::SAUDI_ARABIA->value,
            'SN' => self::SENEGAL->value,
            'RS' => self::SERBIA->value,
            'SC' => self::SEYCHELLES->value,
            'SL' => self::SIERRA_LEONE->value,
            'SG' => self::SINGAPORE->value,
            'SK' => self::SLOVAKIA->value,
            'SI' => self::SLOVENIA->value,
            'SB' => self::SOLOMON_ISLANDS->value,
            'ZA' => self::SOUTH_AFRICA->value,
            'ES' => self::SPAIN->value,
            'LK' => self::SRI_LANKA->value,
            'SR' => self::SURINAME->value,
            'SZ' => self::SWAZILAND->value, // 注：现已更名为Eswatini，ISO代码没变
            'SE' => self::SWEDEN->value,
            'CH' => self::SWITZERLAND->value,
            'TW' => self::TAIWAN->value,
            'TJ' => self::TAJIKISTAN->value,
            'TZ' => self::TANZANIA->value,
            'TH' => self::THAILAND->value,
            'TT' => self::TRINIDAD_AND_TOBAGO->value,
            'TG' => self::TOGO->value,
            'TN' => self::TUNISIA->value,
            'TM' => self::TURKMENISTAN->value,
            'UG' => self::UGANDA->value,
            'UA' => self::UKRAINE->value,
            'GB' => self::UNITED_KINGDOM->value,
            'UY' => self::URUGUAY->value,
            'US' => self::USA->value,
            'UZ' => self::UZBEKISTAN->value,
            'VE' => self::VENEZUELA->value,
            'VN' => self::VIETNAM->value,
            'ZM' => self::ZAMBIA->value,
        ];
        
        return $map[strtoupper($isoCode)] ?? null;
    }

    /**
     * 从5SIM国家代码获取ISO国家代码
     *
     * @param string $fiveSimCode 5SIM国家代码（如：usa, china, russia等）
     * @return string|null 对应的ISO国家代码，如果没有匹配则返回null
     */
    public static function toIsoCode(string $fiveSimCode): ?string
    {
        $reverseMap = [
            self::AFGHANISTAN->value => 'AF',
            self::ALBANIA->value => 'AL',
            self::ALGERIA->value => 'DZ',
            self::ANGOLA->value => 'AO',
            self::ANTIGUA_AND_BARBUDA->value => 'AG',
            self::ARGENTINA->value => 'AR',
            self::ARMENIA->value => 'AM',
            self::ARUBA->value => 'AW',
            self::AUSTRALIA->value => 'AU',
            self::AUSTRIA->value => 'AT',
            self::AZERBAIJAN->value => 'AZ',
            self::BAHAMAS->value => 'BS',
            self::BAHRAIN->value => 'BH',
            self::BANGLADESH->value => 'BD',
            self::BARBADOS->value => 'BB',
            self::BELARUS->value => 'BY',
            self::BELGIUM->value => 'BE',
            self::BELIZE->value => 'BZ',
            self::BENIN->value => 'BJ',
            self::BHUTAN->value => 'BT',
            self::BOSNIA_AND_HERZEGOVINA->value => 'BA',
            self::BOLIVIA->value => 'BO',
            self::BOTSWANA->value => 'BW',
            self::BRAZIL->value => 'BR',
            self::BULGARIA->value => 'BG',
            self::BURKINA_FASO->value => 'BF',
            self::BURUNDI->value => 'BI',
            self::CAMBODIA->value => 'KH',
            self::CAMEROON->value => 'CM',
            self::CANADA->value => 'CA',
            self::CAPE_VERDE->value => 'CV',
            self::CHAD->value => 'TD',
            self::CHILE->value => 'CL',
            self::CHINA->value => 'CN',
            self::COLOMBIA->value => 'CO',
            self::COMOROS->value => 'KM',
            self::CONGO->value => 'CG',
            self::COSTA_RICA->value => 'CR',
            self::CROATIA->value => 'HR',
            self::CYPRUS->value => 'CY',
            self::CZECH_REPUBLIC->value => 'CZ',
            self::DENMARK->value => 'DK',
            self::DOMINICAN_REPUBLIC->value => 'DO',
            self::EAST_TIMOR->value => 'TL',
            self::ECUADOR->value => 'EC',
            self::EGYPT->value => 'EG',
            self::ENGLAND->value => 'GB-ENG',
            self::EQUATORIAL_GUINEA->value => 'GQ',
            self::ESTONIA->value => 'EE',
            self::ETHIOPIA->value => 'ET',
            self::FINLAND->value => 'FI',
            self::FRANCE->value => 'FR',
            self::FRENCH_GUIANA->value => 'GF',
            self::GABON->value => 'GA',
            self::GAMBIA->value => 'GM',
            self::GEORGIA->value => 'GE',
            self::GERMANY->value => 'DE',
            self::GHANA->value => 'GH',
            self::GIBRALTAR->value => 'GI',
            self::GREECE->value => 'GR',
            self::GUADELOUPE->value => 'GP',
            self::GUATEMALA->value => 'GT',
            self::GUINEA_BISSAU->value => 'GW',
            self::GUYANA->value => 'GY',
            self::HAITI->value => 'HT',
            self::HONDURAS->value => 'HN',
            self::HONG_KONG->value => 'HK',
            self::HUNGARY->value => 'HU',
            self::INDIA->value => 'IN',
            self::INDONESIA->value => 'ID',
            self::IRELAND->value => 'IE',
            self::ISRAEL->value => 'IL',
            self::ITALY->value => 'IT',
            self::IVORY_COAST->value => 'CI',
            self::JAMAICA->value => 'JM',
            self::JAPAN->value => 'JP',
            self::JORDAN->value => 'JO',
            self::KAZAKHSTAN->value => 'KZ',
            self::KENYA->value => 'KE',
            self::KUWAIT->value => 'KW',
            self::KYRGYZSTAN->value => 'KG',
            self::LAOS->value => 'LA',
            self::LATVIA->value => 'LV',
            self::LESOTHO->value => 'LS',
            self::LIBERIA->value => 'LR',
            self::LITHUANIA->value => 'LT',
            self::LUXEMBOURG->value => 'LU',
            self::MACAU->value => 'MO',
            self::MADAGASCAR->value => 'MG',
            self::MALAWI->value => 'MW',
            self::MALAYSIA->value => 'MY',
            self::MALDIVES->value => 'MV',
            self::MAURITANIA->value => 'MR',
            self::MAURITIUS->value => 'MU',
            self::MEXICO->value => 'MX',
            self::MOLDOVA->value => 'MD',
            self::MONGOLIA->value => 'MN',
            self::MOROCCO->value => 'MA',
            self::MOZAMBIQUE->value => 'MZ',
            self::NAMIBIA->value => 'NA',
            self::NEPAL->value => 'NP',
            self::NETHERLANDS->value => 'NL',
            self::NEW_CALEDONIA->value => 'NC',
            self::NEW_ZEALAND->value => 'NZ',
            self::NICARAGUA->value => 'NI',
            self::NIGERIA->value => 'NG',
            self::NORTH_MACEDONIA->value => 'MK',
            self::NORWAY->value => 'NO',
            self::OMAN->value => 'OM',
            self::PAKISTAN->value => 'PK',
            self::PANAMA->value => 'PA',
            self::PAPUA_NEW_GUINEA->value => 'PG',
            self::PARAGUAY->value => 'PY',
            self::PERU->value => 'PE',
            self::PHILIPPINES->value => 'PH',
            self::POLAND->value => 'PL',
            self::PORTUGAL->value => 'PT',
            self::PUERTO_RICO->value => 'PR',
            self::REUNION->value => 'RE',
            self::ROMANIA->value => 'RO',
            self::RUSSIA->value => 'RU',
            self::RWANDA->value => 'RW',
            self::SAINT_KITTS_AND_NEVIS->value => 'KN',
            self::SAINT_LUCIA->value => 'LC',
            self::SAINT_VINCENT_AND_GRENADINES->value => 'VC',
            self::SALVADOR->value => 'SV',
            self::SAMOA->value => 'WS',
            self::SAUDI_ARABIA->value => 'SA',
            self::SENEGAL->value => 'SN',
            self::SERBIA->value => 'RS',
            self::SEYCHELLES->value => 'SC',
            self::SIERRA_LEONE->value => 'SL',
            self::SINGAPORE->value => 'SG',
            self::SLOVAKIA->value => 'SK',
            self::SLOVENIA->value => 'SI',
            self::SOLOMON_ISLANDS->value => 'SB',
            self::SOUTH_AFRICA->value => 'ZA',
            self::SPAIN->value => 'ES',
            self::SRI_LANKA->value => 'LK',
            self::SURINAME->value => 'SR',
            self::SWAZILAND->value => 'SZ',
            self::SWEDEN->value => 'SE',
            self::SWITZERLAND->value => 'CH',
            self::TAIWAN->value => 'TW',
            self::TAJIKISTAN->value => 'TJ',
            self::TANZANIA->value => 'TZ',
            self::THAILAND->value => 'TH',
            self::TRINIDAD_AND_TOBAGO->value => 'TT',
            self::TOGO->value => 'TG',
            self::TUNISIA->value => 'TN',
            self::TURKMENISTAN->value => 'TM',
            self::UGANDA->value => 'UG',
            self::UKRAINE->value => 'UA',
            self::UNITED_KINGDOM->value => 'GB',
            self::URUGUAY->value => 'UY',
            self::USA->value => 'US',
            self::UZBEKISTAN->value => 'UZ',
            self::VENEZUELA->value => 'VE',
            self::VIETNAM->value => 'VN',
            self::ZAMBIA->value => 'ZM',
        ];
        
        return $reverseMap[strtolower($fiveSimCode)] ?? null;
    }
} 