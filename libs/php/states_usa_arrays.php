<?php
//  https://gist.github.com/maxrice/2776900

$states_names = array(
  "Alabama",
  "Alaska",
  "Arizona",
  "Arkansas",
  "California",
  "Colorado",
  "Connecticut",
  "Delaware",
  "District Of Columbia",
  "Florida",
  "Georgia",
  "Hawaii",
  "Idaho",
  "Illinois",
  "Indiana",
  "Iowa",
  "Kansas",
  "Kentucky",
  "Louisiana",
  "Maine",
  "Maryland",
  "Massachusetts",
  "Michigan",
  "Minnesota",
  "Mississippi",
  "Missouri",
  "Montana",
  "Nebraska",
  "Nevada",
  "New Hampshire",
  "New Jersey",
  "New Mexico",
  "New York",
  "North Carolina",
  "North Dakota",
  "Ohio",
  "Oklahoma",
  "Oregon",
  "Pennsylvania",
  "Rhode Island",
  "South Carolina",
  "South Dakota",
  "Tennessee",
  "Texas",
  "Utah",
  "Vermont",
  "Virginia",
  "Washington",
  "West Virginia",
  "Wisconsin",
  "Wyoming"
);


// Abbrevs to names
$states_abbrevs_names = array(
  'AL'=>"Alabama",
  'AK'=>"Alaska",
  'AZ'=>"Arizona",
  'AR'=>"Arkansas",
  'CA'=>"California",
  'CO'=>"Colorado",
  'CT'=>"Connecticut",
  'DE'=>"Delaware",
  'DC'=>"District Of Columbia",
  'FL'=>"Florida",
  'GA'=>"Georgia",
  'HI'=>"Hawaii",
  'ID'=>"Idaho",
  'IL'=>"Illinois",
  'IN'=>"Indiana",
  'IA'=>"Iowa",
  'KS'=>"Kansas",
  'KY'=>"Kentucky",
  'LA'=>"Louisiana",
  'ME'=>"Maine",
  'MD'=>"Maryland",
  'MA'=>"Massachusetts",
  'MI'=>"Michigan",
  'MN'=>"Minnesota",
  'MS'=>"Mississippi",
  'MO'=>"Missouri",
  'MT'=>"Montana",
  'NE'=>"Nebraska",
  'NV'=>"Nevada",
  'NH'=>"New Hampshire",
  'NJ'=>"New Jersey",
  'NM'=>"New Mexico",
  'NY'=>"New York",
  'NC'=>"North Carolina",
  'ND'=>"North Dakota",
  'OH'=>"Ohio",
  'OK'=>"Oklahoma",
  'OR'=>"Oregon",
  'PA'=>"Pennsylvania",
  'RI'=>"Rhode Island",
  'SC'=>"South Carolina",
  'SD'=>"South Dakota",
  'TN'=>"Tennessee",
  'TX'=>"Texas",
  'UT'=>"Utah",
  'VT'=>"Vermont",
  'VA'=>"Virginia",
  'WA'=>"Washington",
  'WV'=>"West Virginia",
  'WI'=>"Wisconsin",
  'WY'=>"Wyoming"
);


// Names to abbrevs
$states_names_abbrevs = array(
'Alabama'=>'AL',
'Alaska'=>'AK',
'Arizona'=>'AZ',
'Arkansas'=>'AR',
'California'=>'CA',
'Colorado'=>'CO',
'Connecticut'=>'CT',
'Delaware'=>'DE',
'Florida'=>'FL',
'Georgia'=>'GA',
'Hawaii'=>'HI',
'Idaho'=>'ID',
'Illinois'=>'IL',
'Indiana'=>'IN',
'Iowa'=>'IA',
'Kansas'=>'KS',
'Kentucky'=>'KY',
'Louisiana'=>'LA',
'Maine'=>'ME',
'Maryland'=>'MD',
'Massachusetts'=>'MA',
'Michigan'=>'MI',
'Minnesota'=>'MN',
'Mississippi'=>'MS',
'Missouri'=>'MO',
'Montana'=>'MT',
'Nebraska'=>'NE',
'Nevada'=>'NV',
'New Hampshire'=>'NH',
'New Jersey'=>'NJ',
'New Mexico'=>'NM',
'New York'=>'NY',
'North Carolina'=>'NC',
'North Dakota'=>'ND',
'Ohio'=>'OH',
'Oklahoma'=>'OK',
'Oregon'=>'OR',
'Pennsylvania'=>'PA',
'Rhode Island'=>'RI',
'South Carolina'=>'SC',
'South Dakota'=>'SD',
'Tennessee'=>'TN',
'Texas'=>'TX',
'Utah'=>'UT',
'Vermont'=>'VT',
'Virginia'=>'VA',
'Washington'=>'WA',
'West Virginia'=>'WV',
'Wisconsin'=>'WI',
'Wyoming'=>'WY'
);

