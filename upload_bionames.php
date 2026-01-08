<?php

require_once (dirname(__FILE__) . '/upload.php');

$debug = false;

$filename = 'archive.jsonl';

$count = 0;
$force = false;
//$force = true;

$json = '{
    "total_rows": 253834,
    "offset": 23741,
    "rows": [
        {
            "id": "41f8ee4c6d2d79115fa22a9072fefdca422f532a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=0",
            "value": "41f8ee4c6d2d79115fa22a9072fefdca422f532a"
        },
        {
            "id": "5bdbbacbb4d2697d80eaef464f4c663157177a70",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1000",
            "value": "5bdbbacbb4d2697d80eaef464f4c663157177a70"
        },
        {
            "id": "1198b7ee5d8f4c93fcb2918324f606ef28016e94",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1006",
            "value": "1198b7ee5d8f4c93fcb2918324f606ef28016e94"
        },
        {
            "id": "c5ae46186feab917cea0a5fed4c2b7ddf9ab504a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1008",
            "value": "c5ae46186feab917cea0a5fed4c2b7ddf9ab504a"
        },
        {
            "id": "aef401c306d20723dcbd6b2346965534ca4d3f6d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1009",
            "value": "aef401c306d20723dcbd6b2346965534ca4d3f6d"
        },
        {
            "id": "7cb7ebd82d84d7a797b95b3412439478298556e4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1013",
            "value": "7cb7ebd82d84d7a797b95b3412439478298556e4"
        },
        {
            "id": "00d6c3da47773d9a3c970c89fe9edf2b569fa7d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=102",
            "value": "00d6c3da47773d9a3c970c89fe9edf2b569fa7d4"
        },
        {
            "id": "5be4e6c5b26c3feea8e00d8c36df55ef90714d96",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1021",
            "value": "5be4e6c5b26c3feea8e00d8c36df55ef90714d96"
        },
        {
            "id": "6276619dafcfd88ddf757e6b17ae309a7f109d88",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1026",
            "value": "6276619dafcfd88ddf757e6b17ae309a7f109d88"
        },
        {
            "id": "de081852677b2aec727ada3f1eaaa05688b13086",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1028",
            "value": "de081852677b2aec727ada3f1eaaa05688b13086"
        },
        {
            "id": "f81135e26324e13bed071ca380d893cccd385aed",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1033",
            "value": "f81135e26324e13bed071ca380d893cccd385aed"
        },
        {
            "id": "49dc169422e796c362529b99c6233c5f7b36d329",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1034",
            "value": "49dc169422e796c362529b99c6233c5f7b36d329"
        },
        {
            "id": "d7d69f305695e3a46f675b12a509d4800337956d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1039",
            "value": "d7d69f305695e3a46f675b12a509d4800337956d"
        },
        {
            "id": "0adf6de5a571e9141128f6865f05e91fc65d4c61",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1040",
            "value": "0adf6de5a571e9141128f6865f05e91fc65d4c61"
        },
        {
            "id": "ca6cbb5eb0fafe1555998ea89290e24909057a8e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1051",
            "value": "ca6cbb5eb0fafe1555998ea89290e24909057a8e"
        },
        {
            "id": "40b707fc0b5a89933625b8b3f696dea45977b5e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1052",
            "value": "40b707fc0b5a89933625b8b3f696dea45977b5e6"
        },
        {
            "id": "64bec29cda5853c223253b58f6532516a950c918",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1053",
            "value": "64bec29cda5853c223253b58f6532516a950c918"
        },
        {
            "id": "2330f1828bc08f3ff2324e9f5e9e5f95766dba30",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1055",
            "value": "2330f1828bc08f3ff2324e9f5e9e5f95766dba30"
        },
        {
            "id": "4ff81061cb08f37c9cd0de3d4c49705c6b1e765d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1057",
            "value": "4ff81061cb08f37c9cd0de3d4c49705c6b1e765d"
        },
        {
            "id": "fd01290e1640dc31309f28db24831bc02a879c04",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1059",
            "value": "fd01290e1640dc31309f28db24831bc02a879c04"
        },
        {
            "id": "8d86eb2ecf2e1932c93f60fcb630d702719b2ed2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1060",
            "value": "8d86eb2ecf2e1932c93f60fcb630d702719b2ed2"
        },
        {
            "id": "ce71bc63a52d847efee0f8debc62bd5b5ac88332",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1061",
            "value": "ce71bc63a52d847efee0f8debc62bd5b5ac88332"
        },
        {
            "id": "1fafc0e86f784d158c28ceb2bb82cb0cf1817a7e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1062",
            "value": "1fafc0e86f784d158c28ceb2bb82cb0cf1817a7e"
        },
        {
            "id": "d2ed2f220c74474d7b79c860a8886bb7d150eaf9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1063",
            "value": "d2ed2f220c74474d7b79c860a8886bb7d150eaf9"
        },
        {
            "id": "9af5a4bc0485284d33df9606e33fef70c5236947",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1064",
            "value": "9af5a4bc0485284d33df9606e33fef70c5236947"
        },
        {
            "id": "15b316d4c5be03ac93b716e5ac5133e55fb4a6a4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1066",
            "value": "15b316d4c5be03ac93b716e5ac5133e55fb4a6a4"
        },
        {
            "id": "4126ac57bd84a780764f3a60c29033d5e3a099a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1069",
            "value": "4126ac57bd84a780764f3a60c29033d5e3a099a2"
        },
        {
            "id": "7728c04c2f37798d7dbc6478cce66b9a4a50ee7c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1083",
            "value": "7728c04c2f37798d7dbc6478cce66b9a4a50ee7c"
        },
        {
            "id": "145a04b93a95eddb99685fc0aed0b736eabe5fbd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1084",
            "value": "145a04b93a95eddb99685fc0aed0b736eabe5fbd"
        },
        {
            "id": "6cff90777ba2f26f746cbd172ae4fbb4c645b14f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1085",
            "value": "6cff90777ba2f26f746cbd172ae4fbb4c645b14f"
        },
        {
            "id": "9e690cef3b44163c58a53c1ef1503ff0b768ad67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1086",
            "value": "9e690cef3b44163c58a53c1ef1503ff0b768ad67"
        },
        {
            "id": "cbb11329ec34478eab6ace74ea36cee8ce54f7b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1088",
            "value": "cbb11329ec34478eab6ace74ea36cee8ce54f7b2"
        },
        {
            "id": "106d74df296088958a693ff6ce27a4b76f450235",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1089",
            "value": "106d74df296088958a693ff6ce27a4b76f450235"
        },
        {
            "id": "5ebb52c79583ab24a2f0f4e63f4f134dd8444797",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=109",
            "value": "5ebb52c79583ab24a2f0f4e63f4f134dd8444797"
        },
        {
            "id": "4d50519bc312d18c7f595197a8f7a6b8c667a6cc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1093",
            "value": "4d50519bc312d18c7f595197a8f7a6b8c667a6cc"
        },
        {
            "id": "6b376cea434823245d8911d700f9290dca6c24a4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1095",
            "value": "6b376cea434823245d8911d700f9290dca6c24a4"
        },
        {
            "id": "c38f5ba61137e58db5059221f556abdd651e1bf1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=11",
            "value": "c38f5ba61137e58db5059221f556abdd651e1bf1"
        },
        {
            "id": "7df3632e6a6fe46000302605ad850e47d6213f4c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1109",
            "value": "7df3632e6a6fe46000302605ad850e47d6213f4c"
        },
        {
            "id": "2b9ef8f9979216860e4bff442e1d395292988258",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1110",
            "value": "2b9ef8f9979216860e4bff442e1d395292988258"
        },
        {
            "id": "6d1158b5c03d3ca87728e7eea2f193ce723858d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1112",
            "value": "6d1158b5c03d3ca87728e7eea2f193ce723858d4"
        },
        {
            "id": "63c84ccb999c6fcd60026f7f6b9759ebc6590dc6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1113",
            "value": "63c84ccb999c6fcd60026f7f6b9759ebc6590dc6"
        },
        {
            "id": "69e077f4ae6e476bf1e7c21cddfd5311c3db21b5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1114",
            "value": "69e077f4ae6e476bf1e7c21cddfd5311c3db21b5"
        },
        {
            "id": "5df1c345a3e7b63fa9da046c50a6bde4ae9b54cd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1116",
            "value": "5df1c345a3e7b63fa9da046c50a6bde4ae9b54cd"
        },
        {
            "id": "7734e055072b5808772319387b10939f6152f2e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1129",
            "value": "7734e055072b5808772319387b10939f6152f2e1"
        },
        {
            "id": "f3dc1867a0fc9b2453842b2b31aa8d768d46e05e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1130",
            "value": "f3dc1867a0fc9b2453842b2b31aa8d768d46e05e"
        },
        {
            "id": "13781ae1315de58c5308875fe61b9cdb426689e8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1132",
            "value": "13781ae1315de58c5308875fe61b9cdb426689e8"
        },
        {
            "id": "b601af7f51832abc5dbebd9154a96f95b5db858a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1134",
            "value": "b601af7f51832abc5dbebd9154a96f95b5db858a"
        },
        {
            "id": "8969581c0d2ed51f53ac14b2ee1de6d7fdc8af90",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1136",
            "value": "8969581c0d2ed51f53ac14b2ee1de6d7fdc8af90"
        },
        {
            "id": "4ad876953bf9e230659151c5c481f020f26531e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1137",
            "value": "4ad876953bf9e230659151c5c481f020f26531e6"
        },
        {
            "id": "52e95bdb91f2a6ab30573df788157629138cb162",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1139",
            "value": "52e95bdb91f2a6ab30573df788157629138cb162"
        },
        {
            "id": "f19ba646be6a2165e4126fd46c870a8525fe3c80",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1140",
            "value": "f19ba646be6a2165e4126fd46c870a8525fe3c80"
        },
        {
            "id": "64e114620f4bf172838bd35dba9368a958ad2529",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1144",
            "value": "64e114620f4bf172838bd35dba9368a958ad2529"
        },
        {
            "id": "e87b1e7a52af33fecaf7c55ea031c317bd7c1683",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1154",
            "value": "e87b1e7a52af33fecaf7c55ea031c317bd7c1683"
        },
        {
            "id": "633edb869f2fded9405f27a49f163208cd8df0ee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1157",
            "value": "633edb869f2fded9405f27a49f163208cd8df0ee"
        },
        {
            "id": "96ab8cb41aeada86baa088f22a6354799beca7d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1159",
            "value": "96ab8cb41aeada86baa088f22a6354799beca7d3"
        },
        {
            "id": "4297f3097f59d4b2ef112041f666d548f65a54f2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1160",
            "value": "4297f3097f59d4b2ef112041f666d548f65a54f2"
        },
        {
            "id": "409211e8317d93191a53fb623a5f73b4f5bd9f45",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1162",
            "value": "409211e8317d93191a53fb623a5f73b4f5bd9f45"
        },
        {
            "id": "607e509a56d8e3521fbba4f8f484182fd46a293c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1163",
            "value": "607e509a56d8e3521fbba4f8f484182fd46a293c"
        },
        {
            "id": "cb22328f4fde34160ebeca910320241b20cea483",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1164",
            "value": "cb22328f4fde34160ebeca910320241b20cea483"
        },
        {
            "id": "d60da0abd5a9228195d168c0ab9a8df70ea6ea05",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1165",
            "value": "d60da0abd5a9228195d168c0ab9a8df70ea6ea05"
        },
        {
            "id": "bfb583b60851b2217ba07d878f6e8557c9fe6a72",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1166",
            "value": "bfb583b60851b2217ba07d878f6e8557c9fe6a72"
        },
        {
            "id": "a9e6d0298606f06a8b8dfe09433b88d8f769b42f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1168",
            "value": "a9e6d0298606f06a8b8dfe09433b88d8f769b42f"
        },
        {
            "id": "0b84d5e4efae57c79e5a537eda935d468168c902",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1169",
            "value": "0b84d5e4efae57c79e5a537eda935d468168c902"
        },
        {
            "id": "b6268db4a427027d3d5cf1b16e737ec0611245ad",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1171",
            "value": "b6268db4a427027d3d5cf1b16e737ec0611245ad"
        },
        {
            "id": "604ed13fa511163727511c537d43b9863cf50df7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1174",
            "value": "604ed13fa511163727511c537d43b9863cf50df7"
        },
        {
            "id": "d3e71252a3303c6745aca969f596746c039b7898",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1177",
            "value": "d3e71252a3303c6745aca969f596746c039b7898"
        },
        {
            "id": "2e3529503048220539fb5cde0b33d79b60d38288",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1179",
            "value": "2e3529503048220539fb5cde0b33d79b60d38288"
        },
        {
            "id": "44351201e2a00a07da88f0358773aef85d8d24c8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1180",
            "value": "44351201e2a00a07da88f0358773aef85d8d24c8"
        },
        {
            "id": "4fb9d70e905d4fa56609f9113892ffa79fb4a08a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1191",
            "value": "4fb9d70e905d4fa56609f9113892ffa79fb4a08a"
        },
        {
            "id": "79a89172bc8944da3a7e77a824a404deb6019477",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1195",
            "value": "79a89172bc8944da3a7e77a824a404deb6019477"
        },
        {
            "id": "413725c5d714ef3967ed23fa777a74ee2ae584e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1196",
            "value": "413725c5d714ef3967ed23fa777a74ee2ae584e3"
        },
        {
            "id": "3a7d560398c2faa7fd98581c26db23ad7ae0696c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1200",
            "value": "3a7d560398c2faa7fd98581c26db23ad7ae0696c"
        },
        {
            "id": "1b762c5635bdeb8bcecdd1347391b0fa4088397f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1210",
            "value": "1b762c5635bdeb8bcecdd1347391b0fa4088397f"
        },
        {
            "id": "c5b55ff3659dff4d7918bac8dcd4b633755f028a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1213",
            "value": "c5b55ff3659dff4d7918bac8dcd4b633755f028a"
        },
        {
            "id": "46745e4be6cfe10e20af977be9e9a6575f8cf06a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1214",
            "value": "46745e4be6cfe10e20af977be9e9a6575f8cf06a"
        },
        {
            "id": "6ab473951a7f92055414b037f683539f708d5471",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1215",
            "value": "6ab473951a7f92055414b037f683539f708d5471"
        },
        {
            "id": "d4820fc3ba3da99a5847d33d4cc33e2905f5ecc3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1216",
            "value": "d4820fc3ba3da99a5847d33d4cc33e2905f5ecc3"
        },
        {
            "id": "1353b23770e5622d42e8e5b24ae3b8568e85ab0b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1217",
            "value": "1353b23770e5622d42e8e5b24ae3b8568e85ab0b"
        },
        {
            "id": "4a61dfc626f20dae3729f83c473dcf1c42cfa594",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1218",
            "value": "4a61dfc626f20dae3729f83c473dcf1c42cfa594"
        },
        {
            "id": "79c38c1bd447038b81733f5b034e296f42e8e97a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1220",
            "value": "79c38c1bd447038b81733f5b034e296f42e8e97a"
        },
        {
            "id": "6b15ea0cf909493a876e494e241f78655df215c3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1221",
            "value": "6b15ea0cf909493a876e494e241f78655df215c3"
        },
        {
            "id": "a40502fc59e0be9adbc83282b99041b75f87100b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1232",
            "value": "a40502fc59e0be9adbc83282b99041b75f87100b"
        },
        {
            "id": "9352e87a4fc4f4dfbe097a025c459209f9175506",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1233",
            "value": "9352e87a4fc4f4dfbe097a025c459209f9175506"
        },
        {
            "id": "0f7fc0aea745e6524002bf428f10d20670e1619a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1234",
            "value": "0f7fc0aea745e6524002bf428f10d20670e1619a"
        },
        {
            "id": "13d007d214aef33af2590b18be1aa81e94250479",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1235",
            "value": "13d007d214aef33af2590b18be1aa81e94250479"
        },
        {
            "id": "aed7e268423666a1b22f08a8b5b007fc9ca11f42",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1236",
            "value": "aed7e268423666a1b22f08a8b5b007fc9ca11f42"
        },
        {
            "id": "224c1ccc120851048b98d8dce1c92dc36a8bb8a7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1239",
            "value": "224c1ccc120851048b98d8dce1c92dc36a8bb8a7"
        },
        {
            "id": "4f541a10003440b5339dde27d7653f9f53d8ab66",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1240",
            "value": "4f541a10003440b5339dde27d7653f9f53d8ab66"
        },
        {
            "id": "f54c2a64e9ff1f5b4b1e5a8186d02e63e7aee7a5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1242",
            "value": "f54c2a64e9ff1f5b4b1e5a8186d02e63e7aee7a5"
        },
        {
            "id": "ef158ff3d941e6361d2cfab425bc43bb5998c1bb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1262",
            "value": "ef158ff3d941e6361d2cfab425bc43bb5998c1bb"
        },
        {
            "id": "e81cb56d300a91785b8d45b81557efd33bda563d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1272",
            "value": "e81cb56d300a91785b8d45b81557efd33bda563d"
        },
        {
            "id": "ad7d020b19a64589ffeed2f9b57fd4825535e592",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=129",
            "value": "ad7d020b19a64589ffeed2f9b57fd4825535e592"
        },
        {
            "id": "b18aca1b066513dedadb9a41871459a6e69e05e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1312",
            "value": "b18aca1b066513dedadb9a41871459a6e69e05e9"
        },
        {
            "id": "33a2b5c4fda15eec6a6631b6520598e0145eddef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1313",
            "value": "33a2b5c4fda15eec6a6631b6520598e0145eddef"
        },
        {
            "id": "20be3d2227d4cb4fdb391889216b49b635e46aca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1316",
            "value": "20be3d2227d4cb4fdb391889216b49b635e46aca"
        },
        {
            "id": "45bf454cba01c8c38105ab08806f1b26458b021a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1317",
            "value": "45bf454cba01c8c38105ab08806f1b26458b021a"
        },
        {
            "id": "2dbc57f94ca3c4eaa4406efd69cec29fa02ede25",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1319",
            "value": "2dbc57f94ca3c4eaa4406efd69cec29fa02ede25"
        },
        {
            "id": "0a4e3562747f8e8fb56413870e9991db9a4a99bd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1320",
            "value": "0a4e3562747f8e8fb56413870e9991db9a4a99bd"
        },
        {
            "id": "e5cbcd4b8ad965a191fad8e656a77b4817f94893",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1325",
            "value": "e5cbcd4b8ad965a191fad8e656a77b4817f94893"
        },
        {
            "id": "d3801bd2cf7314fdcbc35f103085fef24c0ef5ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1342",
            "value": "d3801bd2cf7314fdcbc35f103085fef24c0ef5ff"
        },
        {
            "id": "2cd81115c3d5d1e0e41a665160170d04aa669db4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1364",
            "value": "2cd81115c3d5d1e0e41a665160170d04aa669db4"
        },
        {
            "id": "51b750349b9f07392a2c7845d7618b9647645b40",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1381",
            "value": "51b750349b9f07392a2c7845d7618b9647645b40"
        },
        {
            "id": "7b6e873f90878fdc19aa65f8406753d9a0640078",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1382",
            "value": "7b6e873f90878fdc19aa65f8406753d9a0640078"
        },
        {
            "id": "5f6aa03a822f6e97571f7a614953fd1f08bf4fa4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1384",
            "value": "5f6aa03a822f6e97571f7a614953fd1f08bf4fa4"
        },
        {
            "id": "54fb72ae237103be292ad86b3c817797aa93a0ea",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1385",
            "value": "54fb72ae237103be292ad86b3c817797aa93a0ea"
        },
        {
            "id": "1ef74b617d2877b0ab544847bfc8334b857f1ce1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1386",
            "value": "1ef74b617d2877b0ab544847bfc8334b857f1ce1"
        },
        {
            "id": "ab900d50b2d28960cc1f29d0e2de7bd1316ce322",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1389",
            "value": "ab900d50b2d28960cc1f29d0e2de7bd1316ce322"
        },
        {
            "id": "c0ac3f7ecbf100ee4d6eb004f1991845240dc821",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1391",
            "value": "c0ac3f7ecbf100ee4d6eb004f1991845240dc821"
        },
        {
            "id": "72a914eb622f1c8997c6c82eca87e622f04ff591",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1393",
            "value": "72a914eb622f1c8997c6c82eca87e622f04ff591"
        },
        {
            "id": "781ac9a740ede3ad552a360999e53fbcc2939726",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1394",
            "value": "781ac9a740ede3ad552a360999e53fbcc2939726"
        },
        {
            "id": "2618e2f9a9e48fc6ec70f0190820a9d62299c259",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=14",
            "value": "2618e2f9a9e48fc6ec70f0190820a9d62299c259"
        },
        {
            "id": "01a934cfac7efd73f4f8568ca33f568a564434f7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1405",
            "value": "01a934cfac7efd73f4f8568ca33f568a564434f7"
        },
        {
            "id": "14ff958184d87792167f0eaf70641125ff539a5c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1406",
            "value": "14ff958184d87792167f0eaf70641125ff539a5c"
        },
        {
            "id": "7b540d6b194f07260260c36f0c7a9bc810f000c1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1407",
            "value": "7b540d6b194f07260260c36f0c7a9bc810f000c1"
        },
        {
            "id": "95b7dfe2be39fce3c3bfbd6ac326f5f12e8e8f45",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1409",
            "value": "95b7dfe2be39fce3c3bfbd6ac326f5f12e8e8f45"
        },
        {
            "id": "22c971439c27d506d756701b3186168f9ba117d6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1415",
            "value": "22c971439c27d506d756701b3186168f9ba117d6"
        },
        {
            "id": "9560e08c734173dee282227f8562774ace3df683",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1418",
            "value": "9560e08c734173dee282227f8562774ace3df683"
        },
        {
            "id": "11895fb8cb4785e1394e62fc78c687302b01cf7a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1421",
            "value": "11895fb8cb4785e1394e62fc78c687302b01cf7a"
        },
        {
            "id": "8858753da105fecd2a66a6f0c1f08bf3580c6df0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1434",
            "value": "8858753da105fecd2a66a6f0c1f08bf3580c6df0"
        },
        {
            "id": "684843570aef9cb8680c9967b210c32d61cb0735",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1437",
            "value": "684843570aef9cb8680c9967b210c32d61cb0735"
        },
        {
            "id": "3f19ee6d83a977113dd8824134365ab54cb41ec2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=144",
            "value": "3f19ee6d83a977113dd8824134365ab54cb41ec2"
        },
        {
            "id": "e48642549a27433185bd0d0d312049b88cd3766d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1441",
            "value": "e48642549a27433185bd0d0d312049b88cd3766d"
        },
        {
            "id": "03d2cbf8a0d1c5961f06bad5ff0a6a2bb24975eb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1442",
            "value": "03d2cbf8a0d1c5961f06bad5ff0a6a2bb24975eb"
        },
        {
            "id": "247b962c5e2a2f946c5f0c121b876fdca4178af3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1445",
            "value": "247b962c5e2a2f946c5f0c121b876fdca4178af3"
        },
        {
            "id": "15cf6e80be28e0ebaea89eb35b7c38474fb81095",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1458",
            "value": "15cf6e80be28e0ebaea89eb35b7c38474fb81095"
        },
        {
            "id": "14c755d7ef788c894fd392cd364840b16b9be8b9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1461",
            "value": "14c755d7ef788c894fd392cd364840b16b9be8b9"
        },
        {
            "id": "65ddfe128ba9031eeabfe200d524c8a468014f44",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1465",
            "value": "65ddfe128ba9031eeabfe200d524c8a468014f44"
        },
        {
            "id": "0f160444191e93d845aca9ed97008ae32c3c3f86",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1468",
            "value": "0f160444191e93d845aca9ed97008ae32c3c3f86"
        },
        {
            "id": "50151f5337ab62ce1b687d1d66aba253a14adf76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1471",
            "value": "50151f5337ab62ce1b687d1d66aba253a14adf76"
        },
        {
            "id": "20a37ad8850654f198e1f9c3afc684911408b8e8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=148",
            "value": "20a37ad8850654f198e1f9c3afc684911408b8e8"
        },
        {
            "id": "d385243c2293b615a890e6636372ba5a8e8a9294",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1481",
            "value": "d385243c2293b615a890e6636372ba5a8e8a9294"
        },
        {
            "id": "a8eff6b2073351eddac88ad1ba9264a9ad4a82fc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1483",
            "value": "a8eff6b2073351eddac88ad1ba9264a9ad4a82fc"
        },
        {
            "id": "e3f0e13743c0f85c2bd58a20a8448a8a4e2376ed",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1484",
            "value": "e3f0e13743c0f85c2bd58a20a8448a8a4e2376ed"
        },
        {
            "id": "962c9a14dd15fe80206cf90a5cd91a5e2f0d984a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1485",
            "value": "962c9a14dd15fe80206cf90a5cd91a5e2f0d984a"
        },
        {
            "id": "592b46ab7cc859b7cb145cfb9da5d9ec599955d6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1487",
            "value": "592b46ab7cc859b7cb145cfb9da5d9ec599955d6"
        },
        {
            "id": "5d0a1375a87aba66eef87024b843096b3e1f0ca4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1490",
            "value": "5d0a1375a87aba66eef87024b843096b3e1f0ca4"
        },
        {
            "id": "af5efb13b8c7210b32b92d890516158016da49d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1492",
            "value": "af5efb13b8c7210b32b92d890516158016da49d4"
        },
        {
            "id": "3a279d4c37e150d4fd10fa8beaca041b9e1eae31",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1493",
            "value": "3a279d4c37e150d4fd10fa8beaca041b9e1eae31"
        },
        {
            "id": "1114dda9e91f4c022b394f676a0ea80ae4142d8b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1505",
            "value": "1114dda9e91f4c022b394f676a0ea80ae4142d8b"
        },
        {
            "id": "a91799dfa6512ea43635bbbd061d1a238f8b6b28",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1507",
            "value": "a91799dfa6512ea43635bbbd061d1a238f8b6b28"
        },
        {
            "id": "346c321542d0b9284177d8a6fab9ee496e11af41",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1508",
            "value": "346c321542d0b9284177d8a6fab9ee496e11af41"
        },
        {
            "id": "1b1bf9b0ad8624b28a156d1b252b267482918185",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1511",
            "value": "1b1bf9b0ad8624b28a156d1b252b267482918185"
        },
        {
            "id": "3f4076bf743f7a0fb37a9d8a03b9e86a5ad0f56c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1535",
            "value": "3f4076bf743f7a0fb37a9d8a03b9e86a5ad0f56c"
        },
        {
            "id": "63c923000df5abbeb9c55acdc39612ab776c6662",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1540",
            "value": "63c923000df5abbeb9c55acdc39612ab776c6662"
        },
        {
            "id": "fdd9586df3b9d405fe39fe296502b2ac15002bce",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1541",
            "value": "fdd9586df3b9d405fe39fe296502b2ac15002bce"
        },
        {
            "id": "0056ba150e3cef6e80f821b8dea2425e09071381",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1542",
            "value": "0056ba150e3cef6e80f821b8dea2425e09071381"
        },
        {
            "id": "742c83eff7f2c0f78c786203ea468158296bf927",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1544",
            "value": "742c83eff7f2c0f78c786203ea468158296bf927"
        },
        {
            "id": "3acf6b2464ba9f5b61721b6eb6a3331fcefc45e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1555",
            "value": "3acf6b2464ba9f5b61721b6eb6a3331fcefc45e6"
        },
        {
            "id": "b675965392cb617a661ac98575c763811dedb6f4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1556",
            "value": "b675965392cb617a661ac98575c763811dedb6f4"
        },
        {
            "id": "d41ec958e4d7bc0f168265ea184159a13d03e0e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1557",
            "value": "d41ec958e4d7bc0f168265ea184159a13d03e0e3"
        },
        {
            "id": "17b0365d9fce515f186b15efda5fbd704e6af870",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1558",
            "value": "17b0365d9fce515f186b15efda5fbd704e6af870"
        },
        {
            "id": "acda76c86f57b596a7ab69d0327e5c23001b03a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1559",
            "value": "acda76c86f57b596a7ab69d0327e5c23001b03a2"
        },
        {
            "id": "4a0d6d92cffe7f43cfba944b5d3fd139b21e3ba9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=156",
            "value": "4a0d6d92cffe7f43cfba944b5d3fd139b21e3ba9"
        },
        {
            "id": "41cce3d17e91861823f014e1128efb00154cec02",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1560",
            "value": "41cce3d17e91861823f014e1128efb00154cec02"
        },
        {
            "id": "6928f2f6ab1de136ee95a253e1f81c3b4663d0c3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1565",
            "value": "6928f2f6ab1de136ee95a253e1f81c3b4663d0c3"
        },
        {
            "id": "dc8cc73357f15869379c08e8d3e75e15ec873a55",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1568",
            "value": "dc8cc73357f15869379c08e8d3e75e15ec873a55"
        },
        {
            "id": "092541af422c37acb6419fa950fe3d939ec4070e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=158",
            "value": "092541af422c37acb6419fa950fe3d939ec4070e"
        },
        {
            "id": "95f921b07fd5b3c04d1d50c9ce6e4856ab891bbc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1581",
            "value": "95f921b07fd5b3c04d1d50c9ce6e4856ab891bbc"
        },
        {
            "id": "541c158c077e20f798e57ea6d1a76bef83875308",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1584",
            "value": "541c158c077e20f798e57ea6d1a76bef83875308"
        },
        {
            "id": "92fb25ec15a0bae35ac33fa0d22ce709b9f36e0a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1587",
            "value": "92fb25ec15a0bae35ac33fa0d22ce709b9f36e0a"
        },
        {
            "id": "53e99ba4cea303a1841142043a791cc9950280a9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1591",
            "value": "53e99ba4cea303a1841142043a791cc9950280a9"
        },
        {
            "id": "45ef2c92e16bfc63ce3c59e361be24c3667c1261",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1609",
            "value": "45ef2c92e16bfc63ce3c59e361be24c3667c1261"
        },
        {
            "id": "50475dcdd11e11ca9197476ae3241467a0d301ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1612",
            "value": "50475dcdd11e11ca9197476ae3241467a0d301ab"
        },
        {
            "id": "c4b95a7397bebb124cbead2a859f1e0f73deaa83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1613",
            "value": "c4b95a7397bebb124cbead2a859f1e0f73deaa83"
        },
        {
            "id": "99618cdd712fa5bce97996c750d0f1926332e8b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1615",
            "value": "99618cdd712fa5bce97996c750d0f1926332e8b2"
        },
        {
            "id": "872ef166256d79d233618c866ed6d5e186fedd52",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1626",
            "value": "872ef166256d79d233618c866ed6d5e186fedd52"
        },
        {
            "id": "c948769fd472c11ae9f52b077f70534e3df7d55e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1629",
            "value": "c948769fd472c11ae9f52b077f70534e3df7d55e"
        },
        {
            "id": "031f8616b8070894055fa9173a2774ec86311169",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1630",
            "value": "031f8616b8070894055fa9173a2774ec86311169"
        },
        {
            "id": "782858cc2bd24eae18b8a906234f66a7e2079329",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1632",
            "value": "782858cc2bd24eae18b8a906234f66a7e2079329"
        },
        {
            "id": "4a34b35a9c7670ddfa2fa3ae25ba1285aa660c29",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1633",
            "value": "4a34b35a9c7670ddfa2fa3ae25ba1285aa660c29"
        },
        {
            "id": "fb3e02fd12b979456c49f83ef0c32d015f9f49af",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1635",
            "value": "fb3e02fd12b979456c49f83ef0c32d015f9f49af"
        },
        {
            "id": "299718a69dac3ba69446fdcdede65b389031b75c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=164",
            "value": "299718a69dac3ba69446fdcdede65b389031b75c"
        },
        {
            "id": "2c3e22381d39958ed5e3dccec44fcac60f9b49dd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1646",
            "value": "2c3e22381d39958ed5e3dccec44fcac60f9b49dd"
        },
        {
            "id": "0133e202d4fa7752b380dd7a94544956278eb2ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1647",
            "value": "0133e202d4fa7752b380dd7a94544956278eb2ec"
        },
        {
            "id": "5d38d0f2a4a6363a86180a6acfe58c8893509d6e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1656",
            "value": "5d38d0f2a4a6363a86180a6acfe58c8893509d6e"
        },
        {
            "id": "b89623b6174a8310048d7cf1815c43d50575064f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=166",
            "value": "b89623b6174a8310048d7cf1815c43d50575064f"
        },
        {
            "id": "dc3c0a545c469463964810b92599adf915376acb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1660",
            "value": "dc3c0a545c469463964810b92599adf915376acb"
        },
        {
            "id": "a32ca2308623b2fec7662373fdca2165b2cf09d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=167",
            "value": "a32ca2308623b2fec7662373fdca2165b2cf09d2"
        },
        {
            "id": "6e9c3b8a5f0d6fb4e66d39c48297a473656b549b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1672",
            "value": "6e9c3b8a5f0d6fb4e66d39c48297a473656b549b"
        },
        {
            "id": "b8c7080c2ec90e333e45a24770b64045cc0c3a50",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1674",
            "value": "b8c7080c2ec90e333e45a24770b64045cc0c3a50"
        },
        {
            "id": "279efca244ef3e8d40b504781fc10bcba4768b77",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1675",
            "value": "279efca244ef3e8d40b504781fc10bcba4768b77"
        },
        {
            "id": "b60eb089ba087da312110735bd274ccf35366f91",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1677",
            "value": "b60eb089ba087da312110735bd274ccf35366f91"
        },
        {
            "id": "896f2a28dcc61e2c4f31af7e4c717dc525aee023",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1679",
            "value": "896f2a28dcc61e2c4f31af7e4c717dc525aee023"
        },
        {
            "id": "afc52a07c27c0c538bf3b98bb30468f9ba2ea2cc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1682",
            "value": "afc52a07c27c0c538bf3b98bb30468f9ba2ea2cc"
        },
        {
            "id": "6cf6ae6a11ff65906d70c33ac926d527d026c9f8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1699",
            "value": "6cf6ae6a11ff65906d70c33ac926d527d026c9f8"
        },
        {
            "id": "2602697462bddd9146c16147acbd288ddb32c49e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1700",
            "value": "2602697462bddd9146c16147acbd288ddb32c49e"
        },
        {
            "id": "1711d4c9cd1324dead2f0ca1ad675307c2c8061b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1716",
            "value": "1711d4c9cd1324dead2f0ca1ad675307c2c8061b"
        },
        {
            "id": "090c7779f16758772263a2cf3dacea96a8b81de9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1719",
            "value": "090c7779f16758772263a2cf3dacea96a8b81de9"
        },
        {
            "id": "115d9568fdad3365affc7b33340ab4d2ed448681",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1721",
            "value": "115d9568fdad3365affc7b33340ab4d2ed448681"
        },
        {
            "id": "370d114ad74e8b81bef2176054b8a2d899ee1c60",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1722",
            "value": "370d114ad74e8b81bef2176054b8a2d899ee1c60"
        },
        {
            "id": "1d2556c3fa858144b2dd1dcc9c967004ffaf4b42",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1723",
            "value": "1d2556c3fa858144b2dd1dcc9c967004ffaf4b42"
        },
        {
            "id": "571ca99ffd365f462aaf6ec01e91c302d8897d5d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1726",
            "value": "571ca99ffd365f462aaf6ec01e91c302d8897d5d"
        },
        {
            "id": "66e089221f7ddb252071f0e0cccc592bda9d259f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=174",
            "value": "66e089221f7ddb252071f0e0cccc592bda9d259f"
        },
        {
            "id": "9058d577a42a2551e02f7341c8527b61b0abbbf9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1741",
            "value": "9058d577a42a2551e02f7341c8527b61b0abbbf9"
        },
        {
            "id": "3538dfefe3184cb4228e12009fea256df94ffd23",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1743",
            "value": "3538dfefe3184cb4228e12009fea256df94ffd23"
        },
        {
            "id": "866d9ce4f2b7ffcdf359514148594e0ee520b5f4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1745",
            "value": "866d9ce4f2b7ffcdf359514148594e0ee520b5f4"
        },
        {
            "id": "ee81701b8e0df0bfb71b2bb86505357e989a48c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1747",
            "value": "ee81701b8e0df0bfb71b2bb86505357e989a48c4"
        },
        {
            "id": "a14de3912c8a3814858c091ab2990d75c2beebcf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1751",
            "value": "a14de3912c8a3814858c091ab2990d75c2beebcf"
        },
        {
            "id": "2dc568a2db13fd8ad0bb61a44450d63c13c7bffa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=177",
            "value": "2dc568a2db13fd8ad0bb61a44450d63c13c7bffa"
        },
        {
            "id": "3c38f8d7c978a1ab55bbaee08f45bbab2910e556",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=178",
            "value": "3c38f8d7c978a1ab55bbaee08f45bbab2910e556"
        },
        {
            "id": "c09400eda44e4f701235cb30b56d1ee973e47587",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1786",
            "value": "c09400eda44e4f701235cb30b56d1ee973e47587"
        },
        {
            "id": "e95513388ee8b0fcff05df3db61c11499b59b1e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1805",
            "value": "e95513388ee8b0fcff05df3db61c11499b59b1e1"
        },
        {
            "id": "f7e2dd01f99f37f2cff174e3a8450d32bb2e2262",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1806",
            "value": "f7e2dd01f99f37f2cff174e3a8450d32bb2e2262"
        },
        {
            "id": "8954d1888bc93a9973ba0f21c932fcec54b07ede",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=181",
            "value": "8954d1888bc93a9973ba0f21c932fcec54b07ede"
        },
        {
            "id": "c515645f9949e99bb04be6c3e1f6f693962ca3ba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1813",
            "value": "c515645f9949e99bb04be6c3e1f6f693962ca3ba"
        },
        {
            "id": "db686cc13ea3c8a312e89a1604712d6a99fcb875",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1826",
            "value": "db686cc13ea3c8a312e89a1604712d6a99fcb875"
        },
        {
            "id": "992b3089d42a06f818309b3ea16946fd08f8a9a9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1827",
            "value": "992b3089d42a06f818309b3ea16946fd08f8a9a9"
        },
        {
            "id": "8864f106f70045778dcd421697f5923a34cbe834",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1829",
            "value": "8864f106f70045778dcd421697f5923a34cbe834"
        },
        {
            "id": "2eb1cea465ade9251ab2e17b10e70602392362e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1831",
            "value": "2eb1cea465ade9251ab2e17b10e70602392362e3"
        },
        {
            "id": "c1b6a9ea9519053588f3fc3c10e8f83568570a1a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1834",
            "value": "c1b6a9ea9519053588f3fc3c10e8f83568570a1a"
        },
        {
            "id": "9c83a2b47070ee68a11a8a4ff31232d136ffbf54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1835",
            "value": "9c83a2b47070ee68a11a8a4ff31232d136ffbf54"
        },
        {
            "id": "1c9bee741959d8a82708535ad35ad5a3ae08e96d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1836",
            "value": "1c9bee741959d8a82708535ad35ad5a3ae08e96d"
        },
        {
            "id": "0029913ef1f674d7386d15ccd1698306b3456097",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1837",
            "value": "0029913ef1f674d7386d15ccd1698306b3456097"
        },
        {
            "id": "49e081d9ec8280cdc51a19429a74ba60dca9fd05",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1845",
            "value": "49e081d9ec8280cdc51a19429a74ba60dca9fd05"
        },
        {
            "id": "f2f6e0fe74aab6546f9e05cd2ebe7552d680214f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=185",
            "value": "f2f6e0fe74aab6546f9e05cd2ebe7552d680214f"
        },
        {
            "id": "05b88e82e0bca584b93e3e3ee04b9b9166d15528",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1850",
            "value": "05b88e82e0bca584b93e3e3ee04b9b9166d15528"
        },
        {
            "id": "6d38ce81b85eb64d7487051d9ca7c7a213159bb0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1854",
            "value": "6d38ce81b85eb64d7487051d9ca7c7a213159bb0"
        },
        {
            "id": "3f1a0fb3af4dd63dee6710d01feaa7c3b673a89e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=186",
            "value": "3f1a0fb3af4dd63dee6710d01feaa7c3b673a89e"
        },
        {
            "id": "891dfbb394091a1bb74e582b0a5c02fde2336273",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1863",
            "value": "891dfbb394091a1bb74e582b0a5c02fde2336273"
        },
        {
            "id": "e886e4a6d36ee02a498cbe8101ae715a5c7ed4f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1864",
            "value": "e886e4a6d36ee02a498cbe8101ae715a5c7ed4f5"
        },
        {
            "id": "e3158fe96e85e2341a7c9b1cd18ceb5874209380",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1879",
            "value": "e3158fe96e85e2341a7c9b1cd18ceb5874209380"
        },
        {
            "id": "79f311f4e0d5a81e825fc06766fa97d1df403870",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1880",
            "value": "79f311f4e0d5a81e825fc06766fa97d1df403870"
        },
        {
            "id": "9f6ffc6d07203cdbc44a5f88b8923d34ed3873b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1882",
            "value": "9f6ffc6d07203cdbc44a5f88b8923d34ed3873b2"
        },
        {
            "id": "d120eed089861296a88fcb2ab678613e0df97d2c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1885",
            "value": "d120eed089861296a88fcb2ab678613e0df97d2c"
        },
        {
            "id": "29ba1019ede2e7f87663e2331bb2b910bd492ab9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1886",
            "value": "29ba1019ede2e7f87663e2331bb2b910bd492ab9"
        },
        {
            "id": "b13ec0872e8888c7c9abd83f9d9a6e6ba6a4d69d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1889",
            "value": "b13ec0872e8888c7c9abd83f9d9a6e6ba6a4d69d"
        },
        {
            "id": "74c2aa7c7903face8e37dd7757d58fff312ced29",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=189",
            "value": "74c2aa7c7903face8e37dd7757d58fff312ced29"
        },
        {
            "id": "a903690e5dab87bf42dfec475e86a7a70915b65c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1903",
            "value": "a903690e5dab87bf42dfec475e86a7a70915b65c"
        },
        {
            "id": "9201c60dabbbebafcc3b7208e127a863f5dd1d72",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1904",
            "value": "9201c60dabbbebafcc3b7208e127a863f5dd1d72"
        },
        {
            "id": "9a8d6c3619fbbc1fe96b314e573fa0fd6c9bb929",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1905",
            "value": "9a8d6c3619fbbc1fe96b314e573fa0fd6c9bb929"
        },
        {
            "id": "47693ae305e836d633915329775f982a4efb96d6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1926",
            "value": "47693ae305e836d633915329775f982a4efb96d6"
        },
        {
            "id": "1d2c53a313e7f017288e43f77cfe9a9929c7b78a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1929",
            "value": "1d2c53a313e7f017288e43f77cfe9a9929c7b78a"
        },
        {
            "id": "2f14ab13f808dd898511eb00b653dcee5a7d92ca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=193",
            "value": "2f14ab13f808dd898511eb00b653dcee5a7d92ca"
        },
        {
            "id": "4be194a094b9171886d346dba822e9482de145f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1931",
            "value": "4be194a094b9171886d346dba822e9482de145f5"
        },
        {
            "id": "984d7399dc8f8fdc6b0be227a1d5c8ecb0cfeb10",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1932",
            "value": "984d7399dc8f8fdc6b0be227a1d5c8ecb0cfeb10"
        },
        {
            "id": "92ca8f1095d4de59fc942f29a9fb25783801d1c9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1933",
            "value": "92ca8f1095d4de59fc942f29a9fb25783801d1c9"
        },
        {
            "id": "f9a50f800d933f59e84340900614434d0565d35c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=194",
            "value": "f9a50f800d933f59e84340900614434d0565d35c"
        },
        {
            "id": "1bc37f371e0f3672b463c6df4b3efa06e87035c0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1948",
            "value": "1bc37f371e0f3672b463c6df4b3efa06e87035c0"
        },
        {
            "id": "03341ab31639fa83e8b7fe9d485daed8bd633f2f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1950",
            "value": "03341ab31639fa83e8b7fe9d485daed8bd633f2f"
        },
        {
            "id": "8a1fb474c856780ee61d989bc5e3a9576ab8f7a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1954",
            "value": "8a1fb474c856780ee61d989bc5e3a9576ab8f7a3"
        },
        {
            "id": "4c45ae7f9ab1509767b23adc8b4ae2032db0f5ee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=197",
            "value": "4c45ae7f9ab1509767b23adc8b4ae2032db0f5ee"
        },
        {
            "id": "6f576ae124a622fe2e2d07e6f0a7773659ff883c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1973",
            "value": "6f576ae124a622fe2e2d07e6f0a7773659ff883c"
        },
        {
            "id": "5aff40a0351aaae8ca5dbee27175d488e8ca4f82",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1977",
            "value": "5aff40a0351aaae8ca5dbee27175d488e8ca4f82"
        },
        {
            "id": "a03de969328a75e8e1f7bd17827c746ad9aa9b89",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=1994",
            "value": "a03de969328a75e8e1f7bd17827c746ad9aa9b89"
        },
        {
            "id": "a89b0629ce1e00b91e5482481660e6262356f994",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2",
            "value": "a89b0629ce1e00b91e5482481660e6262356f994"
        },
        {
            "id": "7bcae67811efa7128a50d00fde651bd5dc369514",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2058",
            "value": "7bcae67811efa7128a50d00fde651bd5dc369514"
        },
        {
            "id": "3eeb409fca8414a020d6971337c78adb6d27c442",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=206",
            "value": "3eeb409fca8414a020d6971337c78adb6d27c442"
        },
        {
            "id": "90a1879523b62993de55cacf0c696ccf8064c72d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2062",
            "value": "90a1879523b62993de55cacf0c696ccf8064c72d"
        },
        {
            "id": "23a9f66f659565ef394fca05118b31a284e3f1b0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2064",
            "value": "23a9f66f659565ef394fca05118b31a284e3f1b0"
        },
        {
            "id": "f5862f10de77d8f8df16ddf69cc2dc259293375f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2081",
            "value": "f5862f10de77d8f8df16ddf69cc2dc259293375f"
        },
        {
            "id": "8cb8c6f1fa96f6627e882f2ac4c419711f6efb15",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=209",
            "value": "8cb8c6f1fa96f6627e882f2ac4c419711f6efb15"
        },
        {
            "id": "baaf38fb7840f1802549290f5128b2b98910cf5f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=210",
            "value": "baaf38fb7840f1802549290f5128b2b98910cf5f"
        },
        {
            "id": "f99089047e65c244bb7aa29851b0f4c97266ac63",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2102",
            "value": "f99089047e65c244bb7aa29851b0f4c97266ac63"
        },
        {
            "id": "efd496093dd049fc98b1816db9cd217772bb8da3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2103",
            "value": "efd496093dd049fc98b1816db9cd217772bb8da3"
        },
        {
            "id": "f75925d06f43122bb33b4d8d33ca02f0f0f80513",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2104",
            "value": "f75925d06f43122bb33b4d8d33ca02f0f0f80513"
        },
        {
            "id": "0361f09fd8ff7cd1c53a3e8b8089a53cff608360",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2111",
            "value": "0361f09fd8ff7cd1c53a3e8b8089a53cff608360"
        },
        {
            "id": "01e650c404296393e1a0b44570e1b6a4ef9b5423",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2127",
            "value": "01e650c404296393e1a0b44570e1b6a4ef9b5423"
        },
        {
            "id": "e66690bb29874236e3b09d99932d54a9be8e5440",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2128",
            "value": "e66690bb29874236e3b09d99932d54a9be8e5440"
        },
        {
            "id": "c0ce577070bf034d10ca5c599e047a1358cc4e81",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2129",
            "value": "c0ce577070bf034d10ca5c599e047a1358cc4e81"
        },
        {
            "id": "01a6df01acce4e68be8f5d3ea2358657daca88af",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2133",
            "value": "01a6df01acce4e68be8f5d3ea2358657daca88af"
        },
        {
            "id": "8101d75ef029142ee4a5f081d647d6e6eb485bef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2135",
            "value": "8101d75ef029142ee4a5f081d647d6e6eb485bef"
        },
        {
            "id": "a122a88c5f32bec58c30b78b9bf20fec8a6d30ae",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2137",
            "value": "a122a88c5f32bec58c30b78b9bf20fec8a6d30ae"
        },
        {
            "id": "0ef9680dd2668b2cc2c8d8f7d1bc5bf1c6d53535",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2138",
            "value": "0ef9680dd2668b2cc2c8d8f7d1bc5bf1c6d53535"
        },
        {
            "id": "8d3ac5f545b733f46a6601da42b272e9b9235c52",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=216",
            "value": "8d3ac5f545b733f46a6601da42b272e9b9235c52"
        },
        {
            "id": "9e7b96cb34e67b3354804fc6420524aaac28a491",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=220",
            "value": "9e7b96cb34e67b3354804fc6420524aaac28a491"
        },
        {
            "id": "2b799460a1a011c55983f5c39b532702b8b6a98e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2212",
            "value": "2b799460a1a011c55983f5c39b532702b8b6a98e"
        },
        {
            "id": "265db04d7482cb79b4af5ab7983fe46fdca46686",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2227",
            "value": "265db04d7482cb79b4af5ab7983fe46fdca46686"
        },
        {
            "id": "e337d6d6c6320b7bdc8a5ce98a8a061eaa7bd4d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2229",
            "value": "e337d6d6c6320b7bdc8a5ce98a8a061eaa7bd4d2"
        },
        {
            "id": "fba5f0b2c767bf4590cd8fc8ac8fd724501b748a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2230",
            "value": "fba5f0b2c767bf4590cd8fc8ac8fd724501b748a"
        },
        {
            "id": "692abbefd916edcb0b9d4c0f6ea6a6e473004341",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2234",
            "value": "692abbefd916edcb0b9d4c0f6ea6a6e473004341"
        },
        {
            "id": "38db3541bda6de82c80d5f36be599d44971d1e4c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2239",
            "value": "38db3541bda6de82c80d5f36be599d44971d1e4c"
        },
        {
            "id": "d082626d94b3f30edb16d0b42b45de2c65d16bd5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2241",
            "value": "d082626d94b3f30edb16d0b42b45de2c65d16bd5"
        },
        {
            "id": "a1e298e69a3b741fe66d6c50eb63d4e735890924",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=225",
            "value": "a1e298e69a3b741fe66d6c50eb63d4e735890924"
        },
        {
            "id": "7c905226cf8edbd85651e7cd48822db4c1b974d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=227",
            "value": "7c905226cf8edbd85651e7cd48822db4c1b974d3"
        },
        {
            "id": "b80b6379e5eba9f51014517c353c15be215b589c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2275",
            "value": "b80b6379e5eba9f51014517c353c15be215b589c"
        },
        {
            "id": "5b8430604b30a7ff329f37db87d64d5e25742d83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2276",
            "value": "5b8430604b30a7ff329f37db87d64d5e25742d83"
        },
        {
            "id": "da98b605b2a676d2db4539894843378498d7b847",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2277",
            "value": "da98b605b2a676d2db4539894843378498d7b847"
        },
        {
            "id": "a32b5e5d0849114162df042fcd87a9c119995492",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2279",
            "value": "a32b5e5d0849114162df042fcd87a9c119995492"
        },
        {
            "id": "601f9fc120de443e5b9bef79ecdc5725a821300b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2280",
            "value": "601f9fc120de443e5b9bef79ecdc5725a821300b"
        },
        {
            "id": "5c33b823fdeedd1d83ccef11c65669a1cb4ca4d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2281",
            "value": "5c33b823fdeedd1d83ccef11c65669a1cb4ca4d4"
        },
        {
            "id": "f475865e5df351d24acf799345f955e90e74cd58",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=2282",
            "value": "f475865e5df351d24acf799345f955e90e74cd58"
        },
        {
            "id": "8418656964b8421681e5e39e8cedda9265420eed",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=236",
            "value": "8418656964b8421681e5e39e8cedda9265420eed"
        },
        {
            "id": "32a277276a4d78027a6a85ecaec74885f123c113",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=237",
            "value": "32a277276a4d78027a6a85ecaec74885f123c113"
        },
        {
            "id": "81dfa02ba18572d2d83b77d422ed1e8727141319",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=238",
            "value": "81dfa02ba18572d2d83b77d422ed1e8727141319"
        },
        {
            "id": "8077e5e80a5c1d04b8c69ddeaf0cf7574cec227f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=239",
            "value": "8077e5e80a5c1d04b8c69ddeaf0cf7574cec227f"
        },
        {
            "id": "af4ee074a8c9cac3594ddf5858e169eccb08e6ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=245",
            "value": "af4ee074a8c9cac3594ddf5858e169eccb08e6ec"
        },
        {
            "id": "dec8806c76ef6e5024871ff4edbf507388c1e919",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=247",
            "value": "dec8806c76ef6e5024871ff4edbf507388c1e919"
        },
        {
            "id": "240e3b5d728d28815e6866a1f3c734b48a386531",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=250",
            "value": "240e3b5d728d28815e6866a1f3c734b48a386531"
        },
        {
            "id": "21bad259fb4964650fe074aab71fce0958d72d45",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=253",
            "value": "21bad259fb4964650fe074aab71fce0958d72d45"
        },
        {
            "id": "26515d2a8638831b192feeccc6bcc0e940261de4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=255",
            "value": "26515d2a8638831b192feeccc6bcc0e940261de4"
        },
        {
            "id": "30a077da9287ee332be9ab86cf95224c26be21e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=256",
            "value": "30a077da9287ee332be9ab86cf95224c26be21e1"
        },
        {
            "id": "a5bde467b90901adc25e71dacce405ab888a6adf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=262",
            "value": "a5bde467b90901adc25e71dacce405ab888a6adf"
        },
        {
            "id": "e4742d2b7d07e4bf19f8ce2f14d886c027971ad6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=265",
            "value": "e4742d2b7d07e4bf19f8ce2f14d886c027971ad6"
        },
        {
            "id": "9fd2a4a84d1474d31af022990b45de99a4bd439c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=268",
            "value": "9fd2a4a84d1474d31af022990b45de99a4bd439c"
        },
        {
            "id": "0c315cc167e6f1d95ee35e4c69be0d3d0accef11",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=269",
            "value": "0c315cc167e6f1d95ee35e4c69be0d3d0accef11"
        },
        {
            "id": "8ab4e8548bea125f898d36d457b5e9d9c219d6c0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=277",
            "value": "8ab4e8548bea125f898d36d457b5e9d9c219d6c0"
        },
        {
            "id": "12a5841eb1581c3b3cb27e440095989da1045c27",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=279",
            "value": "12a5841eb1581c3b3cb27e440095989da1045c27"
        },
        {
            "id": "9753457466f30b16f76b3616926941b1ac7df88e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=283",
            "value": "9753457466f30b16f76b3616926941b1ac7df88e"
        },
        {
            "id": "6fd53e3114ffebe7471206694cdaea2558b97e77",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=294",
            "value": "6fd53e3114ffebe7471206694cdaea2558b97e77"
        },
        {
            "id": "359bf8bfb58cddb3f577e7b8e7ea1218706bfd0e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=296",
            "value": "359bf8bfb58cddb3f577e7b8e7ea1218706bfd0e"
        },
        {
            "id": "1693a74a1bd020e6527418f2e52cf00a85c0af16",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=301",
            "value": "1693a74a1bd020e6527418f2e52cf00a85c0af16"
        },
        {
            "id": "574a57e51df2362ef0e49e9287408a26bde93c76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=304",
            "value": "574a57e51df2362ef0e49e9287408a26bde93c76"
        },
        {
            "id": "9288307902fa43e3cbeaa4b801891b0a11aa73cf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=316",
            "value": "9288307902fa43e3cbeaa4b801891b0a11aa73cf"
        },
        {
            "id": "217c6120a89349b86a05a02b2a9e9c00a4d43b4c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=318",
            "value": "217c6120a89349b86a05a02b2a9e9c00a4d43b4c"
        },
        {
            "id": "4d09c938043165770c52d6f68c2926d9a95610f2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=320",
            "value": "4d09c938043165770c52d6f68c2926d9a95610f2"
        },
        {
            "id": "1f8cbfafb9ce6faa652c4f69b93ca600894d1cbb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=322",
            "value": "1f8cbfafb9ce6faa652c4f69b93ca600894d1cbb"
        },
        {
            "id": "ee25392b661e092c38491b16da8b42dc32093d03",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=324",
            "value": "ee25392b661e092c38491b16da8b42dc32093d03"
        },
        {
            "id": "46a48c716910bbc3a137480dbfa252a05f0ca3d6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=325",
            "value": "46a48c716910bbc3a137480dbfa252a05f0ca3d6"
        },
        {
            "id": "1b2fff00ecf57afba29b7b6d73c41730df9bf789",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=326",
            "value": "1b2fff00ecf57afba29b7b6d73c41730df9bf789"
        },
        {
            "id": "0caee4cdbfb045762c5b1ab900c4461967cf30c0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=51",
            "value": "0caee4cdbfb045762c5b1ab900c4461967cf30c0"
        },
        {
            "id": "3960bdf1b144d00ccc24bf764751a2c3e5c0220d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=59",
            "value": "3960bdf1b144d00ccc24bf764751a2c3e5c0220d"
        },
        {
            "id": "5b8569c49fe1e6131ea927ce2985c1bd10f8cb33",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=63",
            "value": "5b8569c49fe1e6131ea927ce2985c1bd10f8cb33"
        },
        {
            "id": "73ada29af500bed9cec628ac5d9a24ad14c9958f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=68",
            "value": "73ada29af500bed9cec628ac5d9a24ad14c9958f"
        },
        {
            "id": "09a7f2d557522f12133bad812dcc45a1f6e2b655",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=683",
            "value": "09a7f2d557522f12133bad812dcc45a1f6e2b655"
        },
        {
            "id": "3477d07342d87db58c9038def2b626a61a4f061f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=688",
            "value": "3477d07342d87db58c9038def2b626a61a4f061f"
        },
        {
            "id": "2f7a7fcad23fecbb138a63ae4e58339ba259e48f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=691",
            "value": "2f7a7fcad23fecbb138a63ae4e58339ba259e48f"
        },
        {
            "id": "b56f6addf82259ad1a94c4eb6ce8bf804eeb38ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=713",
            "value": "b56f6addf82259ad1a94c4eb6ce8bf804eeb38ab"
        },
        {
            "id": "bd3521f5985a2c16049388cba149937d6b639aa1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=72",
            "value": "bd3521f5985a2c16049388cba149937d6b639aa1"
        },
        {
            "id": "3749f0a592e6fff951da2a884e4af4fd4e41fdc1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=728",
            "value": "3749f0a592e6fff951da2a884e4af4fd4e41fdc1"
        },
        {
            "id": "539174738aeffd6ca85fe692062ab4209b65de98",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=731",
            "value": "539174738aeffd6ca85fe692062ab4209b65de98"
        },
        {
            "id": "47aa390cc970122184353476f515de8184a83c6c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=741",
            "value": "47aa390cc970122184353476f515de8184a83c6c"
        },
        {
            "id": "58cc2fc5b7be8613d444f04222fbad06a7440965",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=745",
            "value": "58cc2fc5b7be8613d444f04222fbad06a7440965"
        },
        {
            "id": "0ea29f4cc520faced82e90c671beac617b5c1a21",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=746",
            "value": "0ea29f4cc520faced82e90c671beac617b5c1a21"
        },
        {
            "id": "8c35330cdd5d8a9156ccc8dd696b5fa030be22ea",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=747",
            "value": "8c35330cdd5d8a9156ccc8dd696b5fa030be22ea"
        },
        {
            "id": "2be03dc3ea2fda33b8d7e4b6526bfd5dfbd4d16e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=748",
            "value": "2be03dc3ea2fda33b8d7e4b6526bfd5dfbd4d16e"
        },
        {
            "id": "d25d8282ddf8ec73846db68a7c91fe25ffd352aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=749",
            "value": "d25d8282ddf8ec73846db68a7c91fe25ffd352aa"
        },
        {
            "id": "ff982ec6fbe83711d54cea3a255b9bf7d3c842c7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=750",
            "value": "ff982ec6fbe83711d54cea3a255b9bf7d3c842c7"
        },
        {
            "id": "c065a0c02c358054436b4c78ce6b241d2e380d67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=764",
            "value": "c065a0c02c358054436b4c78ce6b241d2e380d67"
        },
        {
            "id": "17b051840c40453cf8d1c4b0eb771048cad9cab8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=765",
            "value": "17b051840c40453cf8d1c4b0eb771048cad9cab8"
        },
        {
            "id": "3212a165c32b486f863f1de338aad3e37a536d18",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=767",
            "value": "3212a165c32b486f863f1de338aad3e37a536d18"
        },
        {
            "id": "00dafe0503edb7c0cf63459be79d805a37d90988",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=778",
            "value": "00dafe0503edb7c0cf63459be79d805a37d90988"
        },
        {
            "id": "d3f2b0c1b2b5bf6bcf71c57074ad50fa49f793fb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=78",
            "value": "d3f2b0c1b2b5bf6bcf71c57074ad50fa49f793fb"
        },
        {
            "id": "2bbea9047917cfbfdfc5e61203ded4d013502126",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=785",
            "value": "2bbea9047917cfbfdfc5e61203ded4d013502126"
        },
        {
            "id": "6fce0dd139966a1ca918c130614b7a5271052a1d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=799",
            "value": "6fce0dd139966a1ca918c130614b7a5271052a1d"
        },
        {
            "id": "ad3e6e8e47505f17d9883716e586eaecb05ae337",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=80",
            "value": "ad3e6e8e47505f17d9883716e586eaecb05ae337"
        },
        {
            "id": "e3cf5db74fd1f54578055d33895f24285ef59ae7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=800",
            "value": "e3cf5db74fd1f54578055d33895f24285ef59ae7"
        },
        {
            "id": "25e918f11c398e43779c6133420d9e84422df6e8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=812",
            "value": "25e918f11c398e43779c6133420d9e84422df6e8"
        },
        {
            "id": "0235afc760f678a74491e7c9c9846db3f65b21f6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=823",
            "value": "0235afc760f678a74491e7c9c9846db3f65b21f6"
        },
        {
            "id": "179dd9db83f8937fb120f13e41ef7aac660ae3a7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=825",
            "value": "179dd9db83f8937fb120f13e41ef7aac660ae3a7"
        },
        {
            "id": "3c34163ab5295f1000c53a30860b7de100e210a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=826",
            "value": "3c34163ab5295f1000c53a30860b7de100e210a8"
        },
        {
            "id": "97a4fd2ee0d91daa149650811d7d9894da4fa7c7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=827",
            "value": "97a4fd2ee0d91daa149650811d7d9894da4fa7c7"
        },
        {
            "id": "7517d2c01e0429330cec001510505fb1385e7296",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=828",
            "value": "7517d2c01e0429330cec001510505fb1385e7296"
        },
        {
            "id": "de354be0651e310980033d14acde42317e43cd75",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=839",
            "value": "de354be0651e310980033d14acde42317e43cd75"
        },
        {
            "id": "d3a7e2fb708a544b48918344252c53615a4d7476",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=840",
            "value": "d3a7e2fb708a544b48918344252c53615a4d7476"
        },
        {
            "id": "766f881fd13080a1aae282ba3aae17e3af09f263",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=841",
            "value": "766f881fd13080a1aae282ba3aae17e3af09f263"
        },
        {
            "id": "29baf2c3871185790781a156a6b9004e09835967",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=852",
            "value": "29baf2c3871185790781a156a6b9004e09835967"
        },
        {
            "id": "407f0354b1320d243c0ceba090fcb07da211f86d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=855",
            "value": "407f0354b1320d243c0ceba090fcb07da211f86d"
        },
        {
            "id": "169085aea76c0147c7833e23f4614cd9aaa3cd20",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=864",
            "value": "169085aea76c0147c7833e23f4614cd9aaa3cd20"
        },
        {
            "id": "1258dc7d719637586786c142031627b47797cd3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=874",
            "value": "1258dc7d719637586786c142031627b47797cd3e"
        },
        {
            "id": "da0a2d7e3be82cbc3848651f2c89399affbe2537",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=875",
            "value": "da0a2d7e3be82cbc3848651f2c89399affbe2537"
        },
        {
            "id": "ded004de4957780ec5a4c67633d9de1b811c8b85",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=881",
            "value": "ded004de4957780ec5a4c67633d9de1b811c8b85"
        },
        {
            "id": "ba940a694b622b6ad169b8d1b22d3ef23d9215c3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=882",
            "value": "ba940a694b622b6ad169b8d1b22d3ef23d9215c3"
        },
        {
            "id": "411cbbc5afcfc7b5ec23603f5e971692b74d04e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=883",
            "value": "411cbbc5afcfc7b5ec23603f5e971692b74d04e1"
        },
        {
            "id": "3ee804f9afa274e1aebeb6d1a9cf1f5b41b2bfed",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=884",
            "value": "3ee804f9afa274e1aebeb6d1a9cf1f5b41b2bfed"
        },
        {
            "id": "46aacc9849ea0d312880d3887dc79f2c33342a1f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=885",
            "value": "46aacc9849ea0d312880d3887dc79f2c33342a1f"
        },
        {
            "id": "479ab93ae82400171fc260681843d40147a5590d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=898",
            "value": "479ab93ae82400171fc260681843d40147a5590d"
        },
        {
            "id": "fbb679303375452d739ac7220b7d1894f9cf6a86",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=899",
            "value": "fbb679303375452d739ac7220b7d1894f9cf6a86"
        },
        {
            "id": "6e8e306663a436d525857923cf08840179e57c73",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=900",
            "value": "6e8e306663a436d525857923cf08840179e57c73"
        },
        {
            "id": "6147e5f1f4e4c6f1d0db98c26216244cf18a1ca2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=905",
            "value": "6147e5f1f4e4c6f1d0db98c26216244cf18a1ca2"
        },
        {
            "id": "aacaeed9b07eb2194b7d091defe67db3b85365f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=918",
            "value": "aacaeed9b07eb2194b7d091defe67db3b85365f5"
        },
        {
            "id": "395ec27379b0a845833bad977950558612e0cede",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=919",
            "value": "395ec27379b0a845833bad977950558612e0cede"
        },
        {
            "id": "d645fd2b88785666a9d0a24a7fb101f907756a66",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=92",
            "value": "d645fd2b88785666a9d0a24a7fb101f907756a66"
        },
        {
            "id": "c3a925b3461b03845624cf6bcbed0da40d8d9573",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=920",
            "value": "c3a925b3461b03845624cf6bcbed0da40d8d9573"
        },
        {
            "id": "1f1e5d70419982a1f62ebe598b39d8565e617e77",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=921",
            "value": "1f1e5d70419982a1f62ebe598b39d8565e617e77"
        },
        {
            "id": "db17c53ee248b7c14d665ca99549ed99e4bc432f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=923",
            "value": "db17c53ee248b7c14d665ca99549ed99e4bc432f"
        },
        {
            "id": "9d0ed73be2a6d9f1b5005cf209ee0d039d9cec97",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=924",
            "value": "9d0ed73be2a6d9f1b5005cf209ee0d039d9cec97"
        },
        {
            "id": "1533e54fc33ee6889b88ada6fd79f9d531a9cc97",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=926",
            "value": "1533e54fc33ee6889b88ada6fd79f9d531a9cc97"
        },
        {
            "id": "7f54821c3754e54394edb14f4dc4843af1669576",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=94",
            "value": "7f54821c3754e54394edb14f4dc4843af1669576"
        },
        {
            "id": "1022c1203bbb06657c602ec453acc2409f6e328e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=946",
            "value": "1022c1203bbb06657c602ec453acc2409f6e328e"
        },
        {
            "id": "62705c24315338b06e06448b15afd073f1f77678",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=949",
            "value": "62705c24315338b06e06448b15afd073f1f77678"
        },
        {
            "id": "7a005fba86ebbdd1b161159b456966e2b38b0807",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=953",
            "value": "7a005fba86ebbdd1b161159b456966e2b38b0807"
        },
        {
            "id": "26eaa911a0ac5827ebaafe76328586df4720734c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=954",
            "value": "26eaa911a0ac5827ebaafe76328586df4720734c"
        },
        {
            "id": "16424600f9f2938e69933dae049b07bc92e1212f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=962",
            "value": "16424600f9f2938e69933dae049b07bc92e1212f"
        },
        {
            "id": "d2213d74fe0269035f1f282de92360a099c15d9a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=963",
            "value": "d2213d74fe0269035f1f282de92360a099c15d9a"
        },
        {
            "id": "8f530a038e423ea29ab55f5956628f5a2732002d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=964",
            "value": "8f530a038e423ea29ab55f5956628f5a2732002d"
        },
        {
            "id": "ef4b7577db78d662fca5661177c2e2a36c9f90ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=970",
            "value": "ef4b7577db78d662fca5661177c2e2a36c9f90ef"
        },
        {
            "id": "dc8f50002bddc20ad8e2f90eaa9dcfe61786452a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=971",
            "value": "dc8f50002bddc20ad8e2f90eaa9dcfe61786452a"
        },
        {
            "id": "3f301c98eb33af03b75f593b79f7be2e1ce1b82f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=973",
            "value": "3f301c98eb33af03b75f593b79f7be2e1ce1b82f"
        },
        {
            "id": "4e636d74dca5a737be354614bb2a9233542664d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=974",
            "value": "4e636d74dca5a737be354614bb2a9233542664d3"
        },
        {
            "id": "acb54bc760098f32cee1804831883ce555d269a5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=98",
            "value": "acb54bc760098f32cee1804831883ce555d269a5"
        },
        {
            "id": "c05b30cc6ac2bc4784095266e7096a3266b8bcf7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012-8789&CISOPTR=992",
            "value": "c05b30cc6ac2bc4784095266e7096a3266b8bcf7"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1300",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "922286a39454a012ac0ed3b883878a0d70e82735",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1301",
            "value": "922286a39454a012ac0ed3b883878a0d70e82735"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1303",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a514ee24f34c20f358308837033e70f36078be8f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1304",
            "value": "a514ee24f34c20f358308837033e70f36078be8f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1306",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ce41acc10cbe71202071cfcea86bf88b77251829",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1307",
            "value": "ce41acc10cbe71202071cfcea86bf88b77251829"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1309",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "8c6f2063eb21a5ab9ef478a3364a9356ce7b16a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1310",
            "value": "8c6f2063eb21a5ab9ef478a3364a9356ce7b16a8"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1312",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9052c9af430d002545722fdb5aea5a9cd8e2e7bf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1313",
            "value": "9052c9af430d002545722fdb5aea5a9cd8e2e7bf"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1315",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "81c58db362dd1eb67b0724386d3810ca97a39206",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1316",
            "value": "81c58db362dd1eb67b0724386d3810ca97a39206"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1318",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a4ebdc3b5b24cadf516cd80ee711808efaf2ca82",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1319",
            "value": "a4ebdc3b5b24cadf516cd80ee711808efaf2ca82"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1321",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "cd51f502bf94d5cf7191b8d5bedcaa236febce54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1322",
            "value": "cd51f502bf94d5cf7191b8d5bedcaa236febce54"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1324",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ea9d7387d17f0c6a006ec444f40a6b040cf80e12",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1325",
            "value": "ea9d7387d17f0c6a006ec444f40a6b040cf80e12"
        },
        {
            "id": "fea563c39c824184f1848f9a4c0961ccef6fa32c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1327",
            "value": "fea563c39c824184f1848f9a4c0961ccef6fa32c"
        },
        {
            "id": "db182df68907ce8f3b1b94e4c1da9c653869b6e7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1328",
            "value": "db182df68907ce8f3b1b94e4c1da9c653869b6e7"
        },
        {
            "id": "bdacc8d642837e3505a1e5e1181ef4a56b57ca44",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1329",
            "value": "bdacc8d642837e3505a1e5e1181ef4a56b57ca44"
        },
        {
            "id": "1949a35cb02bd666990b9af413ec603bc74078fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1330",
            "value": "1949a35cb02bd666990b9af413ec603bc74078fa"
        },
        {
            "id": "78fbefaedbdc3bea92851c1917212557afac7278",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1331",
            "value": "78fbefaedbdc3bea92851c1917212557afac7278"
        },
        {
            "id": "473955f5e6e8d3235d6f0f13c2e2812e1581a168",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1332",
            "value": "473955f5e6e8d3235d6f0f13c2e2812e1581a168"
        },
        {
            "id": "278dda68a91bd8cbe8a03f092f4270cb0aacd9b3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1333",
            "value": "278dda68a91bd8cbe8a03f092f4270cb0aacd9b3"
        },
        {
            "id": "187fc020c1067b13863c328f042dde1bae854349",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1334",
            "value": "187fc020c1067b13863c328f042dde1bae854349"
        },
        {
            "id": "9c1edc30953294135e3e276b5e898edceb67f9b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1335",
            "value": "9c1edc30953294135e3e276b5e898edceb67f9b2"
        },
        {
            "id": "aa9b940bbf8747a94d1c76d950f3a2e4b6035c98",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1336",
            "value": "aa9b940bbf8747a94d1c76d950f3a2e4b6035c98"
        },
        {
            "id": "7f90c2bcf1f0e60f4cda24db02c3ee383a7ee522",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1337",
            "value": "7f90c2bcf1f0e60f4cda24db02c3ee383a7ee522"
        },
        {
            "id": "ac2ef1ab02b56fa0e1738b72f05a99289fa7ad3f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1338",
            "value": "ac2ef1ab02b56fa0e1738b72f05a99289fa7ad3f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1340",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "dc642ee1fa531622451ec534f0ba8175b518f57b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1341",
            "value": "dc642ee1fa531622451ec534f0ba8175b518f57b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1343",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "41134bad6dd76c0189e1e219794cca168d1f26ba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1344",
            "value": "41134bad6dd76c0189e1e219794cca168d1f26ba"
        },
        {
            "id": "ed5125d196e06b01a6a209801cff33ff7e1d5a3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1346",
            "value": "ed5125d196e06b01a6a209801cff33ff7e1d5a3e"
        },
        {
            "id": "55de724760d7054a3451105f979ddd876cb0e85f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1347",
            "value": "55de724760d7054a3451105f979ddd876cb0e85f"
        },
        {
            "id": "6051f28b25061bd576ce73efc9ce81f88b2e5f6d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1348",
            "value": "6051f28b25061bd576ce73efc9ce81f88b2e5f6d"
        },
        {
            "id": "b2d212de4b6330173f1dcb4bfeab1cee4c372643",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1349",
            "value": "b2d212de4b6330173f1dcb4bfeab1cee4c372643"
        },
        {
            "id": "f6ac4fdfdabe4629ef0d47e416b4856c6c09f415",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1350",
            "value": "f6ac4fdfdabe4629ef0d47e416b4856c6c09f415"
        },
        {
            "id": "14f932ca943c76f1a31dbe676df73df7559fea1d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1352",
            "value": "14f932ca943c76f1a31dbe676df73df7559fea1d"
        },
        {
            "id": "cf338c0c0587b036bf19063cabb2bb501084affc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1353",
            "value": "cf338c0c0587b036bf19063cabb2bb501084affc"
        },
        {
            "id": "bae254175ca70a462ccd3845e2deda8ea3c9e48c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1354",
            "value": "bae254175ca70a462ccd3845e2deda8ea3c9e48c"
        },
        {
            "id": "856dd1a29bd0a408176be8af0c7a143e47673198",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1355",
            "value": "856dd1a29bd0a408176be8af0c7a143e47673198"
        },
        {
            "id": "113e85817763d6f1d3aedb065128559a89e5f24d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1356",
            "value": "113e85817763d6f1d3aedb065128559a89e5f24d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1358",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "7e0c127120739c6cc453f30c07a22b9bf5db51cd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1359",
            "value": "7e0c127120739c6cc453f30c07a22b9bf5db51cd"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1361",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0f4be52b039d59228bcc87c48df702bd62312d3c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1362",
            "value": "0f4be52b039d59228bcc87c48df702bd62312d3c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1364",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f6be8e52b60493effb73412e904291475979ff2e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1365",
            "value": "f6be8e52b60493effb73412e904291475979ff2e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1367",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2a830ea54400f61cd4b74b3cd5a217d8d5226e19",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1368",
            "value": "2a830ea54400f61cd4b74b3cd5a217d8d5226e19"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1370",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "21142510678a0684fdbf19cffee995cd347a0527",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1371",
            "value": "21142510678a0684fdbf19cffee995cd347a0527"
        },
        {
            "id": "d394aa6f74b651d03a1372b423e00759ecd30106",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1373",
            "value": "d394aa6f74b651d03a1372b423e00759ecd30106"
        },
        {
            "id": "753fa328f2d427a9a7e45238d8ec506b743427b8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1374",
            "value": "753fa328f2d427a9a7e45238d8ec506b743427b8"
        },
        {
            "id": "34e2dc8786d7d026c1aab95c0b631ab1378df83e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1375",
            "value": "34e2dc8786d7d026c1aab95c0b631ab1378df83e"
        },
        {
            "id": "e2e98900cbced1aefc11a8a246e217833049d47c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1376",
            "value": "e2e98900cbced1aefc11a8a246e217833049d47c"
        },
        {
            "id": "32a84c16236d809d034ab727cffce659cb17a442",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1377",
            "value": "32a84c16236d809d034ab727cffce659cb17a442"
        },
        {
            "id": "43140a62057ad3ddb8455609a7983450cc5ddc7b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1378",
            "value": "43140a62057ad3ddb8455609a7983450cc5ddc7b"
        },
        {
            "id": "ac8fbd6d19e3a2d7f1f0b587481c1813313355c5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1379",
            "value": "ac8fbd6d19e3a2d7f1f0b587481c1813313355c5"
        },
        {
            "id": "871e5bc57a79888f3a6c356bd26f0977890a9f29",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1380",
            "value": "871e5bc57a79888f3a6c356bd26f0977890a9f29"
        },
        {
            "id": "67bcd87e21ba22e7c18bb60538b6d047c47749de",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1381",
            "value": "67bcd87e21ba22e7c18bb60538b6d047c47749de"
        },
        {
            "id": "12c07cbc2b37565d567b3dac30270673c071554a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1382",
            "value": "12c07cbc2b37565d567b3dac30270673c071554a"
        },
        {
            "id": "d864b06e7ecff25f4db9cf939c7d8d4c8cde4e5a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1383",
            "value": "d864b06e7ecff25f4db9cf939c7d8d4c8cde4e5a"
        },
        {
            "id": "632739eb0e025fe632869d4ca4e9eb590d932b35",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1384",
            "value": "632739eb0e025fe632869d4ca4e9eb590d932b35"
        },
        {
            "id": "7e95f05fdbc96a63f5676bb820912b9218829d4d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1385",
            "value": "7e95f05fdbc96a63f5676bb820912b9218829d4d"
        },
        {
            "id": "5e92ea66c69d0d7403d06582eda94a320cb81ba0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1386",
            "value": "5e92ea66c69d0d7403d06582eda94a320cb81ba0"
        },
        {
            "id": "5b94565ea4460040689a5c87ab1a92d373c6b154",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1387",
            "value": "5b94565ea4460040689a5c87ab1a92d373c6b154"
        },
        {
            "id": "899ba3ef899fde75383758873edd2d8bede360ee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1388",
            "value": "899ba3ef899fde75383758873edd2d8bede360ee"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1390",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9b5fd891369ea3ac75552ee3b34fe696c3007a3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1391",
            "value": "9b5fd891369ea3ac75552ee3b34fe696c3007a3e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1393",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b182012cc02ce97908485504aa5aa3d8913bf013",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1394",
            "value": "b182012cc02ce97908485504aa5aa3d8913bf013"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1396",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "343533d554516599b618c429810d2afc31760b56",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1397",
            "value": "343533d554516599b618c429810d2afc31760b56"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1399",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "cd147e81ebe185f1761a47f88c6420d2368b57ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1400",
            "value": "cd147e81ebe185f1761a47f88c6420d2368b57ef"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1402",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a8b74c02b852015cafb52a2397687e5a033d2087",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1403",
            "value": "a8b74c02b852015cafb52a2397687e5a033d2087"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1405",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "29b8dec4aad38c8c7a0b92953489cc599b050849",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1406",
            "value": "29b8dec4aad38c8c7a0b92953489cc599b050849"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1408",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "5ac9dd06d725e37e71718c4e25b77902e814b4aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1409",
            "value": "5ac9dd06d725e37e71718c4e25b77902e814b4aa"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1411",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "4fbd114b1a9c5caa09dd0e10599bc3ea6b075808",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1412",
            "value": "4fbd114b1a9c5caa09dd0e10599bc3ea6b075808"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1414",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ff431053d91ae7ba7a21726882cd2da444f56bad",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1415",
            "value": "ff431053d91ae7ba7a21726882cd2da444f56bad"
        },
        {
            "id": "918f96cb3d2c5ccc55e15c3dc95f2b93dced1706",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1417",
            "value": "918f96cb3d2c5ccc55e15c3dc95f2b93dced1706"
        },
        {
            "id": "890986c3764235dfe10690d85c95dd93b41f1733",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1418",
            "value": "890986c3764235dfe10690d85c95dd93b41f1733"
        },
        {
            "id": "42c2a92721e3d588d6d7827eeeff97e8872d6424",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1419",
            "value": "42c2a92721e3d588d6d7827eeeff97e8872d6424"
        },
        {
            "id": "287bfcddc7f3f68422cca5f3eafbc4a28dafd3e8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1420",
            "value": "287bfcddc7f3f68422cca5f3eafbc4a28dafd3e8"
        },
        {
            "id": "65fe8bdf1b2ed80dfb5883cdb805a1bcd71443ca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1421",
            "value": "65fe8bdf1b2ed80dfb5883cdb805a1bcd71443ca"
        },
        {
            "id": "974124ffbe6573f4cd19202d7912ca22cad160e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1422",
            "value": "974124ffbe6573f4cd19202d7912ca22cad160e5"
        },
        {
            "id": "dc86893f584f7742e67e40b9cc67b34d88e12ace",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1423",
            "value": "dc86893f584f7742e67e40b9cc67b34d88e12ace"
        },
        {
            "id": "1e39b907014514e3916045d1c06050e4e20b656b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1425",
            "value": "1e39b907014514e3916045d1c06050e4e20b656b"
        },
        {
            "id": "6915be5826f2c167ce442781dc78b93befb8d1b0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1426",
            "value": "6915be5826f2c167ce442781dc78b93befb8d1b0"
        },
        {
            "id": "13c0543f8659afcec113703d961d31a84e66af57",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1427",
            "value": "13c0543f8659afcec113703d961d31a84e66af57"
        },
        {
            "id": "eb8192e3137e13f302c319e1612e792738639550",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1428",
            "value": "eb8192e3137e13f302c319e1612e792738639550"
        },
        {
            "id": "e1396c298ce3bdc103a66183592b07a836299ab2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1429",
            "value": "e1396c298ce3bdc103a66183592b07a836299ab2"
        },
        {
            "id": "b36271a90b0950a81815f2565bca675942c645f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1430",
            "value": "b36271a90b0950a81815f2565bca675942c645f0"
        },
        {
            "id": "b32c23537cb2b9a0d6dc28ed90661aff2e966191",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1431",
            "value": "b32c23537cb2b9a0d6dc28ed90661aff2e966191"
        },
        {
            "id": "0257d7dc8c96dd30fb353eaa80bf8b1048d4c6b5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1432",
            "value": "0257d7dc8c96dd30fb353eaa80bf8b1048d4c6b5"
        },
        {
            "id": "45306e47383c28cc3d9e58460a0f31a842a2d649",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1433",
            "value": "45306e47383c28cc3d9e58460a0f31a842a2d649"
        },
        {
            "id": "818699950d9f23cd8c110778ddc69b632597d00f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1434",
            "value": "818699950d9f23cd8c110778ddc69b632597d00f"
        },
        {
            "id": "7fea1b0f6006436cd1fca294540013f88f1b6949",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1435",
            "value": "7fea1b0f6006436cd1fca294540013f88f1b6949"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1437",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "1b01ce3350b0cd2d76da5fa34caf8e71c74687ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1438",
            "value": "1b01ce3350b0cd2d76da5fa34caf8e71c74687ff"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1440",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c3d402bd5064bb585edb33dbf2cdc05ad0cd4211",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1441",
            "value": "c3d402bd5064bb585edb33dbf2cdc05ad0cd4211"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1443",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9bae0e3cec88566ff2a58c36ad946e66938ac9ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1444",
            "value": "9bae0e3cec88566ff2a58c36ad946e66938ac9ff"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1446",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "5c544dbca7a487a09dc4a88c75b75be41c7be0c2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1447",
            "value": "5c544dbca7a487a09dc4a88c75b75be41c7be0c2"
        },
        {
            "id": "acc0d6e75283cf57476065e5d49edfd9631558b3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1449",
            "value": "acc0d6e75283cf57476065e5d49edfd9631558b3"
        },
        {
            "id": "d2c8ef9f88c5f77c74effda1b5867042053d3504",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1450",
            "value": "d2c8ef9f88c5f77c74effda1b5867042053d3504"
        },
        {
            "id": "25bfb2f6afe97d8def1990c0600dce0df3995cc1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1451",
            "value": "25bfb2f6afe97d8def1990c0600dce0df3995cc1"
        },
        {
            "id": "8029bd3ab8868dc10a1738548ff545b63ff1d613",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1452",
            "value": "8029bd3ab8868dc10a1738548ff545b63ff1d613"
        },
        {
            "id": "c9ed0b9254358fc1e82ea3584594c2965894f3c7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1453",
            "value": "c9ed0b9254358fc1e82ea3584594c2965894f3c7"
        },
        {
            "id": "4155615209cd2cc9f77c30c5375560c61eeb74fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1454",
            "value": "4155615209cd2cc9f77c30c5375560c61eeb74fa"
        },
        {
            "id": "bb858d78f6210c96d6f01d10a677fb03f8ecd031",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1455",
            "value": "bb858d78f6210c96d6f01d10a677fb03f8ecd031"
        },
        {
            "id": "0f09ba47c3d231e25e8b4cf0bd49d29566de8600",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1456",
            "value": "0f09ba47c3d231e25e8b4cf0bd49d29566de8600"
        },
        {
            "id": "deca5b315921181a0cce7d7c9c28f2ce01a2188d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1457",
            "value": "deca5b315921181a0cce7d7c9c28f2ce01a2188d"
        },
        {
            "id": "2f595ba843140892795e331775472d6794905a8a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1458",
            "value": "2f595ba843140892795e331775472d6794905a8a"
        },
        {
            "id": "d1b64e87a6ee30b0c10eac9f6a5e738b54eb1122",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1459",
            "value": "d1b64e87a6ee30b0c10eac9f6a5e738b54eb1122"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1461",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0580e0d62ed63948d5b0cdb094016a45e7090c85",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1462",
            "value": "0580e0d62ed63948d5b0cdb094016a45e7090c85"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1464",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2c764a75621b520ffdac62dafb66218258d7cf22",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1465",
            "value": "2c764a75621b520ffdac62dafb66218258d7cf22"
        },
        {
            "id": "6aced9ad049d88fc7ba4c1517ce649f0dcc2bd2a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1467",
            "value": "6aced9ad049d88fc7ba4c1517ce649f0dcc2bd2a"
        },
        {
            "id": "e13f64e95ccdcbbf78b80afc26e7729a716df4f4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1468",
            "value": "e13f64e95ccdcbbf78b80afc26e7729a716df4f4"
        },
        {
            "id": "9c91554edda9ac8910b0f031fe3a98c0fedfc68e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1469",
            "value": "9c91554edda9ac8910b0f031fe3a98c0fedfc68e"
        },
        {
            "id": "fa480b81eb7596d60405543dccd48414cf526f9c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1470",
            "value": "fa480b81eb7596d60405543dccd48414cf526f9c"
        },
        {
            "id": "c0350acd7deedbf5f57e15e3bac49bffd3243ef9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1471",
            "value": "c0350acd7deedbf5f57e15e3bac49bffd3243ef9"
        },
        {
            "id": "438aeaf4369669bcd8d7acbcb5beada34f1b6bbe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1472",
            "value": "438aeaf4369669bcd8d7acbcb5beada34f1b6bbe"
        },
        {
            "id": "883ee0be55661732739dd113636193b9d2460a8e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1473",
            "value": "883ee0be55661732739dd113636193b9d2460a8e"
        },
        {
            "id": "19f226d5362c34f2b8646fdea277d609d66a27e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1474",
            "value": "19f226d5362c34f2b8646fdea277d609d66a27e3"
        },
        {
            "id": "7c80f95c242ab3cb0453d7b3ce63121197fc8a3c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1475",
            "value": "7c80f95c242ab3cb0453d7b3ce63121197fc8a3c"
        },
        {
            "id": "946e9c5f5a241749ba89ff3348d40764a14c7d12",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1476",
            "value": "946e9c5f5a241749ba89ff3348d40764a14c7d12"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1478",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "991ea09292f873aa83b50af1c8d89b2ace12c98b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1479",
            "value": "991ea09292f873aa83b50af1c8d89b2ace12c98b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1481",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9fcd59080942f8bf14a7a5b6b6d4d7add839bdaf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1482",
            "value": "9fcd59080942f8bf14a7a5b6b6d4d7add839bdaf"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1484",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "26d7008fd9b83b694711c69c289a00f55aeaa3b9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1485",
            "value": "26d7008fd9b83b694711c69c289a00f55aeaa3b9"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1487",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c38605be6c93e8885ccf2b6fe86ffcad8d674767",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1488",
            "value": "c38605be6c93e8885ccf2b6fe86ffcad8d674767"
        },
        {
            "id": "14f0459e5497026c6ba136028b8a4be3b265651b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1490",
            "value": "14f0459e5497026c6ba136028b8a4be3b265651b"
        },
        {
            "id": "ab935ba808422ae5ea4d1ad90d08cac92df5e440",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1491",
            "value": "ab935ba808422ae5ea4d1ad90d08cac92df5e440"
        },
        {
            "id": "da0aec43d895ec3ebad38d55bd2b9a1268ae4a81",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1492",
            "value": "da0aec43d895ec3ebad38d55bd2b9a1268ae4a81"
        },
        {
            "id": "aab50d54e1ea0200a301c9e56bf96e94c8bde524",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1493",
            "value": "aab50d54e1ea0200a301c9e56bf96e94c8bde524"
        },
        {
            "id": "6046a6ef0a6f4595fd4c8d7e6e436905f735adc2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1494",
            "value": "6046a6ef0a6f4595fd4c8d7e6e436905f735adc2"
        },
        {
            "id": "2b194288e2da056205ca0c8323d478d578c023fb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1496",
            "value": "2b194288e2da056205ca0c8323d478d578c023fb"
        },
        {
            "id": "b76eb78b8a3b708a30ca82b810f76e1fca0e654a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1497",
            "value": "b76eb78b8a3b708a30ca82b810f76e1fca0e654a"
        },
        {
            "id": "df0926eccef2a6637d356067ec65e3ec5f690e62",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1498",
            "value": "df0926eccef2a6637d356067ec65e3ec5f690e62"
        },
        {
            "id": "e03a6b0e676c3ec28d8a52a5de91ddfbbc9a1d67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1499",
            "value": "e03a6b0e676c3ec28d8a52a5de91ddfbbc9a1d67"
        },
        {
            "id": "abe00c330bb2cd28b61e1addb68bf7741be7b93a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1500",
            "value": "abe00c330bb2cd28b61e1addb68bf7741be7b93a"
        },
        {
            "id": "37c2c4f0d3efeffb0cf5a84e1adfc45fdfc276b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1501",
            "value": "37c2c4f0d3efeffb0cf5a84e1adfc45fdfc276b2"
        },
        {
            "id": "e0388ad8af4cd790544f4b75904dbc459ccc8c2f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1502",
            "value": "e0388ad8af4cd790544f4b75904dbc459ccc8c2f"
        },
        {
            "id": "dbad628cf47f40e836eb04584ab115803742ebb3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1503",
            "value": "dbad628cf47f40e836eb04584ab115803742ebb3"
        },
        {
            "id": "4349f70d30421909e52471c8b288196f5cc0d73e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1504",
            "value": "4349f70d30421909e52471c8b288196f5cc0d73e"
        },
        {
            "id": "975e06f4e543ce26027c87c68795de55675991bc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1505",
            "value": "975e06f4e543ce26027c87c68795de55675991bc"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1507",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "87c61b63cf6bdc40752a7f64092afd40639348f6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1508",
            "value": "87c61b63cf6bdc40752a7f64092afd40639348f6"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1510",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1513",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b3088c26b8853395722a18f50c59577c4f9659aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1514",
            "value": "b3088c26b8853395722a18f50c59577c4f9659aa"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1516",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "bc47e69cf44930b77b23bdecbe995536a782614c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1517",
            "value": "bc47e69cf44930b77b23bdecbe995536a782614c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1519",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "3c9abb29a034b73e1cc802b3605d5dce353e9f7a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1520",
            "value": "3c9abb29a034b73e1cc802b3605d5dce353e9f7a"
        },
        {
            "id": "ed5125d196e06b01a6a209801cff33ff7e1d5a3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1522",
            "value": "ed5125d196e06b01a6a209801cff33ff7e1d5a3e"
        },
        {
            "id": "d0d9472b8f6e188078f74f713b05dedc1772a160",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1523",
            "value": "d0d9472b8f6e188078f74f713b05dedc1772a160"
        },
        {
            "id": "b6ecb191268f1c86762bd8f2d3a0bb3ca051f2b7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1524",
            "value": "b6ecb191268f1c86762bd8f2d3a0bb3ca051f2b7"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1526",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f89189bf7b1a09e8b002501cf46366b1ebb71d3c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1527",
            "value": "f89189bf7b1a09e8b002501cf46366b1ebb71d3c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1529",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "106c74706213e32b643ca3823cc5c211559bc322",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1530",
            "value": "106c74706213e32b643ca3823cc5c211559bc322"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1532",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "183b39019dc41014844004032f6c29cbbd528746",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1533",
            "value": "183b39019dc41014844004032f6c29cbbd528746"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1535",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "1ccd3460403dfc3f5ca0947b7e378d97fcea7667",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1536",
            "value": "1ccd3460403dfc3f5ca0947b7e378d97fcea7667"
        },
        {
            "id": "26a42a70db32f85e8789eee8d8ad184ac08e54b6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1538",
            "value": "26a42a70db32f85e8789eee8d8ad184ac08e54b6"
        },
        {
            "id": "115709d3fce117e5e216fb9c036d27762672f7c0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1539",
            "value": "115709d3fce117e5e216fb9c036d27762672f7c0"
        },
        {
            "id": "cb53e90aedc1ac315d1fe589585ce1c736be929b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1540",
            "value": "cb53e90aedc1ac315d1fe589585ce1c736be929b"
        },
        {
            "id": "63ce5b45b04cee42aa42f34a1096eca87264a84f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1541",
            "value": "63ce5b45b04cee42aa42f34a1096eca87264a84f"
        },
        {
            "id": "9260ed9435ab4de1b2aadf44bf5c23c09b88993b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1542",
            "value": "9260ed9435ab4de1b2aadf44bf5c23c09b88993b"
        },
        {
            "id": "63e2cfbd3f73eaa5d32f3bfb2cf528f20dbd0118",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1543",
            "value": "63e2cfbd3f73eaa5d32f3bfb2cf528f20dbd0118"
        },
        {
            "id": "3f2064bd4609b3abbe5f1210019dbd87f5c4e187",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1544",
            "value": "3f2064bd4609b3abbe5f1210019dbd87f5c4e187"
        },
        {
            "id": "4bdd31acafe06d745c12972ff341230527aec703",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1545",
            "value": "4bdd31acafe06d745c12972ff341230527aec703"
        },
        {
            "id": "2b27f3e9b71547b4c2caad2aabe0cca6b6555796",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1546",
            "value": "2b27f3e9b71547b4c2caad2aabe0cca6b6555796"
        },
        {
            "id": "3109a3d01a6120898f3353717e4352a8b1c0e709",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1547",
            "value": "3109a3d01a6120898f3353717e4352a8b1c0e709"
        },
        {
            "id": "82f4e6df9803186efae3dd4f1886404c93c1efef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1548",
            "value": "82f4e6df9803186efae3dd4f1886404c93c1efef"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1550",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "8afa807edd888a15928ed6bcf3f12bf430e2345d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1551",
            "value": "8afa807edd888a15928ed6bcf3f12bf430e2345d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1553",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2e2b5ddd3823f1b7866ab752ac20b178ccc0f7fd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1554",
            "value": "2e2b5ddd3823f1b7866ab752ac20b178ccc0f7fd"
        },
        {
            "id": "0dac110bf028d17358da5468407393a2929c17a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1556",
            "value": "0dac110bf028d17358da5468407393a2929c17a8"
        },
        {
            "id": "37b121299e11e58b96fea0a7a846b31345102497",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1557",
            "value": "37b121299e11e58b96fea0a7a846b31345102497"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1559",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "227d4c812eeb3d16de38fc395144c3a8c05a71b7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1560",
            "value": "227d4c812eeb3d16de38fc395144c3a8c05a71b7"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1562",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a8dfd80ca911b386c54a25d2e30e5f45f9e48f9a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1563",
            "value": "a8dfd80ca911b386c54a25d2e30e5f45f9e48f9a"
        },
        {
            "id": "efebdebc4a8d50164c96b423e6f825de3d3cb794",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1565",
            "value": "efebdebc4a8d50164c96b423e6f825de3d3cb794"
        },
        {
            "id": "f1c34e6492a40169f9cabae66ab4bc1f57b61639",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1566",
            "value": "f1c34e6492a40169f9cabae66ab4bc1f57b61639"
        },
        {
            "id": "3b71e4d9d39638c4448874bac951e50fe08a9611",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1567",
            "value": "3b71e4d9d39638c4448874bac951e50fe08a9611"
        },
        {
            "id": "c8d4c05134536910bf573b4bcbba51b430a37a4c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1568",
            "value": "c8d4c05134536910bf573b4bcbba51b430a37a4c"
        },
        {
            "id": "07b7f87befe16be9360ce05cf9e0b003c82f671d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1569",
            "value": "07b7f87befe16be9360ce05cf9e0b003c82f671d"
        },
        {
            "id": "067103bc989d336216ea3cad11b7b5dcecdd4985",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1570",
            "value": "067103bc989d336216ea3cad11b7b5dcecdd4985"
        },
        {
            "id": "413935336eca6265eba43b6d1dc8c4e85a4e4596",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1571",
            "value": "413935336eca6265eba43b6d1dc8c4e85a4e4596"
        },
        {
            "id": "79742cdc7e98b8d2dc7343f31ec08d855c456b58",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1572",
            "value": "79742cdc7e98b8d2dc7343f31ec08d855c456b58"
        },
        {
            "id": "1e27280089625af903870991cb1abb4d765e23fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1573",
            "value": "1e27280089625af903870991cb1abb4d765e23fa"
        },
        {
            "id": "59a2c64d847a4530da501fc59e0d473f4cedba4f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1574",
            "value": "59a2c64d847a4530da501fc59e0d473f4cedba4f"
        },
        {
            "id": "d2551202c15dcd0ced61961320c22987ad4bb606",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1575",
            "value": "d2551202c15dcd0ced61961320c22987ad4bb606"
        },
        {
            "id": "d33b80ad9a5a044a62345123bde6f366b630bf67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1576",
            "value": "d33b80ad9a5a044a62345123bde6f366b630bf67"
        },
        {
            "id": "92f6bd2041a0a579b5e47003f2e2f6b0869456e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1577",
            "value": "92f6bd2041a0a579b5e47003f2e2f6b0869456e9"
        },
        {
            "id": "9aeee3b72858cb345020fe1a0ca553a5e475707d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1578",
            "value": "9aeee3b72858cb345020fe1a0ca553a5e475707d"
        },
        {
            "id": "6a92e1b946b8ed2950894bdbd62be2ab040d8c79",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1579",
            "value": "6a92e1b946b8ed2950894bdbd62be2ab040d8c79"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1581",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "d291cf3200c7a9c416f6894bbaf8cddcd7d8dd60",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1582",
            "value": "d291cf3200c7a9c416f6894bbaf8cddcd7d8dd60"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1584",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "93b62cc7f4194c335d44d03f5386344a1cb6c58b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1585",
            "value": "93b62cc7f4194c335d44d03f5386344a1cb6c58b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1587",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "06a5d82465135110d965975cff6a4003582156aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1588",
            "value": "06a5d82465135110d965975cff6a4003582156aa"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1590",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "70f9daa0a004544243e9ce60db0740845298dced",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1591",
            "value": "70f9daa0a004544243e9ce60db0740845298dced"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1593",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f82a89a891f0ed0b38a3b760437bf7cdec97416c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1594",
            "value": "f82a89a891f0ed0b38a3b760437bf7cdec97416c"
        },
        {
            "id": "adb830f620fdf0a38669385e5e4478bb870c48f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1596",
            "value": "adb830f620fdf0a38669385e5e4478bb870c48f0"
        },
        {
            "id": "e3d3f572df8d61f134c9a29495e7cc0d6d194455",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1597",
            "value": "e3d3f572df8d61f134c9a29495e7cc0d6d194455"
        },
        {
            "id": "4e744674977c902ea6430bcac73102897e674372",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1598",
            "value": "4e744674977c902ea6430bcac73102897e674372"
        },
        {
            "id": "e97c25797bdc3bca4e604466bb2c9d985275ae52",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1599",
            "value": "e97c25797bdc3bca4e604466bb2c9d985275ae52"
        },
        {
            "id": "f8fd6984aeed3b22e11b0ea00aca61f9f0bd4a77",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1600",
            "value": "f8fd6984aeed3b22e11b0ea00aca61f9f0bd4a77"
        },
        {
            "id": "9bea928c924f9c9dcdb98d6cb903c95a03479fd2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1601",
            "value": "9bea928c924f9c9dcdb98d6cb903c95a03479fd2"
        },
        {
            "id": "1bc7e78b8d0e19374e0120446646dfb69219a6d6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1602",
            "value": "1bc7e78b8d0e19374e0120446646dfb69219a6d6"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1604",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "020ae9780222cda1c95162c6b4c435131a3eace1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1605",
            "value": "020ae9780222cda1c95162c6b4c435131a3eace1"
        },
        {
            "id": "ed5125d196e06b01a6a209801cff33ff7e1d5a3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1607",
            "value": "ed5125d196e06b01a6a209801cff33ff7e1d5a3e"
        },
        {
            "id": "2d6debb9db1cc3e73c6e2dd9dc6f556139d7d60e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1608",
            "value": "2d6debb9db1cc3e73c6e2dd9dc6f556139d7d60e"
        },
        {
            "id": "7d6b90d63bda4272dac20c4312fcd9c0db156703",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1609",
            "value": "7d6b90d63bda4272dac20c4312fcd9c0db156703"
        },
        {
            "id": "1f0005ca3a986b87fec0770d814d5aca04c7dd87",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1610",
            "value": "1f0005ca3a986b87fec0770d814d5aca04c7dd87"
        },
        {
            "id": "a32fe39b435694c062653ab5c576610af5fa1bcb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1611",
            "value": "a32fe39b435694c062653ab5c576610af5fa1bcb"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1613",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "17ebe47f316638f368d2c60940db9d420a269bde",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1614",
            "value": "17ebe47f316638f368d2c60940db9d420a269bde"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1616",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "abf78b58543731bf4b4ec61aebd36597753cd20a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1617",
            "value": "abf78b58543731bf4b4ec61aebd36597753cd20a"
        },
        {
            "id": "89b295ac64d117720923d3196f4450050f417739",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1619",
            "value": "89b295ac64d117720923d3196f4450050f417739"
        },
        {
            "id": "5fb48ea610d626e039d7f73d7e6d22fdf49af73d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1620",
            "value": "5fb48ea610d626e039d7f73d7e6d22fdf49af73d"
        },
        {
            "id": "36e8a63df13de875bb0c6a762711c2df00516326",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1621",
            "value": "36e8a63df13de875bb0c6a762711c2df00516326"
        },
        {
            "id": "80040b7fe7539eba4138d7f026be1a2e72acc3d9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1622",
            "value": "80040b7fe7539eba4138d7f026be1a2e72acc3d9"
        },
        {
            "id": "c74fbfc89c60a3c34feb19088e146c7066cb0076",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1623",
            "value": "c74fbfc89c60a3c34feb19088e146c7066cb0076"
        },
        {
            "id": "f614ccafce150c2fc9c0db4dd408b442c51b4ba5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1624",
            "value": "f614ccafce150c2fc9c0db4dd408b442c51b4ba5"
        },
        {
            "id": "ccc413e8766f8f4650767609bd5e27584de47ddc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1625",
            "value": "ccc413e8766f8f4650767609bd5e27584de47ddc"
        },
        {
            "id": "abb46fa955fa47facab98837d423e1e68357226c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1626",
            "value": "abb46fa955fa47facab98837d423e1e68357226c"
        },
        {
            "id": "154d0fb19cc993feee90ef5a422fdcc3b7d5a8ca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1627",
            "value": "154d0fb19cc993feee90ef5a422fdcc3b7d5a8ca"
        },
        {
            "id": "6c15eb0c9150001dac12fa8079eef3908d7f52b8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1628",
            "value": "6c15eb0c9150001dac12fa8079eef3908d7f52b8"
        },
        {
            "id": "935c883cd1fc60597cbd42a3d89edf06d7d26feb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1630",
            "value": "935c883cd1fc60597cbd42a3d89edf06d7d26feb"
        },
        {
            "id": "7e8b07e70593fd2296125c00eaf5fdcc87f4c23f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1631",
            "value": "7e8b07e70593fd2296125c00eaf5fdcc87f4c23f"
        },
        {
            "id": "c0ed256914861d96dd97016ebfa85441265a4380",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1632",
            "value": "c0ed256914861d96dd97016ebfa85441265a4380"
        },
        {
            "id": "6683252decaeaa67d060cb282c716294e5590cef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1633",
            "value": "6683252decaeaa67d060cb282c716294e5590cef"
        },
        {
            "id": "94bfdf3018f433c718ca58bdcc66383e92ea4c13",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1634",
            "value": "94bfdf3018f433c718ca58bdcc66383e92ea4c13"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1636",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "21aacc1311f8a7ed91136e19458afbdc5af01a76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1637",
            "value": "21aacc1311f8a7ed91136e19458afbdc5af01a76"
        },
        {
            "id": "3fb8965cf93a43d671b6a8aea7c4fea240453339",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1639",
            "value": "3fb8965cf93a43d671b6a8aea7c4fea240453339"
        },
        {
            "id": "93200876f9b6132ec77cd5cc7f2d9835805bc602",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1640",
            "value": "93200876f9b6132ec77cd5cc7f2d9835805bc602"
        },
        {
            "id": "a23bfacca028573762361cf258fd0b0f15614d2f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1641",
            "value": "a23bfacca028573762361cf258fd0b0f15614d2f"
        },
        {
            "id": "1ac3caf9a5772e506ac21fca6180e7552d258b72",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1642",
            "value": "1ac3caf9a5772e506ac21fca6180e7552d258b72"
        },
        {
            "id": "cff3300570fd60c66e3d2f3fd9cf86ba50b21b78",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1643",
            "value": "cff3300570fd60c66e3d2f3fd9cf86ba50b21b78"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1645",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "8df00d1a34639496f83a480506bfed018a3253a6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1646",
            "value": "8df00d1a34639496f83a480506bfed018a3253a6"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1648",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c8d026956494b8efc2964857d79e82ddb8bf59e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1649",
            "value": "c8d026956494b8efc2964857d79e82ddb8bf59e1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1651",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "cd1ed32c19cb2c27715d97581ac2db2616749b0d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1652",
            "value": "cd1ed32c19cb2c27715d97581ac2db2616749b0d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1654",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "d212184e828f1b9d5dbc14e1973c8e6e3894ae54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1655",
            "value": "d212184e828f1b9d5dbc14e1973c8e6e3894ae54"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1657",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "d8718473585dfbea56e0f4a37fd86a2a9e88de84",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1658",
            "value": "d8718473585dfbea56e0f4a37fd86a2a9e88de84"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1660",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f8f068e3422fbedca239fa35b4cda05ffc1bede4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1661",
            "value": "f8f068e3422fbedca239fa35b4cda05ffc1bede4"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1663",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "bf898f2d727812a48dd6354535105e47124395f8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1664",
            "value": "bf898f2d727812a48dd6354535105e47124395f8"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1666",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9e082566aff9267a9923ab171b3674ca9762fbb2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1667",
            "value": "9e082566aff9267a9923ab171b3674ca9762fbb2"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1669",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0bd84afb7ffff4f22660b027f84796739d9c8625",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1670",
            "value": "0bd84afb7ffff4f22660b027f84796739d9c8625"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1672",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "bed1454bd47a2b125dad14ea9862d38e2ce6afa3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1673",
            "value": "bed1454bd47a2b125dad14ea9862d38e2ce6afa3"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1675",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "89a92b1bed15886fb2bcd0d0f8f358152dc0b7ad",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1676",
            "value": "89a92b1bed15886fb2bcd0d0f8f358152dc0b7ad"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1678",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "1f78a26e4b01436d46815900d9d1238e63e47de1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1679",
            "value": "1f78a26e4b01436d46815900d9d1238e63e47de1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1681",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9532081b076bb3606c73ca44bff1b211628c2c82",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1682",
            "value": "9532081b076bb3606c73ca44bff1b211628c2c82"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1684",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "7b40c482dd1c4539400593d75f3189d6002158d9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1685",
            "value": "7b40c482dd1c4539400593d75f3189d6002158d9"
        },
        {
            "id": "d88b5ef0b69ba50eb819bd883c86eb1ff861b1a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1687",
            "value": "d88b5ef0b69ba50eb819bd883c86eb1ff861b1a2"
        },
        {
            "id": "f2f498b151f03aefc2df564f599cbb4b431b420f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1688",
            "value": "f2f498b151f03aefc2df564f599cbb4b431b420f"
        },
        {
            "id": "03c4839fe33f89cba4784b2e93bc3f1b1def7842",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1689",
            "value": "03c4839fe33f89cba4784b2e93bc3f1b1def7842"
        },
        {
            "id": "ebb2ab46c7966c695604e2022dbe1f43bb1075c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1690",
            "value": "ebb2ab46c7966c695604e2022dbe1f43bb1075c4"
        },
        {
            "id": "2dcdd5532934a67d1ed49e9a8ada8ba2d5d53741",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1691",
            "value": "2dcdd5532934a67d1ed49e9a8ada8ba2d5d53741"
        },
        {
            "id": "d0115522249d3c9578cdedd6ff521009c9e2085f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1692",
            "value": "d0115522249d3c9578cdedd6ff521009c9e2085f"
        },
        {
            "id": "8182642809010e93788aa3fb4c84ea58110259de",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1693",
            "value": "8182642809010e93788aa3fb4c84ea58110259de"
        },
        {
            "id": "506307e69f58ea24abd37fe35abf273d8fee5bc7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1694",
            "value": "506307e69f58ea24abd37fe35abf273d8fee5bc7"
        },
        {
            "id": "97d3299d24db94459087d0db169dd4b4b29987a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1695",
            "value": "97d3299d24db94459087d0db169dd4b4b29987a2"
        },
        {
            "id": "036d0a423a55adabe30f6c1a6ac63f43cc65b5e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1696",
            "value": "036d0a423a55adabe30f6c1a6ac63f43cc65b5e5"
        },
        {
            "id": "f283196ebf9d78d3b9ae5df215f08ced51e2a90f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1697",
            "value": "f283196ebf9d78d3b9ae5df215f08ced51e2a90f"
        },
        {
            "id": "50348b5903111ce04e985bc2ebd142e578a9f881",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1699",
            "value": "50348b5903111ce04e985bc2ebd142e578a9f881"
        },
        {
            "id": "5ed8cb9baf14a43d031d64f49fe0b953aff64833",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1700",
            "value": "5ed8cb9baf14a43d031d64f49fe0b953aff64833"
        },
        {
            "id": "75af71dfe52a5ce4af729bbb4bfd4d4f3aff1033",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1701",
            "value": "75af71dfe52a5ce4af729bbb4bfd4d4f3aff1033"
        },
        {
            "id": "c43738c47f521ada130c4675b104985346418043",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1702",
            "value": "c43738c47f521ada130c4675b104985346418043"
        },
        {
            "id": "b6689910fde13f8614ac91bff9c30b8549f3bd60",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1703",
            "value": "b6689910fde13f8614ac91bff9c30b8549f3bd60"
        },
        {
            "id": "f5360ca198e589e1b3cd5f3e3d25b3e558262949",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1704",
            "value": "f5360ca198e589e1b3cd5f3e3d25b3e558262949"
        },
        {
            "id": "a4d307aedb3aa4a14cfdac898e97f4b98731496c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1705",
            "value": "a4d307aedb3aa4a14cfdac898e97f4b98731496c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1707",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c36f76e2b9a1f0b216766e638634015c2cebf9c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1708",
            "value": "c36f76e2b9a1f0b216766e638634015c2cebf9c4"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1710",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ea72fbfdc41fe87f40f27e5c41b298c33768a791",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1711",
            "value": "ea72fbfdc41fe87f40f27e5c41b298c33768a791"
        },
        {
            "id": "2e99f56a65a3ec598a7cccd78a455a76d206df28",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1713",
            "value": "2e99f56a65a3ec598a7cccd78a455a76d206df28"
        },
        {
            "id": "d16056915303109b57710e691e59dc4ab700c3b6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1714",
            "value": "d16056915303109b57710e691e59dc4ab700c3b6"
        },
        {
            "id": "fdf82f28286f6e51f9afc7d59c961f5eb1d2fd69",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1715",
            "value": "fdf82f28286f6e51f9afc7d59c961f5eb1d2fd69"
        },
        {
            "id": "5ae2b20f56688322b107f9949db913e549129d4f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1716",
            "value": "5ae2b20f56688322b107f9949db913e549129d4f"
        },
        {
            "id": "4ce01f5a0e92062f374dbee389d98dc57de4763e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1717",
            "value": "4ce01f5a0e92062f374dbee389d98dc57de4763e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1719",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "d601f77c3f5203a7aabb0ebca81591128d95973d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1720",
            "value": "d601f77c3f5203a7aabb0ebca81591128d95973d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1722",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "16fbb9bb8129cf99af40f6f6cd5b4709dbb39352",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1723",
            "value": "16fbb9bb8129cf99af40f6f6cd5b4709dbb39352"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1725",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9459e7e48fcb786cd5439a9629ce2b6044af9c0c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1726",
            "value": "9459e7e48fcb786cd5439a9629ce2b6044af9c0c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1728",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "69632258f6b07d85ed4b6d075283f9ecde8a4e41",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1729",
            "value": "69632258f6b07d85ed4b6d075283f9ecde8a4e41"
        },
        {
            "id": "7422231ac7a2294d844973397f83337343b12d22",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1731",
            "value": "7422231ac7a2294d844973397f83337343b12d22"
        },
        {
            "id": "54d9fa07c552fb8ed4664caa929f945cc9413c19",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1732",
            "value": "54d9fa07c552fb8ed4664caa929f945cc9413c19"
        },
        {
            "id": "624536642633977fba0c2a5516999567c18b5db9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1733",
            "value": "624536642633977fba0c2a5516999567c18b5db9"
        },
        {
            "id": "906e701360dc557354abc5a168e976ff436b0228",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1734",
            "value": "906e701360dc557354abc5a168e976ff436b0228"
        },
        {
            "id": "b06ba1e9de0c3b022d8758c536d5135b08fcfbfd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1735",
            "value": "b06ba1e9de0c3b022d8758c536d5135b08fcfbfd"
        },
        {
            "id": "9ec0b366a4ea4f96ae7b85dad725268c03c8b2a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1736",
            "value": "9ec0b366a4ea4f96ae7b85dad725268c03c8b2a3"
        },
        {
            "id": "9b4d250f82fb401bab62db2958f09cb601f44ff9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1737",
            "value": "9b4d250f82fb401bab62db2958f09cb601f44ff9"
        },
        {
            "id": "a6e50a88dff18856d9d91d30ed92193888e19582",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1738",
            "value": "a6e50a88dff18856d9d91d30ed92193888e19582"
        },
        {
            "id": "04d46c7f45498f9881f22276e82d1749979dba8b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1739",
            "value": "04d46c7f45498f9881f22276e82d1749979dba8b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1741",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "828a60cdc45b4124e50900c4c99cb3d7395598f1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1742",
            "value": "828a60cdc45b4124e50900c4c99cb3d7395598f1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1744",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "8d6da66de9fc99babff90aa944c8a01f0b8aac4d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1745",
            "value": "8d6da66de9fc99babff90aa944c8a01f0b8aac4d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1747",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "86707a7cc5bc438e185b33489a3d3500c0aa73fc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1748",
            "value": "86707a7cc5bc438e185b33489a3d3500c0aa73fc"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1750",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2539934011a63349540030980361e35b8e669512",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1751",
            "value": "2539934011a63349540030980361e35b8e669512"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1753",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f37f6a81346713c5c1f2cd528a6977446ad3952e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1754",
            "value": "f37f6a81346713c5c1f2cd528a6977446ad3952e"
        },
        {
            "id": "655d691ffa1f6ad971e97ed519b54f96b6552ab7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1756",
            "value": "655d691ffa1f6ad971e97ed519b54f96b6552ab7"
        },
        {
            "id": "2ac1397f1cb461ff07abd9d19051f9df0ad1845c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1757",
            "value": "2ac1397f1cb461ff07abd9d19051f9df0ad1845c"
        },
        {
            "id": "ab8e1431f97e1af0564b65c825052b495c75e3f2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1758",
            "value": "ab8e1431f97e1af0564b65c825052b495c75e3f2"
        },
        {
            "id": "4da67ce4740157789efc15418b0b1c25eb5e527f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1759",
            "value": "4da67ce4740157789efc15418b0b1c25eb5e527f"
        },
        {
            "id": "64d53158d23e88cd0c694ad974c54fa4a445a89c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1760",
            "value": "64d53158d23e88cd0c694ad974c54fa4a445a89c"
        },
        {
            "id": "f1cda05ab78709af213287fbd189ddcbe8a442b7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1761",
            "value": "f1cda05ab78709af213287fbd189ddcbe8a442b7"
        },
        {
            "id": "6334986d8d2e09b2de49fef79af2ff6c2432644a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1762",
            "value": "6334986d8d2e09b2de49fef79af2ff6c2432644a"
        },
        {
            "id": "f170c6b69d537e04b5e37cbd16bc2cf128ab1c8c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1763",
            "value": "f170c6b69d537e04b5e37cbd16bc2cf128ab1c8c"
        },
        {
            "id": "d74f7870fe8e9fadd3b01f7f6623dacc3a39ad43",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1764",
            "value": "d74f7870fe8e9fadd3b01f7f6623dacc3a39ad43"
        },
        {
            "id": "7c7c5fe4ca70ccf21f27bf784bdab10647c80359",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1765",
            "value": "7c7c5fe4ca70ccf21f27bf784bdab10647c80359"
        },
        {
            "id": "612d93d96998ca1809b6a03931609aeea70e8601",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1766",
            "value": "612d93d96998ca1809b6a03931609aeea70e8601"
        },
        {
            "id": "0e2d4a5180b532062714e258b1e46154b116c705",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1767",
            "value": "0e2d4a5180b532062714e258b1e46154b116c705"
        },
        {
            "id": "c76359a375e7be3e92c998601899c601b742b46b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1768",
            "value": "c76359a375e7be3e92c998601899c601b742b46b"
        },
        {
            "id": "13a39cd3b81de8669a689cc8a6632bea0c004328",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1769",
            "value": "13a39cd3b81de8669a689cc8a6632bea0c004328"
        },
        {
            "id": "417a977eacf838616398ecd1d2ecc67a5417b67c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1770",
            "value": "417a977eacf838616398ecd1d2ecc67a5417b67c"
        },
        {
            "id": "22670d625b5e19f550faf786bd0c8d302f3a0333",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1772",
            "value": "22670d625b5e19f550faf786bd0c8d302f3a0333"
        },
        {
            "id": "ab6613ab45ad026af9c66b28e279c3e70447a8e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1773",
            "value": "ab6613ab45ad026af9c66b28e279c3e70447a8e6"
        },
        {
            "id": "2104197627ea86052e4468b7f09d000788b3ee14",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1774",
            "value": "2104197627ea86052e4468b7f09d000788b3ee14"
        },
        {
            "id": "4ce73d1a7188ba5b684b1c6a073c0332eefc7783",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1775",
            "value": "4ce73d1a7188ba5b684b1c6a073c0332eefc7783"
        },
        {
            "id": "e2d93ceba4b3e3ef8329b20a7e3afeb584711bd9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1776",
            "value": "e2d93ceba4b3e3ef8329b20a7e3afeb584711bd9"
        },
        {
            "id": "8d07248d455aa7f56cbaebe0ac7c33f200a0f420",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1777",
            "value": "8d07248d455aa7f56cbaebe0ac7c33f200a0f420"
        },
        {
            "id": "a94e9711038550fed65297994d5ac07082bbaa16",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1778",
            "value": "a94e9711038550fed65297994d5ac07082bbaa16"
        },
        {
            "id": "a90018e9f996ae49a6935e547e5d2e90df1a135e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1779",
            "value": "a90018e9f996ae49a6935e547e5d2e90df1a135e"
        },
        {
            "id": "3d1070fe91b5c27b1b418cde6fb2bfcd5ed3c167",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1780",
            "value": "3d1070fe91b5c27b1b418cde6fb2bfcd5ed3c167"
        },
        {
            "id": "e816e1bd86c7e5c943debf6246b9c383a28461ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1781",
            "value": "e816e1bd86c7e5c943debf6246b9c383a28461ff"
        },
        {
            "id": "b127feba1a1fff9fb66038bb491752ebfffb3def",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1783",
            "value": "b127feba1a1fff9fb66038bb491752ebfffb3def"
        },
        {
            "id": "f2e66bb07b6d65130233f9445a6c7027adeeeb12",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1784",
            "value": "f2e66bb07b6d65130233f9445a6c7027adeeeb12"
        },
        {
            "id": "2f3945d7a8d801c7f3340b9087cab5241514c7f6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1785",
            "value": "2f3945d7a8d801c7f3340b9087cab5241514c7f6"
        },
        {
            "id": "2179b800df7ae35688ec7e33d85543c89c874aee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1786",
            "value": "2179b800df7ae35688ec7e33d85543c89c874aee"
        },
        {
            "id": "8e5965bff91a981e27a4c4bf7beb5e96495f20c2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1787",
            "value": "8e5965bff91a981e27a4c4bf7beb5e96495f20c2"
        },
        {
            "id": "9e45d27aed1c484709a603e6954354c7ff6c5d94",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1788",
            "value": "9e45d27aed1c484709a603e6954354c7ff6c5d94"
        },
        {
            "id": "5dc137c821859a22ed155a191c2f7694c4576e57",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1789",
            "value": "5dc137c821859a22ed155a191c2f7694c4576e57"
        },
        {
            "id": "5fa8aa588e3616239966a5fc9f07cfac6bb1cd32",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1790",
            "value": "5fa8aa588e3616239966a5fc9f07cfac6bb1cd32"
        },
        {
            "id": "2f2e984230ccb4098ccc6d2c5c063940912baec7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1791",
            "value": "2f2e984230ccb4098ccc6d2c5c063940912baec7"
        },
        {
            "id": "f81eb7393a36951062d4ae8e64eec95a84ea3db3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1792",
            "value": "f81eb7393a36951062d4ae8e64eec95a84ea3db3"
        },
        {
            "id": "15dce31ec92e7734c74ea18611dedfaba34cb5cb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1793",
            "value": "15dce31ec92e7734c74ea18611dedfaba34cb5cb"
        },
        {
            "id": "9c2be865b8ae233773672a8b721445785ce5625e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1794",
            "value": "9c2be865b8ae233773672a8b721445785ce5625e"
        },
        {
            "id": "dc24251d0d5e9f7ff59ab2fcb019bacd4485360a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1795",
            "value": "dc24251d0d5e9f7ff59ab2fcb019bacd4485360a"
        },
        {
            "id": "1ee1e9c17e5b3c5634f17dd3b1f2c3c61d9f77ba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1796",
            "value": "1ee1e9c17e5b3c5634f17dd3b1f2c3c61d9f77ba"
        },
        {
            "id": "4d3d525f93cf0d2a9b43e474af9f72b2674e823b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1797",
            "value": "4d3d525f93cf0d2a9b43e474af9f72b2674e823b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1799",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "aed4ae8203e3c51602c575f43cac07dd65868e64",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1800",
            "value": "aed4ae8203e3c51602c575f43cac07dd65868e64"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1802",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0f517ece2da56979c9f9d73473bc289726b75c33",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1803",
            "value": "0f517ece2da56979c9f9d73473bc289726b75c33"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1805",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a32199b36bf6285147d004b3b15ad2535814dc1a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1806",
            "value": "a32199b36bf6285147d004b3b15ad2535814dc1a"
        },
        {
            "id": "aa169216390282fb8678443489d4bf9b59f83c2c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1808",
            "value": "aa169216390282fb8678443489d4bf9b59f83c2c"
        },
        {
            "id": "38f42734d9f89cf484f8f0c830eddb52a4ce579f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1809",
            "value": "38f42734d9f89cf484f8f0c830eddb52a4ce579f"
        },
        {
            "id": "14667ed0d3cd79ab995f9cb4e7df3f1aecfe472b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1810",
            "value": "14667ed0d3cd79ab995f9cb4e7df3f1aecfe472b"
        },
        {
            "id": "30d2f8743c53e58bb3119e838b5791e12a8fd0df",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1811",
            "value": "30d2f8743c53e58bb3119e838b5791e12a8fd0df"
        },
        {
            "id": "8756a1442ffbf59b9e25d67365a866afaf705783",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1812",
            "value": "8756a1442ffbf59b9e25d67365a866afaf705783"
        },
        {
            "id": "e8d46a150486a63d455fb26c257dfc1dae42d277",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1813",
            "value": "e8d46a150486a63d455fb26c257dfc1dae42d277"
        },
        {
            "id": "770506abd82d4b80f85b3fc94197d29c7c820892",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1814",
            "value": "770506abd82d4b80f85b3fc94197d29c7c820892"
        },
        {
            "id": "14946b61277c53ef40781210dd283baf3c63261a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1815",
            "value": "14946b61277c53ef40781210dd283baf3c63261a"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1817",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "47748634a347cb8198bc87ae99260f46e111427b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1818",
            "value": "47748634a347cb8198bc87ae99260f46e111427b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1820",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "33783a801916bcc2427e66753dd87bdc044a34c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1821",
            "value": "33783a801916bcc2427e66753dd87bdc044a34c4"
        },
        {
            "id": "f2a3681238b5c5a1ed5b27185587f715c9c88b80",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1823",
            "value": "f2a3681238b5c5a1ed5b27185587f715c9c88b80"
        },
        {
            "id": "d4f590c8f476ed24a041a1c6fafa64594f3b268c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1824",
            "value": "d4f590c8f476ed24a041a1c6fafa64594f3b268c"
        },
        {
            "id": "7aad8b79036f45ca3e5504509e627c42a6ef4e82",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1825",
            "value": "7aad8b79036f45ca3e5504509e627c42a6ef4e82"
        },
        {
            "id": "e99329698b3d1c4a25e824d96644d32bd40a4c06",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1826",
            "value": "e99329698b3d1c4a25e824d96644d32bd40a4c06"
        },
        {
            "id": "d0cd5af707c424b6b7a39c6d4e83abe3e6ab8509",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1827",
            "value": "d0cd5af707c424b6b7a39c6d4e83abe3e6ab8509"
        },
        {
            "id": "1e6c425b305a695087b325337e995927f55d1bc7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1828",
            "value": "1e6c425b305a695087b325337e995927f55d1bc7"
        },
        {
            "id": "62dd03116a88cf004a248d16a93bcfbdcca80596",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1829",
            "value": "62dd03116a88cf004a248d16a93bcfbdcca80596"
        },
        {
            "id": "7d6b63e0c185dd5790c743d436d277bd7ad558c2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1830",
            "value": "7d6b63e0c185dd5790c743d436d277bd7ad558c2"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1832",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "de5347ab287581297b1e47b4e479750de9676141",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1833",
            "value": "de5347ab287581297b1e47b4e479750de9676141"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1835",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "eb640b8f07dbabdbc6c2a37d87c36f4ddcda1649",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1836",
            "value": "eb640b8f07dbabdbc6c2a37d87c36f4ddcda1649"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1838",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "70da0e21b1bced5c4e87b4f8bb1d08068984e473",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1839",
            "value": "70da0e21b1bced5c4e87b4f8bb1d08068984e473"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1841",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "e04e94aa7950d40f459cda5b4149532f36ee901e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1842",
            "value": "e04e94aa7950d40f459cda5b4149532f36ee901e"
        },
        {
            "id": "7848f4df72f10fd8210bce99f5c753eba34163d1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1844",
            "value": "7848f4df72f10fd8210bce99f5c753eba34163d1"
        },
        {
            "id": "315d035fac319909cf769e38df863c106343efa0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1845",
            "value": "315d035fac319909cf769e38df863c106343efa0"
        },
        {
            "id": "87f9adb98793f709cfaea5cf0704c1933b7e2fcb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1846",
            "value": "87f9adb98793f709cfaea5cf0704c1933b7e2fcb"
        },
        {
            "id": "70c07e490114337c6ab3509b023e042c11345503",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1847",
            "value": "70c07e490114337c6ab3509b023e042c11345503"
        },
        {
            "id": "689ca43b122bba2f1dedb341d8f80dfdc1c76c78",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1848",
            "value": "689ca43b122bba2f1dedb341d8f80dfdc1c76c78"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1850",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "21300c272bbe9dd53a9b0c5657a1bc0ebf1ecad5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1851",
            "value": "21300c272bbe9dd53a9b0c5657a1bc0ebf1ecad5"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1853",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "124fc5c3111d14b05b38bf6e862fb0acae2945f8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1854",
            "value": "124fc5c3111d14b05b38bf6e862fb0acae2945f8"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1856",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ef277e02e9b801dd436bc297b0eb5979d99dfab4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1857",
            "value": "ef277e02e9b801dd436bc297b0eb5979d99dfab4"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1859",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "30643daad7f0a111487dd4b17002a2b470b437bc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1860",
            "value": "30643daad7f0a111487dd4b17002a2b470b437bc"
        },
        {
            "id": "0e95813242919f0924a471aa0ac4e00f3b8363a1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1862",
            "value": "0e95813242919f0924a471aa0ac4e00f3b8363a1"
        },
        {
            "id": "8dade73542330b55626efd9b071a6259d1e10579",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1863",
            "value": "8dade73542330b55626efd9b071a6259d1e10579"
        },
        {
            "id": "976f892822b966aeb2a9856eeb4fde717f528850",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1864",
            "value": "976f892822b966aeb2a9856eeb4fde717f528850"
        },
        {
            "id": "5eab3a5c1888a29c9569c918ca3991cdb918bb88",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1865",
            "value": "5eab3a5c1888a29c9569c918ca3991cdb918bb88"
        },
        {
            "id": "c5cfeec542ae50635af0f4bd5645c448f131debb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1866",
            "value": "c5cfeec542ae50635af0f4bd5645c448f131debb"
        },
        {
            "id": "f24e7b20b5e6fd3f39a721f52cc9dccdc128e961",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1867",
            "value": "f24e7b20b5e6fd3f39a721f52cc9dccdc128e961"
        },
        {
            "id": "1523597084dab81c6ba61ca0c688340a16079a00",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1868",
            "value": "1523597084dab81c6ba61ca0c688340a16079a00"
        },
        {
            "id": "d03f48fa9e082fa7c2352f258876d8bb163c2d22",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1869",
            "value": "d03f48fa9e082fa7c2352f258876d8bb163c2d22"
        },
        {
            "id": "dd910d82a6504a2645d5afb2763576bc49f5fa43",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1870",
            "value": "dd910d82a6504a2645d5afb2763576bc49f5fa43"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1872",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "8200a6cb6e4a567adc61af2046c44f3201f63af0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1873",
            "value": "8200a6cb6e4a567adc61af2046c44f3201f63af0"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1875",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "572bb72d387cc07df129455018e2b576f2bc2c2b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1876",
            "value": "572bb72d387cc07df129455018e2b576f2bc2c2b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1878",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "23bf0ac3dbe27278bc9675824319db74a2d29732",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1879",
            "value": "23bf0ac3dbe27278bc9675824319db74a2d29732"
        },
        {
            "id": "c5a68976524793c1c081425676d2ec756bbef8b6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1881",
            "value": "c5a68976524793c1c081425676d2ec756bbef8b6"
        },
        {
            "id": "4244c92b7d68d0427d946c2e981aa5f026e54bb8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1882",
            "value": "4244c92b7d68d0427d946c2e981aa5f026e54bb8"
        },
        {
            "id": "5cacd87a3a0082daa0e855c84bebe3544d545242",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1883",
            "value": "5cacd87a3a0082daa0e855c84bebe3544d545242"
        },
        {
            "id": "7f787a7f7e731a3df5206e0e87bc04143d8eac5b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1884",
            "value": "7f787a7f7e731a3df5206e0e87bc04143d8eac5b"
        },
        {
            "id": "a9aebdeca8b8c8e988b1aaaf52ca4723db5b0190",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1885",
            "value": "a9aebdeca8b8c8e988b1aaaf52ca4723db5b0190"
        },
        {
            "id": "93923fd7723e95996bfb0b27c045df1dfd07a08f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1886",
            "value": "93923fd7723e95996bfb0b27c045df1dfd07a08f"
        },
        {
            "id": "37f209419e68c8148d1b2e62c2e10750f5a10cca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1887",
            "value": "37f209419e68c8148d1b2e62c2e10750f5a10cca"
        },
        {
            "id": "efe639be3c0e33a1922237f78ffcbc44f462f5ac",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1888",
            "value": "efe639be3c0e33a1922237f78ffcbc44f462f5ac"
        },
        {
            "id": "838e0c73f2ef761838678237e4c3ef3c224cb218",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1889",
            "value": "838e0c73f2ef761838678237e4c3ef3c224cb218"
        },
        {
            "id": "f330fe26048a8113fb4363e41f3d24cc9a37645a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1890",
            "value": "f330fe26048a8113fb4363e41f3d24cc9a37645a"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1892",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b0673c3a41564e63780a1f7de24237c29be81669",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1893",
            "value": "b0673c3a41564e63780a1f7de24237c29be81669"
        },
        {
            "id": "00723668226a287b03dfe5093d79e30db260430c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1895",
            "value": "00723668226a287b03dfe5093d79e30db260430c"
        },
        {
            "id": "07623e272b3b75444ae9ad462b9a5a9a093bd31e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1896",
            "value": "07623e272b3b75444ae9ad462b9a5a9a093bd31e"
        },
        {
            "id": "be0243e44fb0e20a807a600d492e6e6e34ac6cb3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1897",
            "value": "be0243e44fb0e20a807a600d492e6e6e34ac6cb3"
        },
        {
            "id": "7f89d9dba4c651ffc844a2198fb87657cdf78f67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1898",
            "value": "7f89d9dba4c651ffc844a2198fb87657cdf78f67"
        },
        {
            "id": "45d57d0fc54fa25048132edc2bedc7886e6a5eea",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1899",
            "value": "45d57d0fc54fa25048132edc2bedc7886e6a5eea"
        },
        {
            "id": "86ace4ebb2556b0d00d8d9fecccc13c0ea87cf2e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1900",
            "value": "86ace4ebb2556b0d00d8d9fecccc13c0ea87cf2e"
        },
        {
            "id": "5903e621599a3e35946de2efdf52ec12933cc0a4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1901",
            "value": "5903e621599a3e35946de2efdf52ec12933cc0a4"
        },
        {
            "id": "0d29cb643f7e8ad8224893f95e4cd7cc4358c120",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1902",
            "value": "0d29cb643f7e8ad8224893f95e4cd7cc4358c120"
        },
        {
            "id": "2becb3b13c4e94eef70b108bd6ec6b237d25deb9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1903",
            "value": "2becb3b13c4e94eef70b108bd6ec6b237d25deb9"
        },
        {
            "id": "4068ad95d72899331557ecb787972dbd2199b2da",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1904",
            "value": "4068ad95d72899331557ecb787972dbd2199b2da"
        },
        {
            "id": "d0dc3c95733c84ddd839fc4b85646a35590a9882",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1905",
            "value": "d0dc3c95733c84ddd839fc4b85646a35590a9882"
        },
        {
            "id": "ce2d6d490b38955c18590dee1e44ba67c381a146",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1906",
            "value": "ce2d6d490b38955c18590dee1e44ba67c381a146"
        },
        {
            "id": "2cf09ccaa3fced0d594fdd57aad8fa13604bba12",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1907",
            "value": "2cf09ccaa3fced0d594fdd57aad8fa13604bba12"
        },
        {
            "id": "a207ab5feda70510ab03c7656286d2fef3e484f2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1908",
            "value": "a207ab5feda70510ab03c7656286d2fef3e484f2"
        },
        {
            "id": "a7bfe722fd9e1696f13272c5158f17a4381909f6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1909",
            "value": "a7bfe722fd9e1696f13272c5158f17a4381909f6"
        },
        {
            "id": "38447569a585dc39312fdd59d1ca11632eeafe26",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1910",
            "value": "38447569a585dc39312fdd59d1ca11632eeafe26"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1912",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "6d19fcae75fe59fa115c11099460bade7bdb0f3b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1913",
            "value": "6d19fcae75fe59fa115c11099460bade7bdb0f3b"
        },
        {
            "id": "c2f9510f6598f19d089b59aeb18db7ca350d541c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1915",
            "value": "c2f9510f6598f19d089b59aeb18db7ca350d541c"
        },
        {
            "id": "48f5a70f1d762ed76069fa254e445b61bc345e64",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1916",
            "value": "48f5a70f1d762ed76069fa254e445b61bc345e64"
        },
        {
            "id": "814a61fa92a011bdc7c5857ae33d1669114a65fb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1917",
            "value": "814a61fa92a011bdc7c5857ae33d1669114a65fb"
        },
        {
            "id": "4da9ba6415e7b9617af72ed4ba48496fc90352cb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1918",
            "value": "4da9ba6415e7b9617af72ed4ba48496fc90352cb"
        },
        {
            "id": "762affc098fb103749a8d6fc77028d4347cab278",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1919",
            "value": "762affc098fb103749a8d6fc77028d4347cab278"
        },
        {
            "id": "1f91da731eb2bb2c067fdc4e82fe51ec437c8d26",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1920",
            "value": "1f91da731eb2bb2c067fdc4e82fe51ec437c8d26"
        },
        {
            "id": "f9699223b2b5800ba8892b8d11a34ea2aebfe4bf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1921",
            "value": "f9699223b2b5800ba8892b8d11a34ea2aebfe4bf"
        },
        {
            "id": "2c7d608e4c3cf7568a2082e74c328ae765dac8f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1922",
            "value": "2c7d608e4c3cf7568a2082e74c328ae765dac8f0"
        },
        {
            "id": "18874ee7fb7ad8a724f0d444684103b87df55c73",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1923",
            "value": "18874ee7fb7ad8a724f0d444684103b87df55c73"
        },
        {
            "id": "eaa5998c3fb1c2342b775d4c35fa630701a50fe8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1924",
            "value": "eaa5998c3fb1c2342b775d4c35fa630701a50fe8"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1926",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "75ec5e2717a502c29b4e591159a83106bab50d50",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1927",
            "value": "75ec5e2717a502c29b4e591159a83106bab50d50"
        },
        {
            "id": "5e7d902170394e1163d9defcb289c082c28e2d20",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1928",
            "value": "5e7d902170394e1163d9defcb289c082c28e2d20"
        },
        {
            "id": "e6d68206931553b096993450700edb5f1ed2beda",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1929",
            "value": "e6d68206931553b096993450700edb5f1ed2beda"
        },
        {
            "id": "f233ac6b87ade8aa9beeb77ee329103dec8b4da8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1930",
            "value": "f233ac6b87ade8aa9beeb77ee329103dec8b4da8"
        },
        {
            "id": "5715da0d6da440d0749520aa9c2ff7b9fad88676",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1931",
            "value": "5715da0d6da440d0749520aa9c2ff7b9fad88676"
        },
        {
            "id": "bb7894c1856c7c567812cef3ec83210a8b285447",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1932",
            "value": "bb7894c1856c7c567812cef3ec83210a8b285447"
        },
        {
            "id": "f647a28bdac9066a82f637b284448a9fd772eddc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1933",
            "value": "f647a28bdac9066a82f637b284448a9fd772eddc"
        },
        {
            "id": "e113a4efa230ae1ffbb06bb832cad44b331c3cf4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1935",
            "value": "e113a4efa230ae1ffbb06bb832cad44b331c3cf4"
        },
        {
            "id": "b6d03fef6e50f9720958b15a35df95cd217b938b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1936",
            "value": "b6d03fef6e50f9720958b15a35df95cd217b938b"
        },
        {
            "id": "eb91e5f86777df0559593e995afee2812cad8885",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1937",
            "value": "eb91e5f86777df0559593e995afee2812cad8885"
        },
        {
            "id": "69af7a949379ab4c906d5c2075acbd6b14bdcb72",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1938",
            "value": "69af7a949379ab4c906d5c2075acbd6b14bdcb72"
        },
        {
            "id": "74130c296868bc067e3ff75fd025998acd9c6d01",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1939",
            "value": "74130c296868bc067e3ff75fd025998acd9c6d01"
        },
        {
            "id": "3d0e33445bb8f1f657ac95ec25a6264532669cbf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1940",
            "value": "3d0e33445bb8f1f657ac95ec25a6264532669cbf"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1942",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "cde6215c6a6633bd30a5c3505ef3b99177c91390",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1943",
            "value": "cde6215c6a6633bd30a5c3505ef3b99177c91390"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1945",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "4f95164eba45d4c8b73fab2b1961340ce596bfa7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1946",
            "value": "4f95164eba45d4c8b73fab2b1961340ce596bfa7"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1948",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "506c0339f3af42f62fc1b1536747449ea7824f2d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1949",
            "value": "506c0339f3af42f62fc1b1536747449ea7824f2d"
        },
        {
            "id": "0e84584f0909b0abd1eda1f6dcf74edd9ed9fadc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1951",
            "value": "0e84584f0909b0abd1eda1f6dcf74edd9ed9fadc"
        },
        {
            "id": "fdf2818187a9e0c6e3a95467ee92516037a2df5e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1952",
            "value": "fdf2818187a9e0c6e3a95467ee92516037a2df5e"
        },
        {
            "id": "d4b875d7c02e8829a2f9c0fdd71f0676f37b5a71",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1953",
            "value": "d4b875d7c02e8829a2f9c0fdd71f0676f37b5a71"
        },
        {
            "id": "df089e4ded40bc274cd959a3bb6a37d56f768731",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1954",
            "value": "df089e4ded40bc274cd959a3bb6a37d56f768731"
        },
        {
            "id": "770cbfb1947a7662f1742ce1421dc622af82f1d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1955",
            "value": "770cbfb1947a7662f1742ce1421dc622af82f1d2"
        },
        {
            "id": "6518bfb2bd484aede940c8d6b972b643ab10d640",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1956",
            "value": "6518bfb2bd484aede940c8d6b972b643ab10d640"
        },
        {
            "id": "da4f0e5d688822a38a78ee7b21edc12ddf3e84f8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1957",
            "value": "da4f0e5d688822a38a78ee7b21edc12ddf3e84f8"
        },
        {
            "id": "a5d9a4b81aed092fc76fac2bb8b49269ccf1346d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1958",
            "value": "a5d9a4b81aed092fc76fac2bb8b49269ccf1346d"
        },
        {
            "id": "4118dc2d488a133f03bebd69e36bee3a396e108c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1960",
            "value": "4118dc2d488a133f03bebd69e36bee3a396e108c"
        },
        {
            "id": "7fb0c5c4d7ad984b79b24987a57006ed3843fdd8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1961",
            "value": "7fb0c5c4d7ad984b79b24987a57006ed3843fdd8"
        },
        {
            "id": "53602811166aa15632dc5d24b949f0b435be52f7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1962",
            "value": "53602811166aa15632dc5d24b949f0b435be52f7"
        },
        {
            "id": "0fe272c7d383308b693bd503ba2ca7096c2715ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1963",
            "value": "0fe272c7d383308b693bd503ba2ca7096c2715ab"
        },
        {
            "id": "c37e48851934a16b52ce92b4f5ac2afa3ff4e537",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1964",
            "value": "c37e48851934a16b52ce92b4f5ac2afa3ff4e537"
        },
        {
            "id": "d380aa24f835bf1427c660d5e57deea2816d2850",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1965",
            "value": "d380aa24f835bf1427c660d5e57deea2816d2850"
        },
        {
            "id": "bac3daf03095d1bc08fcb48ddd67385e0c001ce5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1966",
            "value": "bac3daf03095d1bc08fcb48ddd67385e0c001ce5"
        },
        {
            "id": "5768069b93a470c84ebaccbe11bc715000abc0c6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1967",
            "value": "5768069b93a470c84ebaccbe11bc715000abc0c6"
        },
        {
            "id": "c39a84a9253431f435c94a10e13e8ddc241cc0c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1968",
            "value": "c39a84a9253431f435c94a10e13e8ddc241cc0c4"
        },
        {
            "id": "a1426d9d46758aa943080bbc93b4bcbf666113c3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1969",
            "value": "a1426d9d46758aa943080bbc93b4bcbf666113c3"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1971",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "23b4515f4eae68b76c5e3cf6fd302d6b8dca8769",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1972",
            "value": "23b4515f4eae68b76c5e3cf6fd302d6b8dca8769"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1974",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ec54294a96b8b7669d10de1798fadb65eecdf4e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1975",
            "value": "ec54294a96b8b7669d10de1798fadb65eecdf4e9"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1977",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "6a4d0d905547c5853309f708ec10548b8c669a15",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1978",
            "value": "6a4d0d905547c5853309f708ec10548b8c669a15"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1980",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ea347f7695473574ded41e9155410cd6ad96898e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1981",
            "value": "ea347f7695473574ded41e9155410cd6ad96898e"
        },
        {
            "id": "5a0a8b6200d99b6b8e1ea0c9e8f621853268f612",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1983",
            "value": "5a0a8b6200d99b6b8e1ea0c9e8f621853268f612"
        },
        {
            "id": "dc9c471cd769e7675abbead37f92dde31aa29433",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1984",
            "value": "dc9c471cd769e7675abbead37f92dde31aa29433"
        },
        {
            "id": "d9f80c937474a06d331c2860df7167e64890e743",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1985",
            "value": "d9f80c937474a06d331c2860df7167e64890e743"
        },
        {
            "id": "4c65f895d00c1eea767c4fe0064a1b6ff5fce310",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1986",
            "value": "4c65f895d00c1eea767c4fe0064a1b6ff5fce310"
        },
        {
            "id": "49a29e9c5e2b926a85c3496ca1137bf06e3a0b10",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1987",
            "value": "49a29e9c5e2b926a85c3496ca1137bf06e3a0b10"
        },
        {
            "id": "6a8c7380e4488286ba45b40a59035e088114cfff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1988",
            "value": "6a8c7380e4488286ba45b40a59035e088114cfff"
        },
        {
            "id": "184a0118cb33b8b3f97013f82532dcf73c97c39b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1989",
            "value": "184a0118cb33b8b3f97013f82532dcf73c97c39b"
        },
        {
            "id": "c4e0b92cc5cad3f5c9f7f43800fc8ec7276e8124",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1990",
            "value": "c4e0b92cc5cad3f5c9f7f43800fc8ec7276e8124"
        },
        {
            "id": "2fae2ab3cade715086140773d8ce3f150c03e475",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1991",
            "value": "2fae2ab3cade715086140773d8ce3f150c03e475"
        },
        {
            "id": "76df81d79f512975c1832520d1233b0afae53a88",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1993",
            "value": "76df81d79f512975c1832520d1233b0afae53a88"
        },
        {
            "id": "1c2f01d2bd40c91e0b146241aec69ff74dacd77f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1994",
            "value": "1c2f01d2bd40c91e0b146241aec69ff74dacd77f"
        },
        {
            "id": "a58ac356bf4fd2f8be173e567fbcd536f3183a1c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1995",
            "value": "a58ac356bf4fd2f8be173e567fbcd536f3183a1c"
        },
        {
            "id": "08135173ef6be0c830cd7649d6a2e8864f160ce9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1996",
            "value": "08135173ef6be0c830cd7649d6a2e8864f160ce9"
        },
        {
            "id": "85b3bc48776186196786a9a0538ee0b5a11c614e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1997",
            "value": "85b3bc48776186196786a9a0538ee0b5a11c614e"
        },
        {
            "id": "15cf7c56aaf576af8931114fb73063b2605ebcac",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1998",
            "value": "15cf7c56aaf576af8931114fb73063b2605ebcac"
        },
        {
            "id": "01ec2321f868cae8c9818cca1279050b12c23a5c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=1999",
            "value": "01ec2321f868cae8c9818cca1279050b12c23a5c"
        },
        {
            "id": "38de64b8b671915ee97ab2e10a72ca0b27e59074",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2000",
            "value": "38de64b8b671915ee97ab2e10a72ca0b27e59074"
        },
        {
            "id": "817099d2e87c2d5263067b0558d5ceeb167dbebb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2001",
            "value": "817099d2e87c2d5263067b0558d5ceeb167dbebb"
        },
        {
            "id": "e6aaa551dc60b58206532c84f28bc118a3e6a1af",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2002",
            "value": "e6aaa551dc60b58206532c84f28bc118a3e6a1af"
        },
        {
            "id": "6f49e3b54a1e48f6c361f5613f371ca9e42a0b2c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2003",
            "value": "6f49e3b54a1e48f6c361f5613f371ca9e42a0b2c"
        },
        {
            "id": "a422f4d9b9e742b1c3627fabf2359bc0a409b152",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2004",
            "value": "a422f4d9b9e742b1c3627fabf2359bc0a409b152"
        },
        {
            "id": "61d8b568bfb797fde19e2c73d81862ef0c0671ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2005",
            "value": "61d8b568bfb797fde19e2c73d81862ef0c0671ff"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2007",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "8c46b2229f54adefc6511a6257d34910ba9afd83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2008",
            "value": "8c46b2229f54adefc6511a6257d34910ba9afd83"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2010",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2377f3a497fb585b2fcdd800b3054a55f18ab89f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2011",
            "value": "2377f3a497fb585b2fcdd800b3054a55f18ab89f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2013",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f2927ecc0db3ac52720039ad135ea3087d116884",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2014",
            "value": "f2927ecc0db3ac52720039ad135ea3087d116884"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2016",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c5bdc1de5ce6cb0829348c52cb54eab448fdd9ed",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2017",
            "value": "c5bdc1de5ce6cb0829348c52cb54eab448fdd9ed"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2019",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ac426605577acfed080756983544496376eda721",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2020",
            "value": "ac426605577acfed080756983544496376eda721"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2022",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "fadee9c2462600f689750cf9004df0474bc5634b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2023",
            "value": "fadee9c2462600f689750cf9004df0474bc5634b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2025",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2816117c42edf0d9b95197e451525a30942a7e57",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2026",
            "value": "2816117c42edf0d9b95197e451525a30942a7e57"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2028",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "51119e3d52e6882e1310a001d86291c76a49bf01",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2029",
            "value": "51119e3d52e6882e1310a001d86291c76a49bf01"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2031",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "49ec5b97ede69b2737554a5d9aa388254882d7ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2032",
            "value": "49ec5b97ede69b2737554a5d9aa388254882d7ab"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2034",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "16e962d6cd79d7eb70519010e4967505f10b540a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2035",
            "value": "16e962d6cd79d7eb70519010e4967505f10b540a"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2037",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c78bc6d7d61bc4047eaf41508782e2a792ede719",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2038",
            "value": "c78bc6d7d61bc4047eaf41508782e2a792ede719"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2040",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "db64d905209710692b737ba608eb2de9f4aab23f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2041",
            "value": "db64d905209710692b737ba608eb2de9f4aab23f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2043",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0491180835d3ac77ad65945dce73841f094a6f72",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2044",
            "value": "0491180835d3ac77ad65945dce73841f094a6f72"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2046",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c5c9afbef90d3c618dd9a5e93e38eda32793966e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2047",
            "value": "c5c9afbef90d3c618dd9a5e93e38eda32793966e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2049",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b9d4937f1c2dc303d02e5cee000d3f99c30ef28e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2050",
            "value": "b9d4937f1c2dc303d02e5cee000d3f99c30ef28e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2052",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "df9788029ec1cc5346b03b08a550bcabc88c5867",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2053",
            "value": "df9788029ec1cc5346b03b08a550bcabc88c5867"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2055",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "3af7f649d21cba5e0ca0fab59c41266a6895ce88",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2056",
            "value": "3af7f649d21cba5e0ca0fab59c41266a6895ce88"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2058",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "7dd58897054fe2b9ace9c99590a2e107f03f5244",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2059",
            "value": "7dd58897054fe2b9ace9c99590a2e107f03f5244"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2061",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "67cc648f94c0c02a1239302144d8ef37f777e057",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2062",
            "value": "67cc648f94c0c02a1239302144d8ef37f777e057"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2064",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f374fbdb6b79884aad3fd3c46d0c364009cf6ec1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2065",
            "value": "f374fbdb6b79884aad3fd3c46d0c364009cf6ec1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2067",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "158b1b8dfbbe86536ddb0c99299c3b111b1195e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2068",
            "value": "158b1b8dfbbe86536ddb0c99299c3b111b1195e1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2070",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "3a138eb7701d9d09a67b5ec57ac7974304db23ce",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2071",
            "value": "3a138eb7701d9d09a67b5ec57ac7974304db23ce"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2073",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "deabcbff1c091de7e3b2fea620421f4f0b85c758",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2074",
            "value": "deabcbff1c091de7e3b2fea620421f4f0b85c758"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2076",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2079",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "7367190117306c0f76b8e005d9d65b62999ca62e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2080",
            "value": "7367190117306c0f76b8e005d9d65b62999ca62e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2082",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "3b0446714a09785698d9b2e06c12d6f9718b7287",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2083",
            "value": "3b0446714a09785698d9b2e06c12d6f9718b7287"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2085",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "16c289d8a591637f852fa4d5512448cfede761db",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2086",
            "value": "16c289d8a591637f852fa4d5512448cfede761db"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2088",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "660199ab61c47bb499afe1460bf285eefac39c65",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2089",
            "value": "660199ab61c47bb499afe1460bf285eefac39c65"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2091",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "78c87bf5e4f875ddf70d234bdd4abfcac1fdd59a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2092",
            "value": "78c87bf5e4f875ddf70d234bdd4abfcac1fdd59a"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2094",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "24c6ee7bf6afd60ba00d53c5f3816f0bab74a8ce",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2095",
            "value": "24c6ee7bf6afd60ba00d53c5f3816f0bab74a8ce"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2097",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "41e6d0a9a7dc7ebf3f201b5dec0d62a82799aff8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2098",
            "value": "41e6d0a9a7dc7ebf3f201b5dec0d62a82799aff8"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2100",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a9706f378df59d3d59dcd0cc3b1fcc9f07071825",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2101",
            "value": "a9706f378df59d3d59dcd0cc3b1fcc9f07071825"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2103",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "950fea1bc8273785607f671c25d7cd024e631e3d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2104",
            "value": "950fea1bc8273785607f671c25d7cd024e631e3d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2106",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ab737682e491ce2040eba2eca74c942a92638534",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2107",
            "value": "ab737682e491ce2040eba2eca74c942a92638534"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2109",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "a2c1d3b5ed046ed8363504b14f57c3f546638890",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2110",
            "value": "a2c1d3b5ed046ed8363504b14f57c3f546638890"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2112",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "e9c6e7df53513916c9bf37ee145c6c3822a72d00",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2113",
            "value": "e9c6e7df53513916c9bf37ee145c6c3822a72d00"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2115",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "21f40c979821ffe2356678642ad1f607ed6790b5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2116",
            "value": "21f40c979821ffe2356678642ad1f607ed6790b5"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2118",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9359d90186539d6699cdff9c058b7c08e3eb4e66",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2119",
            "value": "9359d90186539d6699cdff9c058b7c08e3eb4e66"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2121",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "5cbabe2d8e475f0ea0d787a0a2158645cf52be2b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2122",
            "value": "5cbabe2d8e475f0ea0d787a0a2158645cf52be2b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2124",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "3f525d790064b2015d665d8fec6ead82805d86a9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2125",
            "value": "3f525d790064b2015d665d8fec6ead82805d86a9"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2127",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f053e82f0ea02d363c625b922225418b7828d5b3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2128",
            "value": "f053e82f0ea02d363c625b922225418b7828d5b3"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2130",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "1ee5ecf50f92ef0d952b686b2403b357f46eabd3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2131",
            "value": "1ee5ecf50f92ef0d952b686b2403b357f46eabd3"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2133",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "14237b893911ddba49e5404cf53473a64aa1d070",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2134",
            "value": "14237b893911ddba49e5404cf53473a64aa1d070"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2136",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "48f447b352192c03e9f1091eff040564397b8f53",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2137",
            "value": "48f447b352192c03e9f1091eff040564397b8f53"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2139",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "72317e233669afd8c618665161057ba223aab850",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2140",
            "value": "72317e233669afd8c618665161057ba223aab850"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2142",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "297ed643c0d62a874bc3d28c4a671bf35c16f1a1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2143",
            "value": "297ed643c0d62a874bc3d28c4a671bf35c16f1a1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2145",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "e2dbe77490a2ed78eff996bf7c0e2505c02fd303",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2146",
            "value": "e2dbe77490a2ed78eff996bf7c0e2505c02fd303"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2148",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "e23912da234afecd6cd5401bb2ad2b222321cced",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2149",
            "value": "e23912da234afecd6cd5401bb2ad2b222321cced"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2151",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c309d6a4f1aaacd6833b5b38aa9fe3931745a62f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2152",
            "value": "c309d6a4f1aaacd6833b5b38aa9fe3931745a62f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2154",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "d3a5d008a72ea44eb779590c90540ec4fd59f77c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2155",
            "value": "d3a5d008a72ea44eb779590c90540ec4fd59f77c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2157",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "32d84ad752d692fcf805705c233b5c8b89bf3470",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2158",
            "value": "32d84ad752d692fcf805705c233b5c8b89bf3470"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2160",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "75679fdf051f437fb211bdae3efb04d5a10bf933",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2161",
            "value": "75679fdf051f437fb211bdae3efb04d5a10bf933"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2163",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "543f5809ed3228fd5de2b49cd63fd1cd5d847976",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2164",
            "value": "543f5809ed3228fd5de2b49cd63fd1cd5d847976"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2166",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "46f5ec977f0cfd71b6e833432bde0aa102df71b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2167",
            "value": "46f5ec977f0cfd71b6e833432bde0aa102df71b1"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2169",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "54c41d7cb10df119fe0852cca7f5c3b00f5cb456",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2170",
            "value": "54c41d7cb10df119fe0852cca7f5c3b00f5cb456"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2172",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "fbaee0799efcc26360952cbd4a8fe97c42e34710",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2173",
            "value": "fbaee0799efcc26360952cbd4a8fe97c42e34710"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2175",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "c004388490b574d61917d0d81c6340f45c28dc2a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2176",
            "value": "c004388490b574d61917d0d81c6340f45c28dc2a"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2178",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b3ac4c74e91c93448afa7e5e5e55e04fbc9daf98",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2179",
            "value": "b3ac4c74e91c93448afa7e5e5e55e04fbc9daf98"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2181",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b9773d1fee570dec50008472dd683c34119a299d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2182",
            "value": "b9773d1fee570dec50008472dd683c34119a299d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2184",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "95c507503287c9f37f3ab9fc7367b52e99dea070",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2185",
            "value": "95c507503287c9f37f3ab9fc7367b52e99dea070"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2187",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b2b8d4a2aa5e6e3244039fb11926df38c2b5fe5e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2188",
            "value": "b2b8d4a2aa5e6e3244039fb11926df38c2b5fe5e"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2190",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "fb689a06ca167eee775b62e5f633ec2b2a3ba2e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2191",
            "value": "fb689a06ca167eee775b62e5f633ec2b2a3ba2e5"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2193",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "de317c8cb4a9b9fbbe4703698b161a04f3ef5430",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2194",
            "value": "de317c8cb4a9b9fbbe4703698b161a04f3ef5430"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2196",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "345a2106ed1240af604756db6e8744fb532586e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2197",
            "value": "345a2106ed1240af604756db6e8744fb532586e9"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2199",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9ed271b7c3543b5fb404e2e8128f04cc581ddd54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2200",
            "value": "9ed271b7c3543b5fb404e2e8128f04cc581ddd54"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2202",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "7f1c0431999303e23940c0318dab1331945ec74c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2203",
            "value": "7f1c0431999303e23940c0318dab1331945ec74c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2205",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "5498c1ea06e18e73a226af0c14ead4d01ba6c686",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2206",
            "value": "5498c1ea06e18e73a226af0c14ead4d01ba6c686"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2208",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0d779e298a0778fd7d738173f427f79980a5c89a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2209",
            "value": "0d779e298a0778fd7d738173f427f79980a5c89a"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2211",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "9470a827cd301452662d2de9071d977c21c731a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2212",
            "value": "9470a827cd301452662d2de9071d977c21c731a3"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2214",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "437395b35d3867122e658f2f4a9e638b5c3609f6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2215",
            "value": "437395b35d3867122e658f2f4a9e638b5c3609f6"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2217",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0ca69ad153f8e2124648c1811d774ecc740ec2b0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2218",
            "value": "0ca69ad153f8e2124648c1811d774ecc740ec2b0"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2220",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "5f77f230ce696437344f943bd92f27065354cf39",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2221",
            "value": "5f77f230ce696437344f943bd92f27065354cf39"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2223",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "90f941c48d3332e149037670b825a3f9d7381064",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2224",
            "value": "90f941c48d3332e149037670b825a3f9d7381064"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2226",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "3cd36accb34989523c0989f69dcbd95ea59c9722",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2227",
            "value": "3cd36accb34989523c0989f69dcbd95ea59c9722"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2229",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "eb91857b1ae3516a1900c0dc3f490ce43f2dfe59",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2230",
            "value": "eb91857b1ae3516a1900c0dc3f490ce43f2dfe59"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2232",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "aa18e569ef6d9ac8cadaaa513b861e95a5032f3f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2233",
            "value": "aa18e569ef6d9ac8cadaaa513b861e95a5032f3f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2235",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "cd9976db2e15a119033ac58b19c15f91db5d8931",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2236",
            "value": "cd9976db2e15a119033ac58b19c15f91db5d8931"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2238",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b946fdd7fe039e6cd4e08a8ee08d5124256667bf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2239",
            "value": "b946fdd7fe039e6cd4e08a8ee08d5124256667bf"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2241",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "e992c058a2fa00da1bf4ba9e07ce5772ace2ea08",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2242",
            "value": "e992c058a2fa00da1bf4ba9e07ce5772ace2ea08"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2244",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "43d884d1ada660460e707bcd34fb0d4ccc48db6c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2245",
            "value": "43d884d1ada660460e707bcd34fb0d4ccc48db6c"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2247",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "2361a3e0d4347ff471392d2761dfee9267706d9d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2248",
            "value": "2361a3e0d4347ff471392d2761dfee9267706d9d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2250",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "4cc8e9c4ec2d461c079c853467aa361ea0da9d11",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2251",
            "value": "4cc8e9c4ec2d461c079c853467aa361ea0da9d11"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2253",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "97f0b9b21dcb25df661f37ad29a0eb06d3cfbab8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2254",
            "value": "97f0b9b21dcb25df661f37ad29a0eb06d3cfbab8"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2256",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "f72cca904b7c1a8e3610e6ea45b5aeed2a7cd3c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2257",
            "value": "f72cca904b7c1a8e3610e6ea45b5aeed2a7cd3c4"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2259",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "ebf14c01ab8462e86c88229148515727b0304e87",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2260",
            "value": "ebf14c01ab8462e86c88229148515727b0304e87"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2262",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "967a62868d0b6bc1da828d9e10c7ee33fbaa20a9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2263",
            "value": "967a62868d0b6bc1da828d9e10c7ee33fbaa20a9"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2265",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "0e76ebea82a1321dee54ecfb6330e8a171d6b38f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2266",
            "value": "0e76ebea82a1321dee54ecfb6330e8a171d6b38f"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2268",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "5ca9076e6e267c0b76c6280752c4374605458364",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2269",
            "value": "5ca9076e6e267c0b76c6280752c4374605458364"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2271",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "414055aa1a9f91c6115f95c4e873c366b9b6cc79",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2272",
            "value": "414055aa1a9f91c6115f95c4e873c366b9b6cc79"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2274",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "b83afc99929b9e062c21cfba9c0817f22f23ca19",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2275",
            "value": "b83afc99929b9e062c21cfba9c0817f22f23ca19"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2277",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "57c069420e16a2a794544ebe9111a57a82b6fe3d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2278",
            "value": "57c069420e16a2a794544ebe9111a57a82b6fe3d"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2280",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "cdf8af9326d6cd5c88dabdb6b474bf161036be5b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2281",
            "value": "cdf8af9326d6cd5c88dabdb6b474bf161036be5b"
        },
        {
            "id": "9cdb15a672cfbbd332d51600e11b083cacac055c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2283",
            "value": "9cdb15a672cfbbd332d51600e11b083cacac055c"
        },
        {
            "id": "db8feab8306fd48f2b1bbaa6d7dae64fc0bdbb98",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/0012723X&CISOPTR=2284",
            "value": "db8feab8306fd48f2b1bbaa6d7dae64fc0bdbb98"
        },
        {
            "id": "bbaf6879465072820fc6ba5364d8cead93c20c84",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2430",
            "value": "bbaf6879465072820fc6ba5364d8cead93c20c84"
        },
        {
            "id": "a318e225233e02dd13e2cb1fdb564c8a3c98af63",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2431",
            "value": "a318e225233e02dd13e2cb1fdb564c8a3c98af63"
        },
        {
            "id": "f9977edd5e189f37679854854213a2edc56719b5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2432",
            "value": "f9977edd5e189f37679854854213a2edc56719b5"
        },
        {
            "id": "e6f4989c1f65f305de5c5bf4cd927a03b002b408",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2433",
            "value": "e6f4989c1f65f305de5c5bf4cd927a03b002b408"
        },
        {
            "id": "8aff0619e2bf26bb84f72cff881785e3684d7359",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2434",
            "value": "8aff0619e2bf26bb84f72cff881785e3684d7359"
        },
        {
            "id": "e99a0fa837873e51fa1e0d53abe10e2da3976e65",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2437",
            "value": "e99a0fa837873e51fa1e0d53abe10e2da3976e65"
        },
        {
            "id": "f8c92344dd3fad504f05862f58914680c44db2d7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2438",
            "value": "f8c92344dd3fad504f05862f58914680c44db2d7"
        },
        {
            "id": "17ed5957145300b01b7a0d769d52d6604f708991",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2439",
            "value": "17ed5957145300b01b7a0d769d52d6604f708991"
        },
        {
            "id": "72c2000286c4ea1d7db110c547f3932fcdf8f9b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2441",
            "value": "72c2000286c4ea1d7db110c547f3932fcdf8f9b2"
        },
        {
            "id": "4a557d61468aad2d7e304cde8f3947d9208def2c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2957",
            "value": "4a557d61468aad2d7e304cde8f3947d9208def2c"
        },
        {
            "id": "ec54e680126557ce799a1b6f3da328a587b053ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2959",
            "value": "ec54e680126557ce799a1b6f3da328a587b053ff"
        },
        {
            "id": "a1e747417f206fd0f5f9bf920c0f3f5fdeff481c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2960",
            "value": "a1e747417f206fd0f5f9bf920c0f3f5fdeff481c"
        },
        {
            "id": "ac2388404633eeb014c218d5a3ed9de7e557f42e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2961",
            "value": "ac2388404633eeb014c218d5a3ed9de7e557f42e"
        },
        {
            "id": "4911786f82c3b4119b2cba41f004fbbb8ab41076",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2962",
            "value": "4911786f82c3b4119b2cba41f004fbbb8ab41076"
        },
        {
            "id": "c43f7ba085016257143c524bddd582f714487d90",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2963",
            "value": "c43f7ba085016257143c524bddd582f714487d90"
        },
        {
            "id": "4f81d95adb04cf9bdaa2ecf356014328b4ab531e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2964",
            "value": "4f81d95adb04cf9bdaa2ecf356014328b4ab531e"
        },
        {
            "id": "116b963b499f9561ed6346ac03214167209d5b68",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=2968",
            "value": "116b963b499f9561ed6346ac03214167209d5b68"
        },
        {
            "id": "910a6ccb36bf6750ff1c9b4e844025aebf6a4098",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=3767",
            "value": "910a6ccb36bf6750ff1c9b4e844025aebf6a4098"
        },
        {
            "id": "ad5404a16eb71a3a1733da842804a7b592b3e49d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00128789&CISOPTR=3819",
            "value": "ad5404a16eb71a3a1733da842804a7b592b3e49d"
        },
        {
            "id": "78de52b14bbdb477ea30a78caed2dd772f573a2b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=1107",
            "value": "78de52b14bbdb477ea30a78caed2dd772f573a2b"
        },
        {
            "id": "0a574ada07babdde4e5bb78177c52de19bd4e317",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=1293",
            "value": "0a574ada07babdde4e5bb78177c52de19bd4e317"
        },
        {
            "id": "7ed9d03bf302ecbcbcc634d2b69fabc59b37b965",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=1452",
            "value": "7ed9d03bf302ecbcbcc634d2b69fabc59b37b965"
        },
        {
            "id": "1d8b665ba69309c9128ab7154300bb96031700ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=164",
            "value": "1d8b665ba69309c9128ab7154300bb96031700ef"
        },
        {
            "id": "bb7212b6a88e30d164b7f3567b07e24b739a950f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=1767",
            "value": "bb7212b6a88e30d164b7f3567b07e24b739a950f"
        },
        {
            "id": "a2b3ce614557bb82982326eed45f49ba2e1664e2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=179",
            "value": "a2b3ce614557bb82982326eed45f49ba2e1664e2"
        },
        {
            "id": "375fd06115d84dfc280fd6ae57c43f0c8b6aee82",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=1817",
            "value": "375fd06115d84dfc280fd6ae57c43f0c8b6aee82"
        },
        {
            "id": "1fd809e41230d6d43f5a2506ba58454302a4c334",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=193",
            "value": "1fd809e41230d6d43f5a2506ba58454302a4c334"
        },
        {
            "id": "53d23fba04d0ab4d3f82703cf83c02b259bf7dd9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=2037",
            "value": "53d23fba04d0ab4d3f82703cf83c02b259bf7dd9"
        },
        {
            "id": "6b5c82a10062c469ac7cb6939e3d5285f2cd96d7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=2199",
            "value": "6b5c82a10062c469ac7cb6939e3d5285f2cd96d7"
        },
        {
            "id": "d0854faae5dc6d04f8b30dc35b750a3c2bb98254",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=2310",
            "value": "d0854faae5dc6d04f8b30dc35b750a3c2bb98254"
        },
        {
            "id": "8f6e53313f9ec061c422250a722550f3bb48a281",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=2356",
            "value": "8f6e53313f9ec061c422250a722550f3bb48a281"
        },
        {
            "id": "d1c9c49410ac323e8394d51de953c6df3e7656b3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=2382",
            "value": "d1c9c49410ac323e8394d51de953c6df3e7656b3"
        },
        {
            "id": "b05abfe9797851831d6069eae449f1a11b660234",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=325",
            "value": "b05abfe9797851831d6069eae449f1a11b660234"
        },
        {
            "id": "9907c83182c4708c4a72dc7bd07148fce148abde",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=450",
            "value": "9907c83182c4708c4a72dc7bd07148fce148abde"
        },
        {
            "id": "001f1d1aa105d505da8fb3bd7076bcfedf698b8e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=495",
            "value": "001f1d1aa105d505da8fb3bd7076bcfedf698b8e"
        },
        {
            "id": "ce4c33f5e28024a9cb10ed842fba1c0536f9a8ac",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=542",
            "value": "ce4c33f5e28024a9cb10ed842fba1c0536f9a8ac"
        },
        {
            "id": "3910604ba427b21d161f44ce6317a927a7c56522",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=578",
            "value": "3910604ba427b21d161f44ce6317a927a7c56522"
        },
        {
            "id": "5dcb3828fb45ae0beb86086cbc1df11cb495d1cf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=634",
            "value": "5dcb3828fb45ae0beb86086cbc1df11cb495d1cf"
        },
        {
            "id": "18d5a565f5b60c265f3f01226c5ec772eaa468d5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=719",
            "value": "18d5a565f5b60c265f3f01226c5ec772eaa468d5"
        },
        {
            "id": "be9834a7979a9d3876e3285f79bffd66e67fc75b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=720",
            "value": "be9834a7979a9d3876e3285f79bffd66e67fc75b"
        },
        {
            "id": "ccc30907c7d2c395e66246f33a03ce674dbb6db7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=786",
            "value": "ccc30907c7d2c395e66246f33a03ce674dbb6db7"
        },
        {
            "id": "8e1454883362be88edc6bb7b330f1b3f6c9cb937",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=861",
            "value": "8e1454883362be88edc6bb7b330f1b3f6c9cb937"
        },
        {
            "id": "c436b72a99f6d7d2a51c9211bedeeb7410081a23",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=945",
            "value": "c436b72a99f6d7d2a51c9211bedeeb7410081a23"
        },
        {
            "id": "ef01c41195220cfba3253e2e9f3b259a3344238c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=970",
            "value": "ef01c41195220cfba3253e2e9f3b259a3344238c"
        },
        {
            "id": "38fa9f73358e2cc6ab1c8422650eee21f66b3a80",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00382353&CISOPTR=986",
            "value": "38fa9f73358e2cc6ab1c8422650eee21f66b3a80"
        },
        {
            "id": "41d1f6e026fec9c7774a3a97ae2525c4fbdd8ab0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1008",
            "value": "41d1f6e026fec9c7774a3a97ae2525c4fbdd8ab0"
        },
        {
            "id": "41b1e9cf905c1258077cefa783bf0b5e918697d5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=101",
            "value": "41b1e9cf905c1258077cefa783bf0b5e918697d5"
        },
        {
            "id": "6949c3ff5087124cee98916448d363113789fdbc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1013",
            "value": "6949c3ff5087124cee98916448d363113789fdbc"
        },
        {
            "id": "0f6111497f043c0260580da010e70f3e0bd662f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1015",
            "value": "0f6111497f043c0260580da010e70f3e0bd662f5"
        },
        {
            "id": "884d0cbfabdb8af7dc7183dcc1868a4d369ccbfe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1018",
            "value": "884d0cbfabdb8af7dc7183dcc1868a4d369ccbfe"
        },
        {
            "id": "ebb3ae682b94dfa9d9face2022c01819f84d89e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1020",
            "value": "ebb3ae682b94dfa9d9face2022c01819f84d89e5"
        },
        {
            "id": "bd2cd3867f0dabdfb7ac249c7b0630b9ab4b35c0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=103",
            "value": "bd2cd3867f0dabdfb7ac249c7b0630b9ab4b35c0"
        },
        {
            "id": "bd088168cc4411e6d91014055298ea3c23628629",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1030",
            "value": "bd088168cc4411e6d91014055298ea3c23628629"
        },
        {
            "id": "6614e39f18d65080dd3174137897004f3b7c5e57",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1033",
            "value": "6614e39f18d65080dd3174137897004f3b7c5e57"
        },
        {
            "id": "c34af59ba6249ed5852656bf31c38744d31f2854",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1034",
            "value": "c34af59ba6249ed5852656bf31c38744d31f2854"
        },
        {
            "id": "1997825fde0998830a64db77142f9170e75f2197",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1035",
            "value": "1997825fde0998830a64db77142f9170e75f2197"
        },
        {
            "id": "2352f98d5ed7a8c1ef1f59f296bdddac28266f50",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1039",
            "value": "2352f98d5ed7a8c1ef1f59f296bdddac28266f50"
        },
        {
            "id": "04563d6fa2dfc81f81c27c48332d1eaa8bf50296",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=104",
            "value": "04563d6fa2dfc81f81c27c48332d1eaa8bf50296"
        },
        {
            "id": "23ab054e9ec65248d9ab84a943431fd7c3aca538",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1040",
            "value": "23ab054e9ec65248d9ab84a943431fd7c3aca538"
        },
        {
            "id": "451a336cc947a5d5abe26c1dbd04d70e0b3053c8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1043",
            "value": "451a336cc947a5d5abe26c1dbd04d70e0b3053c8"
        },
        {
            "id": "c141709a8f3d3065970d998449e9ce02d9176d31",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1046",
            "value": "c141709a8f3d3065970d998449e9ce02d9176d31"
        },
        {
            "id": "00c42fd2af8a92582467c90a5362c34bba93f357",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1047",
            "value": "00c42fd2af8a92582467c90a5362c34bba93f357"
        },
        {
            "id": "6ac42600d5dd4cfa134eb5b5a4b5a83a565ac3a6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1048",
            "value": "6ac42600d5dd4cfa134eb5b5a4b5a83a565ac3a6"
        },
        {
            "id": "a93246ad1c429bdc8316ea8b9d905f37690a7b66",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1049",
            "value": "a93246ad1c429bdc8316ea8b9d905f37690a7b66"
        },
        {
            "id": "eed4725839caf0900a7123fde1c0eb353c459fbc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=105",
            "value": "eed4725839caf0900a7123fde1c0eb353c459fbc"
        },
        {
            "id": "cf7bd3f36efd57ec7be038cee7c39f0119f6188a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1051",
            "value": "cf7bd3f36efd57ec7be038cee7c39f0119f6188a"
        },
        {
            "id": "d4e9d5bbf30d35455d9c3baabc55349fc8f1c340",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1053",
            "value": "d4e9d5bbf30d35455d9c3baabc55349fc8f1c340"
        },
        {
            "id": "052e9d72a6fc13aa9669e7f491b04cf953b6a7c8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1055",
            "value": "052e9d72a6fc13aa9669e7f491b04cf953b6a7c8"
        },
        {
            "id": "01a12eebab9c0c0df9e4c01293b5291e2b5eb0ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=1056",
            "value": "01a12eebab9c0c0df9e4c01293b5291e2b5eb0ec"
        },
        {
            "id": "a1337620987da9412ccefc478f8d66d080c0a845",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=107",
            "value": "a1337620987da9412ccefc478f8d66d080c0a845"
        },
        {
            "id": "4334938f1cc651f8778ed680d5c29152aa938438",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=108",
            "value": "4334938f1cc651f8778ed680d5c29152aa938438"
        },
        {
            "id": "6f1cf8087fe10d035e2f61ea6eb59e2af0ffcd38",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=111",
            "value": "6f1cf8087fe10d035e2f61ea6eb59e2af0ffcd38"
        },
        {
            "id": "71cd47cc67893439b467411595b88ee88c7acb1e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=112",
            "value": "71cd47cc67893439b467411595b88ee88c7acb1e"
        },
        {
            "id": "75711e311314d938b3535b4db79571885237110a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=115",
            "value": "75711e311314d938b3535b4db79571885237110a"
        },
        {
            "id": "b183fde61d6601b8fc907dd0dbb7fb1aa9c9d0da",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=116",
            "value": "b183fde61d6601b8fc907dd0dbb7fb1aa9c9d0da"
        },
        {
            "id": "1e196bdb051b2215969caaabd829a057def42a7a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=119",
            "value": "1e196bdb051b2215969caaabd829a057def42a7a"
        },
        {
            "id": "ecc32f2a272d7c28805eee465ae3a1612c5c728a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=120",
            "value": "ecc32f2a272d7c28805eee465ae3a1612c5c728a"
        },
        {
            "id": "0dc8d0abb9ceb1cac671dda3d8831ede5dd34c88",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=123",
            "value": "0dc8d0abb9ceb1cac671dda3d8831ede5dd34c88"
        },
        {
            "id": "064ce5d7de15c39e4c91d0a9dbaf7a8d40b67c80",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=124",
            "value": "064ce5d7de15c39e4c91d0a9dbaf7a8d40b67c80"
        },
        {
            "id": "21e3b6b6b125d6b58dd578f263b37a74faf5724d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=126",
            "value": "21e3b6b6b125d6b58dd578f263b37a74faf5724d"
        },
        {
            "id": "c262392df3aea1ca6842bb50cfde28b1f68ac49c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=127",
            "value": "c262392df3aea1ca6842bb50cfde28b1f68ac49c"
        },
        {
            "id": "c7d7db5de688e8b225633ce5769a615e82206dd8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=129",
            "value": "c7d7db5de688e8b225633ce5769a615e82206dd8"
        },
        {
            "id": "796805b664068192d0c960fee8de8def4fcb8fb8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=130",
            "value": "796805b664068192d0c960fee8de8def4fcb8fb8"
        },
        {
            "id": "9e3879e19d01c0647c2332cc1d9ff718ef4e193d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=132",
            "value": "9e3879e19d01c0647c2332cc1d9ff718ef4e193d"
        },
        {
            "id": "7340f5950d950924e55b5c5d0d78a02964921aa0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=133",
            "value": "7340f5950d950924e55b5c5d0d78a02964921aa0"
        },
        {
            "id": "09a2de8b976647d6aa6e2b77f878e61452c9fa21",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=135",
            "value": "09a2de8b976647d6aa6e2b77f878e61452c9fa21"
        },
        {
            "id": "9c43de58a2af47dbf15e6f9a6019aebddbb09aff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=136",
            "value": "9c43de58a2af47dbf15e6f9a6019aebddbb09aff"
        },
        {
            "id": "548060a338d16c9cdd4b16691b7af17674b2eb76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=137",
            "value": "548060a338d16c9cdd4b16691b7af17674b2eb76"
        },
        {
            "id": "6c1efa580445adfe7335492612979909eb3c0769",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=138",
            "value": "6c1efa580445adfe7335492612979909eb3c0769"
        },
        {
            "id": "47bfcc71c8ca86d75983ebdf7042d197583e5a2f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=140",
            "value": "47bfcc71c8ca86d75983ebdf7042d197583e5a2f"
        },
        {
            "id": "7f35c5e7e6899aa3c5a8a49198f3b8c6c1b65521",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=143",
            "value": "7f35c5e7e6899aa3c5a8a49198f3b8c6c1b65521"
        },
        {
            "id": "c4c22d9dfd6eeeb432fca510fbddd96cf7c39813",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=148",
            "value": "c4c22d9dfd6eeeb432fca510fbddd96cf7c39813"
        },
        {
            "id": "a277fb1aae620717e7816a2f0f85dd9b35e3374e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=149",
            "value": "a277fb1aae620717e7816a2f0f85dd9b35e3374e"
        },
        {
            "id": "e8c652f2fd0739fe5de292512d30930bac1068cc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=15",
            "value": "e8c652f2fd0739fe5de292512d30930bac1068cc"
        },
        {
            "id": "95199048eeb67e75d01aabfd138b675794588e06",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=150",
            "value": "95199048eeb67e75d01aabfd138b675794588e06"
        },
        {
            "id": "9368218d629b10cd58314ead5e37a8e2ab9c862e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=151",
            "value": "9368218d629b10cd58314ead5e37a8e2ab9c862e"
        },
        {
            "id": "ab0792f5329ac7f6e0925bdc4bb9b52d84be76ee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=154",
            "value": "ab0792f5329ac7f6e0925bdc4bb9b52d84be76ee"
        },
        {
            "id": "0ce7aa16254f43945ed7afdd0aeb94675b0d54e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=155",
            "value": "0ce7aa16254f43945ed7afdd0aeb94675b0d54e5"
        },
        {
            "id": "eb06be091aeb7545527dfce35693023e4af9fbde",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=156",
            "value": "eb06be091aeb7545527dfce35693023e4af9fbde"
        },
        {
            "id": "ff2ff30a0d2fc4e5a003ee7a447eeeb9e1a01c42",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=159",
            "value": "ff2ff30a0d2fc4e5a003ee7a447eeeb9e1a01c42"
        },
        {
            "id": "e803f5befb70ac7c33a75366bb5e93db37d5e590",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=162",
            "value": "e803f5befb70ac7c33a75366bb5e93db37d5e590"
        },
        {
            "id": "8213792e84b1f1be692d8321fb3e1af9518f8822",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=163",
            "value": "8213792e84b1f1be692d8321fb3e1af9518f8822"
        },
        {
            "id": "ca95294821398ebf363c643c6a646afb1bf227e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=164",
            "value": "ca95294821398ebf363c643c6a646afb1bf227e1"
        },
        {
            "id": "7b26d02c172154e611e98b8c8cb096f3d31315ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=172",
            "value": "7b26d02c172154e611e98b8c8cb096f3d31315ef"
        },
        {
            "id": "41ab4b512442213df884ec3b54a26001526378cb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=173",
            "value": "41ab4b512442213df884ec3b54a26001526378cb"
        },
        {
            "id": "082579c566a54b70c38c2851bbb555808ddb729b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=174",
            "value": "082579c566a54b70c38c2851bbb555808ddb729b"
        },
        {
            "id": "fa5a1d19ef20569e492a54c833f8ef4bdf421bff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=175",
            "value": "fa5a1d19ef20569e492a54c833f8ef4bdf421bff"
        },
        {
            "id": "536552501b402931611bab456001d6c73f2809ae",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=178",
            "value": "536552501b402931611bab456001d6c73f2809ae"
        },
        {
            "id": "1e18f5a6a2d73b0d639dd277f5a6c05de781a6ca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=181",
            "value": "1e18f5a6a2d73b0d639dd277f5a6c05de781a6ca"
        },
        {
            "id": "948180dd824ba89d77f2d8464c2cec591274f064",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=183",
            "value": "948180dd824ba89d77f2d8464c2cec591274f064"
        },
        {
            "id": "61480bd922d51bbb634c346b36398316422e7e7f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=197",
            "value": "61480bd922d51bbb634c346b36398316422e7e7f"
        },
        {
            "id": "54915df5c73b623ae54d15299bc3280b867ab853",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=198",
            "value": "54915df5c73b623ae54d15299bc3280b867ab853"
        },
        {
            "id": "d6321141a2e33e1d91ccc52e8ef20d4fa11719b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=2",
            "value": "d6321141a2e33e1d91ccc52e8ef20d4fa11719b1"
        },
        {
            "id": "2e3ae1ff1d5bbd5786360ca862cdb36d8156d0b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=200",
            "value": "2e3ae1ff1d5bbd5786360ca862cdb36d8156d0b2"
        },
        {
            "id": "32dbfbed61b13fc1b2f7fafca74794cc387c268c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=202",
            "value": "32dbfbed61b13fc1b2f7fafca74794cc387c268c"
        },
        {
            "id": "a72b92f670c74d885a67d2d8a08dff45b02bf9ee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=208",
            "value": "a72b92f670c74d885a67d2d8a08dff45b02bf9ee"
        },
        {
            "id": "87ae5614aaa63e1c905289305d750f3c493ea11a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=211",
            "value": "87ae5614aaa63e1c905289305d750f3c493ea11a"
        },
        {
            "id": "5315a64ce8e550ed18721aa37e624502f97adb6a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=214",
            "value": "5315a64ce8e550ed18721aa37e624502f97adb6a"
        },
        {
            "id": "5aab395e0b4e4d102bc151e16b67d97e276174fe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=219",
            "value": "5aab395e0b4e4d102bc151e16b67d97e276174fe"
        },
        {
            "id": "fb8515f83baaef1cbd51212c84a5d552b98875d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=226",
            "value": "fb8515f83baaef1cbd51212c84a5d552b98875d3"
        },
        {
            "id": "780604a78abb6162b09828021d98e4885efc8da8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=227",
            "value": "780604a78abb6162b09828021d98e4885efc8da8"
        },
        {
            "id": "43c2539a23683b5c540f3709cc4f5785a57b626a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=229",
            "value": "43c2539a23683b5c540f3709cc4f5785a57b626a"
        },
        {
            "id": "53142cc60e252f7aeca8677ef50519870df7a99f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=23",
            "value": "53142cc60e252f7aeca8677ef50519870df7a99f"
        },
        {
            "id": "a582b2ff72c9b6ba3fc8b8b7e52ffb0a753c0dda",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=231",
            "value": "a582b2ff72c9b6ba3fc8b8b7e52ffb0a753c0dda"
        },
        {
            "id": "8cf6bcfac0bcdaa88d986ce0b6816c0bbf77a32b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=236",
            "value": "8cf6bcfac0bcdaa88d986ce0b6816c0bbf77a32b"
        },
        {
            "id": "8a0f14d0bcc2a6cb64abf2a9a67cc48f5348f242",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=237",
            "value": "8a0f14d0bcc2a6cb64abf2a9a67cc48f5348f242"
        },
        {
            "id": "f0e4f2cc111717ac351eab31c8f4328473c75680",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=24",
            "value": "f0e4f2cc111717ac351eab31c8f4328473c75680"
        },
        {
            "id": "e1d98e2b142b449a0174efb14e604e1eddf2b4ae",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=243",
            "value": "e1d98e2b142b449a0174efb14e604e1eddf2b4ae"
        },
        {
            "id": "aeb0f9b97e33c501942fe3361dcd18cae4a77f81",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=250",
            "value": "aeb0f9b97e33c501942fe3361dcd18cae4a77f81"
        },
        {
            "id": "308eefb8284fcf988d299ea28c5b8fdc1d85ca08",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=255",
            "value": "308eefb8284fcf988d299ea28c5b8fdc1d85ca08"
        },
        {
            "id": "0ac93526719b3e4d4bccdc91c659127f1fa94f98",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=260",
            "value": "0ac93526719b3e4d4bccdc91c659127f1fa94f98"
        },
        {
            "id": "ca0d2cbc773f3f23fe51d0ba7e893e2043e795d7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=265",
            "value": "ca0d2cbc773f3f23fe51d0ba7e893e2043e795d7"
        },
        {
            "id": "936782b8385aedab30f4f8cb5e6823d5d9049c05",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=268",
            "value": "936782b8385aedab30f4f8cb5e6823d5d9049c05"
        },
        {
            "id": "01da50532b084d8c1ad60400ff4e810989d3605d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=272",
            "value": "01da50532b084d8c1ad60400ff4e810989d3605d"
        },
        {
            "id": "435e44619d436a249c84e8cbac689de721a6d232",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=278",
            "value": "435e44619d436a249c84e8cbac689de721a6d232"
        },
        {
            "id": "fca1cfbe91fa92aa8651fab1a5bca862e22c9b40",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=289",
            "value": "fca1cfbe91fa92aa8651fab1a5bca862e22c9b40"
        },
        {
            "id": "0302e660e74e73e9a0917640850ab488d74b2510",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=291",
            "value": "0302e660e74e73e9a0917640850ab488d74b2510"
        },
        {
            "id": "0aefd6ab3fb03aaf4fbf90cfac9ea32ea6eca730",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=299",
            "value": "0aefd6ab3fb03aaf4fbf90cfac9ea32ea6eca730"
        },
        {
            "id": "d5a5d14b16ecdc55f2925d446a365e862468f2b8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=30",
            "value": "d5a5d14b16ecdc55f2925d446a365e862468f2b8"
        },
        {
            "id": "b5ad3136a100fcd3774b5b4ce6e17a4d4914b01e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=301",
            "value": "b5ad3136a100fcd3774b5b4ce6e17a4d4914b01e"
        },
        {
            "id": "f33227aae2b3a3790775c63f17430abf42a7ef29",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=302",
            "value": "f33227aae2b3a3790775c63f17430abf42a7ef29"
        },
        {
            "id": "04641da4fe6597b6d796a1fe926c2d041a052ac3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=303",
            "value": "04641da4fe6597b6d796a1fe926c2d041a052ac3"
        },
        {
            "id": "fdf99e194c979935dcce4a6a790cc6656a1c6354",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=317",
            "value": "fdf99e194c979935dcce4a6a790cc6656a1c6354"
        },
        {
            "id": "f7b9edfe339dd289d41add0c406d24683a1800de",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=318",
            "value": "f7b9edfe339dd289d41add0c406d24683a1800de"
        },
        {
            "id": "c437eb1d531f9a9e596916b4c5290ee5ca16cb1b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=321",
            "value": "c437eb1d531f9a9e596916b4c5290ee5ca16cb1b"
        },
        {
            "id": "6bce48d398e117121424f0ee175f32989c4a71fd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=326",
            "value": "6bce48d398e117121424f0ee175f32989c4a71fd"
        },
        {
            "id": "e8e9f53558f0014c226dde63b0306785e72af274",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=327",
            "value": "e8e9f53558f0014c226dde63b0306785e72af274"
        },
        {
            "id": "9249de42a5bc194ae094c7193a847a60268ebf9b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=330",
            "value": "9249de42a5bc194ae094c7193a847a60268ebf9b"
        },
        {
            "id": "ac1ea000b649b157b016adb786abf685e3c473c9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=331",
            "value": "ac1ea000b649b157b016adb786abf685e3c473c9"
        },
        {
            "id": "b175364c98d31671ae255eabe455fa0ba4bb2bef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=332",
            "value": "b175364c98d31671ae255eabe455fa0ba4bb2bef"
        },
        {
            "id": "a0d4ac4af526a8b51b7d77488b072e8852d263c6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=335",
            "value": "a0d4ac4af526a8b51b7d77488b072e8852d263c6"
        },
        {
            "id": "9aca4039559eeeb6024f6f1d00f48a2235f93090",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=336",
            "value": "9aca4039559eeeb6024f6f1d00f48a2235f93090"
        },
        {
            "id": "04e675a4c218fc4f77fe2c8b8014feec0fed635f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=342",
            "value": "04e675a4c218fc4f77fe2c8b8014feec0fed635f"
        },
        {
            "id": "36eb29c59282d404e9b9a2314bbf2a6a88969828",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=343",
            "value": "36eb29c59282d404e9b9a2314bbf2a6a88969828"
        },
        {
            "id": "00937964bc8133b5366824f55feaaf883a6d8f4b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=344",
            "value": "00937964bc8133b5366824f55feaaf883a6d8f4b"
        },
        {
            "id": "cb61d6f227db0d7154d1a54ea3110df11453e61c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=345",
            "value": "cb61d6f227db0d7154d1a54ea3110df11453e61c"
        },
        {
            "id": "016a645bf6be2487f2a451dd9fe205da286582fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=346",
            "value": "016a645bf6be2487f2a451dd9fe205da286582fa"
        },
        {
            "id": "5ead2415ff7d0af63afe74ae8c4c4e9b47ac9c21",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=357",
            "value": "5ead2415ff7d0af63afe74ae8c4c4e9b47ac9c21"
        },
        {
            "id": "deb511ebd8b9ef260ef8fb6baf2602889e0cbfd6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=359",
            "value": "deb511ebd8b9ef260ef8fb6baf2602889e0cbfd6"
        },
        {
            "id": "e093159932d46103a381fc12bcf75510c927431e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=36",
            "value": "e093159932d46103a381fc12bcf75510c927431e"
        },
        {
            "id": "300ffa1d9458e6e2787aa50b5950d5871f67a4f3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=362",
            "value": "300ffa1d9458e6e2787aa50b5950d5871f67a4f3"
        },
        {
            "id": "b04979c329537e251399cea93b23bf3bf07af54c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=366",
            "value": "b04979c329537e251399cea93b23bf3bf07af54c"
        },
        {
            "id": "1bf32b5df807f8a7be21cf90688a0a49a199fff7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=368",
            "value": "1bf32b5df807f8a7be21cf90688a0a49a199fff7"
        },
        {
            "id": "f77000fabc7454fdd6d02a08e0893adc0c0828d8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=369",
            "value": "f77000fabc7454fdd6d02a08e0893adc0c0828d8"
        },
        {
            "id": "af1a60fabd08c88de2f4d54c4df443f8165af566",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=37",
            "value": "af1a60fabd08c88de2f4d54c4df443f8165af566"
        },
        {
            "id": "ff5d9950b59e67bee831c07f57cff9da04534b1b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=370",
            "value": "ff5d9950b59e67bee831c07f57cff9da04534b1b"
        },
        {
            "id": "a3c7ff87e1eb3cf2267c970485fa6eb27de0a206",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=373",
            "value": "a3c7ff87e1eb3cf2267c970485fa6eb27de0a206"
        },
        {
            "id": "4a40534881c42266c90444d5ba2a75a4d1403858",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=375",
            "value": "4a40534881c42266c90444d5ba2a75a4d1403858"
        },
        {
            "id": "540f97499065e477edb879c22f50aa5fe8b1b794",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=378",
            "value": "540f97499065e477edb879c22f50aa5fe8b1b794"
        },
        {
            "id": "91aac6b453cd39fde1f92bf2fde86ad269d3e415",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=379",
            "value": "91aac6b453cd39fde1f92bf2fde86ad269d3e415"
        },
        {
            "id": "c58097b0959e32cb58d8fc0f9d8d831295714483",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=383",
            "value": "c58097b0959e32cb58d8fc0f9d8d831295714483"
        },
        {
            "id": "845e4d03c9e4afb9857f2ee38488a5248bbb1759",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=384",
            "value": "845e4d03c9e4afb9857f2ee38488a5248bbb1759"
        },
        {
            "id": "9d25b1facd03a91b5639cdaeedb4d0166de0db1d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=388",
            "value": "9d25b1facd03a91b5639cdaeedb4d0166de0db1d"
        },
        {
            "id": "f9b570959ab46f6b87f2e7f157ba140a853dfa25",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=394",
            "value": "f9b570959ab46f6b87f2e7f157ba140a853dfa25"
        },
        {
            "id": "bd991d53a3a6018538ab0a44bb2d788cc0b6915b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=398",
            "value": "bd991d53a3a6018538ab0a44bb2d788cc0b6915b"
        },
        {
            "id": "20728a41a269e14713bceba63e7786dfd79114a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=400",
            "value": "20728a41a269e14713bceba63e7786dfd79114a3"
        },
        {
            "id": "eb830142bee51f6cf7cfe71d53c40e385c8f8d63",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=401",
            "value": "eb830142bee51f6cf7cfe71d53c40e385c8f8d63"
        },
        {
            "id": "3f3938cae00a92abbb5cf9388214850a344f5a0f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=403",
            "value": "3f3938cae00a92abbb5cf9388214850a344f5a0f"
        },
        {
            "id": "4ba47a8332bac436a2aa7b97f4ceb8d62fdce013",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=404",
            "value": "4ba47a8332bac436a2aa7b97f4ceb8d62fdce013"
        },
        {
            "id": "ff7f3b719da085416a54c0b8c0d2ce2c5a46b2d6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=408",
            "value": "ff7f3b719da085416a54c0b8c0d2ce2c5a46b2d6"
        },
        {
            "id": "28d1dcc38ec350382c5932ac088f40f4ea21da0e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=424",
            "value": "28d1dcc38ec350382c5932ac088f40f4ea21da0e"
        },
        {
            "id": "9ca3dbdfc6258839633ad6031e92d8acad733b05",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=427",
            "value": "9ca3dbdfc6258839633ad6031e92d8acad733b05"
        },
        {
            "id": "8d3f38e94b6e27f1ae749ca98d0432b005046aaa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=432",
            "value": "8d3f38e94b6e27f1ae749ca98d0432b005046aaa"
        },
        {
            "id": "4f2b563438abba9fc123f44126213e52a0a1b5da",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=438",
            "value": "4f2b563438abba9fc123f44126213e52a0a1b5da"
        },
        {
            "id": "22547cdf29ba62c638250442677952656ea5f955",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=44",
            "value": "22547cdf29ba62c638250442677952656ea5f955"
        },
        {
            "id": "ebd6a6a785b67fc23419076d609a6c083d45f2c1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=444",
            "value": "ebd6a6a785b67fc23419076d609a6c083d45f2c1"
        },
        {
            "id": "8c1772059be8b20f7b5fc16feba61c04c386c5a5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=445",
            "value": "8c1772059be8b20f7b5fc16feba61c04c386c5a5"
        },
        {
            "id": "4e69fb751b5a61ed8d2eb85818a666c69c9980ce",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=446",
            "value": "4e69fb751b5a61ed8d2eb85818a666c69c9980ce"
        },
        {
            "id": "6d9bff3727babf12847d01d7016bcc12048b224f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=448",
            "value": "6d9bff3727babf12847d01d7016bcc12048b224f"
        },
        {
            "id": "336624fe9c640c2061bad4bab2de6128e59a8507",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=450",
            "value": "336624fe9c640c2061bad4bab2de6128e59a8507"
        },
        {
            "id": "2d6f15f930999a8f57211f94eb21bc981b21dcd5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=451",
            "value": "2d6f15f930999a8f57211f94eb21bc981b21dcd5"
        },
        {
            "id": "3365628e7ae96f09542903142e47ff30510058ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=452",
            "value": "3365628e7ae96f09542903142e47ff30510058ec"
        },
        {
            "id": "080193e79ceaf896ee102f57924e802792986b78",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=453",
            "value": "080193e79ceaf896ee102f57924e802792986b78"
        },
        {
            "id": "e56088fc51a9f247f0112e6b3fa006e3330300be",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=454",
            "value": "e56088fc51a9f247f0112e6b3fa006e3330300be"
        },
        {
            "id": "dad3c58167364bbc2af691745da59c1327aed4a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=457",
            "value": "dad3c58167364bbc2af691745da59c1327aed4a3"
        },
        {
            "id": "9a715468ef3064452f0a4191de2fe8ba9017811e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=460",
            "value": "9a715468ef3064452f0a4191de2fe8ba9017811e"
        },
        {
            "id": "ed51eaceecfb136d0412cf7fea49d20f63423f00",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=465",
            "value": "ed51eaceecfb136d0412cf7fea49d20f63423f00"
        },
        {
            "id": "86e053c9a846d8d8162b40201da4f4aac141a3d1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=467",
            "value": "86e053c9a846d8d8162b40201da4f4aac141a3d1"
        },
        {
            "id": "a519350001ceba778ce2b008961b73ad627dbcfe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=468",
            "value": "a519350001ceba778ce2b008961b73ad627dbcfe"
        },
        {
            "id": "bf5f5a6236c8b0a483ffa788992bdbbd3a82f27e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=470",
            "value": "bf5f5a6236c8b0a483ffa788992bdbbd3a82f27e"
        },
        {
            "id": "7f6ad69bbd8e0061d200ed492e51491714f505e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=472",
            "value": "7f6ad69bbd8e0061d200ed492e51491714f505e5"
        },
        {
            "id": "a0689d22cc3a3881d149475c01e93da09d53dccc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=48",
            "value": "a0689d22cc3a3881d149475c01e93da09d53dccc"
        },
        {
            "id": "fc12e3942eca9233fee58c4415fd763f61c79e50",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=481",
            "value": "fc12e3942eca9233fee58c4415fd763f61c79e50"
        },
        {
            "id": "dffbcd3967087ddcc7c17d37619d7af66cdf1006",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=492",
            "value": "dffbcd3967087ddcc7c17d37619d7af66cdf1006"
        },
        {
            "id": "58f02ddce289858ca94645e9173f7baa40aa9259",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=493",
            "value": "58f02ddce289858ca94645e9173f7baa40aa9259"
        },
        {
            "id": "8c57e412299d127af93c48ff96bec01130bb4342",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=494",
            "value": "8c57e412299d127af93c48ff96bec01130bb4342"
        },
        {
            "id": "105b08a41a348b677f5da802dd060bbcbd100c7d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=497",
            "value": "105b08a41a348b677f5da802dd060bbcbd100c7d"
        },
        {
            "id": "5af03f67ee0c6a0583783fe87a9d8ea1c0c67de2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=498",
            "value": "5af03f67ee0c6a0583783fe87a9d8ea1c0c67de2"
        },
        {
            "id": "c84f0ef060cce4b84c09c773766e60ea23443fa5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=50",
            "value": "c84f0ef060cce4b84c09c773766e60ea23443fa5"
        },
        {
            "id": "c1aa411a79bab6475e9141ad37b4814167f25e04",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=502",
            "value": "c1aa411a79bab6475e9141ad37b4814167f25e04"
        },
        {
            "id": "d6ee9101fd8cbf181194aedfb3ccac528e5a5823",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=505",
            "value": "d6ee9101fd8cbf181194aedfb3ccac528e5a5823"
        },
        {
            "id": "d51a16b6236fd118d960aff7473228030f252ef4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=509",
            "value": "d51a16b6236fd118d960aff7473228030f252ef4"
        },
        {
            "id": "93ef8286eeabf7f661ecd834172d520834bb3d67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=518",
            "value": "93ef8286eeabf7f661ecd834172d520834bb3d67"
        },
        {
            "id": "b16d091c722550bb003de998d675ceb4e722bfe1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=521",
            "value": "b16d091c722550bb003de998d675ceb4e722bfe1"
        },
        {
            "id": "c92c87047dd094b9062430b4fe0453fc798aa458",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=522",
            "value": "c92c87047dd094b9062430b4fe0453fc798aa458"
        },
        {
            "id": "ffb285756a659333cc2d63a3722416be667b28e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=526",
            "value": "ffb285756a659333cc2d63a3722416be667b28e3"
        },
        {
            "id": "554dc62178c39f82826d534224be7473e8023678",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=536",
            "value": "554dc62178c39f82826d534224be7473e8023678"
        },
        {
            "id": "e5398c0d4fe34c234067df1286cdc3004d0429aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=539",
            "value": "e5398c0d4fe34c234067df1286cdc3004d0429aa"
        },
        {
            "id": "33efff99bc7c08f011d9e682a08ce4698d228de3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=543",
            "value": "33efff99bc7c08f011d9e682a08ce4698d228de3"
        },
        {
            "id": "2053606d714e7efa8c82d63b696f84fddc0cb831",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=545",
            "value": "2053606d714e7efa8c82d63b696f84fddc0cb831"
        },
        {
            "id": "13f995cb149c9555f69230a51021821e9fee1624",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=55",
            "value": "13f995cb149c9555f69230a51021821e9fee1624"
        },
        {
            "id": "bba2464de436a10ae3354aa8c364736b3a088697",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=566",
            "value": "bba2464de436a10ae3354aa8c364736b3a088697"
        },
        {
            "id": "041ddeb9d8055f5ae3644cdbfba047b4d2489ce5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=579",
            "value": "041ddeb9d8055f5ae3644cdbfba047b4d2489ce5"
        },
        {
            "id": "752618723b9e3ddac4f9049cbd7b3d0a0f92de8e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=58",
            "value": "752618723b9e3ddac4f9049cbd7b3d0a0f92de8e"
        },
        {
            "id": "1b4280f962288069e1a1396f93724228ec7dd206",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=581",
            "value": "1b4280f962288069e1a1396f93724228ec7dd206"
        },
        {
            "id": "4395e5f5bf81f4027f7a12839ad0abd4c091db83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=587",
            "value": "4395e5f5bf81f4027f7a12839ad0abd4c091db83"
        },
        {
            "id": "aa7a4ea57d9b66a611c5168c6ac16eddecd8fd8a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=59",
            "value": "aa7a4ea57d9b66a611c5168c6ac16eddecd8fd8a"
        },
        {
            "id": "f07c4b425275e49f8528a3d5f75f8328e02e6185",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=591",
            "value": "f07c4b425275e49f8528a3d5f75f8328e02e6185"
        },
        {
            "id": "f7b9752d1ce5bb4d3f695e12e8c0c8ffaa50f953",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=592",
            "value": "f7b9752d1ce5bb4d3f695e12e8c0c8ffaa50f953"
        },
        {
            "id": "6abd006f1b6a9f35471d0eb291f2e15b5f2c4eb4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=594",
            "value": "6abd006f1b6a9f35471d0eb291f2e15b5f2c4eb4"
        },
        {
            "id": "3294e5459f72404b8d2ef68b5b042d5cd68cfce7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=596",
            "value": "3294e5459f72404b8d2ef68b5b042d5cd68cfce7"
        },
        {
            "id": "9aa0e07bbf5da2289502952617f8e725f8d1e014",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=60",
            "value": "9aa0e07bbf5da2289502952617f8e725f8d1e014"
        },
        {
            "id": "3698038a02412b4f2ed78ff84dc054b527e99c48",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=604",
            "value": "3698038a02412b4f2ed78ff84dc054b527e99c48"
        },
        {
            "id": "155f58da429d061ae1179cb0a40bc2de2cb7fee9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=606",
            "value": "155f58da429d061ae1179cb0a40bc2de2cb7fee9"
        },
        {
            "id": "1f59fdd7dadf0e73ff076c6baa7f4cde95167188",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=607",
            "value": "1f59fdd7dadf0e73ff076c6baa7f4cde95167188"
        },
        {
            "id": "e00f661cf290c2ddec22c53e6f559824454f8740",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=61",
            "value": "e00f661cf290c2ddec22c53e6f559824454f8740"
        },
        {
            "id": "01916ce6420f386edc0d771a1f4bb38143a13c8e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=611",
            "value": "01916ce6420f386edc0d771a1f4bb38143a13c8e"
        },
        {
            "id": "cb99a6ccdba691095aa9e07f9117edf6d11e3c9b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=615",
            "value": "cb99a6ccdba691095aa9e07f9117edf6d11e3c9b"
        },
        {
            "id": "912bad6f7133682dbf0d600f5f3e40846660284f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=616",
            "value": "912bad6f7133682dbf0d600f5f3e40846660284f"
        },
        {
            "id": "5aa2fdb4e02d7831a2ec38c03a06f004ea0e537b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=617",
            "value": "5aa2fdb4e02d7831a2ec38c03a06f004ea0e537b"
        },
        {
            "id": "4ee29ebbc59dd109e079bb0a78c1a8b8933801a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=62",
            "value": "4ee29ebbc59dd109e079bb0a78c1a8b8933801a3"
        },
        {
            "id": "5ff1e031353acb828a2def0cc106335859291861",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=627",
            "value": "5ff1e031353acb828a2def0cc106335859291861"
        },
        {
            "id": "b3702015f3a3a43a925ab699bba4420cec8ceab3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=630",
            "value": "b3702015f3a3a43a925ab699bba4420cec8ceab3"
        },
        {
            "id": "d1b26b6f018ae99f07bdeac747685a491ed46c53",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=633",
            "value": "d1b26b6f018ae99f07bdeac747685a491ed46c53"
        },
        {
            "id": "e84b9f9b1fb949b3f28f850b07ad759c34fdadd4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=635",
            "value": "e84b9f9b1fb949b3f28f850b07ad759c34fdadd4"
        },
        {
            "id": "f764750782d3107d16a9b4fb165849b995a8b80a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=638",
            "value": "f764750782d3107d16a9b4fb165849b995a8b80a"
        },
        {
            "id": "5f30e302091ede531638b194e8cb7e524b925938",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=640",
            "value": "5f30e302091ede531638b194e8cb7e524b925938"
        },
        {
            "id": "847aba3f8ac0b7b5914e8d9df2ca233a8b676056",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=643",
            "value": "847aba3f8ac0b7b5914e8d9df2ca233a8b676056"
        },
        {
            "id": "a1a7137e1094e06eb2ec60400f0efc9ee0661a94",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=645",
            "value": "a1a7137e1094e06eb2ec60400f0efc9ee0661a94"
        },
        {
            "id": "24617dfa47debed10dc3179464dd55d773abc875",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=649",
            "value": "24617dfa47debed10dc3179464dd55d773abc875"
        },
        {
            "id": "96abae239df58cbe99e687f047d48f148c12674c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=669",
            "value": "96abae239df58cbe99e687f047d48f148c12674c"
        },
        {
            "id": "7e9ea089a8c51f365a87e125de9695ca907da2eb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=67",
            "value": "7e9ea089a8c51f365a87e125de9695ca907da2eb"
        },
        {
            "id": "e6c51ae9b1b50cf7d4795dd6c458d0cb5b0d411a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=675",
            "value": "e6c51ae9b1b50cf7d4795dd6c458d0cb5b0d411a"
        },
        {
            "id": "a7b7f1ed35657059ebec14438b32552de128c4f3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=678",
            "value": "a7b7f1ed35657059ebec14438b32552de128c4f3"
        },
        {
            "id": "ba24a2dfd8d2ed616f7f8bf75e3b150dbed4eb77",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=683",
            "value": "ba24a2dfd8d2ed616f7f8bf75e3b150dbed4eb77"
        },
        {
            "id": "8eba87cd60b7e393c600c3496f4a7ce8ceaab34d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=685",
            "value": "8eba87cd60b7e393c600c3496f4a7ce8ceaab34d"
        },
        {
            "id": "0b2cf6ddcd3733fae2d2ae8fa720ba9498f67fdf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=689",
            "value": "0b2cf6ddcd3733fae2d2ae8fa720ba9498f67fdf"
        },
        {
            "id": "6e18f804d9094c9c53dd943963e33ee7fac548da",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=690",
            "value": "6e18f804d9094c9c53dd943963e33ee7fac548da"
        },
        {
            "id": "4e4e2d27deb6cce76237e07c4b48970b79e819d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=694",
            "value": "4e4e2d27deb6cce76237e07c4b48970b79e819d2"
        },
        {
            "id": "a815e10c45ad96d64491e3aaca63c64524a05d18",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=697",
            "value": "a815e10c45ad96d64491e3aaca63c64524a05d18"
        },
        {
            "id": "5c2b31fe33ec03f7a9f369994771e220352c36c6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=699",
            "value": "5c2b31fe33ec03f7a9f369994771e220352c36c6"
        },
        {
            "id": "61cf6f50a572cacc4da4f534e76b550cfa6d90e4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=70",
            "value": "61cf6f50a572cacc4da4f534e76b550cfa6d90e4"
        },
        {
            "id": "91f09584c0b9d9de57e5bd73e629a56004866da7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=700",
            "value": "91f09584c0b9d9de57e5bd73e629a56004866da7"
        },
        {
            "id": "718167a0ebba518a30d0bd9bec4b4258852e3ba5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=703",
            "value": "718167a0ebba518a30d0bd9bec4b4258852e3ba5"
        },
        {
            "id": "1ee5a563a866499fad8336ee8974c76953d3f4fe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=71",
            "value": "1ee5a563a866499fad8336ee8974c76953d3f4fe"
        },
        {
            "id": "1249dace35581a6e92eaa0b80a9856b98f0baf4b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=717",
            "value": "1249dace35581a6e92eaa0b80a9856b98f0baf4b"
        },
        {
            "id": "e311035004001944365d2d2fca4142c4f67e1e29",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=72",
            "value": "e311035004001944365d2d2fca4142c4f67e1e29"
        },
        {
            "id": "def5051e51771e5347df50c50961a3af68da7bc3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=727",
            "value": "def5051e51771e5347df50c50961a3af68da7bc3"
        },
        {
            "id": "72e99b653d8d71dd92d4a54d93212ebcba68fae1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=729",
            "value": "72e99b653d8d71dd92d4a54d93212ebcba68fae1"
        },
        {
            "id": "845372382478c9b7e458a36c80f152571037ab43",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=73",
            "value": "845372382478c9b7e458a36c80f152571037ab43"
        },
        {
            "id": "833c8e40202ae3ce2c091acb27bd7d40095ec96c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=74",
            "value": "833c8e40202ae3ce2c091acb27bd7d40095ec96c"
        },
        {
            "id": "8a50734ce675775e0eae618f61330b6100fa3ac3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=746",
            "value": "8a50734ce675775e0eae618f61330b6100fa3ac3"
        },
        {
            "id": "d6c4420dba8fa629a8343fa6ad46eaf177695320",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=75",
            "value": "d6c4420dba8fa629a8343fa6ad46eaf177695320"
        },
        {
            "id": "44a1ba3d8a42b11bed40397d440b855fc212d91f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=76",
            "value": "44a1ba3d8a42b11bed40397d440b855fc212d91f"
        },
        {
            "id": "136bc285056713a447fa5e3de4931d327a165860",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=760",
            "value": "136bc285056713a447fa5e3de4931d327a165860"
        },
        {
            "id": "52f09533bd684b07378aeac7bcd6c3fb1c5bf4b3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=761",
            "value": "52f09533bd684b07378aeac7bcd6c3fb1c5bf4b3"
        },
        {
            "id": "bd7f0d2dd783435a7bd5c6d5a0aac31bf8b9473f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=767",
            "value": "bd7f0d2dd783435a7bd5c6d5a0aac31bf8b9473f"
        },
        {
            "id": "bc7ffd3f9450c25b25d331801649caab72714472",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=77",
            "value": "bc7ffd3f9450c25b25d331801649caab72714472"
        },
        {
            "id": "361e0e19f9151fa817d448214c720fd6bca05e7c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=775",
            "value": "361e0e19f9151fa817d448214c720fd6bca05e7c"
        },
        {
            "id": "d3d0eef3e73c41b4e8dde5b36cf7e39dce65af34",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=778",
            "value": "d3d0eef3e73c41b4e8dde5b36cf7e39dce65af34"
        },
        {
            "id": "fb37bb5f189725c02eb963e331c05d043e51956f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=787",
            "value": "fb37bb5f189725c02eb963e331c05d043e51956f"
        },
        {
            "id": "0b4b3b660681fd604d3116b5e5388daa16ff5411",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=79",
            "value": "0b4b3b660681fd604d3116b5e5388daa16ff5411"
        },
        {
            "id": "44fe604299082d601b0b6678c5014a02fcf3f564",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=791",
            "value": "44fe604299082d601b0b6678c5014a02fcf3f564"
        },
        {
            "id": "c62e382d16688fc0890e6149bd7658a79a06c359",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=792",
            "value": "c62e382d16688fc0890e6149bd7658a79a06c359"
        },
        {
            "id": "6d06ce4cf2d9aa6110f809ee5584d34a37c73630",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=795",
            "value": "6d06ce4cf2d9aa6110f809ee5584d34a37c73630"
        },
        {
            "id": "ac1dcbd35e94528c460465a95b89471375647c22",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=799",
            "value": "ac1dcbd35e94528c460465a95b89471375647c22"
        },
        {
            "id": "ace87d1a85e3a393522786277b5a1a32c5d3eb53",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=80",
            "value": "ace87d1a85e3a393522786277b5a1a32c5d3eb53"
        },
        {
            "id": "bf501c5b62534cb68ec829beef0f7d78c8bc639b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=802",
            "value": "bf501c5b62534cb68ec829beef0f7d78c8bc639b"
        },
        {
            "id": "317e730c24b4a09d230dcf637dfca8bc5c4170e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=807",
            "value": "317e730c24b4a09d230dcf637dfca8bc5c4170e5"
        },
        {
            "id": "2b32aa6ff4c3b57d5523328bdd36808b472085e2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=81",
            "value": "2b32aa6ff4c3b57d5523328bdd36808b472085e2"
        },
        {
            "id": "c38a46902be6cf434ca70020827b373a6410b23f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=817",
            "value": "c38a46902be6cf434ca70020827b373a6410b23f"
        },
        {
            "id": "805712854313a194aa75a59b66312a6d8fe00003",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=819",
            "value": "805712854313a194aa75a59b66312a6d8fe00003"
        },
        {
            "id": "22c750e5e9d9e554a05496a3696d9f48670cce43",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=82",
            "value": "22c750e5e9d9e554a05496a3696d9f48670cce43"
        },
        {
            "id": "83a4934cef9fc04070919433abdeaed244710f34",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=829",
            "value": "83a4934cef9fc04070919433abdeaed244710f34"
        },
        {
            "id": "a9de7657d7afc0089a3c220a5a273127132cddc8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=832",
            "value": "a9de7657d7afc0089a3c220a5a273127132cddc8"
        },
        {
            "id": "1cbe11015e7e984e2b85dde664254476278d9307",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=834",
            "value": "1cbe11015e7e984e2b85dde664254476278d9307"
        },
        {
            "id": "c66fe35b29eb7da98ee76e6c9f4a77fd980aa69c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=837",
            "value": "c66fe35b29eb7da98ee76e6c9f4a77fd980aa69c"
        },
        {
            "id": "de193d432b889c82d0190102798fc9b3b0fbdfbf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=841",
            "value": "de193d432b889c82d0190102798fc9b3b0fbdfbf"
        },
        {
            "id": "83676d51b1c63c04c067c6db036e89c52b76a6f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=842",
            "value": "83676d51b1c63c04c067c6db036e89c52b76a6f5"
        },
        {
            "id": "64897316ed9d9e3e2c2d2463a921ed64ee7688ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=843",
            "value": "64897316ed9d9e3e2c2d2463a921ed64ee7688ff"
        },
        {
            "id": "36d222ecc6f524d7c0037b7a36efeeda84fa02eb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=85",
            "value": "36d222ecc6f524d7c0037b7a36efeeda84fa02eb"
        },
        {
            "id": "27beae13f9a465d8356620c648dcc610902e36c6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=87",
            "value": "27beae13f9a465d8356620c648dcc610902e36c6"
        },
        {
            "id": "3d706c9929e18f696194dfa2a0d5379ef28eec64",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=871",
            "value": "3d706c9929e18f696194dfa2a0d5379ef28eec64"
        },
        {
            "id": "df8d1b3e6d140b34401f492492e460b02e00ee09",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=872",
            "value": "df8d1b3e6d140b34401f492492e460b02e00ee09"
        },
        {
            "id": "4cae3455aa814b383dfed4065e257822a273fa4a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=875",
            "value": "4cae3455aa814b383dfed4065e257822a273fa4a"
        },
        {
            "id": "9d675716890a618984d2f415677d48a637d77754",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=883",
            "value": "9d675716890a618984d2f415677d48a637d77754"
        },
        {
            "id": "7fcbba19ae36e25d9f709b1ed43b7fc1778263a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=885",
            "value": "7fcbba19ae36e25d9f709b1ed43b7fc1778263a3"
        },
        {
            "id": "cde5895b17f26d3770e678a5aec83991228dbff9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=895",
            "value": "cde5895b17f26d3770e678a5aec83991228dbff9"
        },
        {
            "id": "7eeede79dc47ae1f316a8c37a6cf9e16f65b25e8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=898",
            "value": "7eeede79dc47ae1f316a8c37a6cf9e16f65b25e8"
        },
        {
            "id": "1ead7870197c1a401b7f2b1629b66cb9bc965b4a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=899",
            "value": "1ead7870197c1a401b7f2b1629b66cb9bc965b4a"
        },
        {
            "id": "209639158e2b2ac8a4832eb6ff16a2b4a7e96586",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=9",
            "value": "209639158e2b2ac8a4832eb6ff16a2b4a7e96586"
        },
        {
            "id": "a8092246bf843fa34bab11b3d9903c0596bd6bd6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=904",
            "value": "a8092246bf843fa34bab11b3d9903c0596bd6bd6"
        },
        {
            "id": "260a484d0e7d9750d62198ffb88cca4e35bb163a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=906",
            "value": "260a484d0e7d9750d62198ffb88cca4e35bb163a"
        },
        {
            "id": "e39d42a6dd4963f135eee515dc5a6110cab2ab56",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=912",
            "value": "e39d42a6dd4963f135eee515dc5a6110cab2ab56"
        },
        {
            "id": "f9455cb76f81074d79e84558f45aceadcb15efc0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=92",
            "value": "f9455cb76f81074d79e84558f45aceadcb15efc0"
        },
        {
            "id": "119bf4859d7e399df2df5382d0faf49d392c517d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=93",
            "value": "119bf4859d7e399df2df5382d0faf49d392c517d"
        },
        {
            "id": "b61581af895b9f6a1cd542198a6a21d0b07387fe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=932",
            "value": "b61581af895b9f6a1cd542198a6a21d0b07387fe"
        },
        {
            "id": "a08708b44ab022a2ef36b71d0192b2be9bd92f3c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=934",
            "value": "a08708b44ab022a2ef36b71d0192b2be9bd92f3c"
        },
        {
            "id": "68bbeafeaa5919227f3af6139a28eabc598adbd0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=939",
            "value": "68bbeafeaa5919227f3af6139a28eabc598adbd0"
        },
        {
            "id": "3c5dd0e60721a1170d63f1601162681395e997b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=94",
            "value": "3c5dd0e60721a1170d63f1601162681395e997b2"
        },
        {
            "id": "49ab7b2c080abf67bbe6110ec7e50ffda0ccbbd2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=96",
            "value": "49ab7b2c080abf67bbe6110ec7e50ffda0ccbbd2"
        },
        {
            "id": "ea46fe7038a8a91635f0e37539612e9a3737e821",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=968",
            "value": "ea46fe7038a8a91635f0e37539612e9a3737e821"
        },
        {
            "id": "7111f1648766f8c62286c79f1d1ff68b051430cf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=976",
            "value": "7111f1648766f8c62286c79f1d1ff68b051430cf"
        },
        {
            "id": "c0a6226dd87f98523be5b3a505bf88cc4cb286ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=984",
            "value": "c0a6226dd87f98523be5b3a505bf88cc4cb286ec"
        },
        {
            "id": "824ab7d594797642950d4a5b0d5518deb4f4f556",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=990",
            "value": "824ab7d594797642950d4a5b0d5518deb4f4f556"
        },
        {
            "id": "babedb0a716f196845583ed9d8574ac22287ee95",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=992",
            "value": "babedb0a716f196845583ed9d8574ac22287ee95"
        },
        {
            "id": "54321eae4bdee3330a97f71921f100db37d024be",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00411752&CISOPTR=999",
            "value": "54321eae4bdee3330a97f71921f100db37d024be"
        },
        {
            "id": "28defc37c63c29338ce824e62d74409343d51356",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1024",
            "value": "28defc37c63c29338ce824e62d74409343d51356"
        },
        {
            "id": "28bf4f6edeac5e18444cfc85adaec951a160b90f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1025",
            "value": "28bf4f6edeac5e18444cfc85adaec951a160b90f"
        },
        {
            "id": "78a0146e8df58293f6f66c77f651bcf059f28099",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1051",
            "value": "78a0146e8df58293f6f66c77f651bcf059f28099"
        },
        {
            "id": "827d4836f919a362a91ce6f6f7eebf4803960ebd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1066",
            "value": "827d4836f919a362a91ce6f6f7eebf4803960ebd"
        },
        {
            "id": "aad84c48e9feb01582b55ee74aed71d006937266",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1070",
            "value": "aad84c48e9feb01582b55ee74aed71d006937266"
        },
        {
            "id": "f2698f1f180b45929e2f1cc8c36a530bdae6db2b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1078",
            "value": "f2698f1f180b45929e2f1cc8c36a530bdae6db2b"
        },
        {
            "id": "6bec079f1a8062deda23019dbc3acd1a3d3b0a83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1079",
            "value": "6bec079f1a8062deda23019dbc3acd1a3d3b0a83"
        },
        {
            "id": "13d5de0d920c01bf0b1977a15b6ef8a0d8e5e033",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1110",
            "value": "13d5de0d920c01bf0b1977a15b6ef8a0d8e5e033"
        },
        {
            "id": "d3f835250f0256e41a62465f10ebaf3465d6de8e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1117",
            "value": "d3f835250f0256e41a62465f10ebaf3465d6de8e"
        },
        {
            "id": "e9e8b54cad1a270a3c1567f908329e7e27e313b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1121",
            "value": "e9e8b54cad1a270a3c1567f908329e7e27e313b1"
        },
        {
            "id": "b34db4dd3aac937c0ae809785c0e6aec2060686c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1126",
            "value": "b34db4dd3aac937c0ae809785c0e6aec2060686c"
        },
        {
            "id": "5b79be6dafce5c678f70113cb1752ef1cf91b6d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1138",
            "value": "5b79be6dafce5c678f70113cb1752ef1cf91b6d3"
        },
        {
            "id": "1cbd795bc9ff1f0cff2a0f4195980c1abae2afbb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1158",
            "value": "1cbd795bc9ff1f0cff2a0f4195980c1abae2afbb"
        },
        {
            "id": "4ed898117aecf5d60ae1997c6aeada6a5d773520",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1286",
            "value": "4ed898117aecf5d60ae1997c6aeada6a5d773520"
        },
        {
            "id": "a8bc9792cac23c24971112d474f531ed2106a40f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1287",
            "value": "a8bc9792cac23c24971112d474f531ed2106a40f"
        },
        {
            "id": "656c59e7d8039b92337269e1c3422576549e389b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1375",
            "value": "656c59e7d8039b92337269e1c3422576549e389b"
        },
        {
            "id": "bac741e27e9caa23d1155bb4cdc7918b8bb61289",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1396",
            "value": "bac741e27e9caa23d1155bb4cdc7918b8bb61289"
        },
        {
            "id": "190cbd48ca15779e733b94b007a638ea71fce6c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1409",
            "value": "190cbd48ca15779e733b94b007a638ea71fce6c4"
        },
        {
            "id": "1ee5de1746bdf536d96b7e61cb31669364a8f4d9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1411",
            "value": "1ee5de1746bdf536d96b7e61cb31669364a8f4d9"
        },
        {
            "id": "4ef1255cf3d551f8d5ae971aaeee71fb05445317",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=154",
            "value": "4ef1255cf3d551f8d5ae971aaeee71fb05445317"
        },
        {
            "id": "eed612dcb7ddfe6efd2562c2f20b585b07131921",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1720",
            "value": "eed612dcb7ddfe6efd2562c2f20b585b07131921"
        },
        {
            "id": "58703901951bbff09f5b318af4965c0ec8f9ffe9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1729",
            "value": "58703901951bbff09f5b318af4965c0ec8f9ffe9"
        },
        {
            "id": "45af3519d3427d0ad5399255d6334ab65bc93fa6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1730",
            "value": "45af3519d3427d0ad5399255d6334ab65bc93fa6"
        },
        {
            "id": "1a028bd5ce35a868d8501b7d03fba9bee2784d5e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1738",
            "value": "1a028bd5ce35a868d8501b7d03fba9bee2784d5e"
        },
        {
            "id": "3c4ff44888d7d4bedb25112155fc4cc3d037a203",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1739",
            "value": "3c4ff44888d7d4bedb25112155fc4cc3d037a203"
        },
        {
            "id": "f97216e824461d192a1a9a80d224254fcf2eaa4f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1751",
            "value": "f97216e824461d192a1a9a80d224254fcf2eaa4f"
        },
        {
            "id": "812352e502838cc78d8cf854cd991aae860f18f2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1758",
            "value": "812352e502838cc78d8cf854cd991aae860f18f2"
        },
        {
            "id": "e06256b1934aaa467aef98d8b70ec1959cb9d494",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=177",
            "value": "e06256b1934aaa467aef98d8b70ec1959cb9d494"
        },
        {
            "id": "9c2e050f22e5a0686fcfc9e83b12a4c321900baa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1774",
            "value": "9c2e050f22e5a0686fcfc9e83b12a4c321900baa"
        },
        {
            "id": "6ebe2582a8e6fe9f6bc550d38b9d33f848e77a8d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1776",
            "value": "6ebe2582a8e6fe9f6bc550d38b9d33f848e77a8d"
        },
        {
            "id": "9cc72d2a262aa9468b426a78277178e8be5a5f36",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=182",
            "value": "9cc72d2a262aa9468b426a78277178e8be5a5f36"
        },
        {
            "id": "0b3c1eed47c3f08f709aaf038fae7a396e92d4a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1841",
            "value": "0b3c1eed47c3f08f709aaf038fae7a396e92d4a2"
        },
        {
            "id": "7d5a59d835305ba2577af654bbe987c92054a8f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1912",
            "value": "7d5a59d835305ba2577af654bbe987c92054a8f0"
        },
        {
            "id": "a7533c8ade83391a40068e7954d5ad69eb69e329",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1916",
            "value": "a7533c8ade83391a40068e7954d5ad69eb69e329"
        },
        {
            "id": "d5425e018b523bd57154c0c529936a84eba44603",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1956",
            "value": "d5425e018b523bd57154c0c529936a84eba44603"
        },
        {
            "id": "1f693c59d69caabba7f0fadc6e2db4bea19eff81",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=1986",
            "value": "1f693c59d69caabba7f0fadc6e2db4bea19eff81"
        },
        {
            "id": "fb2d2c77ca1205ec9e143d26cd29e06102ddb975",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2023",
            "value": "fb2d2c77ca1205ec9e143d26cd29e06102ddb975"
        },
        {
            "id": "bf8e450048b8d6ea709214199f718b4025756f80",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2025",
            "value": "bf8e450048b8d6ea709214199f718b4025756f80"
        },
        {
            "id": "79766c91270d607100dfafe1d8b7797a73b41647",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=208",
            "value": "79766c91270d607100dfafe1d8b7797a73b41647"
        },
        {
            "id": "7762a434079e8f2d44c7c7341a780ece8abe5d33",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2144",
            "value": "7762a434079e8f2d44c7c7341a780ece8abe5d33"
        },
        {
            "id": "942096b9b0c39e0e48268de20d0ddb068c341964",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2214",
            "value": "942096b9b0c39e0e48268de20d0ddb068c341964"
        },
        {
            "id": "cd22129fe58211d1af9af7002e89965babfbbda5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2237",
            "value": "cd22129fe58211d1af9af7002e89965babfbbda5"
        },
        {
            "id": "befc45c453e3dfe25cea35e2710e308e274d994e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2251",
            "value": "befc45c453e3dfe25cea35e2710e308e274d994e"
        },
        {
            "id": "c8bde6a7e90a5d50f14344b94a5254aa4e4259e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2259",
            "value": "c8bde6a7e90a5d50f14344b94a5254aa4e4259e5"
        },
        {
            "id": "9ade266cb1561028d427bd7f4155e502ac2e93ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2274",
            "value": "9ade266cb1561028d427bd7f4155e502ac2e93ab"
        },
        {
            "id": "1a58da79ad2505a2e8c314851371d3256f1bd5b9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2282",
            "value": "1a58da79ad2505a2e8c314851371d3256f1bd5b9"
        },
        {
            "id": "22b79e6540790d1dd90f31ce0f660753f5dae35e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=2299",
            "value": "22b79e6540790d1dd90f31ce0f660753f5dae35e"
        },
        {
            "id": "fbfad6cbd033b03d9c5b37c6c769ec1dd45b0478",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=304",
            "value": "fbfad6cbd033b03d9c5b37c6c769ec1dd45b0478"
        },
        {
            "id": "9c4c698d7996ecaa8428f499ca57ee6ed86a9fab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=315",
            "value": "9c4c698d7996ecaa8428f499ca57ee6ed86a9fab"
        },
        {
            "id": "5bca9968aa1b02b207260773f68975f9f871485d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=328",
            "value": "5bca9968aa1b02b207260773f68975f9f871485d"
        },
        {
            "id": "db582df80807e15813d0f408cfb2bdd34a247cc5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=332",
            "value": "db582df80807e15813d0f408cfb2bdd34a247cc5"
        },
        {
            "id": "77e65783d5bddfd9b851ed1eed03bb946c659ac5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=346",
            "value": "77e65783d5bddfd9b851ed1eed03bb946c659ac5"
        },
        {
            "id": "c1aa818cf726dcaf1b3085f4bf5c8d9c511855a4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=348",
            "value": "c1aa818cf726dcaf1b3085f4bf5c8d9c511855a4"
        },
        {
            "id": "d8b06b2dd59489c96f6fe0a8dd9314301706fad1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=351",
            "value": "d8b06b2dd59489c96f6fe0a8dd9314301706fad1"
        },
        {
            "id": "f46e2a198a0c40333df7f11bfe1d9f71fc53af76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=354",
            "value": "f46e2a198a0c40333df7f11bfe1d9f71fc53af76"
        },
        {
            "id": "b822257bc7877fe8be6307372fe3e82a7077367b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=360",
            "value": "b822257bc7877fe8be6307372fe3e82a7077367b"
        },
        {
            "id": "4d6c330d4cafe6892164d2246547c2ca9335b404",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=361",
            "value": "4d6c330d4cafe6892164d2246547c2ca9335b404"
        },
        {
            "id": "a2a4ad8f63633de268604b4aa249a624f0fbf640",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=380",
            "value": "a2a4ad8f63633de268604b4aa249a624f0fbf640"
        },
        {
            "id": "90fdbeeae4c6d7bb7f8b9302fc82205110911e3d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=397",
            "value": "90fdbeeae4c6d7bb7f8b9302fc82205110911e3d"
        },
        {
            "id": "db46eb0fc21d6815bb7c8458c066d4cc2e81f592",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=398",
            "value": "db46eb0fc21d6815bb7c8458c066d4cc2e81f592"
        },
        {
            "id": "14d0ed587c4e8192f5b76eff6fd9ce5bd77bdc76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=412",
            "value": "14d0ed587c4e8192f5b76eff6fd9ce5bd77bdc76"
        },
        {
            "id": "c0f8fb909478eef0b46c2b59c911d6b5dbe02b83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=494",
            "value": "c0f8fb909478eef0b46c2b59c911d6b5dbe02b83"
        },
        {
            "id": "51d744088f9a84f07af3a420cada7620da6aa0ac",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=495",
            "value": "51d744088f9a84f07af3a420cada7620da6aa0ac"
        },
        {
            "id": "7b7a1dd1518874e1efef60b33704f4eded468a31",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=521",
            "value": "7b7a1dd1518874e1efef60b33704f4eded468a31"
        },
        {
            "id": "286e35992ac4a8e34279639dc8f7fb8ed8c5ec93",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=554",
            "value": "286e35992ac4a8e34279639dc8f7fb8ed8c5ec93"
        },
        {
            "id": "e392921080f2168e960b4127d1cfbf246a85d09a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=576",
            "value": "e392921080f2168e960b4127d1cfbf246a85d09a"
        },
        {
            "id": "9fd7b9eac0a52ab0c053d894c060375554d0db19",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=599",
            "value": "9fd7b9eac0a52ab0c053d894c060375554d0db19"
        },
        {
            "id": "0ee7a6b267fd15e61f4b5782c1316d367198f387",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=600",
            "value": "0ee7a6b267fd15e61f4b5782c1316d367198f387"
        },
        {
            "id": "ccaa53ffeb9a107bced3bc58fac5d1e0a6d01477",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=601",
            "value": "ccaa53ffeb9a107bced3bc58fac5d1e0a6d01477"
        },
        {
            "id": "58ee19f2cb06263c8ead85ab418386022c696868",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=620",
            "value": "58ee19f2cb06263c8ead85ab418386022c696868"
        },
        {
            "id": "3772540a21b42c78944da3d278d3219be8390b7c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=630",
            "value": "3772540a21b42c78944da3d278d3219be8390b7c"
        },
        {
            "id": "3d5c0a5c50c3d4f7c302109992c916a6af48f51a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=675",
            "value": "3d5c0a5c50c3d4f7c302109992c916a6af48f51a"
        },
        {
            "id": "048f6488db83e99437164597deecf30a160c7b82",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=691",
            "value": "048f6488db83e99437164597deecf30a160c7b82"
        },
        {
            "id": "c46629cd7d12d4417978daa104d8d736524f91f1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=692",
            "value": "c46629cd7d12d4417978daa104d8d736524f91f1"
        },
        {
            "id": "3c97ff25a03f98fa1520c2e380dbc04b3dc9f40a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=706",
            "value": "3c97ff25a03f98fa1520c2e380dbc04b3dc9f40a"
        },
        {
            "id": "8a8083f99b03585197def36f584b7982f1a55bb9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=723",
            "value": "8a8083f99b03585197def36f584b7982f1a55bb9"
        },
        {
            "id": "b05b5bb25389938f3e18b61059547149dcc92213",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=744",
            "value": "b05b5bb25389938f3e18b61059547149dcc92213"
        },
        {
            "id": "9b794e41964784db70b0de67afae8dff7de0e6f9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=756",
            "value": "9b794e41964784db70b0de67afae8dff7de0e6f9"
        },
        {
            "id": "00df0920078dc1fb5a6ec78ae2d16f7cdf82fa03",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=758",
            "value": "00df0920078dc1fb5a6ec78ae2d16f7cdf82fa03"
        },
        {
            "id": "cddb8d7ce03190093a531e58c0cca79efcf89cc8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=759",
            "value": "cddb8d7ce03190093a531e58c0cca79efcf89cc8"
        },
        {
            "id": "ba9b14d23478db46ae395785f8f04f4e092b14d9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=767",
            "value": "ba9b14d23478db46ae395785f8f04f4e092b14d9"
        },
        {
            "id": "72d8671ca215fe556e26104677e3ebffefff7d3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=77",
            "value": "72d8671ca215fe556e26104677e3ebffefff7d3e"
        },
        {
            "id": "629765ae2861b2e5986ead9b5e3d96adc1eacafb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=771",
            "value": "629765ae2861b2e5986ead9b5e3d96adc1eacafb"
        },
        {
            "id": "91910abb454d1a003188150b7462cce48646f53d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=799",
            "value": "91910abb454d1a003188150b7462cce48646f53d"
        },
        {
            "id": "f50bd97cd832787664bf55a709eaef53dc5d7dab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=807",
            "value": "f50bd97cd832787664bf55a709eaef53dc5d7dab"
        },
        {
            "id": "3b7b01718cd649900152d9ac16202ac25c8dd10d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=82",
            "value": "3b7b01718cd649900152d9ac16202ac25c8dd10d"
        },
        {
            "id": "43aaded3c21912615b28333b274e488a7756332c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=835",
            "value": "43aaded3c21912615b28333b274e488a7756332c"
        },
        {
            "id": "f6e6c19c5208544877b83de516a709c404f3195c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=918",
            "value": "f6e6c19c5208544877b83de516a709c404f3195c"
        },
        {
            "id": "7f07e4d9046f3233efc1fe2bee9fb08649144698",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=921",
            "value": "7f07e4d9046f3233efc1fe2bee9fb08649144698"
        },
        {
            "id": "4782543536da6b70a5abe00f78f698b1637f54c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/00445096&CISOPTR=966",
            "value": "4782543536da6b70a5abe00f78f698b1637f54c4"
        },
        {
            "id": "0f410e8dfb91cfa3a2ae85bfa86fb14d5b7673e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=100",
            "value": "0f410e8dfb91cfa3a2ae85bfa86fb14d5b7673e9"
        },
        {
            "id": "397d59cca46a58c8bf38150fcd663faa09ebf4cd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1004",
            "value": "397d59cca46a58c8bf38150fcd663faa09ebf4cd"
        },
        {
            "id": "f051d60b2694a005d975c51a7f842774922740a0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1005",
            "value": "f051d60b2694a005d975c51a7f842774922740a0"
        },
        {
            "id": "3e8dcbd04bc26aa4292dd4d5f6118a4dca6ff6df",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=101",
            "value": "3e8dcbd04bc26aa4292dd4d5f6118a4dca6ff6df"
        },
        {
            "id": "6b685325f43225052ed3c48beb48b5d3ab4a3fba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1014",
            "value": "6b685325f43225052ed3c48beb48b5d3ab4a3fba"
        },
        {
            "id": "8c48fffa29db59c6724bfee94b0c3bcd6d05269a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1019",
            "value": "8c48fffa29db59c6724bfee94b0c3bcd6d05269a"
        },
        {
            "id": "50520e43fdd76e472e784daa88f6c32af4c31adb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=102",
            "value": "50520e43fdd76e472e784daa88f6c32af4c31adb"
        },
        {
            "id": "dc71ab303eff0ee0f2b0f07b9e74b84c77e2a642",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1021",
            "value": "dc71ab303eff0ee0f2b0f07b9e74b84c77e2a642"
        },
        {
            "id": "7e2de5ed202fb353bec8c50d436359dfbe4a5634",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1026",
            "value": "7e2de5ed202fb353bec8c50d436359dfbe4a5634"
        },
        {
            "id": "8e28756853a22acc2eb6dbf888942449e1c56289",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1029",
            "value": "8e28756853a22acc2eb6dbf888942449e1c56289"
        },
        {
            "id": "fa97cc83cddea8f434f57c0ffd6efc04731d9ca6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=103",
            "value": "fa97cc83cddea8f434f57c0ffd6efc04731d9ca6"
        },
        {
            "id": "7bfc683ce35a9ee4f6c3cedf49fe18ac9fc5a400",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1033",
            "value": "7bfc683ce35a9ee4f6c3cedf49fe18ac9fc5a400"
        },
        {
            "id": "fa261543808f4f0d894175f9289abd8f7e8e340f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1038",
            "value": "fa261543808f4f0d894175f9289abd8f7e8e340f"
        },
        {
            "id": "8ccc8d6c45a3e4508332c2e7266b64fc53a92ada",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1041",
            "value": "8ccc8d6c45a3e4508332c2e7266b64fc53a92ada"
        },
        {
            "id": "f8b39bc968633051a5be71c7d5b802862271ce81",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1044",
            "value": "f8b39bc968633051a5be71c7d5b802862271ce81"
        },
        {
            "id": "410514e966492168bced873cbc4ceb1ea1ab4ad3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1050",
            "value": "410514e966492168bced873cbc4ceb1ea1ab4ad3"
        },
        {
            "id": "cb937a7563300ef60288437f01f4e1b33851d927",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1052",
            "value": "cb937a7563300ef60288437f01f4e1b33851d927"
        },
        {
            "id": "0082a9819a86d27dc17919370dbc4409f380cb2c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1053",
            "value": "0082a9819a86d27dc17919370dbc4409f380cb2c"
        },
        {
            "id": "08307fadce7d70b30a753f3c977533224f2bdd32",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1056",
            "value": "08307fadce7d70b30a753f3c977533224f2bdd32"
        },
        {
            "id": "340a017269d888431e99f78f43e1fa72cf812ae8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=106",
            "value": "340a017269d888431e99f78f43e1fa72cf812ae8"
        },
        {
            "id": "37bda9179ff72f5b22602f5007a223d3ba417f26",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1060",
            "value": "37bda9179ff72f5b22602f5007a223d3ba417f26"
        },
        {
            "id": "c167e144264d04557b97568d69106621bf3f33a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1062",
            "value": "c167e144264d04557b97568d69106621bf3f33a8"
        },
        {
            "id": "e8350d58b199cfecb4cafbac2a1d89418427bb90",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1065",
            "value": "e8350d58b199cfecb4cafbac2a1d89418427bb90"
        },
        {
            "id": "9ef5b7a4377ed5863a8d1e5b4e02004ab00a434d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1081",
            "value": "9ef5b7a4377ed5863a8d1e5b4e02004ab00a434d"
        },
        {
            "id": "b7b1eff3faa8a6232a4abb0cccb0684d5f53891d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1086",
            "value": "b7b1eff3faa8a6232a4abb0cccb0684d5f53891d"
        },
        {
            "id": "099c38f10aacf712752c6cce9c00e9bcc27a3be6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1088",
            "value": "099c38f10aacf712752c6cce9c00e9bcc27a3be6"
        },
        {
            "id": "2c2bdff9e4c566b35422155e402ff36ed0396da5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1089",
            "value": "2c2bdff9e4c566b35422155e402ff36ed0396da5"
        },
        {
            "id": "0fbe30891138b28c1f8ee61cb2be4ff47b839e0c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=109",
            "value": "0fbe30891138b28c1f8ee61cb2be4ff47b839e0c"
        },
        {
            "id": "0cb36023c4fbbd15f9c8254394a18079a84a9c8a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1095",
            "value": "0cb36023c4fbbd15f9c8254394a18079a84a9c8a"
        },
        {
            "id": "9530682c179ee8ac530b19183ce1218c26260b62",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=110",
            "value": "9530682c179ee8ac530b19183ce1218c26260b62"
        },
        {
            "id": "764a6644eaf38a34542f6527ec3d9f18fb56d1b6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1106",
            "value": "764a6644eaf38a34542f6527ec3d9f18fb56d1b6"
        },
        {
            "id": "1acb237de116b0920b5e22a28b5a74464b34c1fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1108",
            "value": "1acb237de116b0920b5e22a28b5a74464b34c1fa"
        },
        {
            "id": "cf99b862d76be172f6e961091d359b00aa61730a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=111",
            "value": "cf99b862d76be172f6e961091d359b00aa61730a"
        },
        {
            "id": "cd985008fd29e0828bbdaa3ef199dce8360756e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1111",
            "value": "cd985008fd29e0828bbdaa3ef199dce8360756e6"
        },
        {
            "id": "268e6947465b4f84cd7035973224d0ba54881b84",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1114",
            "value": "268e6947465b4f84cd7035973224d0ba54881b84"
        },
        {
            "id": "7fca486bc6aed87511c2571d5ae3c77cb5b679b6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1115",
            "value": "7fca486bc6aed87511c2571d5ae3c77cb5b679b6"
        },
        {
            "id": "f29035569170865e5b2f676825de1cba13c74f90",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1117",
            "value": "f29035569170865e5b2f676825de1cba13c74f90"
        },
        {
            "id": "2b929a8915e9429f1c7d4e2066b75fb9c8f7b89e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=112",
            "value": "2b929a8915e9429f1c7d4e2066b75fb9c8f7b89e"
        },
        {
            "id": "7ca679a8245b7797e8943d1bce3b1aa25bf30e07",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1124",
            "value": "7ca679a8245b7797e8943d1bce3b1aa25bf30e07"
        },
        {
            "id": "d4605136c04c2b0580d43d33d7b1fe9b003de7c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1129",
            "value": "d4605136c04c2b0580d43d33d7b1fe9b003de7c4"
        },
        {
            "id": "0d93ecf86535b0730dd41db2d840e9aecaf90661",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1132",
            "value": "0d93ecf86535b0730dd41db2d840e9aecaf90661"
        },
        {
            "id": "fa0aef0a68da5ebc5383bf3b10a55431a6d002c9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1134",
            "value": "fa0aef0a68da5ebc5383bf3b10a55431a6d002c9"
        },
        {
            "id": "336f7a5fa329ed8a2bed48cb74e2a91f95337f2d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1137",
            "value": "336f7a5fa329ed8a2bed48cb74e2a91f95337f2d"
        },
        {
            "id": "19987444c863dc9e199af288f08e28afb00c9bac",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1138",
            "value": "19987444c863dc9e199af288f08e28afb00c9bac"
        },
        {
            "id": "3e563f09b94b78a8bd242486a1294c6d12a1e7e2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=114",
            "value": "3e563f09b94b78a8bd242486a1294c6d12a1e7e2"
        },
        {
            "id": "169a3bc047f614fee2abba720e7d5cc0d5274a04",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1141",
            "value": "169a3bc047f614fee2abba720e7d5cc0d5274a04"
        },
        {
            "id": "ed869513642a5bacfc3b10b1fa11ec308e2a31dc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1142",
            "value": "ed869513642a5bacfc3b10b1fa11ec308e2a31dc"
        },
        {
            "id": "4b5adb5e3577a2a6b57c1352a3ee971b6dbf5645",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1146",
            "value": "4b5adb5e3577a2a6b57c1352a3ee971b6dbf5645"
        },
        {
            "id": "475993d1edd55c55c355a27f4e8f7d52d7aa0fcd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1147",
            "value": "475993d1edd55c55c355a27f4e8f7d52d7aa0fcd"
        },
        {
            "id": "c371d7fc0bbd6ed0a8b167d3895496595f90b173",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1149",
            "value": "c371d7fc0bbd6ed0a8b167d3895496595f90b173"
        },
        {
            "id": "8d1075e5a381aae3ae09d5a070f3e7208e52be4e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1152",
            "value": "8d1075e5a381aae3ae09d5a070f3e7208e52be4e"
        },
        {
            "id": "c8f1f8e8c15b9e500c36a0e67ec1bed904e369fc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1155",
            "value": "c8f1f8e8c15b9e500c36a0e67ec1bed904e369fc"
        },
        {
            "id": "dc03cb1f5bb7451a9edfc7f10c6502dc11b9efd4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1158",
            "value": "dc03cb1f5bb7451a9edfc7f10c6502dc11b9efd4"
        },
        {
            "id": "364a33604fc99233d33b57e6dbf5080004aad826",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1163",
            "value": "364a33604fc99233d33b57e6dbf5080004aad826"
        },
        {
            "id": "625f0036e383de1bc95da2ee9ac4be497f359bef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1164",
            "value": "625f0036e383de1bc95da2ee9ac4be497f359bef"
        },
        {
            "id": "c1b3abfc5a804f362073a25e0d53c3e32cbe4d83",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1165",
            "value": "c1b3abfc5a804f362073a25e0d53c3e32cbe4d83"
        },
        {
            "id": "cd5a5713942c85522e4a669affd8e88fa2aeaf23",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1167",
            "value": "cd5a5713942c85522e4a669affd8e88fa2aeaf23"
        },
        {
            "id": "bfd3362f9b6657fe9c34a17b1dae9b9e57f7624c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1168",
            "value": "bfd3362f9b6657fe9c34a17b1dae9b9e57f7624c"
        },
        {
            "id": "2d0c9c6ae7a71d8ea7f979d1892cd50f48fe4bbb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1170",
            "value": "2d0c9c6ae7a71d8ea7f979d1892cd50f48fe4bbb"
        },
        {
            "id": "2889d28a8906df4e0f9b4c77efbaf8d573fe4651",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1174",
            "value": "2889d28a8906df4e0f9b4c77efbaf8d573fe4651"
        },
        {
            "id": "603d00d9c30f218649bab47876ece315b13c9d06",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1177",
            "value": "603d00d9c30f218649bab47876ece315b13c9d06"
        },
        {
            "id": "cd4fa9c9d93baeacea3ebb80eeb9038379b22012",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=118",
            "value": "cd4fa9c9d93baeacea3ebb80eeb9038379b22012"
        },
        {
            "id": "22c1191e19424cef1ff7f98535a5da767256de6e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1181",
            "value": "22c1191e19424cef1ff7f98535a5da767256de6e"
        },
        {
            "id": "9219bf21eb7432bdf5b57138a05325d2aa6ce5bf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1185",
            "value": "9219bf21eb7432bdf5b57138a05325d2aa6ce5bf"
        },
        {
            "id": "c40c69a93333d9248576097e7fcd68b84f61e178",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1188",
            "value": "c40c69a93333d9248576097e7fcd68b84f61e178"
        },
        {
            "id": "c08f9634eb9e8bb9c9e389cb2f8510174e713a02",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1190",
            "value": "c08f9634eb9e8bb9c9e389cb2f8510174e713a02"
        },
        {
            "id": "6f70384db92ff0a244734ef04ed7f72f79033ef8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1192",
            "value": "6f70384db92ff0a244734ef04ed7f72f79033ef8"
        },
        {
            "id": "93f5ff9f8dd8c83da081ce1c079d3340ae57aff1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1194",
            "value": "93f5ff9f8dd8c83da081ce1c079d3340ae57aff1"
        },
        {
            "id": "769d0adfbb2202336e2e57eaed4c9636ffd997f3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1206",
            "value": "769d0adfbb2202336e2e57eaed4c9636ffd997f3"
        },
        {
            "id": "06d291a5b672bcbff24fa80e0f5313d13b18ad40",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1213",
            "value": "06d291a5b672bcbff24fa80e0f5313d13b18ad40"
        },
        {
            "id": "a1d6a465aedd4bd70f57e78f4bbf2dc15f269ac5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1234",
            "value": "a1d6a465aedd4bd70f57e78f4bbf2dc15f269ac5"
        },
        {
            "id": "b10cf9a4f67b68dfc4b9e441a868d1d0f24dd627",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1236",
            "value": "b10cf9a4f67b68dfc4b9e441a868d1d0f24dd627"
        },
        {
            "id": "07f31c5273c861ee129b04205b27a70797f828a1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1242",
            "value": "07f31c5273c861ee129b04205b27a70797f828a1"
        },
        {
            "id": "05427683dc5ddc57ee5282144e7222a08a71001d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1250",
            "value": "05427683dc5ddc57ee5282144e7222a08a71001d"
        },
        {
            "id": "2e0df59f784927d04e335e2666bd567bc4df69e0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1251",
            "value": "2e0df59f784927d04e335e2666bd567bc4df69e0"
        },
        {
            "id": "484e8055d2c1b771133dfa9396ed10d55d71183a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1269",
            "value": "484e8055d2c1b771133dfa9396ed10d55d71183a"
        },
        {
            "id": "7a64a94d55f58ea4c9bfe29adfcf2e01b6ead666",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1271",
            "value": "7a64a94d55f58ea4c9bfe29adfcf2e01b6ead666"
        },
        {
            "id": "c6a1b989afca8a6a62a21b0e81c0aca502fadc2e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1276",
            "value": "c6a1b989afca8a6a62a21b0e81c0aca502fadc2e"
        },
        {
            "id": "ff5234951a5da275a8d6306484ea59cc87ceb0a7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1277",
            "value": "ff5234951a5da275a8d6306484ea59cc87ceb0a7"
        },
        {
            "id": "0d042a36b6944fb7b840c2906139451bf153c43b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1279",
            "value": "0d042a36b6944fb7b840c2906139451bf153c43b"
        },
        {
            "id": "84d3793b48cfcf4f3fd552da0cdfc3f8eb5d21c5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1280",
            "value": "84d3793b48cfcf4f3fd552da0cdfc3f8eb5d21c5"
        },
        {
            "id": "a05c02cdead309ab3eebf9521e3458da2e380b94",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1282",
            "value": "a05c02cdead309ab3eebf9521e3458da2e380b94"
        },
        {
            "id": "24d7ade4584e0fe5b2485a496f00454edac4c85d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1286",
            "value": "24d7ade4584e0fe5b2485a496f00454edac4c85d"
        },
        {
            "id": "81005f09f51393c67f01cb9e1d23fc1273e6fc8f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1287",
            "value": "81005f09f51393c67f01cb9e1d23fc1273e6fc8f"
        },
        {
            "id": "6bc365677b5d592ec74e9cf22cac1727f452791b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1301",
            "value": "6bc365677b5d592ec74e9cf22cac1727f452791b"
        },
        {
            "id": "12034a170fdde957903a431a2ae70180fd09fdbd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1302",
            "value": "12034a170fdde957903a431a2ae70180fd09fdbd"
        },
        {
            "id": "73c12cbbb9bebcf1615c32f4fb2eca8047d57be4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1303",
            "value": "73c12cbbb9bebcf1615c32f4fb2eca8047d57be4"
        },
        {
            "id": "03894cd9808fcd6631d67fc8988fd3866fe7baba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1304",
            "value": "03894cd9808fcd6631d67fc8988fd3866fe7baba"
        },
        {
            "id": "0f81ceac15a77fed8f98c6e64872e896c40a1104",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1305",
            "value": "0f81ceac15a77fed8f98c6e64872e896c40a1104"
        },
        {
            "id": "c17d9eb9017bbfa0627ea5910f80ac428f32eb99",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1307",
            "value": "c17d9eb9017bbfa0627ea5910f80ac428f32eb99"
        },
        {
            "id": "74888542f0650a4418e3812f65c8b5eed808e76b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1308",
            "value": "74888542f0650a4418e3812f65c8b5eed808e76b"
        },
        {
            "id": "d8b5f9b5269777998d5a3e71e2fd8389ccd9cab0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=1309",
            "value": "d8b5f9b5269777998d5a3e71e2fd8389ccd9cab0"
        },
        {
            "id": "2b302a8d551663a7a6d395114cf8f49f1d09cc7c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=142",
            "value": "2b302a8d551663a7a6d395114cf8f49f1d09cc7c"
        },
        {
            "id": "6cd847ace9dcfb1e11c58d683183291ba88a64ad",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=147",
            "value": "6cd847ace9dcfb1e11c58d683183291ba88a64ad"
        },
        {
            "id": "1ca31ea1bbc0235cc20402f6c7b6c4e12d54e703",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=149",
            "value": "1ca31ea1bbc0235cc20402f6c7b6c4e12d54e703"
        },
        {
            "id": "d1eeaf91f865931a0dc6b8608c23c5b4dc7f2d9d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=153",
            "value": "d1eeaf91f865931a0dc6b8608c23c5b4dc7f2d9d"
        },
        {
            "id": "ad02a5cb6e2331e12a0463454f91869d7a35d062",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=154",
            "value": "ad02a5cb6e2331e12a0463454f91869d7a35d062"
        },
        {
            "id": "217bdf2693ccdef0775f9724164f0b1f5063dd23",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=156",
            "value": "217bdf2693ccdef0775f9724164f0b1f5063dd23"
        },
        {
            "id": "aab4633c0f5af79c3175cc8361724aa5503ccb3f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=157",
            "value": "aab4633c0f5af79c3175cc8361724aa5503ccb3f"
        },
        {
            "id": "b458572571d5928a3f7a2ef87cf2dcd95288280c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=158",
            "value": "b458572571d5928a3f7a2ef87cf2dcd95288280c"
        },
        {
            "id": "3df8dddecfddf550589b50e606592e08cf0ac421",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=159",
            "value": "3df8dddecfddf550589b50e606592e08cf0ac421"
        },
        {
            "id": "52d69b1ef1874ef4e5da6c8d0994c26ee4deff4b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=164",
            "value": "52d69b1ef1874ef4e5da6c8d0994c26ee4deff4b"
        },
        {
            "id": "aa7d57e2cd8b6828091a4efea7bfddc04334ab5b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=166",
            "value": "aa7d57e2cd8b6828091a4efea7bfddc04334ab5b"
        },
        {
            "id": "ac38324849c4051ba18970055f309246cbeda7b9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=167",
            "value": "ac38324849c4051ba18970055f309246cbeda7b9"
        },
        {
            "id": "d28d94781d2023fa05079771f87685a464b05072",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=169",
            "value": "d28d94781d2023fa05079771f87685a464b05072"
        },
        {
            "id": "1f74a607c226c3f0e8ea3501119c238210173601",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=173",
            "value": "1f74a607c226c3f0e8ea3501119c238210173601"
        },
        {
            "id": "9267ecf346a07be64595846b2ac5226430247631",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=175",
            "value": "9267ecf346a07be64595846b2ac5226430247631"
        },
        {
            "id": "30b1241b9e577bd972c80412865761cfde1dea50",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=176",
            "value": "30b1241b9e577bd972c80412865761cfde1dea50"
        },
        {
            "id": "879ff92a4730925de71eeaf0cf5c4547b7daaac6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=177",
            "value": "879ff92a4730925de71eeaf0cf5c4547b7daaac6"
        },
        {
            "id": "fb006a82b5af1f5527fee58f478916548f38ccc4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=178",
            "value": "fb006a82b5af1f5527fee58f478916548f38ccc4"
        },
        {
            "id": "7678cd2e37472011020d3278f843b1bcf2201341",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=181",
            "value": "7678cd2e37472011020d3278f843b1bcf2201341"
        },
        {
            "id": "deaf302c759b53ce54c88e13096748610152372e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=182",
            "value": "deaf302c759b53ce54c88e13096748610152372e"
        },
        {
            "id": "35e47994840df3f35ea55116a1a8c8e1c5ac1089",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=183",
            "value": "35e47994840df3f35ea55116a1a8c8e1c5ac1089"
        },
        {
            "id": "202d1168f59cda1e236b240ddbbd6eae5c167349",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=184",
            "value": "202d1168f59cda1e236b240ddbbd6eae5c167349"
        },
        {
            "id": "2ac8bdcca6cb6f803872afd1ddee8fd3ce05bb29",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=190",
            "value": "2ac8bdcca6cb6f803872afd1ddee8fd3ce05bb29"
        },
        {
            "id": "2f1056de6731f53feb31d515f657b132b1d7c9fd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=191",
            "value": "2f1056de6731f53feb31d515f657b132b1d7c9fd"
        },
        {
            "id": "5cf0087419c82c9eff99d4380152e560849d23d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=192",
            "value": "5cf0087419c82c9eff99d4380152e560849d23d2"
        },
        {
            "id": "8c592fa650ca6bd5616de18b94928f9d433383b2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=198",
            "value": "8c592fa650ca6bd5616de18b94928f9d433383b2"
        },
        {
            "id": "448abb06dc0044921db86f7eb9f729c8914f912a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=201",
            "value": "448abb06dc0044921db86f7eb9f729c8914f912a"
        },
        {
            "id": "c5ec19d9d81bb6fb63bec7d692c24d0b5c19990e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=204",
            "value": "c5ec19d9d81bb6fb63bec7d692c24d0b5c19990e"
        },
        {
            "id": "6dc5584da09b8a844fe42a61b8654e79753beda8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=205",
            "value": "6dc5584da09b8a844fe42a61b8654e79753beda8"
        },
        {
            "id": "bad2d5606ce1966633a3484f8d953e0207eac50c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=206",
            "value": "bad2d5606ce1966633a3484f8d953e0207eac50c"
        },
        {
            "id": "d5527057e2a8305e5a8c97ff4c17a2cc572bd574",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=207",
            "value": "d5527057e2a8305e5a8c97ff4c17a2cc572bd574"
        },
        {
            "id": "f3e74d182dea645d3a1072728dcb3cb4bc5b6b08",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=214",
            "value": "f3e74d182dea645d3a1072728dcb3cb4bc5b6b08"
        },
        {
            "id": "cde909b5dbaf7bbd594bee1819c9fd2e2d0b02ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=219",
            "value": "cde909b5dbaf7bbd594bee1819c9fd2e2d0b02ec"
        },
        {
            "id": "d747907b505213b9dd4a4ab5a41c4d37c6251e66",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=220",
            "value": "d747907b505213b9dd4a4ab5a41c4d37c6251e66"
        },
        {
            "id": "00c67b1689fac0f65560aa1cf18838b52a018299",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=222",
            "value": "00c67b1689fac0f65560aa1cf18838b52a018299"
        },
        {
            "id": "38e1f9a75bc985a4ccd61cf7f7621edd4b6697af",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=223",
            "value": "38e1f9a75bc985a4ccd61cf7f7621edd4b6697af"
        },
        {
            "id": "7299b75fdee64027a7ed8f222d21ba431beeaa19",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=229",
            "value": "7299b75fdee64027a7ed8f222d21ba431beeaa19"
        },
        {
            "id": "04bfbfb696d06dfb80c3464080398b6596f1bfc2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=230",
            "value": "04bfbfb696d06dfb80c3464080398b6596f1bfc2"
        },
        {
            "id": "935099981383e3daace9720c02d868d0fb53ff33",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=231",
            "value": "935099981383e3daace9720c02d868d0fb53ff33"
        },
        {
            "id": "18536f4efa0a09725b593d7f81b0fc3247abe36e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=232",
            "value": "18536f4efa0a09725b593d7f81b0fc3247abe36e"
        },
        {
            "id": "5409a2e87351357be2a829330bf3c9268263e22c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=233",
            "value": "5409a2e87351357be2a829330bf3c9268263e22c"
        },
        {
            "id": "18b62cf60e16e1928bfc7fd88ee110bb2d06e9c7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=234",
            "value": "18b62cf60e16e1928bfc7fd88ee110bb2d06e9c7"
        },
        {
            "id": "ef8fb28b63317834ab6c9ddeb3ef0ea2717a9b7c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=236",
            "value": "ef8fb28b63317834ab6c9ddeb3ef0ea2717a9b7c"
        },
        {
            "id": "29d913de88a0ce08351fde0537f3f7bfc263ca09",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=240",
            "value": "29d913de88a0ce08351fde0537f3f7bfc263ca09"
        },
        {
            "id": "6a2e07cd2d2ebfee8cd6837ab2a9ea7b4d526c76",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=244",
            "value": "6a2e07cd2d2ebfee8cd6837ab2a9ea7b4d526c76"
        },
        {
            "id": "dfb1d6d9068bd88a669378808d7795f36d443355",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=247",
            "value": "dfb1d6d9068bd88a669378808d7795f36d443355"
        },
        {
            "id": "135d22dd7de6a05325e33d9d577343174e2d7e07",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=250",
            "value": "135d22dd7de6a05325e33d9d577343174e2d7e07"
        },
        {
            "id": "704d32e8be1429d6a2cbac3c952c3e4c5def588a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=251",
            "value": "704d32e8be1429d6a2cbac3c952c3e4c5def588a"
        },
        {
            "id": "938d3665dcf039087ebecd90262aa7e1664a8be8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=254",
            "value": "938d3665dcf039087ebecd90262aa7e1664a8be8"
        },
        {
            "id": "133849069b1376a0baba846d3a43a15555df6759",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=258",
            "value": "133849069b1376a0baba846d3a43a15555df6759"
        },
        {
            "id": "010468b87fb74480fc1984017333f1692076cbb8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=260",
            "value": "010468b87fb74480fc1984017333f1692076cbb8"
        },
        {
            "id": "75093de3405b31b73cd8f3017fbc8af5079846aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=261",
            "value": "75093de3405b31b73cd8f3017fbc8af5079846aa"
        },
        {
            "id": "87219cca8ae10df6f608438eed5da91df074ce08",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=262",
            "value": "87219cca8ae10df6f608438eed5da91df074ce08"
        },
        {
            "id": "9bd1d9d87ec20cf0fe3d6250455e2dce270eec53",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=263",
            "value": "9bd1d9d87ec20cf0fe3d6250455e2dce270eec53"
        },
        {
            "id": "57836fde409c84f0b8cac596b5c18e849f203ecc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=266",
            "value": "57836fde409c84f0b8cac596b5c18e849f203ecc"
        },
        {
            "id": "d50e686eb05d8fc466bcb30a3c80c5985aeebec2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=268",
            "value": "d50e686eb05d8fc466bcb30a3c80c5985aeebec2"
        },
        {
            "id": "773278649184e7e653172970e3c83be0baa95a0a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=269",
            "value": "773278649184e7e653172970e3c83be0baa95a0a"
        },
        {
            "id": "29e0f56d470dbf88ca7b4be165562b5072071034",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=272",
            "value": "29e0f56d470dbf88ca7b4be165562b5072071034"
        },
        {
            "id": "775cf191925774a332531e384d34010344479c3f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=273",
            "value": "775cf191925774a332531e384d34010344479c3f"
        },
        {
            "id": "9c4e1fd4e7a158197f501d6cf23de5d38a9f9222",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=277",
            "value": "9c4e1fd4e7a158197f501d6cf23de5d38a9f9222"
        },
        {
            "id": "f3f0e02c04f42e8c43a3bf447e98520fefac4868",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=280",
            "value": "f3f0e02c04f42e8c43a3bf447e98520fefac4868"
        },
        {
            "id": "5fcd86e0711be18daa3741b9e55760de4856b154",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=283",
            "value": "5fcd86e0711be18daa3741b9e55760de4856b154"
        },
        {
            "id": "e6d4e18cd2d88d11caa55c288cddb4dd2706061a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=288",
            "value": "e6d4e18cd2d88d11caa55c288cddb4dd2706061a"
        },
        {
            "id": "85f5560be5aed807378a6aa7fb6509c5a5581470",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=291",
            "value": "85f5560be5aed807378a6aa7fb6509c5a5581470"
        },
        {
            "id": "66aa3cdbbf533a6a4345e560547293d600d323dd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=292",
            "value": "66aa3cdbbf533a6a4345e560547293d600d323dd"
        },
        {
            "id": "09577456949aa41a69f2acae4849dec9aead588c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=294",
            "value": "09577456949aa41a69f2acae4849dec9aead588c"
        },
        {
            "id": "3c5c6ef789aa7c9fcb72c44c9ccf574459176b94",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=295",
            "value": "3c5c6ef789aa7c9fcb72c44c9ccf574459176b94"
        },
        {
            "id": "61b6c306644ed8aca343ebe65690aaa225f1fc59",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=300",
            "value": "61b6c306644ed8aca343ebe65690aaa225f1fc59"
        },
        {
            "id": "99312d78006b27d025504be5ea957586e6db36f7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=301",
            "value": "99312d78006b27d025504be5ea957586e6db36f7"
        },
        {
            "id": "84a2e472f001524c8efbc42d018f3ba6a5e0b87f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=304",
            "value": "84a2e472f001524c8efbc42d018f3ba6a5e0b87f"
        },
        {
            "id": "1d5f6e63b4102c9f07e20a5aaefa3af501faef9a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=307",
            "value": "1d5f6e63b4102c9f07e20a5aaefa3af501faef9a"
        },
        {
            "id": "51a7fe0615c51305fe482a446a3edba785ad4eb2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=308",
            "value": "51a7fe0615c51305fe482a446a3edba785ad4eb2"
        },
        {
            "id": "f5386b2a53eff44ad9fb20b866d9d0130f17d0ac",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=310",
            "value": "f5386b2a53eff44ad9fb20b866d9d0130f17d0ac"
        },
        {
            "id": "c2a11a626c724ac6df8cfdb8ba45d14cf6034346",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=314",
            "value": "c2a11a626c724ac6df8cfdb8ba45d14cf6034346"
        },
        {
            "id": "44b253edacc1039967412b3dd5c620131e64dc0d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=315",
            "value": "44b253edacc1039967412b3dd5c620131e64dc0d"
        },
        {
            "id": "110e545748830d9bfd6f2b9d44799128483cc8ad",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=316",
            "value": "110e545748830d9bfd6f2b9d44799128483cc8ad"
        },
        {
            "id": "7760ea823ce715857bc6689d75947cb251864a59",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=317",
            "value": "7760ea823ce715857bc6689d75947cb251864a59"
        },
        {
            "id": "f700ba84ebb0075094f86d7104cc468a75d4625a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=319",
            "value": "f700ba84ebb0075094f86d7104cc468a75d4625a"
        },
        {
            "id": "3ff42dd8bbc7a4810bf3cd936e2a6021d7c40181",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=325",
            "value": "3ff42dd8bbc7a4810bf3cd936e2a6021d7c40181"
        },
        {
            "id": "5219d4b6746221cd28c35a331813d4290cdf49c2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=326",
            "value": "5219d4b6746221cd28c35a331813d4290cdf49c2"
        },
        {
            "id": "1e16b89592284a3a3600864e0c5562b4ecbdbc04",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=327",
            "value": "1e16b89592284a3a3600864e0c5562b4ecbdbc04"
        },
        {
            "id": "d72235fffb4edf029175717f873bae7627b72211",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=328",
            "value": "d72235fffb4edf029175717f873bae7627b72211"
        },
        {
            "id": "fb7f1b65bd68a45659a1a2e845eb8354a028d317",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=333",
            "value": "fb7f1b65bd68a45659a1a2e845eb8354a028d317"
        },
        {
            "id": "65c5ccc0ace713b026e126347aac0e8c428a4d1f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=336",
            "value": "65c5ccc0ace713b026e126347aac0e8c428a4d1f"
        },
        {
            "id": "751c960640cadd9597ea4d150b024ec8fdb6c942",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=337",
            "value": "751c960640cadd9597ea4d150b024ec8fdb6c942"
        },
        {
            "id": "9657bb6d62da7ff635725675f46bc47262003bec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=338",
            "value": "9657bb6d62da7ff635725675f46bc47262003bec"
        },
        {
            "id": "593ed9bde09aacdf74d9b98e7bb55b99bfe31e9a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=342",
            "value": "593ed9bde09aacdf74d9b98e7bb55b99bfe31e9a"
        },
        {
            "id": "bfc4b7174225aa1ee52725090ed1c678bb904d31",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=344",
            "value": "bfc4b7174225aa1ee52725090ed1c678bb904d31"
        },
        {
            "id": "904f5375fe03a6cb5359ba0f7240fb10ef70f6fc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=345",
            "value": "904f5375fe03a6cb5359ba0f7240fb10ef70f6fc"
        },
        {
            "id": "c71b76db7030bf8f0767a5d49912edde19e075f4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=349",
            "value": "c71b76db7030bf8f0767a5d49912edde19e075f4"
        },
        {
            "id": "c4502be68b56e40760445c301a697fbb53a1577a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=350",
            "value": "c4502be68b56e40760445c301a697fbb53a1577a"
        },
        {
            "id": "38bcb8e4b8ae0e6231e8b06c7c719bbc6f0836e2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=351",
            "value": "38bcb8e4b8ae0e6231e8b06c7c719bbc6f0836e2"
        },
        {
            "id": "27f7f81d67b3e34303cb238129bbadaecab5570d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=353",
            "value": "27f7f81d67b3e34303cb238129bbadaecab5570d"
        },
        {
            "id": "984950a1b7e83597446cb5af6d514a6ea9e5adaa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=355",
            "value": "984950a1b7e83597446cb5af6d514a6ea9e5adaa"
        },
        {
            "id": "28ccd8b064789377402d98c074fd2d790e433a4d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=357",
            "value": "28ccd8b064789377402d98c074fd2d790e433a4d"
        },
        {
            "id": "03b22470a8f0c31ba3055181e944c184ee180201",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=358",
            "value": "03b22470a8f0c31ba3055181e944c184ee180201"
        },
        {
            "id": "b849f636bb6f5dcd08549226412b76fe8e857829",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=361",
            "value": "b849f636bb6f5dcd08549226412b76fe8e857829"
        },
        {
            "id": "de48135a3bcc43b6fc1aba67e21b3b42986a3f34",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=363",
            "value": "de48135a3bcc43b6fc1aba67e21b3b42986a3f34"
        },
        {
            "id": "81fb3a64aae5cfd718480374526bd5959c6ae7d7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=365",
            "value": "81fb3a64aae5cfd718480374526bd5959c6ae7d7"
        },
        {
            "id": "1143db7ad61a8dcb1e55e37ca975c83610e2e289",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=367",
            "value": "1143db7ad61a8dcb1e55e37ca975c83610e2e289"
        },
        {
            "id": "027015b6661dd2c899a522efc48a390e641d3d0c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=368",
            "value": "027015b6661dd2c899a522efc48a390e641d3d0c"
        },
        {
            "id": "de630dbfede931791a054d9bce9ae6d0f947fc55",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=372",
            "value": "de630dbfede931791a054d9bce9ae6d0f947fc55"
        },
        {
            "id": "f70132e56fbc0a7316a01adb02368417a7dfa633",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=379",
            "value": "f70132e56fbc0a7316a01adb02368417a7dfa633"
        },
        {
            "id": "af64497ccf946fa1dc52c3076f1a222965281a06",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=380",
            "value": "af64497ccf946fa1dc52c3076f1a222965281a06"
        },
        {
            "id": "bb0455129bcc5986e1bbdcc800b14b01061175d5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=383",
            "value": "bb0455129bcc5986e1bbdcc800b14b01061175d5"
        },
        {
            "id": "1bb96a3362dda791b223713d26cee9b7610fcceb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=384",
            "value": "1bb96a3362dda791b223713d26cee9b7610fcceb"
        },
        {
            "id": "592187773032bb6c430130d30841fe64ba83c0e4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=386",
            "value": "592187773032bb6c430130d30841fe64ba83c0e4"
        },
        {
            "id": "e83a4a040b6a44d02ae1dafb5a77a66dbba7e0b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=388",
            "value": "e83a4a040b6a44d02ae1dafb5a77a66dbba7e0b1"
        },
        {
            "id": "c10d27cdac0d8862f37fc7778db4504a02a117aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=392",
            "value": "c10d27cdac0d8862f37fc7778db4504a02a117aa"
        },
        {
            "id": "e17b2d77eb58ab1f4d8199a93abebf8ff70b2056",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=396",
            "value": "e17b2d77eb58ab1f4d8199a93abebf8ff70b2056"
        },
        {
            "id": "15d9ed49acfe0eed3f5b157b660abaf98c79ea3c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=398",
            "value": "15d9ed49acfe0eed3f5b157b660abaf98c79ea3c"
        },
        {
            "id": "e7139f981ebf4407a5018227c1ba45a3d2dfde95",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=399",
            "value": "e7139f981ebf4407a5018227c1ba45a3d2dfde95"
        },
        {
            "id": "632b96ffceda66dce95bcdbbf42a69abeed288d9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=400",
            "value": "632b96ffceda66dce95bcdbbf42a69abeed288d9"
        },
        {
            "id": "b05882453da8de5920265a01935e26878da06c92",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=402",
            "value": "b05882453da8de5920265a01935e26878da06c92"
        },
        {
            "id": "e55e417b58e8f78d67c71e84dddd751bc23cc86a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=404",
            "value": "e55e417b58e8f78d67c71e84dddd751bc23cc86a"
        },
        {
            "id": "d83eea051268346015420ca5f7cf211e5ad7b7c2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=405",
            "value": "d83eea051268346015420ca5f7cf211e5ad7b7c2"
        },
        {
            "id": "c97c31c2aec8558819bb27c86ae57be981fa8c27",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=406",
            "value": "c97c31c2aec8558819bb27c86ae57be981fa8c27"
        },
        {
            "id": "4619ddd05866b379873bcb67c920b0fd47f46400",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=407",
            "value": "4619ddd05866b379873bcb67c920b0fd47f46400"
        },
        {
            "id": "64d8e34fdc012b06d11397ddf3e631d993ae1e60",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=414",
            "value": "64d8e34fdc012b06d11397ddf3e631d993ae1e60"
        },
        {
            "id": "e58e6583278393595a38328bc269d54171a1000a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=417",
            "value": "e58e6583278393595a38328bc269d54171a1000a"
        },
        {
            "id": "a423d4284613443fe26eb934ba469eb9cc27f935",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=420",
            "value": "a423d4284613443fe26eb934ba469eb9cc27f935"
        },
        {
            "id": "fd50a0decbf9b7e85be64100dcc74199eaeaac44",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=421",
            "value": "fd50a0decbf9b7e85be64100dcc74199eaeaac44"
        },
        {
            "id": "5ef1443a57e6c8b0aa6cbe5cef6edd068a99fdbf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=422",
            "value": "5ef1443a57e6c8b0aa6cbe5cef6edd068a99fdbf"
        },
        {
            "id": "18b1cf0a67676c59715dd60063771f730f20b873",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=428",
            "value": "18b1cf0a67676c59715dd60063771f730f20b873"
        },
        {
            "id": "da251b33fa1a12b012e49c5db878f80c254f89d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=429",
            "value": "da251b33fa1a12b012e49c5db878f80c254f89d4"
        },
        {
            "id": "f9429d353f1630ce8005b4d3265c11b88c23f0b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=432",
            "value": "f9429d353f1630ce8005b4d3265c11b88c23f0b1"
        },
        {
            "id": "51eea8cb302a745fcac6224eac1649f66e04aa41",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=439",
            "value": "51eea8cb302a745fcac6224eac1649f66e04aa41"
        },
        {
            "id": "040bf58316af0798b5472dd9e16d4761166385a6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=440",
            "value": "040bf58316af0798b5472dd9e16d4761166385a6"
        },
        {
            "id": "2aee3a2c0121238cce009bb8bf12485c315ac8f8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=441",
            "value": "2aee3a2c0121238cce009bb8bf12485c315ac8f8"
        },
        {
            "id": "6d5eecff8df80f31859bab99146077801380317b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=442",
            "value": "6d5eecff8df80f31859bab99146077801380317b"
        },
        {
            "id": "11e01a9d2263d15fe2a7c615fd82c15007f2a1c7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=443",
            "value": "11e01a9d2263d15fe2a7c615fd82c15007f2a1c7"
        },
        {
            "id": "f8ed2e1624de9453d3066580575d74c39ecd1773",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=444",
            "value": "f8ed2e1624de9453d3066580575d74c39ecd1773"
        },
        {
            "id": "b52ecc5f303f8689f95eefe96fc0a99b03e5d263",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=449",
            "value": "b52ecc5f303f8689f95eefe96fc0a99b03e5d263"
        },
        {
            "id": "8f1ef1167e11a0aa167eb0010e3653ba6f789e55",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=452",
            "value": "8f1ef1167e11a0aa167eb0010e3653ba6f789e55"
        },
        {
            "id": "131b33bd0da0c18c4ed7e5dcbadd71d9600fd0fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=455",
            "value": "131b33bd0da0c18c4ed7e5dcbadd71d9600fd0fa"
        },
        {
            "id": "c1357a2dddfd358625ed4b2339ff82918bab3619",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=458",
            "value": "c1357a2dddfd358625ed4b2339ff82918bab3619"
        },
        {
            "id": "a2a943b8d24e92d4d6457562d05902c3884dea50",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=459",
            "value": "a2a943b8d24e92d4d6457562d05902c3884dea50"
        },
        {
            "id": "661f1618e39068db0e56d1c30da173e503565215",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=461",
            "value": "661f1618e39068db0e56d1c30da173e503565215"
        },
        {
            "id": "542144571692ae0bd03f2662cbcc9a822d4b5e1a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=462",
            "value": "542144571692ae0bd03f2662cbcc9a822d4b5e1a"
        },
        {
            "id": "7041826f9b57fb2f25c4c9c44dc7273bce7074b0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=465",
            "value": "7041826f9b57fb2f25c4c9c44dc7273bce7074b0"
        },
        {
            "id": "3b7a181440d364846ea96793a63d9f9fce35fecc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=466",
            "value": "3b7a181440d364846ea96793a63d9f9fce35fecc"
        },
        {
            "id": "d8ef7cdc0b9ba7d546005d8932467f0a7dc113e5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=467",
            "value": "d8ef7cdc0b9ba7d546005d8932467f0a7dc113e5"
        },
        {
            "id": "89b40df027a1bcfa5edc134f84b17415da6bc4ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=469",
            "value": "89b40df027a1bcfa5edc134f84b17415da6bc4ab"
        },
        {
            "id": "475d5e99e87e3ea2e7ae869f4ed52bc3aff57005",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=470",
            "value": "475d5e99e87e3ea2e7ae869f4ed52bc3aff57005"
        },
        {
            "id": "58bd96136fa50ca8c79d49491fb2efb2665bd7c7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=481",
            "value": "58bd96136fa50ca8c79d49491fb2efb2665bd7c7"
        },
        {
            "id": "ec3e4ceb923d25aa647cfb0fe46f4c81a4ad8391",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=487",
            "value": "ec3e4ceb923d25aa647cfb0fe46f4c81a4ad8391"
        },
        {
            "id": "070849d24cff3aefa8e8dc6024c331a07b1b01b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=492",
            "value": "070849d24cff3aefa8e8dc6024c331a07b1b01b1"
        },
        {
            "id": "10e8f5c3d772ee6257a3521c310127e4caadcc47",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=493",
            "value": "10e8f5c3d772ee6257a3521c310127e4caadcc47"
        },
        {
            "id": "b49e4fd85bfe246e566a21a01ff10d1827d67e08",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=495",
            "value": "b49e4fd85bfe246e566a21a01ff10d1827d67e08"
        },
        {
            "id": "f810d1012636c3a59db6653dae2d51089800f6e2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=497",
            "value": "f810d1012636c3a59db6653dae2d51089800f6e2"
        },
        {
            "id": "8067c57964350f39d1fc56df2d541d49b71a4976",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=498",
            "value": "8067c57964350f39d1fc56df2d541d49b71a4976"
        },
        {
            "id": "8c7e33b04634970e2b8677105b7b79071c003d45",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=499",
            "value": "8c7e33b04634970e2b8677105b7b79071c003d45"
        },
        {
            "id": "ef8679c3f592666b2c9e7bdc4693461ab674354a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=501",
            "value": "ef8679c3f592666b2c9e7bdc4693461ab674354a"
        },
        {
            "id": "31e615645f64b2b53947e4d7faa26e6270ecfde7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=502",
            "value": "31e615645f64b2b53947e4d7faa26e6270ecfde7"
        },
        {
            "id": "7d1d6ca61f934bace7f2938deb6cd393732ad463",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=503",
            "value": "7d1d6ca61f934bace7f2938deb6cd393732ad463"
        },
        {
            "id": "a222b05db3d912b888f54e78a50239f362efa9cd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=506",
            "value": "a222b05db3d912b888f54e78a50239f362efa9cd"
        },
        {
            "id": "e63549af025dff88ccdbd0af8ce6ecff990689e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=507",
            "value": "e63549af025dff88ccdbd0af8ce6ecff990689e6"
        },
        {
            "id": "7520ca8ceb545e70eca86a2ac6ca6389fc0e0b97",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=508",
            "value": "7520ca8ceb545e70eca86a2ac6ca6389fc0e0b97"
        },
        {
            "id": "208d47b4b1dcdecc512e2a4705f383788afe64c1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=512",
            "value": "208d47b4b1dcdecc512e2a4705f383788afe64c1"
        },
        {
            "id": "2c8a158a4a09238638e010599fe5934b924f7c55",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=516",
            "value": "2c8a158a4a09238638e010599fe5934b924f7c55"
        },
        {
            "id": "6957f1ab4d268dc859b9d16258c1101547b445b5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=519",
            "value": "6957f1ab4d268dc859b9d16258c1101547b445b5"
        },
        {
            "id": "ce2537b4b0f4e50ffd378693dae7af58338756b8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=525",
            "value": "ce2537b4b0f4e50ffd378693dae7af58338756b8"
        },
        {
            "id": "82772ea4cd1a42ce8ce3fdf2b92a7df4cb44fe41",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=528",
            "value": "82772ea4cd1a42ce8ce3fdf2b92a7df4cb44fe41"
        },
        {
            "id": "cfe5dae9d6bddf0ffb8dbd9be8b41803ff479a61",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=532",
            "value": "cfe5dae9d6bddf0ffb8dbd9be8b41803ff479a61"
        },
        {
            "id": "9952578b2f36f4149667778e9024e50856caebf4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=534",
            "value": "9952578b2f36f4149667778e9024e50856caebf4"
        },
        {
            "id": "9aaf76fd510c8f70314e11c3cae002562ea80d81",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=535",
            "value": "9aaf76fd510c8f70314e11c3cae002562ea80d81"
        },
        {
            "id": "391072f07425711a6c5220733eb333ccfeac8447",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=536",
            "value": "391072f07425711a6c5220733eb333ccfeac8447"
        },
        {
            "id": "2e48bee343798d52b826c50eb63f1c09b93f2bca",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=537",
            "value": "2e48bee343798d52b826c50eb63f1c09b93f2bca"
        },
        {
            "id": "423026fe284f102667e16a8c8c7ad19aee83b229",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=539",
            "value": "423026fe284f102667e16a8c8c7ad19aee83b229"
        },
        {
            "id": "845c278f07f506462356366328e4c984f610af0f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=542",
            "value": "845c278f07f506462356366328e4c984f610af0f"
        },
        {
            "id": "5151cc9642adb537a825a2358f7a70ce2d3cdff0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=544",
            "value": "5151cc9642adb537a825a2358f7a70ce2d3cdff0"
        },
        {
            "id": "5b5e25cfec4ef25e2456707cb4cf76a2af8ca11c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=545",
            "value": "5b5e25cfec4ef25e2456707cb4cf76a2af8ca11c"
        },
        {
            "id": "d309454ceade48f5a6823b1583f63540ff3d3761",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=546",
            "value": "d309454ceade48f5a6823b1583f63540ff3d3761"
        },
        {
            "id": "8bdd30074aa0d93ab9da0b583d428ac160fe8b78",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=548",
            "value": "8bdd30074aa0d93ab9da0b583d428ac160fe8b78"
        },
        {
            "id": "35903412810008738b9b7d379c383b5acdab85a0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=549",
            "value": "35903412810008738b9b7d379c383b5acdab85a0"
        },
        {
            "id": "7f99d274b7a2b50ef8b46a371f94a214904a99cf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=551",
            "value": "7f99d274b7a2b50ef8b46a371f94a214904a99cf"
        },
        {
            "id": "3bf6436732ed6a388293275703fe87ed8366fb1a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=552",
            "value": "3bf6436732ed6a388293275703fe87ed8366fb1a"
        },
        {
            "id": "2321204eeced6c256db7cc002a996f03fffc0574",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=554",
            "value": "2321204eeced6c256db7cc002a996f03fffc0574"
        },
        {
            "id": "4f14a42ee09881bcb6795a55b02537bfa9ca264c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=556",
            "value": "4f14a42ee09881bcb6795a55b02537bfa9ca264c"
        },
        {
            "id": "dc3b2952bac2838ff99bb7fed018099b2370dfc6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=562",
            "value": "dc3b2952bac2838ff99bb7fed018099b2370dfc6"
        },
        {
            "id": "2e43286dcb2ac027e2e151b5a4b0adace6bceab1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=563",
            "value": "2e43286dcb2ac027e2e151b5a4b0adace6bceab1"
        },
        {
            "id": "6ed994a0f15a193794561887ee5602fc727dfb2f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=565",
            "value": "6ed994a0f15a193794561887ee5602fc727dfb2f"
        },
        {
            "id": "3087cabc90d1c44339fa5d6f35a78a3c3cfa8364",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=571",
            "value": "3087cabc90d1c44339fa5d6f35a78a3c3cfa8364"
        },
        {
            "id": "1b3025387be5a35720b9801a5cc393fff2aa3c47",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=572",
            "value": "1b3025387be5a35720b9801a5cc393fff2aa3c47"
        },
        {
            "id": "75b756b67e39740baf36707c0c8a8c6ce08a974f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=574",
            "value": "75b756b67e39740baf36707c0c8a8c6ce08a974f"
        },
        {
            "id": "bf0f5281888bc2729d14ab64ff4b4ed8122bfb7b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=578",
            "value": "bf0f5281888bc2729d14ab64ff4b4ed8122bfb7b"
        },
        {
            "id": "c0f39aa4a8261ed47fea3087924aff328364b5ff",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=580",
            "value": "c0f39aa4a8261ed47fea3087924aff328364b5ff"
        },
        {
            "id": "b6d1002cd42d6456aabc7da5b3588c16eab5a884",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=581",
            "value": "b6d1002cd42d6456aabc7da5b3588c16eab5a884"
        },
        {
            "id": "709c9fc8f30e5a4ae0892323be06869d60a289b3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=583",
            "value": "709c9fc8f30e5a4ae0892323be06869d60a289b3"
        },
        {
            "id": "dfece787c250c0eb8bf84a8f7e4ca1620931ff54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=584",
            "value": "dfece787c250c0eb8bf84a8f7e4ca1620931ff54"
        },
        {
            "id": "2ce25bdca222d7057398833344a36f106762b6ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=586",
            "value": "2ce25bdca222d7057398833344a36f106762b6ef"
        },
        {
            "id": "43ff0953f4df416773fb74b208fcad5e526fa69b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=587",
            "value": "43ff0953f4df416773fb74b208fcad5e526fa69b"
        },
        {
            "id": "3e5249663bbe97eb6e4ed8eaa1487e99973164e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=589",
            "value": "3e5249663bbe97eb6e4ed8eaa1487e99973164e6"
        },
        {
            "id": "d10633abf17cefaef7659da7346aac48947128d5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=590",
            "value": "d10633abf17cefaef7659da7346aac48947128d5"
        },
        {
            "id": "14fd8ba70b59355670bd7184579d2dac2bb08846",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=598",
            "value": "14fd8ba70b59355670bd7184579d2dac2bb08846"
        },
        {
            "id": "121003bb58fd29b88345d72606a820bc7baf0a22",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=599",
            "value": "121003bb58fd29b88345d72606a820bc7baf0a22"
        },
        {
            "id": "2ece4336fa2ae55469b3dae700000d08aaceb984",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=602",
            "value": "2ece4336fa2ae55469b3dae700000d08aaceb984"
        },
        {
            "id": "620b19486222e8e89286a3bc52a71db9e43cda67",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=605",
            "value": "620b19486222e8e89286a3bc52a71db9e43cda67"
        },
        {
            "id": "a6beb3e6c93ff11c1fab35dc8d4b2764d4d14de9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=606",
            "value": "a6beb3e6c93ff11c1fab35dc8d4b2764d4d14de9"
        },
        {
            "id": "22617eff3718857d5295b14071354dc6e7680762",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=608",
            "value": "22617eff3718857d5295b14071354dc6e7680762"
        },
        {
            "id": "4db999979ec76107b168e338b955925b01073bb7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=613",
            "value": "4db999979ec76107b168e338b955925b01073bb7"
        },
        {
            "id": "09b64488612729bb71a6e3f614ba3221bc42c28a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=614",
            "value": "09b64488612729bb71a6e3f614ba3221bc42c28a"
        },
        {
            "id": "ed9e90f2a444f24b68542a1cbb0fd6fbab742e00",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=622",
            "value": "ed9e90f2a444f24b68542a1cbb0fd6fbab742e00"
        },
        {
            "id": "4b2fb8a54213975295a282ecb9508cc0b0ffa23f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=629",
            "value": "4b2fb8a54213975295a282ecb9508cc0b0ffa23f"
        },
        {
            "id": "9bf2240f9c8b516ed9e4c9a85e3ee0ec9614b27b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=630",
            "value": "9bf2240f9c8b516ed9e4c9a85e3ee0ec9614b27b"
        },
        {
            "id": "73533bf6a6b69e4b7b2a70e87dda7a2a68f63fa6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=631",
            "value": "73533bf6a6b69e4b7b2a70e87dda7a2a68f63fa6"
        },
        {
            "id": "5fb026a4d629fa99c78742f7ed3524c68fb5741e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=634",
            "value": "5fb026a4d629fa99c78742f7ed3524c68fb5741e"
        },
        {
            "id": "168e8cbbaf6a8ddab761f5f3ea3907410ea3e50b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=637",
            "value": "168e8cbbaf6a8ddab761f5f3ea3907410ea3e50b"
        },
        {
            "id": "de7c13eefc37af69e2eec42f53358db69b83d1de",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=638",
            "value": "de7c13eefc37af69e2eec42f53358db69b83d1de"
        },
        {
            "id": "716ad1a307ff56ef54f220e2d7bf64c8ac8c768c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=646",
            "value": "716ad1a307ff56ef54f220e2d7bf64c8ac8c768c"
        },
        {
            "id": "eaa74026e211f0902daf32a2ef001ff493792b61",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=649",
            "value": "eaa74026e211f0902daf32a2ef001ff493792b61"
        },
        {
            "id": "d24d4101282d78c74e89c396c32d15ddc974bb6a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=650",
            "value": "d24d4101282d78c74e89c396c32d15ddc974bb6a"
        },
        {
            "id": "c14b978aa9941a5d8344fad9bc74ff4cb0747031",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=651",
            "value": "c14b978aa9941a5d8344fad9bc74ff4cb0747031"
        },
        {
            "id": "ad935a87e93eff801bd0f85121412383060d5362",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=658",
            "value": "ad935a87e93eff801bd0f85121412383060d5362"
        },
        {
            "id": "7a2c9a0ee7c33a8640bc06ecdc919f501239e783",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=664",
            "value": "7a2c9a0ee7c33a8640bc06ecdc919f501239e783"
        },
        {
            "id": "2914ff56a56c06d241421aa4d96ef471d298bbd4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=666",
            "value": "2914ff56a56c06d241421aa4d96ef471d298bbd4"
        },
        {
            "id": "4170269be84c9c8f4431b7212c96cdc08151d1aa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=701",
            "value": "4170269be84c9c8f4431b7212c96cdc08151d1aa"
        },
        {
            "id": "72ef6e8eb96fab1a00009e155f2dd335407463a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=703",
            "value": "72ef6e8eb96fab1a00009e155f2dd335407463a8"
        },
        {
            "id": "18f6f884e5a10f81dc930ec52b9d1dd23d93f689",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=704",
            "value": "18f6f884e5a10f81dc930ec52b9d1dd23d93f689"
        },
        {
            "id": "2a4048b0707d8b8bba3f98a6fe2f15bf0da5b1a9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=705",
            "value": "2a4048b0707d8b8bba3f98a6fe2f15bf0da5b1a9"
        },
        {
            "id": "ed63f9e3f0b6c58c9ff150f93cdd85639e7032d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=708",
            "value": "ed63f9e3f0b6c58c9ff150f93cdd85639e7032d4"
        },
        {
            "id": "05f6e98ceed18096e11d1bea1a6e1b974b1588d0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=709",
            "value": "05f6e98ceed18096e11d1bea1a6e1b974b1588d0"
        },
        {
            "id": "422a0dca53f4f139e7358a3cf1e70e540645b1bc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=710",
            "value": "422a0dca53f4f139e7358a3cf1e70e540645b1bc"
        },
        {
            "id": "f697b436a66321367afaa65d003617e99c0fe77f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=711",
            "value": "f697b436a66321367afaa65d003617e99c0fe77f"
        },
        {
            "id": "33e6dd17a86665082afc4ae4cdf0c19d1149c666",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=714",
            "value": "33e6dd17a86665082afc4ae4cdf0c19d1149c666"
        },
        {
            "id": "ca13bcd37603b6edae7e5cda2cff96d90ab1b7e7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=716",
            "value": "ca13bcd37603b6edae7e5cda2cff96d90ab1b7e7"
        },
        {
            "id": "f40d311862d0a6deaf94f56606f8175f8513c330",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=724",
            "value": "f40d311862d0a6deaf94f56606f8175f8513c330"
        },
        {
            "id": "b2746401ee0394fe46feb19a3ec89d67beafd9e6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=725",
            "value": "b2746401ee0394fe46feb19a3ec89d67beafd9e6"
        },
        {
            "id": "f9e26f51cc79a3a4c118cb4fefe03e9e6bebca4c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=726",
            "value": "f9e26f51cc79a3a4c118cb4fefe03e9e6bebca4c"
        },
        {
            "id": "44d0dc8238f9741a9a0a93767f17f0034263f1a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=728",
            "value": "44d0dc8238f9741a9a0a93767f17f0034263f1a2"
        },
        {
            "id": "4b6d8f64baf379c94c61ea399a7e201cdc0ab162",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=737",
            "value": "4b6d8f64baf379c94c61ea399a7e201cdc0ab162"
        },
        {
            "id": "8f6c5cd0aa348466e9d7e6716df8c3645079b101",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=739",
            "value": "8f6c5cd0aa348466e9d7e6716df8c3645079b101"
        },
        {
            "id": "7c9ba6303698ac83622067801815ef0c85c1f209",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=740",
            "value": "7c9ba6303698ac83622067801815ef0c85c1f209"
        },
        {
            "id": "b7b7382d92565163a298c78fe24f9ed1e72172fa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=744",
            "value": "b7b7382d92565163a298c78fe24f9ed1e72172fa"
        },
        {
            "id": "7e9cb4ae9db42561dd6dad674575556cefc9945f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=748",
            "value": "7e9cb4ae9db42561dd6dad674575556cefc9945f"
        },
        {
            "id": "da709df3e1415ef3d8e4a70cd3fbd152a7007449",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=756",
            "value": "da709df3e1415ef3d8e4a70cd3fbd152a7007449"
        },
        {
            "id": "61d6cfb5c6c50305c0115a41055f456173c0ea0f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=758",
            "value": "61d6cfb5c6c50305c0115a41055f456173c0ea0f"
        },
        {
            "id": "5ea2999ceba4787147d2a377fb0fc3c9e214f574",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=760",
            "value": "5ea2999ceba4787147d2a377fb0fc3c9e214f574"
        },
        {
            "id": "8f8276b9e0c6880f23a2724af6726d0b7d348ce7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=761",
            "value": "8f8276b9e0c6880f23a2724af6726d0b7d348ce7"
        },
        {
            "id": "697491ac0e7534c3bb2792e4345b80116f308d12",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=767",
            "value": "697491ac0e7534c3bb2792e4345b80116f308d12"
        },
        {
            "id": "dcd9e8a0d3e337b707cdd30e11b3ce0eda9fd9d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=771",
            "value": "dcd9e8a0d3e337b707cdd30e11b3ce0eda9fd9d3"
        },
        {
            "id": "7c9821c0555b8418cc1289314dc225f6477cd7ba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=773",
            "value": "7c9821c0555b8418cc1289314dc225f6477cd7ba"
        },
        {
            "id": "cd26971ecf7e135d4dfb4046c6cb659b5e600de9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=776",
            "value": "cd26971ecf7e135d4dfb4046c6cb659b5e600de9"
        },
        {
            "id": "58d36cda31bb25d1f6fe86e10fe5a20d0f112351",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=777",
            "value": "58d36cda31bb25d1f6fe86e10fe5a20d0f112351"
        },
        {
            "id": "2e16702b482ceefd368a95784d3d89ba78eccf3e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=782",
            "value": "2e16702b482ceefd368a95784d3d89ba78eccf3e"
        },
        {
            "id": "5af4097a2d9ecfc45a1d7f10f4595bfff958d791",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=787",
            "value": "5af4097a2d9ecfc45a1d7f10f4595bfff958d791"
        },
        {
            "id": "f9bc4a47d6155fe9a6c0c85c2ae85c16dac27ce4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=790",
            "value": "f9bc4a47d6155fe9a6c0c85c2ae85c16dac27ce4"
        },
        {
            "id": "dccc437d1f688faca8d11227efef27c26c3436cb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=795",
            "value": "dccc437d1f688faca8d11227efef27c26c3436cb"
        },
        {
            "id": "6ffb366f3da01227a4aaa5673d9affcfbefa9007",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=796",
            "value": "6ffb366f3da01227a4aaa5673d9affcfbefa9007"
        },
        {
            "id": "b22624bacc8a5aae46807187d29d542ef23ae66b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=797",
            "value": "b22624bacc8a5aae46807187d29d542ef23ae66b"
        },
        {
            "id": "9b3188117d48bc5183bf4a0edfd04cdf24c6e8dd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=800",
            "value": "9b3188117d48bc5183bf4a0edfd04cdf24c6e8dd"
        },
        {
            "id": "0dc21fb99fc9b9740589eb7e87dbafd5ed130b7d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=802",
            "value": "0dc21fb99fc9b9740589eb7e87dbafd5ed130b7d"
        },
        {
            "id": "387c30b0e84999572fffe5915c4460bd068f3966",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=804",
            "value": "387c30b0e84999572fffe5915c4460bd068f3966"
        },
        {
            "id": "bd6acdc44a25ca2f04e3aa9431d6ffc09d7a695a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=805",
            "value": "bd6acdc44a25ca2f04e3aa9431d6ffc09d7a695a"
        },
        {
            "id": "e66d1694f0d057cd523e396b78565c9c695bc2b9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=806",
            "value": "e66d1694f0d057cd523e396b78565c9c695bc2b9"
        },
        {
            "id": "74bfba7af152cf0558ee4dd74efb4f16b4b6c099",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=807",
            "value": "74bfba7af152cf0558ee4dd74efb4f16b4b6c099"
        },
        {
            "id": "40a831c4eed35c1c550c6e2304f78609fe9c74fe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=809",
            "value": "40a831c4eed35c1c550c6e2304f78609fe9c74fe"
        },
        {
            "id": "45e0c200b925276f0ccb5cc671c9dfd292862100",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=810",
            "value": "45e0c200b925276f0ccb5cc671c9dfd292862100"
        },
        {
            "id": "7f70b1ea75718465dfb76c94abe3d06ba33d656b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=811",
            "value": "7f70b1ea75718465dfb76c94abe3d06ba33d656b"
        },
        {
            "id": "f810c5397d5d6e510fb369318749d283ffa048e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=812",
            "value": "f810c5397d5d6e510fb369318749d283ffa048e3"
        },
        {
            "id": "7e7bec8be127c703863d91a2b512028b79f60135",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=813",
            "value": "7e7bec8be127c703863d91a2b512028b79f60135"
        },
        {
            "id": "e070c644c94ae5113280430915cd74480155181d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=816",
            "value": "e070c644c94ae5113280430915cd74480155181d"
        },
        {
            "id": "cf25df629f412881e30ba0c5728aeee2d9f5327f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=818",
            "value": "cf25df629f412881e30ba0c5728aeee2d9f5327f"
        },
        {
            "id": "01505fe70a4868618856c1d48a8add6aa9c01081",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=821",
            "value": "01505fe70a4868618856c1d48a8add6aa9c01081"
        },
        {
            "id": "31fae3e2792bc126dbc09bdfbd0c8e5a2cbd5797",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=824",
            "value": "31fae3e2792bc126dbc09bdfbd0c8e5a2cbd5797"
        },
        {
            "id": "d0b1e15cf69f3ff4cac9e237eb150a4c6906649e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=825",
            "value": "d0b1e15cf69f3ff4cac9e237eb150a4c6906649e"
        },
        {
            "id": "716dfe8039084ce6d52ea29ee8b0c4f228b39131",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=830",
            "value": "716dfe8039084ce6d52ea29ee8b0c4f228b39131"
        },
        {
            "id": "bd07c65d2c726b0f188793e7b5638f23b47d7770",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=831",
            "value": "bd07c65d2c726b0f188793e7b5638f23b47d7770"
        },
        {
            "id": "4c28e2216d2b7637d0730fa66e1a49b293b95483",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=834",
            "value": "4c28e2216d2b7637d0730fa66e1a49b293b95483"
        },
        {
            "id": "4c1d66657e9954913fc7adc8285413f22c55342a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=836",
            "value": "4c1d66657e9954913fc7adc8285413f22c55342a"
        },
        {
            "id": "cb4c92f03035910c327dd38fdfc1fab1271b5841",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=837",
            "value": "cb4c92f03035910c327dd38fdfc1fab1271b5841"
        },
        {
            "id": "13877295161203b8ba543d04e218097a615b646a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=839",
            "value": "13877295161203b8ba543d04e218097a615b646a"
        },
        {
            "id": "9c9f318458379ce592d8ca46d624f685290a0a2a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=843",
            "value": "9c9f318458379ce592d8ca46d624f685290a0a2a"
        },
        {
            "id": "c47b469f5a059faa832d63294f3d2ac3c6cd5bea",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=844",
            "value": "c47b469f5a059faa832d63294f3d2ac3c6cd5bea"
        },
        {
            "id": "784b0124394038b511a5964bedce6e840d30d5f1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=845",
            "value": "784b0124394038b511a5964bedce6e840d30d5f1"
        },
        {
            "id": "ee5a6a3955c1b806e84a71e2dbd69eed748c6f5c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=852",
            "value": "ee5a6a3955c1b806e84a71e2dbd69eed748c6f5c"
        },
        {
            "id": "88cb29577ad82910aafa7234d03ee6b26b1e8b23",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=854",
            "value": "88cb29577ad82910aafa7234d03ee6b26b1e8b23"
        },
        {
            "id": "ae12d45ea06cd57c5a6f6495c0b7c12908c3695c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=863",
            "value": "ae12d45ea06cd57c5a6f6495c0b7c12908c3695c"
        },
        {
            "id": "a76443fd6d3ed00c70138ff5136738ae93f41ea2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=864",
            "value": "a76443fd6d3ed00c70138ff5136738ae93f41ea2"
        },
        {
            "id": "41e1b4f886539aa39f37e1051a5176a3a83cfd54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=870",
            "value": "41e1b4f886539aa39f37e1051a5176a3a83cfd54"
        },
        {
            "id": "310e691ffce30630b1021bfaff526cebb7bb0d8d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=872",
            "value": "310e691ffce30630b1021bfaff526cebb7bb0d8d"
        },
        {
            "id": "15b48d1e6295bc1603780860699b56d667abfce1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=874",
            "value": "15b48d1e6295bc1603780860699b56d667abfce1"
        },
        {
            "id": "1ecf49330e43a94eb50a1b9ac91a3e7653bccf85",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=875",
            "value": "1ecf49330e43a94eb50a1b9ac91a3e7653bccf85"
        },
        {
            "id": "8c78a335ad20f87bb4bdbd0c0713d9e5bffebc3b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=876",
            "value": "8c78a335ad20f87bb4bdbd0c0713d9e5bffebc3b"
        },
        {
            "id": "7cbb7feababd6b480330a7446a42bb3d48284b13",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=878",
            "value": "7cbb7feababd6b480330a7446a42bb3d48284b13"
        },
        {
            "id": "2a30407b403f317830ba0d8f0a98c673f12c2f4b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=880",
            "value": "2a30407b403f317830ba0d8f0a98c673f12c2f4b"
        },
        {
            "id": "702b2ee118b06ef119cb6e37e51babdde7ea90b8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=884",
            "value": "702b2ee118b06ef119cb6e37e51babdde7ea90b8"
        },
        {
            "id": "330f5a7d6ba059b3abd4184b73ee1b329080a40e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=887",
            "value": "330f5a7d6ba059b3abd4184b73ee1b329080a40e"
        },
        {
            "id": "81372af56a528cbe0cf8d4fbbeaa4f26e6c6bf0b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=891",
            "value": "81372af56a528cbe0cf8d4fbbeaa4f26e6c6bf0b"
        },
        {
            "id": "86be83f83e7db10e6186f531b35f603516175702",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=893",
            "value": "86be83f83e7db10e6186f531b35f603516175702"
        },
        {
            "id": "e08dfc3b51fadc2d5e69367b0b0083699ed1efc3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=895",
            "value": "e08dfc3b51fadc2d5e69367b0b0083699ed1efc3"
        },
        {
            "id": "8d18449e8f1356ffcbf82e6552c11ce6d5805c37",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=899",
            "value": "8d18449e8f1356ffcbf82e6552c11ce6d5805c37"
        },
        {
            "id": "9173bfe7c1ec68a9fe22297c82e163e31bd22b34",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=900",
            "value": "9173bfe7c1ec68a9fe22297c82e163e31bd22b34"
        },
        {
            "id": "f899ecb08ad3093ec47101a4a9ee657df64061ae",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=901",
            "value": "f899ecb08ad3093ec47101a4a9ee657df64061ae"
        },
        {
            "id": "37402026bdca38514a8f9fef7d721eb8e16b8df1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=903",
            "value": "37402026bdca38514a8f9fef7d721eb8e16b8df1"
        },
        {
            "id": "4f3b79a3d8678efbf8762215fee4332301c6c467",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=906",
            "value": "4f3b79a3d8678efbf8762215fee4332301c6c467"
        },
        {
            "id": "6cd1d846a88673fe3db84bfa9fc7f9c31c53214b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=910",
            "value": "6cd1d846a88673fe3db84bfa9fc7f9c31c53214b"
        },
        {
            "id": "cb839ab7e230e2c6ea7d364355a6850ca5d19197",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=911",
            "value": "cb839ab7e230e2c6ea7d364355a6850ca5d19197"
        },
        {
            "id": "77af657b80b250fe5a2b45a923cd06cdbe731e57",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=912",
            "value": "77af657b80b250fe5a2b45a923cd06cdbe731e57"
        },
        {
            "id": "b40b28627ff9028dc26f4994ae085366fcdea667",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=913",
            "value": "b40b28627ff9028dc26f4994ae085366fcdea667"
        },
        {
            "id": "dbbef57800d5c83f64a01887afce9a96c865627e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=916",
            "value": "dbbef57800d5c83f64a01887afce9a96c865627e"
        },
        {
            "id": "0d4d44c9f492a88aa1700fbc535b16585c359949",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=919",
            "value": "0d4d44c9f492a88aa1700fbc535b16585c359949"
        },
        {
            "id": "1f87a8187aef682d62dc48b5081368dddc3ac2fd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=922",
            "value": "1f87a8187aef682d62dc48b5081368dddc3ac2fd"
        },
        {
            "id": "f04c19067160f2b3c10646d29b0da5b150ad058b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=925",
            "value": "f04c19067160f2b3c10646d29b0da5b150ad058b"
        },
        {
            "id": "5fed3afd4230a2cb9889f55b0fe648f1a83ec2c8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=941",
            "value": "5fed3afd4230a2cb9889f55b0fe648f1a83ec2c8"
        },
        {
            "id": "e2f16b32af4ad4186f6d532e375e9e0888384972",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=946",
            "value": "e2f16b32af4ad4186f6d532e375e9e0888384972"
        },
        {
            "id": "041304c97018030802c3f648f6a381e514c8f2da",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=948",
            "value": "041304c97018030802c3f648f6a381e514c8f2da"
        },
        {
            "id": "f918052b8e9998fec3814718214d81dda9a7b91e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=953",
            "value": "f918052b8e9998fec3814718214d81dda9a7b91e"
        },
        {
            "id": "7ec3067acd95ce8f374c311e6cc0e0fc165f99ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=964",
            "value": "7ec3067acd95ce8f374c311e6cc0e0fc165f99ec"
        },
        {
            "id": "7f131c5d1fdda9a709c0d2c08947dcf323d05ace",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=966",
            "value": "7f131c5d1fdda9a709c0d2c08947dcf323d05ace"
        },
        {
            "id": "a31a8bc09956cba37030c2f5b45917b771e5ed15",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=967",
            "value": "a31a8bc09956cba37030c2f5b45917b771e5ed15"
        },
        {
            "id": "311ff2c8a9e8235d3dcee4306159f2d815c77cfa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=969",
            "value": "311ff2c8a9e8235d3dcee4306159f2d815c77cfa"
        },
        {
            "id": "72bd5c352f0450c8514a53f5d2e571164ebf52df",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=970",
            "value": "72bd5c352f0450c8514a53f5d2e571164ebf52df"
        },
        {
            "id": "452867ad960a5f06f5b6ada6d08711ccfaac1e02",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=975",
            "value": "452867ad960a5f06f5b6ada6d08711ccfaac1e02"
        },
        {
            "id": "0fe79273e64f84ebfc9f7f12d630b6e7f02f42f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=981",
            "value": "0fe79273e64f84ebfc9f7f12d630b6e7f02f42f0"
        },
        {
            "id": "0564be4e82a69c05533cd6817e0007708c386184",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=988",
            "value": "0564be4e82a69c05533cd6817e0007708c386184"
        },
        {
            "id": "85e982b55e654c906f1a8289181a8d2b60c530bb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=989",
            "value": "85e982b55e654c906f1a8289181a8d2b60c530bb"
        },
        {
            "id": "3f24d71aebfd98279fb3b2ef1898bcb8501f03e4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=995",
            "value": "3f24d71aebfd98279fb3b2ef1898bcb8501f03e4"
        },
        {
            "id": "23a5cb5c4aa595749c912282738375f53cbfee87",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=996",
            "value": "23a5cb5c4aa595749c912282738375f53cbfee87"
        },
        {
            "id": "ff26f5e7ad913394962c14b3a9638409d0720d1d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03040798&CISOPTR=999",
            "value": "ff26f5e7ad913394962c14b3a9638409d0720d1d"
        },
        {
            "id": "1b633ebbc00552aa78fa16c7dc93f5411c3c48f9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1014",
            "value": "1b633ebbc00552aa78fa16c7dc93f5411c3c48f9"
        },
        {
            "id": "e1e7ef838629d083986bf495349d56bd36578d74",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1015",
            "value": "e1e7ef838629d083986bf495349d56bd36578d74"
        },
        {
            "id": "98a5efc418c18552a2df73e83c47e16044d2c7a0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1027",
            "value": "98a5efc418c18552a2df73e83c47e16044d2c7a0"
        },
        {
            "id": "f20616ed621df75614320bc34b4f52db1fefcb4e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1028",
            "value": "f20616ed621df75614320bc34b4f52db1fefcb4e"
        },
        {
            "id": "2744baa7bfd59645e0def5d777b49356b34986ce",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1034",
            "value": "2744baa7bfd59645e0def5d777b49356b34986ce"
        },
        {
            "id": "2ecdba58c3fae59a93de75fdb5f3dc4fc6e30872",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1043",
            "value": "2ecdba58c3fae59a93de75fdb5f3dc4fc6e30872"
        },
        {
            "id": "f86672e52b5080ea6f8e2eb53696408a23ef170e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1045",
            "value": "f86672e52b5080ea6f8e2eb53696408a23ef170e"
        },
        {
            "id": "dd28c3773b92f7ce57920cf41bc715fa2e9fc7c5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1048",
            "value": "dd28c3773b92f7ce57920cf41bc715fa2e9fc7c5"
        },
        {
            "id": "6394d42c34614ccc3c6f56c0786885f6da3e8d22",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1049",
            "value": "6394d42c34614ccc3c6f56c0786885f6da3e8d22"
        },
        {
            "id": "899bb53617b7918b0e02e9e0e2975305c41b8208",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1053",
            "value": "899bb53617b7918b0e02e9e0e2975305c41b8208"
        },
        {
            "id": "309d26133f648965f5e10e7e6ad78c8b316e4f0a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1061",
            "value": "309d26133f648965f5e10e7e6ad78c8b316e4f0a"
        },
        {
            "id": "41c4d51ef72d5e12e4adea63e0beb085c2fadb54",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1062",
            "value": "41c4d51ef72d5e12e4adea63e0beb085c2fadb54"
        },
        {
            "id": "9f5e66b9b9a0074490c72065df7316f0090a5ff2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1066",
            "value": "9f5e66b9b9a0074490c72065df7316f0090a5ff2"
        },
        {
            "id": "a7b7f6a14154aee3548231c4271522340160fd4a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1067",
            "value": "a7b7f6a14154aee3548231c4271522340160fd4a"
        },
        {
            "id": "8d34c2919e2a8f04418ff454a2c933e58719c3ba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1068",
            "value": "8d34c2919e2a8f04418ff454a2c933e58719c3ba"
        },
        {
            "id": "6ed0e2081a5de80c0ce08ff204a37229cb8f6f52",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1071",
            "value": "6ed0e2081a5de80c0ce08ff204a37229cb8f6f52"
        },
        {
            "id": "63463e814c15f6ffe576ec77e955f00b01f4a5db",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1096",
            "value": "63463e814c15f6ffe576ec77e955f00b01f4a5db"
        },
        {
            "id": "b49b215a9791cc14ed8f73fa8eba63a523ecc4f6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1097",
            "value": "b49b215a9791cc14ed8f73fa8eba63a523ecc4f6"
        },
        {
            "id": "448fb49af80224ed775db1beeabb2a1e4250eafa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1113",
            "value": "448fb49af80224ed775db1beeabb2a1e4250eafa"
        },
        {
            "id": "1ea1b5a58e8ecba3735004b190d4be7aa93c1def",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1115",
            "value": "1ea1b5a58e8ecba3735004b190d4be7aa93c1def"
        },
        {
            "id": "31a9a331558763c021ba93877fc0c66145706422",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1125",
            "value": "31a9a331558763c021ba93877fc0c66145706422"
        },
        {
            "id": "4a01932e1042c4d967ede99c9fe26c489e2ecc65",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1126",
            "value": "4a01932e1042c4d967ede99c9fe26c489e2ecc65"
        },
        {
            "id": "d7c8b992ba48135fbe81f3560c43405c2d8f3c51",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1127",
            "value": "d7c8b992ba48135fbe81f3560c43405c2d8f3c51"
        },
        {
            "id": "d7a18cf512f194b4047a3452e74ebeab836505a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1128",
            "value": "d7a18cf512f194b4047a3452e74ebeab836505a8"
        },
        {
            "id": "f73a1ae404b74cd9520a59cf02c67693a6596776",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1129",
            "value": "f73a1ae404b74cd9520a59cf02c67693a6596776"
        },
        {
            "id": "d6f44575a4be9ee3cfbce536816ea19e581dc0dc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1130",
            "value": "d6f44575a4be9ee3cfbce536816ea19e581dc0dc"
        },
        {
            "id": "e47a11a4114ae155824bd755561f8c583e36bcc0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1157",
            "value": "e47a11a4114ae155824bd755561f8c583e36bcc0"
        },
        {
            "id": "cd3fad443533e331a2a92d4ac62d1e083d162909",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1158",
            "value": "cd3fad443533e331a2a92d4ac62d1e083d162909"
        },
        {
            "id": "e7d66a1e7b53397c22b220c4d1bab9bfc0eed853",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1166",
            "value": "e7d66a1e7b53397c22b220c4d1bab9bfc0eed853"
        },
        {
            "id": "aaa929b34c251f5efbf58ba5c97801a148168ade",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1167",
            "value": "aaa929b34c251f5efbf58ba5c97801a148168ade"
        },
        {
            "id": "5ebc4fc81833240551adbea35581ff0c214a6f38",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1168",
            "value": "5ebc4fc81833240551adbea35581ff0c214a6f38"
        },
        {
            "id": "5bcc5f1385f86aa1111208015bc4c13dad781af8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1170",
            "value": "5bcc5f1385f86aa1111208015bc4c13dad781af8"
        },
        {
            "id": "5035adce3885278c62758ef3ff16dd60e86b33f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1177",
            "value": "5035adce3885278c62758ef3ff16dd60e86b33f5"
        },
        {
            "id": "2e7a681500b378cc31d1295243b1c5c572a47d80",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1179",
            "value": "2e7a681500b378cc31d1295243b1c5c572a47d80"
        },
        {
            "id": "b9ce2d954c1a9210b7945df4dc2d1950ccbe3c94",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=118",
            "value": "b9ce2d954c1a9210b7945df4dc2d1950ccbe3c94"
        },
        {
            "id": "cd3651f73609b767eb4738575cd9ae5fc4412f45",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1181",
            "value": "cd3651f73609b767eb4738575cd9ae5fc4412f45"
        },
        {
            "id": "4816633cd72802fb517962b5f4e57ad95a806343",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1191",
            "value": "4816633cd72802fb517962b5f4e57ad95a806343"
        },
        {
            "id": "261c417a191164632b0e8bb29b9b380f63334a1c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1194",
            "value": "261c417a191164632b0e8bb29b9b380f63334a1c"
        },
        {
            "id": "ac12e9b8204f5c2a26ea310d6209aa4e6ab25fb6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1199",
            "value": "ac12e9b8204f5c2a26ea310d6209aa4e6ab25fb6"
        },
        {
            "id": "d077c15b777c53a048ac2906ef8a74b410f5ad55",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1210",
            "value": "d077c15b777c53a048ac2906ef8a74b410f5ad55"
        },
        {
            "id": "01a49bf1e48c1eeb73a8664c6ea9417886b741c4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1215",
            "value": "01a49bf1e48c1eeb73a8664c6ea9417886b741c4"
        },
        {
            "id": "50498ca1357f94acda4c2529f4e0d8a420964f7b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1217",
            "value": "50498ca1357f94acda4c2529f4e0d8a420964f7b"
        },
        {
            "id": "36b2c5405c455ba2e07db17d01d77401b7f14cd0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1218",
            "value": "36b2c5405c455ba2e07db17d01d77401b7f14cd0"
        },
        {
            "id": "81720fa67ee377654c0fe4f4b5944e300160ecf4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1220",
            "value": "81720fa67ee377654c0fe4f4b5944e300160ecf4"
        },
        {
            "id": "151959ba279424ea44ce0dbcfbea1d09ea8e4803",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1233",
            "value": "151959ba279424ea44ce0dbcfbea1d09ea8e4803"
        },
        {
            "id": "929986fe99f770b8b06046ae434eade9d31c5855",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1234",
            "value": "929986fe99f770b8b06046ae434eade9d31c5855"
        },
        {
            "id": "37052ca41550b6ac4e99feab26e1cb08b1efeb2e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1235",
            "value": "37052ca41550b6ac4e99feab26e1cb08b1efeb2e"
        },
        {
            "id": "7cfe980c06fae60e8128ecab93b1c6c3f9b9240c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1237",
            "value": "7cfe980c06fae60e8128ecab93b1c6c3f9b9240c"
        },
        {
            "id": "5d343fd07b66381f9bebdd504ef8a2274a01c210",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1238",
            "value": "5d343fd07b66381f9bebdd504ef8a2274a01c210"
        },
        {
            "id": "9d2fc9c5da6dc0a34e91966ec246f548feb30b8d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1239",
            "value": "9d2fc9c5da6dc0a34e91966ec246f548feb30b8d"
        },
        {
            "id": "0bc821a58aa936a71bf27379a3b426b1f5826a59",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1240",
            "value": "0bc821a58aa936a71bf27379a3b426b1f5826a59"
        },
        {
            "id": "05be777086ee8e6923ba500c257b3ba19fdaed0a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1258",
            "value": "05be777086ee8e6923ba500c257b3ba19fdaed0a"
        },
        {
            "id": "348d2b67bd368a8f29d878691a9f238c3df4d42b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1265",
            "value": "348d2b67bd368a8f29d878691a9f238c3df4d42b"
        },
        {
            "id": "f3c2e9b76ae8dd11f8882ddd280759c3a0941449",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1300",
            "value": "f3c2e9b76ae8dd11f8882ddd280759c3a0941449"
        },
        {
            "id": "5b18204190ce076dcccb7ee7fa90a5856c7506b1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1301",
            "value": "5b18204190ce076dcccb7ee7fa90a5856c7506b1"
        },
        {
            "id": "e63e24721a4e2fb9ce4cb97fde52a87e20b6b5f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1302",
            "value": "e63e24721a4e2fb9ce4cb97fde52a87e20b6b5f0"
        },
        {
            "id": "3d0fea2b8782bcafdc0976a338bfa811c97311b0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1304",
            "value": "3d0fea2b8782bcafdc0976a338bfa811c97311b0"
        },
        {
            "id": "328bfbcd7bbbabcc4cecdb1aa5be6dc016e8193f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1305",
            "value": "328bfbcd7bbbabcc4cecdb1aa5be6dc016e8193f"
        },
        {
            "id": "4f66f038cc70588390d0b34f2b172608c38e1c16",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1321",
            "value": "4f66f038cc70588390d0b34f2b172608c38e1c16"
        },
        {
            "id": "d0b5997c459321faafe07e665ba230e70933ecbf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1324",
            "value": "d0b5997c459321faafe07e665ba230e70933ecbf"
        },
        {
            "id": "12d65e34e92daef40286305fb5e93b210c473f0b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1342",
            "value": "12d65e34e92daef40286305fb5e93b210c473f0b"
        },
        {
            "id": "094515214e1cc936cc58cd5325927d5e717f06ba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1343",
            "value": "094515214e1cc936cc58cd5325927d5e717f06ba"
        },
        {
            "id": "495bf005a5874e747732f8cb137b6e0520c4aea2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1344",
            "value": "495bf005a5874e747732f8cb137b6e0520c4aea2"
        },
        {
            "id": "fa1261b303da4ee70c93c1121b664b032675ede7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1345",
            "value": "fa1261b303da4ee70c93c1121b664b032675ede7"
        },
        {
            "id": "6f95ac96d39c8916d6c3b3c1765b5b9b4f6a8baf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1346",
            "value": "6f95ac96d39c8916d6c3b3c1765b5b9b4f6a8baf"
        },
        {
            "id": "0065c9233d20ff4eb0facdb73339b60bdbf39d0f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1364",
            "value": "0065c9233d20ff4eb0facdb73339b60bdbf39d0f"
        },
        {
            "id": "2dc28756822c63eccbfd2792257a52c0b4d4f522",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1365",
            "value": "2dc28756822c63eccbfd2792257a52c0b4d4f522"
        },
        {
            "id": "92df7e312d96187743ec54a7916567791b98673b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1366",
            "value": "92df7e312d96187743ec54a7916567791b98673b"
        },
        {
            "id": "635f2c94c1c886f08014ae82f697474a878818bf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1383",
            "value": "635f2c94c1c886f08014ae82f697474a878818bf"
        },
        {
            "id": "361089e166573b4f0f656c130b718a645a134972",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1384",
            "value": "361089e166573b4f0f656c130b718a645a134972"
        },
        {
            "id": "9da7fb3f9a96609655c57a4a055cc4ca513bce04",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1385",
            "value": "9da7fb3f9a96609655c57a4a055cc4ca513bce04"
        },
        {
            "id": "e284b987799b6a7c9fbe5dda0b956b59a1b33402",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1386",
            "value": "e284b987799b6a7c9fbe5dda0b956b59a1b33402"
        },
        {
            "id": "2451b55ed43c17dc3beab27e2dd81b6c8b06ba21",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1387",
            "value": "2451b55ed43c17dc3beab27e2dd81b6c8b06ba21"
        },
        {
            "id": "c02b40d3ef0314cfb684c6b9b6343e0eb29142db",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1405",
            "value": "c02b40d3ef0314cfb684c6b9b6343e0eb29142db"
        },
        {
            "id": "b8229479e8f9a24b083cf82f0dbda22e9190ed53",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1416",
            "value": "b8229479e8f9a24b083cf82f0dbda22e9190ed53"
        },
        {
            "id": "51500b45d13413d41215fccfc43613f5d3b5fd7b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1417",
            "value": "51500b45d13413d41215fccfc43613f5d3b5fd7b"
        },
        {
            "id": "e6a5b5d5b8b408724ec80a6199fa890e3d931b0b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1422",
            "value": "e6a5b5d5b8b408724ec80a6199fa890e3d931b0b"
        },
        {
            "id": "d0a41fba0e16b48815e43178a913e1c8c2f1df34",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1433",
            "value": "d0a41fba0e16b48815e43178a913e1c8c2f1df34"
        },
        {
            "id": "5ee0db0f9b09125c8775550f80b15234d498c1d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1434",
            "value": "5ee0db0f9b09125c8775550f80b15234d498c1d4"
        },
        {
            "id": "1c7de571bfeee7a961eb6a220c84eac94000b1c9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1435",
            "value": "1c7de571bfeee7a961eb6a220c84eac94000b1c9"
        },
        {
            "id": "b3f8c657912f84f283120bd8281f0b305eb2b0fd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1437",
            "value": "b3f8c657912f84f283120bd8281f0b305eb2b0fd"
        },
        {
            "id": "21015eb4860253378ec00b002f30ace8881eed47",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1453",
            "value": "21015eb4860253378ec00b002f30ace8881eed47"
        },
        {
            "id": "b5b4bb6ce0ce6e4bfa27f0957eae349107553ff4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1454",
            "value": "b5b4bb6ce0ce6e4bfa27f0957eae349107553ff4"
        },
        {
            "id": "b8334d1004715a0cfadd566b38ab276098dd3fba",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1458",
            "value": "b8334d1004715a0cfadd566b38ab276098dd3fba"
        },
        {
            "id": "41a1508e442f4586ad11ec1718b4482474c3746f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=146",
            "value": "41a1508e442f4586ad11ec1718b4482474c3746f"
        },
        {
            "id": "a9bcf3002d5106f5db354a255f989034e5b9cd6a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1470",
            "value": "a9bcf3002d5106f5db354a255f989034e5b9cd6a"
        },
        {
            "id": "98817cdfe97b6aa9c027c053d47effd064acf6fe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1472",
            "value": "98817cdfe97b6aa9c027c053d47effd064acf6fe"
        },
        {
            "id": "0a6120d27516ece9c80243818f9aaf1addcc8a8a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1473",
            "value": "0a6120d27516ece9c80243818f9aaf1addcc8a8a"
        },
        {
            "id": "788cab75ee5d5b116892dd8d556647a1bddb7c39",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1474",
            "value": "788cab75ee5d5b116892dd8d556647a1bddb7c39"
        },
        {
            "id": "8bc727fa76f98656d32390adaf82f4b6301b7dee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1485",
            "value": "8bc727fa76f98656d32390adaf82f4b6301b7dee"
        },
        {
            "id": "48b763875b4d637c0898a4c9b9687b4bd6c0ade1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1486",
            "value": "48b763875b4d637c0898a4c9b9687b4bd6c0ade1"
        },
        {
            "id": "7d4ef01c190e88c75b2a8c6593c03664688f7da6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1487",
            "value": "7d4ef01c190e88c75b2a8c6593c03664688f7da6"
        },
        {
            "id": "f9d6e0e84624f73f2ad781fe44a943b06c73cb9b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1488",
            "value": "f9d6e0e84624f73f2ad781fe44a943b06c73cb9b"
        },
        {
            "id": "bc8682e2579b23dfda9fa913df1d37d2884a67d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1502",
            "value": "bc8682e2579b23dfda9fa913df1d37d2884a67d2"
        },
        {
            "id": "c589ce880c1525f2a58d11d6f79f07c4d8308cd1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1514",
            "value": "c589ce880c1525f2a58d11d6f79f07c4d8308cd1"
        },
        {
            "id": "5f8ef85acd481adfd8375188f6d4b644ecfe44be",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1515",
            "value": "5f8ef85acd481adfd8375188f6d4b644ecfe44be"
        },
        {
            "id": "917845749698932aca12a3ce65bbe0936f6378c5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1527",
            "value": "917845749698932aca12a3ce65bbe0936f6378c5"
        },
        {
            "id": "3111ca7cb9b65d20b6fab1726d560adc6c0f6188",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1538",
            "value": "3111ca7cb9b65d20b6fab1726d560adc6c0f6188"
        },
        {
            "id": "95dc54f01ad583c683afc7a47ad681a0674fa34a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1551",
            "value": "95dc54f01ad583c683afc7a47ad681a0674fa34a"
        },
        {
            "id": "60814505f6f6fb1d9573b9758da6c9ec11746745",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1572",
            "value": "60814505f6f6fb1d9573b9758da6c9ec11746745"
        },
        {
            "id": "beb584df477439a2fabf178125f6c6bb286488d8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1573",
            "value": "beb584df477439a2fabf178125f6c6bb286488d8"
        },
        {
            "id": "0a1253544e7c10a4225eed8984c1f099a0021d46",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1578",
            "value": "0a1253544e7c10a4225eed8984c1f099a0021d46"
        },
        {
            "id": "01fd2d942924a21d32c79c4906f8d40f0e986ce0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=1594",
            "value": "01fd2d942924a21d32c79c4906f8d40f0e986ce0"
        },
        {
            "id": "92ad7fdc33c987bc3deed17872bbc4cffe37bba8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=186",
            "value": "92ad7fdc33c987bc3deed17872bbc4cffe37bba8"
        },
        {
            "id": "e67757f48c302fd91f7a6d8f723ab6b8594e9787",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=187",
            "value": "e67757f48c302fd91f7a6d8f723ab6b8594e9787"
        },
        {
            "id": "58330a08c0f51fef0c2d33cdccda6127067c676f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=210",
            "value": "58330a08c0f51fef0c2d33cdccda6127067c676f"
        },
        {
            "id": "af807084821d458a829c52c1e4faa2089d312b63",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=246",
            "value": "af807084821d458a829c52c1e4faa2089d312b63"
        },
        {
            "id": "dbe72b0cb8f27a02a5e2f92b15fe4694141e53f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=280",
            "value": "dbe72b0cb8f27a02a5e2f92b15fe4694141e53f0"
        },
        {
            "id": "b5d5dcfcfe116fd38d2817b963a51d57fa59fedf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=282",
            "value": "b5d5dcfcfe116fd38d2817b963a51d57fa59fedf"
        },
        {
            "id": "c563c7a7d58c2286435a8cd95e21c3822357a906",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=284",
            "value": "c563c7a7d58c2286435a8cd95e21c3822357a906"
        },
        {
            "id": "731127a94f128714fee34bffbc79b442d8eeb01f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=322",
            "value": "731127a94f128714fee34bffbc79b442d8eeb01f"
        },
        {
            "id": "b8359d2b275549aea69f026bb4e61fec92fe7790",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=359",
            "value": "b8359d2b275549aea69f026bb4e61fec92fe7790"
        },
        {
            "id": "4f8c60c7d2166936e91d2f7a0aea7e1fb02cb2bb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=373",
            "value": "4f8c60c7d2166936e91d2f7a0aea7e1fb02cb2bb"
        },
        {
            "id": "c831a9242b7e49c78a2cc38ab80623bba7c7d158",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=385",
            "value": "c831a9242b7e49c78a2cc38ab80623bba7c7d158"
        },
        {
            "id": "03fb3734410d97f810d04ab790a793fbccc5acb3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=398",
            "value": "03fb3734410d97f810d04ab790a793fbccc5acb3"
        },
        {
            "id": "8aa120c87ae3123c0ea7f1571de6d82f404d42f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=426",
            "value": "8aa120c87ae3123c0ea7f1571de6d82f404d42f5"
        },
        {
            "id": "d3553a613c70a9e707dda4f0f2a60a9a6fe983dd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=436",
            "value": "d3553a613c70a9e707dda4f0f2a60a9a6fe983dd"
        },
        {
            "id": "100df988e09baa25917b744e90a120204af40689",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=458",
            "value": "100df988e09baa25917b744e90a120204af40689"
        },
        {
            "id": "cb8aa01ff283c88586101042849e2c8f2fe9970f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=469",
            "value": "cb8aa01ff283c88586101042849e2c8f2fe9970f"
        },
        {
            "id": "fe5e7b1677e1a53a8031cccfacb5464526e000f2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=497",
            "value": "fe5e7b1677e1a53a8031cccfacb5464526e000f2"
        },
        {
            "id": "06b0750b273d0a6bb41c05474de655b0e6da31ae",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=498",
            "value": "06b0750b273d0a6bb41c05474de655b0e6da31ae"
        },
        {
            "id": "a7aa95810a50535f1fbc3db5f938522354d1335e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=522",
            "value": "a7aa95810a50535f1fbc3db5f938522354d1335e"
        },
        {
            "id": "01092656cd5ca97f246dc2aa619fd3254213fc25",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=524",
            "value": "01092656cd5ca97f246dc2aa619fd3254213fc25"
        },
        {
            "id": "85cb6673f5ff80233a8aa6cb89c3cb1d47e3eaee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=538",
            "value": "85cb6673f5ff80233a8aa6cb89c3cb1d47e3eaee"
        },
        {
            "id": "375df2251207a203e65be0f4009028c6de27da1e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=539",
            "value": "375df2251207a203e65be0f4009028c6de27da1e"
        },
        {
            "id": "51a7f718ab831910369b4490c983edeb52d8eb89",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=556",
            "value": "51a7f718ab831910369b4490c983edeb52d8eb89"
        },
        {
            "id": "a125f1c740e241de2aaf237221b24f907730e0f5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=557",
            "value": "a125f1c740e241de2aaf237221b24f907730e0f5"
        },
        {
            "id": "6a090822a2afaba3afc18bc8af3ff614f064317a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=558",
            "value": "6a090822a2afaba3afc18bc8af3ff614f064317a"
        },
        {
            "id": "12e08d2af6463e21d0f1596d6dda243516594636",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=574",
            "value": "12e08d2af6463e21d0f1596d6dda243516594636"
        },
        {
            "id": "856f0ac525a4caa5fb7bd08f58eed284a79fab78",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=584",
            "value": "856f0ac525a4caa5fb7bd08f58eed284a79fab78"
        },
        {
            "id": "159a980379efc538b45ce45959ead590983ab137",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=599",
            "value": "159a980379efc538b45ce45959ead590983ab137"
        },
        {
            "id": "6162f35813c239a8d63a911f2ca00004c74e9482",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=661",
            "value": "6162f35813c239a8d63a911f2ca00004c74e9482"
        },
        {
            "id": "8b667ede28e6d64971f137d5bb9f90d5954fc659",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=727",
            "value": "8b667ede28e6d64971f137d5bb9f90d5954fc659"
        },
        {
            "id": "b70b08e6675a7a28fdc282f7e78dca42db4aef8b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=728",
            "value": "b70b08e6675a7a28fdc282f7e78dca42db4aef8b"
        },
        {
            "id": "16ba6308215012b8468fff49a4cc6b7954e2a0f0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=729",
            "value": "16ba6308215012b8468fff49a4cc6b7954e2a0f0"
        },
        {
            "id": "27e7346e96e8d88f967e2c9eeead85b6aab95d41",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=739",
            "value": "27e7346e96e8d88f967e2c9eeead85b6aab95d41"
        },
        {
            "id": "582f4391eef9f89856ddbdaab2196f2525efb889",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=740",
            "value": "582f4391eef9f89856ddbdaab2196f2525efb889"
        },
        {
            "id": "55aefc4266df636da3341979f50a75a2da4fb558",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=756",
            "value": "55aefc4266df636da3341979f50a75a2da4fb558"
        },
        {
            "id": "36e477cc6dc043e3c82df965c32f090a4de84391",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=767",
            "value": "36e477cc6dc043e3c82df965c32f090a4de84391"
        },
        {
            "id": "d8d23520df04b3a216f48b75275ae37a1930d689",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=781",
            "value": "d8d23520df04b3a216f48b75275ae37a1930d689"
        },
        {
            "id": "0a0aa8a8c6d31fcf35ccbc0ab19bcd7a88c572b5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=782",
            "value": "0a0aa8a8c6d31fcf35ccbc0ab19bcd7a88c572b5"
        },
        {
            "id": "555d4800416069672198ae8754b1f023137ac5a3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=794",
            "value": "555d4800416069672198ae8754b1f023137ac5a3"
        },
        {
            "id": "f4210d8ab207975c87358a6cbc96b4cae60f964a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=795",
            "value": "f4210d8ab207975c87358a6cbc96b4cae60f964a"
        },
        {
            "id": "4b03c61ef5ef36e3f13d997e0f272c085fdbecc8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=797",
            "value": "4b03c61ef5ef36e3f13d997e0f272c085fdbecc8"
        },
        {
            "id": "7616643df7e6128fd016476a6af632cc4eb3773d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=810",
            "value": "7616643df7e6128fd016476a6af632cc4eb3773d"
        },
        {
            "id": "9eaf5a46bf7d8219ec63e9f2d528205576b2bf2b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=823",
            "value": "9eaf5a46bf7d8219ec63e9f2d528205576b2bf2b"
        },
        {
            "id": "59f5947296e53e70bc723845b0e7a2b6bd824a2b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=832",
            "value": "59f5947296e53e70bc723845b0e7a2b6bd824a2b"
        },
        {
            "id": "1cfa3229ccf011af5f579570754ab3212d51e308",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=849",
            "value": "1cfa3229ccf011af5f579570754ab3212d51e308"
        },
        {
            "id": "2fed35636b1c496a991c64cdfd3d6c5988087f3a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=856",
            "value": "2fed35636b1c496a991c64cdfd3d6c5988087f3a"
        },
        {
            "id": "d2c59c99ba228094cfb724a3f007abd3c62a2d8a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=871",
            "value": "d2c59c99ba228094cfb724a3f007abd3c62a2d8a"
        },
        {
            "id": "933f007d6ef14dbba84b4b7a19ff0d25bf46c511",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=872",
            "value": "933f007d6ef14dbba84b4b7a19ff0d25bf46c511"
        },
        {
            "id": "0f3a6a42ccfda308a5c6e90f0c4b98975ff4066d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=890",
            "value": "0f3a6a42ccfda308a5c6e90f0c4b98975ff4066d"
        },
        {
            "id": "9e65b7c754c6565c8a0c92a0da1d0219525ad890",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=892",
            "value": "9e65b7c754c6565c8a0c92a0da1d0219525ad890"
        },
        {
            "id": "d98f3565085d1e35155de98f7384356e61fc1040",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=905",
            "value": "d98f3565085d1e35155de98f7384356e61fc1040"
        },
        {
            "id": "40965ec02ae2025643c469f5a6127e5625dc349b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=906",
            "value": "40965ec02ae2025643c469f5a6127e5625dc349b"
        },
        {
            "id": "de869d81808ce86b47147f9f1c37097ebaebf407",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=907",
            "value": "de869d81808ce86b47147f9f1c37097ebaebf407"
        },
        {
            "id": "ddb0d18e91222a036a8f391d1745677b72440730",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=908",
            "value": "ddb0d18e91222a036a8f391d1745677b72440730"
        },
        {
            "id": "cd422a1b53b3592748e166fb12cd8d78b0f6b6da",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=910",
            "value": "cd422a1b53b3592748e166fb12cd8d78b0f6b6da"
        },
        {
            "id": "ca934a29a334c4d44fbe4008b850755ffe52eb37",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=919",
            "value": "ca934a29a334c4d44fbe4008b850755ffe52eb37"
        },
        {
            "id": "785ded6afc41dc2ff3af747cee49b4cb2877c7ad",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=920",
            "value": "785ded6afc41dc2ff3af747cee49b4cb2877c7ad"
        },
        {
            "id": "18894faaab1ca02a78046e9c965c33fe44f97845",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=921",
            "value": "18894faaab1ca02a78046e9c965c33fe44f97845"
        },
        {
            "id": "0cf0a20433433d5065f96bf131f454a8a5d80e70",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=927",
            "value": "0cf0a20433433d5065f96bf131f454a8a5d80e70"
        },
        {
            "id": "4486656b2680fdcd04026a5c4a5bcc55fb34cff2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=937",
            "value": "4486656b2680fdcd04026a5c4a5bcc55fb34cff2"
        },
        {
            "id": "2d9fc8ca5abe14a019f0c098bab5ec547c70e4ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=938",
            "value": "2d9fc8ca5abe14a019f0c098bab5ec547c70e4ef"
        },
        {
            "id": "593fefe81c26ee4e6d1db528c81226fcac8a2707",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=940",
            "value": "593fefe81c26ee4e6d1db528c81226fcac8a2707"
        },
        {
            "id": "fb4df9222fc2b3a92ddf52373dcbd632e009cafe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/03701263&CISOPTR=983",
            "value": "fb4df9222fc2b3a92ddf52373dcbd632e009cafe"
        },
        {
            "id": "642b25af16c38c99c49d0cd75e913c2ee7f61108",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=102",
            "value": "642b25af16c38c99c49d0cd75e913c2ee7f61108"
        },
        {
            "id": "24d8ac412719e623af0db3285472be17271aefdf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=105",
            "value": "24d8ac412719e623af0db3285472be17271aefdf"
        },
        {
            "id": "d262d78d5e1288fe3d2883c4da331d4a4ee88bc1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=106",
            "value": "d262d78d5e1288fe3d2883c4da331d4a4ee88bc1"
        },
        {
            "id": "b977f8f93929bbad84bbffb370174512eec329e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=111",
            "value": "b977f8f93929bbad84bbffb370174512eec329e9"
        },
        {
            "id": "829c72c1f1b663a016078968c6b6174fad67139b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=112",
            "value": "829c72c1f1b663a016078968c6b6174fad67139b"
        },
        {
            "id": "7b580aa2772fb6a6ea669befd5e73a8803806664",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=132",
            "value": "7b580aa2772fb6a6ea669befd5e73a8803806664"
        },
        {
            "id": "a86ec6706be06fb653a5bf3890af81dfa5d94b57",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=150",
            "value": "a86ec6706be06fb653a5bf3890af81dfa5d94b57"
        },
        {
            "id": "71dbbbd9f7448868dd2aa6f7e47e1598426bbfee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=155",
            "value": "71dbbbd9f7448868dd2aa6f7e47e1598426bbfee"
        },
        {
            "id": "ec55ebc60d5df7be1af7b9f68103e4711ec1b880",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=157",
            "value": "ec55ebc60d5df7be1af7b9f68103e4711ec1b880"
        },
        {
            "id": "a664e4eff1f2214bc08aba358948e82ee5bae04b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=161",
            "value": "a664e4eff1f2214bc08aba358948e82ee5bae04b"
        },
        {
            "id": "4abc07565e77f38a625cce023f3680de47e3dda2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=180",
            "value": "4abc07565e77f38a625cce023f3680de47e3dda2"
        },
        {
            "id": "1562c4730ae25ef2f4acc66a56dd7efd8a992441",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=181",
            "value": "1562c4730ae25ef2f4acc66a56dd7efd8a992441"
        },
        {
            "id": "602ed2a154075ec9a0f7f4e9453f3594d9e8138b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=194",
            "value": "602ed2a154075ec9a0f7f4e9453f3594d9e8138b"
        },
        {
            "id": "ae4659c712cf7b9a97fdee1503d4aa468f97fa5e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=196",
            "value": "ae4659c712cf7b9a97fdee1503d4aa468f97fa5e"
        },
        {
            "id": "c453720af1f58fdc3df2c06662ba38c22f1e4978",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=198",
            "value": "c453720af1f58fdc3df2c06662ba38c22f1e4978"
        },
        {
            "id": "b330dce808e960169d825fd090d2996240954b86",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=200",
            "value": "b330dce808e960169d825fd090d2996240954b86"
        },
        {
            "id": "24d2a04d2f8fb88629943ed84fdc3cc2166d28f3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=202",
            "value": "24d2a04d2f8fb88629943ed84fdc3cc2166d28f3"
        },
        {
            "id": "fa89eb29cac2361f4d3eb75d965eb8b2ff5f6476",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=204",
            "value": "fa89eb29cac2361f4d3eb75d965eb8b2ff5f6476"
        },
        {
            "id": "3df24447814693fc1fa070692c4912f818b2a800",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=206",
            "value": "3df24447814693fc1fa070692c4912f818b2a800"
        },
        {
            "id": "23b1cf2d73962f820d94d368fe3a446f9941a574",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=208",
            "value": "23b1cf2d73962f820d94d368fe3a446f9941a574"
        },
        {
            "id": "f48d1fdfa09e32f37bb052e039e5dca176cb55e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=224",
            "value": "f48d1fdfa09e32f37bb052e039e5dca176cb55e1"
        },
        {
            "id": "d7a0d1ed2b74d7be6f65143ceecc10cd0fb6866a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=227",
            "value": "d7a0d1ed2b74d7be6f65143ceecc10cd0fb6866a"
        },
        {
            "id": "3feffd1b8a3cc08afbfc972fe8be1051284e9521",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=231",
            "value": "3feffd1b8a3cc08afbfc972fe8be1051284e9521"
        },
        {
            "id": "5ef5790d41308cba485685bce9f94a8c5628ac3f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=233",
            "value": "5ef5790d41308cba485685bce9f94a8c5628ac3f"
        },
        {
            "id": "d6016dc9349d3ce4788406cd2a756e13bd0d639a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=235",
            "value": "d6016dc9349d3ce4788406cd2a756e13bd0d639a"
        },
        {
            "id": "cdce5256fc4383c0ffe3330fdc15c75a464ae263",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=238",
            "value": "cdce5256fc4383c0ffe3330fdc15c75a464ae263"
        },
        {
            "id": "cd7f1e89e24faec2cad38da5113dd636e8d81c93",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=252",
            "value": "cd7f1e89e24faec2cad38da5113dd636e8d81c93"
        },
        {
            "id": "d9ba34f799fde554cbe4c683acfc229c726f3b07",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=254",
            "value": "d9ba34f799fde554cbe4c683acfc229c726f3b07"
        },
        {
            "id": "7322732e661a45cc4715e6211eb9827384d26e19",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=261",
            "value": "7322732e661a45cc4715e6211eb9827384d26e19"
        },
        {
            "id": "7f2e6eac840b3ec4b29664876d0440b8010a240d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=264",
            "value": "7f2e6eac840b3ec4b29664876d0440b8010a240d"
        },
        {
            "id": "6bfd78c4a7881d097df44b2c8bb08717c83384e3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=279",
            "value": "6bfd78c4a7881d097df44b2c8bb08717c83384e3"
        },
        {
            "id": "54c2916bdfbce8b491b841cdfb27254902eb0fe9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=281",
            "value": "54c2916bdfbce8b491b841cdfb27254902eb0fe9"
        },
        {
            "id": "76b7af2dac5f7117dbf160bdcc5ad18874df1f9d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=283",
            "value": "76b7af2dac5f7117dbf160bdcc5ad18874df1f9d"
        },
        {
            "id": "7c8b934e4a6fa9609723c263648cd4a2adb2e8e1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=284",
            "value": "7c8b934e4a6fa9609723c263648cd4a2adb2e8e1"
        },
        {
            "id": "00e82232cc97b13a9c3c25a960a23847f1d214e9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=297",
            "value": "00e82232cc97b13a9c3c25a960a23847f1d214e9"
        },
        {
            "id": "8eaad83d2a5eedb90fde197890bc1d8e74c30a30",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=303",
            "value": "8eaad83d2a5eedb90fde197890bc1d8e74c30a30"
        },
        {
            "id": "28af4eb98df51193a818bc4117086dc777bbbdee",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=305",
            "value": "28af4eb98df51193a818bc4117086dc777bbbdee"
        },
        {
            "id": "9bbc521c34f459924d15af14bc9f1e77c33f67f7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=308",
            "value": "9bbc521c34f459924d15af14bc9f1e77c33f67f7"
        },
        {
            "id": "022c6b4e8a9bcd24784434402245f5c0c663c7bc",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=311",
            "value": "022c6b4e8a9bcd24784434402245f5c0c663c7bc"
        },
        {
            "id": "cfbf80bad176b51a0ba88cf5eda671ca75233834",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=331",
            "value": "cfbf80bad176b51a0ba88cf5eda671ca75233834"
        },
        {
            "id": "77ebe65d3422a491ec142658b2af2849b4fa2cbd",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=334",
            "value": "77ebe65d3422a491ec142658b2af2849b4fa2cbd"
        },
        {
            "id": "d53357b149fc898a152cd0ed2ce5d9aa06f362a8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=34",
            "value": "d53357b149fc898a152cd0ed2ce5d9aa06f362a8"
        },
        {
            "id": "bb9c3dcb26e4952f4db9fd3f1cb76b7dc146bffa",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=357",
            "value": "bb9c3dcb26e4952f4db9fd3f1cb76b7dc146bffa"
        },
        {
            "id": "b80c426bf99720ead1743db2d7dd0f4d4163d881",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=358",
            "value": "b80c426bf99720ead1743db2d7dd0f4d4163d881"
        },
        {
            "id": "2b87ba859cdcd41ded8a0445d66477668a1b5a4a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=376",
            "value": "2b87ba859cdcd41ded8a0445d66477668a1b5a4a"
        },
        {
            "id": "ece0264311c2570617f882fabb20cedf976b26bb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=385",
            "value": "ece0264311c2570617f882fabb20cedf976b26bb"
        },
        {
            "id": "492bd50fb480f3aa649edd27bde5a97bf4d5c43e",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=389",
            "value": "492bd50fb480f3aa649edd27bde5a97bf4d5c43e"
        },
        {
            "id": "3fb4cebef80312ab8ac06d4364aa01e8935c34ed",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=39",
            "value": "3fb4cebef80312ab8ac06d4364aa01e8935c34ed"
        },
        {
            "id": "bc9d6b14ef29d9dffd4bbdcf87d6756e358eb094",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=391",
            "value": "bc9d6b14ef29d9dffd4bbdcf87d6756e358eb094"
        },
        {
            "id": "bb19944a3afe1cedaf6fa93487484f178b909903",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=393",
            "value": "bb19944a3afe1cedaf6fa93487484f178b909903"
        },
        {
            "id": "f0ff69e9bb06e93cb8d65d6492eabf7f847a88a6",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=413",
            "value": "f0ff69e9bb06e93cb8d65d6492eabf7f847a88a6"
        },
        {
            "id": "e3618b758ef41158a576059338f75e16ab6b27d5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=416",
            "value": "e3618b758ef41158a576059338f75e16ab6b27d5"
        },
        {
            "id": "ed72f110b97e4564f0666da8ce42324d676adf5a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=417",
            "value": "ed72f110b97e4564f0666da8ce42324d676adf5a"
        },
        {
            "id": "049ac9dd3316371d99d0dc1a9c08e0aa57d915bf",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=422",
            "value": "049ac9dd3316371d99d0dc1a9c08e0aa57d915bf"
        },
        {
            "id": "c8608d39b62d7a4ee1ab2e945fa947c0fb48bfea",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=423",
            "value": "c8608d39b62d7a4ee1ab2e945fa947c0fb48bfea"
        },
        {
            "id": "6059687cc35c6556f12ad33cbca6f7c8e972ac00",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=56",
            "value": "6059687cc35c6556f12ad33cbca6f7c8e972ac00"
        },
        {
            "id": "55c01d1b290161cfb4b119039a36d2f3bbb76684",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=62",
            "value": "55c01d1b290161cfb4b119039a36d2f3bbb76684"
        },
        {
            "id": "7bdd8bd0bb118fb0524fbbfa3fe3ddf705875a70",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=83",
            "value": "7bdd8bd0bb118fb0524fbbfa3fe3ddf705875a70"
        },
        {
            "id": "e66b314773bb8bbeb32e4bdbbf2edf71a40a915b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=84",
            "value": "e66b314773bb8bbeb32e4bdbbf2edf71a40a915b"
        },
        {
            "id": "1f8ca9c0188728546bd18594f5a6025396343e0d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10213589&CISOPTR=90",
            "value": "1f8ca9c0188728546bd18594f5a6025396343e0d"
        },
        {
            "id": "a5526eec9cfd371eec63ee5e930053d5322e38ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=152",
            "value": "a5526eec9cfd371eec63ee5e930053d5322e38ef"
        },
        {
            "id": "5fad293bbc5f4bd1eacb9ad2ddd80152aaa77230",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=16",
            "value": "5fad293bbc5f4bd1eacb9ad2ddd80152aaa77230"
        },
        {
            "id": "5a646337075cbaacd678314b113e9a44d58705ae",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=165",
            "value": "5a646337075cbaacd678314b113e9a44d58705ae"
        },
        {
            "id": "97850fdc818b288448c70233118472ca7513f18c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=206",
            "value": "97850fdc818b288448c70233118472ca7513f18c"
        },
        {
            "id": "1e40731d3d67294049dc1c224f7a4ff38249b018",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=209",
            "value": "1e40731d3d67294049dc1c224f7a4ff38249b018"
        },
        {
            "id": "a5eef3b08740cfe795ac797781d602c99e96abe1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=212",
            "value": "a5eef3b08740cfe795ac797781d602c99e96abe1"
        },
        {
            "id": "d1dcd6c9700922afac894a3124c97f667d1e6e60",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=215",
            "value": "d1dcd6c9700922afac894a3124c97f667d1e6e60"
        },
        {
            "id": "e13ae6cc0345e9a52ff2dfa70331e50153560f4c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=223",
            "value": "e13ae6cc0345e9a52ff2dfa70331e50153560f4c"
        },
        {
            "id": "25c052af9d05bac5094269422df942ac6b33e267",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=242",
            "value": "25c052af9d05bac5094269422df942ac6b33e267"
        },
        {
            "id": "e46d78189224732cc72e11ac148ad339c9f4317c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=249",
            "value": "e46d78189224732cc72e11ac148ad339c9f4317c"
        },
        {
            "id": "4d6cb312ba072a947d2fd9210cbc67c880666ad5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=284",
            "value": "4d6cb312ba072a947d2fd9210cbc67c880666ad5"
        },
        {
            "id": "7cda88c09814c5a75eacfeb2d8c26a096eb3c702",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=295",
            "value": "7cda88c09814c5a75eacfeb2d8c26a096eb3c702"
        },
        {
            "id": "4cf9f81d43523cb047bb30d0e7b6fdb704752f5f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=35",
            "value": "4cf9f81d43523cb047bb30d0e7b6fdb704752f5f"
        },
        {
            "id": "7b5ab5ebcd6accb203ae8758004ccd0df7b421a2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=39",
            "value": "7b5ab5ebcd6accb203ae8758004ccd0df7b421a2"
        },
        {
            "id": "1d6c93fe9f5e06a8d506e9b457025175a03c97e7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=58",
            "value": "1d6c93fe9f5e06a8d506e9b457025175a03c97e7"
        },
        {
            "id": "2b9b24b22a6251562f8d3f070960af959f37d627",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/10233121&CISOPTR=6",
            "value": "2b9b24b22a6251562f8d3f070960af959f37d627"
        },
        {
            "id": "764f164d6aea89f056ad9d9b5570be7b3461978f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=1",
            "value": "764f164d6aea89f056ad9d9b5570be7b3461978f"
        },
        {
            "id": "5aff8da05e100660c1ac1afe99811afe451448eb",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=10",
            "value": "5aff8da05e100660c1ac1afe99811afe451448eb"
        },
        {
            "id": "4107bd64b6ded7686f283ab871cfa0d6dfcf1067",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=100",
            "value": "4107bd64b6ded7686f283ab871cfa0d6dfcf1067"
        },
        {
            "id": "18d2e164ee37fdb5fccb31b6fa39795b93734bfe",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=101",
            "value": "18d2e164ee37fdb5fccb31b6fa39795b93734bfe"
        },
        {
            "id": "8d3533f337ce60a1e30dcda8034903c046d3b835",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=104",
            "value": "8d3533f337ce60a1e30dcda8034903c046d3b835"
        },
        {
            "id": "ac256c1dca242a13497f0d88f810d3ee54afbb72",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=105",
            "value": "ac256c1dca242a13497f0d88f810d3ee54afbb72"
        },
        {
            "id": "963cd60a38d4664a55b9226af0f8e5f9f74845d2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=12",
            "value": "963cd60a38d4664a55b9226af0f8e5f9f74845d2"
        },
        {
            "id": "39070f48e025da26a540da4a10051aed294591a4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=13",
            "value": "39070f48e025da26a540da4a10051aed294591a4"
        },
        {
            "id": "1a8f171fbf95231de9d64a6554b912dd7b6ecb16",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=131",
            "value": "1a8f171fbf95231de9d64a6554b912dd7b6ecb16"
        },
        {
            "id": "9bca6c384e53a7bf770aedd752d5bfc8fbf1cdf0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=136",
            "value": "9bca6c384e53a7bf770aedd752d5bfc8fbf1cdf0"
        },
        {
            "id": "d6e82637936bbe8f903ad7600495e2256799fa68",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=137",
            "value": "d6e82637936bbe8f903ad7600495e2256799fa68"
        },
        {
            "id": "527f755402daf53ddaff6017410a7befb5ff0a9c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=139",
            "value": "527f755402daf53ddaff6017410a7befb5ff0a9c"
        },
        {
            "id": "68929af58ea1805d509c4990013d3a58a067f4ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=140",
            "value": "68929af58ea1805d509c4990013d3a58a067f4ec"
        },
        {
            "id": "c7c508cb4c51c03ca00e237f9fb581494497c225",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=148",
            "value": "c7c508cb4c51c03ca00e237f9fb581494497c225"
        },
        {
            "id": "9d4496e6b6c8622348a35d08398e809a76b11f8d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=151",
            "value": "9d4496e6b6c8622348a35d08398e809a76b11f8d"
        },
        {
            "id": "d9479ca4ae6a0ff65d570566963bb4bb14776311",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=152",
            "value": "d9479ca4ae6a0ff65d570566963bb4bb14776311"
        },
        {
            "id": "67393083d75610ad9bd2403cc88f4c79b232d80a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=155",
            "value": "67393083d75610ad9bd2403cc88f4c79b232d80a"
        },
        {
            "id": "b351538b5701034e994f4470edef3c88fae7790c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=156",
            "value": "b351538b5701034e994f4470edef3c88fae7790c"
        },
        {
            "id": "f880afd8315accdbbeba23588db6ca2391f1e386",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=158",
            "value": "f880afd8315accdbbeba23588db6ca2391f1e386"
        },
        {
            "id": "cb8b1cb4e92b3e4b06e9a7dd4285d88fb647af7b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=17",
            "value": "cb8b1cb4e92b3e4b06e9a7dd4285d88fb647af7b"
        },
        {
            "id": "766e4451d3f2cfdad64581e4900358c0e4de0b2d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=18",
            "value": "766e4451d3f2cfdad64581e4900358c0e4de0b2d"
        },
        {
            "id": "89c0cc9d80b7d10825e1c9aa900d6a049be4b345",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=2",
            "value": "89c0cc9d80b7d10825e1c9aa900d6a049be4b345"
        },
        {
            "id": "385564176ace9f0c51f03e42832b0085b188a20a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=21",
            "value": "385564176ace9f0c51f03e42832b0085b188a20a"
        },
        {
            "id": "b2eb429e9eb5ea0cec196b350b1e3aaf1bec4dde",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=25",
            "value": "b2eb429e9eb5ea0cec196b350b1e3aaf1bec4dde"
        },
        {
            "id": "42798324dc7e9083850af9d30f834db32860f7a5",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=27",
            "value": "42798324dc7e9083850af9d30f834db32860f7a5"
        },
        {
            "id": "e885a77c667c29e19f425b909d55f515df6539f7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=29",
            "value": "e885a77c667c29e19f425b909d55f515df6539f7"
        },
        {
            "id": "b16e2b9cec9da3d415a53171fbfc5e30c91d61ab",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=3",
            "value": "b16e2b9cec9da3d415a53171fbfc5e30c91d61ab"
        },
        {
            "id": "617f106ae22e2708f82562c13300ee04768e7b8f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=30",
            "value": "617f106ae22e2708f82562c13300ee04768e7b8f"
        },
        {
            "id": "83a1f19ba8b352266f434daed7d6b930aada1c88",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=33",
            "value": "83a1f19ba8b352266f434daed7d6b930aada1c88"
        },
        {
            "id": "c74dd87f367bf07bd96e346d96af425c438d37d4",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=36",
            "value": "c74dd87f367bf07bd96e346d96af425c438d37d4"
        },
        {
            "id": "ee39909778b931d04a74440d6f3aeed8161a8750",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=37",
            "value": "ee39909778b931d04a74440d6f3aeed8161a8750"
        },
        {
            "id": "48368d8d5792445399449e19ee0db99b0b30457d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=43",
            "value": "48368d8d5792445399449e19ee0db99b0b30457d"
        },
        {
            "id": "977e04e693aef01d37440ccbd8ef8b090c13d938",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=45",
            "value": "977e04e693aef01d37440ccbd8ef8b090c13d938"
        },
        {
            "id": "0852da57dcba0c49e44d01985652a380a5888a52",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=46",
            "value": "0852da57dcba0c49e44d01985652a380a5888a52"
        },
        {
            "id": "cb026047f8f4d466740da1030a6f65e98e870ec1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=47",
            "value": "cb026047f8f4d466740da1030a6f65e98e870ec1"
        },
        {
            "id": "5360c3bc0e6ee91cc7434b5934781b3329c5dec8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=48",
            "value": "5360c3bc0e6ee91cc7434b5934781b3329c5dec8"
        },
        {
            "id": "5f9238d42f546f6e83bcbf69821b1099756320ec",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=5",
            "value": "5f9238d42f546f6e83bcbf69821b1099756320ec"
        },
        {
            "id": "8d5145176fdaa1460c86be84ce4bc28ce8ffff46",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=51",
            "value": "8d5145176fdaa1460c86be84ce4bc28ce8ffff46"
        },
        {
            "id": "8cac8ef1419f1f1dd20ab0a868aa5893509a667a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=53",
            "value": "8cac8ef1419f1f1dd20ab0a868aa5893509a667a"
        },
        {
            "id": "43f67b5958c71a27ece33db5cc32659c3a018071",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=54",
            "value": "43f67b5958c71a27ece33db5cc32659c3a018071"
        },
        {
            "id": "a77177d33747571ac9c62ea0a8777b896a8c6eb7",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=55",
            "value": "a77177d33747571ac9c62ea0a8777b896a8c6eb7"
        },
        {
            "id": "054cddad3196e5695bc56fea5fb10f5dff5a4140",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=57",
            "value": "054cddad3196e5695bc56fea5fb10f5dff5a4140"
        },
        {
            "id": "58323e6730e10cadaed0871480650574d565d845",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=59",
            "value": "58323e6730e10cadaed0871480650574d565d845"
        },
        {
            "id": "bfbf967d38847ff546ddbc38a2b3f3a941031f3c",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=6",
            "value": "bfbf967d38847ff546ddbc38a2b3f3a941031f3c"
        },
        {
            "id": "619b3b679cf0c784df57342531c209c613b1b342",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=60",
            "value": "619b3b679cf0c784df57342531c209c613b1b342"
        },
        {
            "id": "7ec62141e43c6ea60194c3ac4f0dd536b9130dc1",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=61",
            "value": "7ec62141e43c6ea60194c3ac4f0dd536b9130dc1"
        },
        {
            "id": "4109b57600edff20426d7311b172d9e774b1081d",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=68",
            "value": "4109b57600edff20426d7311b172d9e774b1081d"
        },
        {
            "id": "10bd4461e309b24616d611b5f5ae25de7cf0b4d3",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=71",
            "value": "10bd4461e309b24616d611b5f5ae25de7cf0b4d3"
        },
        {
            "id": "40ba02d4c9da16b128e9fec7cbb8fd9da196a222",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=72",
            "value": "40ba02d4c9da16b128e9fec7cbb8fd9da196a222"
        },
        {
            "id": "341415aeb47eb2d1088229837fe5e3a428fdf915",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=73",
            "value": "341415aeb47eb2d1088229837fe5e3a428fdf915"
        },
        {
            "id": "26890e21e8ce934702ece91be07dc5d91d2a35ef",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=74",
            "value": "26890e21e8ce934702ece91be07dc5d91d2a35ef"
        },
        {
            "id": "1d06da205e9131eb4ee524beee2f5158f90119e2",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=78",
            "value": "1d06da205e9131eb4ee524beee2f5158f90119e2"
        },
        {
            "id": "0384f41493f2a64036ec8c1b63cdc00aaf578c20",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=8",
            "value": "0384f41493f2a64036ec8c1b63cdc00aaf578c20"
        },
        {
            "id": "6904defbcfb4a6bdaff56f52666978e27e86848f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=84",
            "value": "6904defbcfb4a6bdaff56f52666978e27e86848f"
        },
        {
            "id": "3c2696337dd75e6544570c32ad44466199f7f0a0",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=86",
            "value": "3c2696337dd75e6544570c32ad44466199f7f0a0"
        },
        {
            "id": "72117c5c001e20b7cb3b573336773fd997ed2998",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=87",
            "value": "72117c5c001e20b7cb3b573336773fd997ed2998"
        },
        {
            "id": "7847a087a2da393754b3f26abb36378afe36f960",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=88",
            "value": "7847a087a2da393754b3f26abb36378afe36f960"
        },
        {
            "id": "44950ba2da27176af0b29b94a2d54ded72592fb8",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=89",
            "value": "44950ba2da27176af0b29b94a2d54ded72592fb8"
        },
        {
            "id": "0f2c22addd0a1c7bc6f5933dd88f16d2a970cc4f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=9",
            "value": "0f2c22addd0a1c7bc6f5933dd88f16d2a970cc4f"
        },
        {
            "id": "4f5b770568aa12e74de13c8d689b06ceaff3d04a",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=90",
            "value": "4f5b770568aa12e74de13c8d689b06ceaff3d04a"
        },
        {
            "id": "716e702c3c119068938eb3a2d116d095079afc9f",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=92",
            "value": "716e702c3c119068938eb3a2d116d095079afc9f"
        },
        {
            "id": "5cdada14b41cb672133610c06ecac6218c27bf8b",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=97",
            "value": "5cdada14b41cb672133610c06ecac6218c27bf8b"
        },
        {
            "id": "0dbe3397b54640f1d86b9cc59db6d315db6b28d9",
            "key": "http://content.ajarchive.org/cgi-bin/showfile.exe?CISOROOT=/16815556&CISOPTR=99",
            "value": "0dbe3397b54640f1d86b9cc59db6d315db6b28d9"
        }
    ]
}
';

$parse_pdf = true; // default, will fail if PDF has problems
//$parse_pdf = false; // don't attempt to parse the PDF, use if PDFs are a bit ropey

$obj = json_decode($json);

foreach ($obj->rows as $row)
{
	$url = $row->key;
	$sha1 = $row->value;
	
	if (1)
	{
		// Add by downloading from BioNames		
	
		echo "Adding $url\n";
		$source = get_source_details('http://bionames.org/sha1/' . $sha1, '', true, $debug);	
		
		$source->parent_url = $url;
	
		$source->content_filename =$sha1 . '.pdf';
		$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
	
	}
	else
	{
		echo "Adding $url directly from source\n";

		$source = get_source_details($url, '', true, $debug);	
		$source->content_filename = $sha1 . '.pdf';
		$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
	}
					
	$command = "curl -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";

	
	echo $command . "\n";
	system($command);
	
	store_pdf($source, $parse_pdf, $debug);
	
	$rand = rand(100000, 300000);
	echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
	usleep($rand);
	
	$count++;
	
	//exit();
	
	echo "[$count]\n";


}

?>