// Indexes letter names
$states_indexes_letter = array(
    "A" => array(
        "AL" => "Alabama",
        "AK" => "Alaska",
        "AZ" => "Arizona",
        "AR" => "Arkansas"
    ),
    "C" => array(
        "CA" => "California",
        "CO" => "Colorado",
        "CT" => "Connecticut"
    ),
    "D" => array(
        "DE" => "Delaware",
        "DC" => "District of Columbia"
    ),
    "F" => array(
        "FL" => "Florida"
    ),
    "G" => array(
        "GA" => "Georgia"
    ),
    "H" => array(
        "HI" => "Hawaii"
    ),
    "I" => array(
        "ID" => "Idaho",
        "IL" => "Illinois",
        "IN" => "Indiana",
        "IA" => "Iowa"
    ),
    "K" => array(
        "KS" => "Kansas",
        "KY" => "Kentucky"
    ),
    "L" => array(
        "LA" => "Louisiana"
    ),
    "M" => array(
        "ME" => "Maine",
        "MD" => "Maryland",
        "MA" => "Massachusetts",
        "MI" => "Michigan",
        "MN" => "Minnesota",
        "MS" => "Mississippi",
        "MO" => "Missouri",
        "MT" => "Montana"
    ),
    "N" => array(
        "NE" => "Nebraska",
        "NV" => "Nevada",
        "NH" => "New Hampshire",
        "NJ" => "New Jersey",
        "NM" => "New Mexico",
        "NY" => "New York",
        "NC" => "North Carolina",
        "ND" => "North Dakota"
    ),
    "O" => array(
        "OH" => "Ohio",
        "OK" => "Oklahoma",
        "OR" => "Oregon"
    ),
    "P" => array(
        "PA" => "Pennsylvania"
    ),
    "R" => array(
        "RI" => "Rhode Island"
    ),
    "S" => array(
        "SC" => "South Carolina",
        "SD" => "South Dakota"
    ),
    "T" => array(
        "TN" => "Tennessee",
        "TX" => "Texas"
    ),
    "U" => array(
        "UT" => "Utah"
    ),
    "V" => array(
        "VT" => "Vermont",
        "VA" => "Virginia"
    ),
    "W" => array(
        "WA" => "Washington",
        "WV" => "West Virginia",
        "WI" => "Wisconsin",
        "WY" => "Wyoming"
    )
);

// Indexes number names
$states_indexes_number = array(
        'A' =>
            array (
                0 => 'Alabama',
                1 => 'Alaska',
                2 => 'Arizona',
                3 => 'Arkansas',
            ),
        'C' =>
            array (
                0 => 'California',
                1 => 'Colorado',
                2 => 'Connecticut',
            ),
        'D' =>
            array (
                0 => 'Delaware',
                1 => 'District of Columbia',
            ),
        'F' =>
            array (
                0 => 'Florida',
            ),
        'G' =>
            array (
                0 => 'Georgia',
            ),
        'H' =>
            array (
                0 => 'Hawaii',
            ),
        'I' =>
            array (
                0 => 'Idaho',
                1 => 'Illinois',
                2 => 'Indiana',
                3 => 'Iowa',
            ),
        'K' =>
            array (
                0 => 'Kansas',
                1 => 'Kentucky',
            ),
        'L' =>
            array (
                0 => 'Louisiana',
            ),
        'M' =>
            array (
                0 => 'Maine',
                1 => 'Maryland',
                2 => 'Massachusetts',
                3 => 'Michigan',
                4 => 'Minnesota',
                5 => 'Mississippi',
                6 => 'Missouri',
                7 => 'Montana',
            ),
        'N' =>
            array (
                0 => 'Nebraska',
                1 => 'Nevada',
                2 => 'New Hampshire',
                3 => 'New Jersey',
                4 => 'New Mexico',
                5 => 'New York',
                6 => 'North Carolina',
                7 => 'North Dakota',
            ),
        'O' =>
            array (
                0 => 'Ohio',
                1 => 'Oklahoma',
                2 => 'Oregon',
            ),
        'P' =>
            array (
                0 => 'Pennsylvania',
            ),
        'R' =>
            array (
                0 => 'Rhode Island',
            ),
        'S' =>
            array (
                0 => 'South Carolina',
                1 => 'South Dakota',
            ),
        'T' =>
            array (
                0 => 'Tennessee',
                1 => 'Texas',
            ),
        'U' =>
            array (
                0 => 'Utah',
            ),
        'V' =>
            array (
                0 => 'Vermont',
                1 => 'Virginia',
            ),
        'W' =>
            array (
                0 => 'Washington',
                1 => 'West Virginia',
                2 => 'Wisconsin',
                3 => 'Wyoming',
            )
    );

// Abbrevs
$us_state_abbrevs = array(
  'AL',
  'AK',
  'AS',
  'AZ',
  'AR',
  'CA',
  'CO',
  'CT',
  'DE',
  'DC',
  'FM',
  'FL',
  'GA',
  'GU',
  'HI',
  'ID',
  'IL',
  'IN',
  'IA',
  'KS',
  'KY',
  'LA',
  'ME',
  'MH',
  'MD',
  'MA',
  'MI',
  'MN',
  'MS',
  'MO',
  'MT',
  'NE',
  'NV',
  'NH',
  'NJ',
  'NM',
  'NY',
  'NC',
  'ND',
  'MP',
  'OH',
  'OK',
  'OR',
  'PW',
  'PA',
  'PR',
  'RI',
  'SC',
  'SD',
  'TN',
  'TX',
  'UT',
  'VT',
  'VI',
  'VA',
  'WA',
  'WV',
  'WI',
  'WY',
  'AE',
  'AA',
  'AP');

// Only abbrevs
$states_abbrevs_keyvalue = array(
    'AL'=>'AL',
    'AK'=>'AK',
    'AS'=>'AS',
    'AZ'=>'AZ',
    'AR'=>'AR',
    'CA'=>'CA',
    'CO'=>'CO',
    'CT'=>'CT',
    'DE'=>'DE',
    'DC'=>'DC',
    'FM'=>'FM',
    'FL'=>'FL',
    'GA'=>'GA',
    'GU'=>'GU',
    'HI'=>'HI',
    'ID'=>'ID',
    'IL'=>'IL',
    'IN'=>'IN',
    'IA'=>'IA',
    'KS'=>'KS',
    'KY'=>'KY',
    'LA'=>'LA',
    'ME'=>'ME',
    'MH'=>'MH',
    'MD'=>'MD',
    'MA'=>'MA',
    'MI'=>'MI',
    'MN'=>'MN',
    'MS'=>'MS',
    'MO'=>'MO',
    'MT'=>'MT',
    'NE'=>'NE',
    'NV'=>'NV',
    'NH'=>'NH',
    'NJ'=>'NJ',
    'NM'=>'NM',
    'NY'=>'NY',
    'NC'=>'NC',
    'ND'=>'ND',
    'MP'=>'MP',
    'OH'=>'OH',
    'OK'=>'OK',
    'OR'=>'OR',
    'PW'=>'PW',
    'PA'=>'PA',
    'PR'=>'PR',
    'RI'=>'RI',
    'SC'=>'SC',
    'SD'=>'SD',
    'TN'=>'TN',
    'TX'=>'TX',
    'UT'=>'UT',
    'VT'=>'VT',
    'VI'=>'VI',
    'VA'=>'VA',
    'WA'=>'WA',
    'WV'=>'WV',
    'WI'=>'WI',
    'WY'=>'WY',
    'AE'=>'AE',
    'AA'=>'AA',
    'AP'=>'AP'
);

//  Array names
$states_names_keyvalue = array(
    "Alabama" => "Alabama",
    "Alaska" => "Alaska",
    "Arizona" => "Arizona",
    "Arkansas" => "Arkansas",
    "California" => "California",
    "Colorado" => "Colorado",
    "Connecticut" => "Connecticut",
    "Delaware" => "Delaware",
    "District of Columbia" => "District of Columbia",
    "Florida" => "Florida",
    "Georgia" => "Georgia",
    "Hawaii" => "Hawaii",
    "Idaho" => "Idaho",
    "Illinois" => "Illinois",
    "Indiana" => "Indiana",
    "Iowa" => "Iowa",
    "Kansas" => "Kansas",
    "Kentucky" => "Kentucky",
    "Louisiana" => "Louisiana",
    "Maine" => "Maine",
    "Maryland" => "Maryland",
    "Massachusetts" => "Massachusetts",
    "Michigan" => "Michigan",
    "Minnesota" => "Minnesota",
    "Mississippi" => "Mississippi",
    "Missouri" => "Missouri",
    "Montana" => "Montana",
    "Nebraska" => "Nebraska",
    "Nevada" => "Nevada",
    "New Hampshire" => "New Hampshire",
    "New Jersey" => "New Jersey",
    "New Mexico" => "New Mexico",
    "New York" => "New York",
    "North Carolina" => "North Carolina",
    "North Dakota" => "North Dakota",
    "Ohio" => "Ohio",
    "Oklahoma" => "Oklahoma",
    "Oregon" => "Oregon",
    "Pennsylvania" => "Pennsylvania",
    "Rhode Island" => "Rhode Island",
    "South Carolina" => "South Carolina",
    "South Dakota" => "South Dakota",
    "Tennessee" => "Tennessee",
    "Texas" => "Texas",
    "Utah" => "Utah",
    "Vermont" => "Vermont",
    "Virginia" => "Virginia",
    "Washington" => "Washington",
    "West Virginia" => "West Virginia",
    "Wisconsin" => "Wisconsin",
    "Wyoming" => "Wyoming"
);

// Names array
$states_names_array = array(
            array('Alabama'),
            array('Alaska'),
            array('Arizona'),
            array('Arkansas'),
            array('California'),
            array('Colorado'),
            array('Connecticut'),
            array('Delaware'),
            array('District of Columbia'),
            array('Florida'),
            array('Georgia'),
            array('Hawaii'),
            array('Idaho'),
            array('Illinois'),
            array('Indiana'),
            array('Iowa'),
            array('Kansas'),
            array('Kentucky'),
            array('Louisiana'),
            array('Maine'),
            array('Maryland'),
            array('Massachusetts'),
            array('Michigan'),
            array('Minnesota'),
            array('Mississippi'),
            array('Missouri'),
            array('Montana'),
            array('Nebraska'),
            array('Nevada'),
            array('New Hampshire'),
            array('New Jersey'),
            array('New Mexico'),
            array('New York'),
            array('North Carolina'),
            array('North Dakota'),
            array('Ohio'),
            array('Oklahoma'),
            array('Oregon'),
            array('Pennsylvania'),
            array('Rhode Island'),
            array('South Carolina'),
            array('South Dakota'),
            array('Tennessee'),
            array('Texas'),
            array('Utah'),
            array('Vermont'),
            array('Virginia'),
            array('Washington'),
            array('West Virginia'),
            array('Wisconsin'),
            array('Wyoming')
        );

/* From https://www.usps.com/send/official-abbreviations.htm */
$all_states_abbrevs_names = array(
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AS'=>'AMERICAN SAMOA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FM'=>'FEDERATED STATES OF MICRONESIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'GU'=>'GUAM GU',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MH'=>'MARSHALL ISLANDS',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'MP'=>'NORTHERN MARIANA ISLANDS',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PW'=>'PALAU',
	'PA'=>'PENNSYLVANIA',
	'PR'=>'PUERTO RICO',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VI'=>'VIRGIN ISLANDS',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
	'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
	'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
	'AP'=>'ARMED FORCES PACIFIC');


// Condicional key_exists
$states_condicionals_abbrevs = array(
  'al' => 'ALABAMA',
  'Al' => 'ALABAMA',
  'aL' => 'ALABAMA',
  'AL' => 'ALABAMA',
  'ak' => 'ALASKA',
  'Ak' => 'ALASKA',
  'aK' => 'ALASKA',
  'AK' => 'ALASKA',
  'as' => 'AMERICAN SAMOA',
  'As' => 'AMERICAN SAMOA',
  'aS' => 'AMERICAN SAMOA',
  'AS' => 'AMERICAN SAMOA',
  'az' => 'ARIZONA',
  'Az' => 'ARIZONA',
  'aZ' => 'ARIZONA',
  'AZ' => 'ARIZONA',
  'ar' => 'ARKANSAS',
  'Ar' => 'ARKANSAS',
  'aR' => 'ARKANSAS',
  'AR' => 'ARKANSAS',
  'ca' => 'CALIFORNIA',
  'Ca' => 'CALIFORNIA',
  'cA' => 'CALIFORNIA',
  'CA' => 'CALIFORNIA',
  'co' => 'COLORADO',
  'Co' => 'COLORADO',
  'cO' => 'COLORADO',
  'CO' => 'COLORADO',
  'ct' => 'CONNECTICUT',
  'Ct' => 'CONNECTICUT',
  'cT' => 'CONNECTICUT',
  'CT' => 'CONNECTICUT',
  'de' => 'DELAWARE',
  'De' => 'DELAWARE',
  'dE' => 'DELAWARE',
  'DE' => 'DELAWARE',
  'dc' => 'DISTRICT OF COLUMBIA',
  'Dc' => 'DISTRICT OF COLUMBIA',
  'dC' => 'DISTRICT OF COLUMBIA',
  'DC' => 'DISTRICT OF COLUMBIA',
  'fm' => 'FEDERATED STATES OF MICRONESIA',
  'Fm' => 'FEDERATED STATES OF MICRONESIA',
  'fM' => 'FEDERATED STATES OF MICRONESIA',
  'FM' => 'FEDERATED STATES OF MICRONESIA',
  'fl' => 'FLORIDA',
  'Fl' => 'FLORIDA',
  'fL' => 'FLORIDA',
  'FL' => 'FLORIDA',
  'ga' => 'GEORGIA',
  'Ga' => 'GEORGIA',
  'gA' => 'GEORGIA',
  'GA' => 'GEORGIA',
  'gu' => 'GUAM GU',
  'Gu' => 'GUAM GU',
  'gU' => 'GUAM GU',
  'GU' => 'GUAM GU',
  'hi' => 'HAWAII',
  'Hi' => 'HAWAII',
  'hI' => 'HAWAII',
  'HI' => 'HAWAII',
  'id' => 'IDAHO',
  'Id' => 'IDAHO',
  'iD' => 'IDAHO',
  'ID' => 'IDAHO',
  'il' => 'ILLINOIS',
  'Il' => 'ILLINOIS',
  'iL' => 'ILLINOIS',
  'IL' => 'ILLINOIS',
  'in' => 'INDIANA',
  'In' => 'INDIANA',
  'iN' => 'INDIANA',
  'IN' => 'INDIANA',
  'ia' => 'IOWA',
  'Ia' => 'IOWA',
  'iA' => 'IOWA',
  'IA' => 'IOWA',
  'ks' => 'KANSAS',
  'Ks' => 'KANSAS',
  'kS' => 'KANSAS',
  'KS' => 'KANSAS',
  'ky' => 'KENTUCKY',
  'Ky' => 'KENTUCKY',
  'kY' => 'KENTUCKY',
  'KY' => 'KENTUCKY',
  'la' => 'LOUISIANA',
  'La' => 'LOUISIANA',
  'lA' => 'LOUISIANA',
  'LA' => 'LOUISIANA',
  'me' => 'MAINE',
  'Me' => 'MAINE',
  'mE' => 'MAINE',
  'ME' => 'MAINE',
  'mh' => 'MARSHALL ISLANDS',
  'Mh' => 'MARSHALL ISLANDS',
  'mH' => 'MARSHALL ISLANDS',
  'MH' => 'MARSHALL ISLANDS',
  'md' => 'MARYLAND',
  'Md' => 'MARYLAND',
  'mD' => 'MARYLAND',
  'MD' => 'MARYLAND',
  'ma' => 'MASSACHUSETTS',
  'Ma' => 'MASSACHUSETTS',
  'mA' => 'MASSACHUSETTS',
  'MA' => 'MASSACHUSETTS',
  'mi' => 'MICHIGAN',
  'Mi' => 'MICHIGAN',
  'mI' => 'MICHIGAN',
  'MI' => 'MICHIGAN',
  'mn' => 'MINNESOTA',
  'Mn' => 'MINNESOTA',
  'mN' => 'MINNESOTA',
  'MN' => 'MINNESOTA',
  'ms' => 'MISSISSIPPI',
  'Ms' => 'MISSISSIPPI',
  'mS' => 'MISSISSIPPI',
  'MS' => 'MISSISSIPPI',
  'mo' => 'MISSOURI',
  'Mo' => 'MISSOURI',
  'mO' => 'MISSOURI',
  'MO' => 'MISSOURI',
  'mt' => 'MONTANA',
  'Mt' => 'MONTANA',
  'mT' => 'MONTANA',
  'MT' => 'MONTANA',
  'ne' => 'NEBRASKA',
  'Ne' => 'NEBRASKA',
  'nE' => 'NEBRASKA',
  'NE' => 'NEBRASKA',
  'nv' => 'NEVADA',
  'Nv' => 'NEVADA',
  'nV' => 'NEVADA',
  'NV' => 'NEVADA',
  'nh' => 'NEW HAMPSHIRE',
  'Nh' => 'NEW HAMPSHIRE',
  'nH' => 'NEW HAMPSHIRE',
  'NH' => 'NEW HAMPSHIRE',
  'nj' => 'NEW JERSEY',
  'Nj' => 'NEW JERSEY',
  'nJ' => 'NEW JERSEY',
  'NJ' => 'NEW JERSEY',
  'nm' => 'NEW MEXICO',
  'Nm' => 'NEW MEXICO',
  'nM' => 'NEW MEXICO',
  'NM' => 'NEW MEXICO',
  'ny' => 'NEW YORK',
  'Ny' => 'NEW YORK',
  'nY' => 'NEW YORK',
  'NY' => 'NEW YORK',
  'nc' => 'NORTH CAROLINA',
  'Nc' => 'NORTH CAROLINA',
  'nC' => 'NORTH CAROLINA',
  'NC' => 'NORTH CAROLINA',
  'nd' => 'NORTH DAKOTA',
  'Nd' => 'NORTH DAKOTA',
  'nD' => 'NORTH DAKOTA',
  'ND' => 'NORTH DAKOTA',
  'mp' => 'NORTHERN MARIANA ISLANDS',
  'Mp' => 'NORTHERN MARIANA ISLANDS',
  'mP' => 'NORTHERN MARIANA ISLANDS',
  'MP' => 'NORTHERN MARIANA ISLANDS',
  'oh' => 'OHIO',
  'Oh' => 'OHIO',
  'oH' => 'OHIO',
  'OH' => 'OHIO',
  'ok' => 'OKLAHOMA',
  'Ok' => 'OKLAHOMA',
  'oK' => 'OKLAHOMA',
  'OK' => 'OKLAHOMA',
  'or' => 'OREGON',
  'Or' => 'OREGON',
  'oR' => 'OREGON',
  'OR' => 'OREGON',
  'pw' => 'PALAU',
  'Pw' => 'PALAU',
  'pW' => 'PALAU',
  'PW' => 'PALAU',
  'pa' => 'PENNSYLVANIA',
  'Pa' => 'PENNSYLVANIA',
  'pA' => 'PENNSYLVANIA',
  'PA' => 'PENNSYLVANIA',
  'pr' => 'PUERTO RICO',
  'Pr' => 'PUERTO RICO',
  'pR' => 'PUERTO RICO',
  'PR' => 'PUERTO RICO',
  'ri' => 'RHODE ISLAND',
  'Ri' => 'RHODE ISLAND',
  'rI' => 'RHODE ISLAND',
  'RI' => 'RHODE ISLAND',
  'sc' => 'SOUTH CAROLINA',
  'Sc' => 'SOUTH CAROLINA',
  'sC' => 'SOUTH CAROLINA',
  'SC' => 'SOUTH CAROLINA',
  'sd' => 'SOUTH DAKOTA',
  'Sd' => 'SOUTH DAKOTA',
  'sD' => 'SOUTH DAKOTA',
  'SD' => 'SOUTH DAKOTA',
  'tn' => 'TENNESSEE',
  'Tn' => 'TENNESSEE',
  'tN' => 'TENNESSEE',
  'TN' => 'TENNESSEE',
  'tx' => 'TEXAS',
  'Tx' => 'TEXAS',
  'tX' => 'TEXAS',
  'TX' => 'TEXAS',
  'ut' => 'UTAH',
  'Ut' => 'UTAH',
  'uT' => 'UTAH',
  'UT' => 'UTAH',
  'vt' => 'VERMONT',
  'Vt' => 'VERMONT',
  'vT' => 'VERMONT',
  'VT' => 'VERMONT',
  'vi' => 'VIRGIN ISLANDS',
  'Vi' => 'VIRGIN ISLANDS',
  'vI' => 'VIRGIN ISLANDS',
  'VI' => 'VIRGIN ISLANDS',
  'va' => 'VIRGINIA',
  'Va' => 'VIRGINIA',
  'vA' => 'VIRGINIA',
  'VA' => 'VIRGINIA',
  'wa' => 'WASHINGTON',
  'Wa' => 'WASHINGTON',
  'wA' => 'WASHINGTON',
  'WA' => 'WASHINGTON',
  'wv' => 'WEST VIRGINIA',
  'Wv' => 'WEST VIRGINIA',
  'wV' => 'WEST VIRGINIA',
  'WV' => 'WEST VIRGINIA',
  'wi' => 'WISCONSIN',
  'Wi' => 'WISCONSIN',
  'wI' => 'WISCONSIN',
  'WI' => 'WISCONSIN',
  'wy' => 'WYOMING',
  'Wy' => 'WYOMING',
  'wY' => 'WYOMING',
  'WY' => 'WYOMING',
  'ae' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
  'Ae' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
  'aE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
  'AE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
  'aa' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
  'Aa' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
  'aA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
  'AA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
  'ap' => 'ARMED FORCES PACIFIC',
  'Ap' => 'ARMED FORCES PACIFIC',
  'aP' => 'ARMED FORCES PACIFIC',
  'AP' => 'ARMED FORCES PACIFIC',
);

  // States coords
  $states_coords = array(
        'AL'=>'32.6010112,-86.6807365',
        'AK'=>'61.3025006,-158.7750198',
        'AZ'=>'34.1682185,-111.930907',
        'AR'=>'34.7519275,-92.1313784',
        'CA'=>'37.2718745,-119.2704153',
        'CO'=>'38.9979339,-105.550567',
        'CT'=>'41.5187835,-72.757507',
        'DE'=>'39.145251,-75.4189206',
        'DC'=>'38.8993487,-77.0145666',
        'FL'=>'27.9757279,-83.8330166',
        'GA'=>'32.6781248,-83.2229757',
        'HI'=>'20.46,-157.505',
        'ID'=>'45.4945756,-114.1424303',
        'IL'=>'39.739318,-89.504139',
        'IN'=>'39.7662195,-86.441277',
        'IA'=>'41.9383166,-93.389798',
        'KS'=>'38.4987789,-98.3200779',
        'KY'=>'37.8222935,-85.7682399',
        'LA'=>'30.9733766,-91.4299097',
        'ME'=>'45.2185133,-69.0148656',
        'MD'=>'38.8063524,-77.2684162',
        'MA'=>'42.0629398,-71.718067',
        'MI'=>'44.9435598,-86.4158049',
        'MN'=>'46.4418595,-93.3655146',
        'MS'=>'32.5851062,-89.8772196',
        'MO'=>'38.3046615,-92.437099',
        'MT'=>'46.6797995,-110.044783',
        'NE'=>'41.5008195,-99.680902',
        'NV'=>'38.502032,-117.0230604',
        'NH'=>'44.0012306,-71.5799231',
        'NJ'=>'40.1430058,-74.7311156',
        'NM'=>'34.1662325,-106.0260685',
        'NY'=>'40.7056258,-73.97968',
        'NC'=>'35.2145629,-79.8912675',
        'ND'=>'47.4678819,-100.3022655',
        'OH'=>'40.1903624,-82.6692525',
        'OK'=>'35.3097654,-98.7165585',
        'OR'=>'44.1419049,-120.5380993',
        'PA'=>'40.9945928,-77.6046984',
        'RI'=>'41.5827282,-71.5064508',
        'SC'=>'33.62505,-80.9470381',
        'SD'=>'44.2126995,-100.2471641',
        'TN'=>'35.830521,-85.9785989',
        'TX'=>'31.1693363,-100.0768425',
        'UT'=>'39.4997605,-111.547028',
        'VT'=>'43.8717545,-72.4477828',
        'VA'=>'38.0033855,-79.4587861',
        'WA'=>'38.8993487,-77.0145665',
        'WV'=>'38.9201705,-80.1816905',
        'WI'=>'44.7862968,-89.8267049',
        'WY'=>'43.000325,-107.5545669',
    );


    // Improved names coords
    /*
    $statesCoord = [
    'AL' => ['lat' => 32.6010112, 'lng' => -86.6807365],
    'AK' => ['lat' => 61.3025006, 'lng' => -158.7750198],
    'AZ' => ['lat' => 34.1682185, 'lng' => -111.930907],
    'AR' => ['lat' => 34.7519275, 'lng' => -92.1313784],
    'CA' => ['lat' => 37.2718745, 'lng' => -119.2704153],
    'CO' => ['lat' => 38.9979339, 'lng' => -105.550567],
    'CT' => ['lat' => 41.5187835, 'lng' => -72.757507],
    'DE' => ['lat' => 39.145251, 'lng' => -75.4189206],
    'DC' => ['lat' => 38.8993487, 'lng' => -77.0145666],
    'FL' => ['lat' => 27.9757279, 'lng' => -83.8330166],
    'GA' => ['lat' => 32.6781248, 'lng' => -83.2229757],
    'HI' => ['lat' => 20.46, 'lng' => -157.505],
    'ID' => ['lat' => 45.4945756, 'lng' => -114.1424303],
    'IL' => ['lat' => 39.739318, 'lng' => -89.504139],
    'IN' => ['lat' => 39.7662195, 'lng' => -86.441277],
    'IA' => ['lat' => 41.9383166, 'lng' => -93.389798],
    'KS' => ['lat' => 38.4987789, 'lng' => -98.3200779],
    'KY' => ['lat' => 37.8222935, 'lng' => -85.7682399],
    'LA' => ['lat' => 30.9733766, 'lng' => -91.4299097],
    'ME' => ['lat' => 45.2185133, 'lng' => -69.0148656],
    'MD' => ['lat' => 38.8063524, 'lng' => -77.2684162],
    'MA' => ['lat' => 42.0629398, 'lng' => -71.718067],
    'MI' => ['lat' => 44.9435598, 'lng' => -86.4158049],
    'MN' => ['lat' => 46.4418595, 'lng' => -93.3655146],
    'MS' => ['lat' => 32.5851062, 'lng' => -89.8772196],
    'MO' => ['lat' => 38.3046615, 'lng' => -92.437099],
    'MT' => ['lat' => 46.6797995, 'lng' => -110.044783],
    'NE' => ['lat' => 41.5008195, 'lng' => -99.680902],
    'NV' => ['lat' => 38.502032, 'lng' => -117.0230604],
    'NH' => ['lat' => 44.0012306, 'lng' => -71.5799231],
    'NJ' => ['lat' => 40.1430058, 'lng' => -74.7311156],
    'NM' => ['lat' => 34.1662325, 'lng' => -106.0260685],
    'NY' => ['lat' => 40.7056258, 'lng' => -73.97968],
    'NC' => ['lat' => 35.2145629, 'lng' => -79.8912675],
    'ND' => ['lat' => 47.4678819, 'lng' => -100.3022655],
    'OH' => ['lat' => 40.1903624, 'lng' => -82.6692525],
    'OK' => ['lat' => 35.3097654, 'lng' => -98.7165585],
    'OR' => ['lat' => 44.1419049, 'lng' => -120.5380993],
    'PA' => ['lat' => 40.9945928, 'lng' => -77.6046984],
    'RI' => ['lat' => 41.5827282, 'lng' => -71.5064508],
    'SC' => ['lat' => 33.62505, 'lng' => -80.9470381],
    'SD' => ['lat' => 44.2126995, 'lng' => -100.2471641],
    'TN' => ['lat' => 35.830521, 'lng' => -85.9785989],
    'TX' => ['lat' => 31.1693363, 'lng' => -100.0768425],
    'UT' => ['lat' => 39.4997605, 'lng' => -111.547028],
    'VT' => ['lat' => 43.8717545, 'lng' => -72.4477828],
    'VA' => ['lat' => 38.0033855, 'lng' => -79.4587861],
    'WA' => ['lat' => 38.8993487, 'lng' => -77.0145665],
    'WV' => ['lat' => 38.9201705, 'lng' => -80.1816905],
    'WI' => ['lat' => 44.7862968, 'lng' => -89.8267049],
    'WY' => ['lat' => 43.000325, 'lng' => -107.5545669],
];
    */

    // Icon birds states
    $states_names_birds = array(
    'Alabama' => 'Yellowhammer',
    'Alaska' => 'Willow Ptarmigan',
    'Arizona' => 'Cactus Wren',
    'Arkansas' => 'Mockingbird',
    'California' => 'California Valley Quail',
    'Colorado' => 'Lark Bunting',
    'Connecticut' => 'Robin',
    'Delaware' => 'Blue Hen Chicken',
    'Florida' => 'Mockingbird',
    'Georgia' => 'Brown Thrasher',
    'Hawaii' => 'Nene',
    'Idaho' => 'Mountain Bluebird',
    'Illinois' => 'Cardinal',
    'Indiana' => 'Cardinal',
    'Iowa' => 'Eastern Goldfinch',
    'Kansas' => 'Western Meadowlark',
    'Kentucky' => 'Cardinal',
    'Louisiana' => 'Eastern Brown Pelican',
    'Maine' => 'Chickadee',
    'Maryland' => 'Baltimore Oriole',
    'Massachusetts' => 'Chickadee',
    'Michigan' => 'Robin',
    'Minnesota' => 'Common Loon',
    'Mississippi' => 'Mockingbird',
    'Missouri' => 'Bluebird',
    'Montana' => 'Western Meadowlark',
    'Nebraska' => 'Western Meadowlark',
    'Nevada' => 'Mountain Bluebird',
    'New Hampshire' => 'Purple Finch',
    'New Jersey' => 'Eastern Goldfinch',
    'New Mexico' => 'Roadrunner',
    'New York' => 'Bluebird',
    'North Carolina' => 'Cardinal',
    'North Dakota' => 'Western Meadowlark',
    'Ohio' => 'Cardinal',
    'Oklahoma' => 'Scissor-tailed Flycatcher',
    'Oregon' => 'Western Meadowlark',
    'Pennsylvania' => 'Ruffed Grouse',
    'Rhode Island' => 'Rhode Island Red',
    'South Carolina' => 'Great Carolina Wren',
    'South Dakota' => 'Ring-necked Pheasant',
    'Tennessee' => 'Mockingbird',
    'Texas' => 'Mockingbird',
    'Utah' => 'Common American Gull',
    'Vermont' => 'Hermit Thrush',
    'Virginia' => 'Cardinal ',
    'Washington' => 'Willow Goldfinch',
    'West Virginia' => 'Cardinal',
    'Wisconsin' => 'Robin',
    'Wyoming' => 'Western Meadowlark'
  );