<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/topSlider.js"></script>
<!-- google Maps API　を使うための記述 -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAhZHHmFPEKFhx8ze-Yss4pAiUADa5pGDM&sensor=false"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/access.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>
<script>
	google.maps.event.addDomListener(window, 'load', init);
	function init() {
		var HAL = new google.maps.LatLng(35.691773,139.696893);

		var mapOptions = {
                  zoom: 15,
                  center: HAL,
                  disableDefaultUI: true,
                  styles:[
				  {"featureType": "landscape",
        			"stylers": [
            			{"saturation": -100},
            			{"lightness": 65},
            			{"visibility": "on"}
        			]},
    {"featureType": "poi",
        "stylers": [
            {"saturation": -100},
            {"lightness": 51},
            {"visibility": "simplified"}
        ]
    },
    {"featureType": "road.highway",
        "stylers": [
            {"saturation": -100},
            {"visibility": "simplified"}
        ]
    },
    {"featureType": "road.arterial",
        "stylers": [
            {"saturation": -100},
            {"lightness": 30},
            {"visibility": "on"}
        ]
    },
    {"featureType": "road.local",
        "stylers": [
            {"saturation": -100},
            {"lightness": 40},
            {"visibility": "on"}
        ]
    },
    {"featureType": "transit",
        "stylers": [
            {"saturation": -100},
            {"visibility": "simplified"}
        ]
    },
    {"featureType": "administrative.province",
        "stylers": [
            {"visibility": "off"}
        ]
    },
    {"featureType": "water",
        "elementType": "labels",
        "stylers": [
            {"visibility": "on"},
            {"lightness": -25},
            {"saturation": -100}
        ]
    },
    {"featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {"hue": "#ffff00"},
            {"lightness": -25},
            {"saturation": -97}
        ]
    }
]};
				  var mapElement = document.getElementById('map'),
				    map = new google.maps.Map(mapElement, mapOptions);

					var marker = new google.maps.Marker({position:HAL,
												map:map,
												icon:"",
												animation:google.maps.Animation.DROP
												});

					btns = document.getElementsByTagName('.hal');


	}
</script>

<div id="contentsWrap">
    <main>
        <h3>アクセス</h3>
         <div id="locationBtn">
            <div class="hal">
                HAL東京
            </div>
            <div class="hal">
                HAL大阪
            </div>
            <div class="hal">
                HAL名古屋
            </div>
        </div>
        <div id="map">
            グーグルマップ
        </div><!--map-->
        <table class="details">
            <tr>
                <td class="detailTitle"><span>住所</span></td>
                <td>東京都新宿区西新宿1-7-3</td>
            </tr>
            <tr>
                <td class="detailTitle"><span>電話番号</span></td>
                    <td>03-3344-1010</td>
                </tr>

                <tr>
                    <td class="detailTitle"><span>駐車場</span></td>
                    <td>ショッピングモール駐車場</td>
                </tr>
                <tr>
                    <td class="detailTitle"><span>関連施設</span></td>
                    <td>ショッピングモール</td>
                </tr>

                <tr>
                    <td class="detailTitle"><span>車をご利用の方</span></td>
                    <td>ショッピングモール内駐車場をご利用いただけます。</td>
                </tr>
                <tr>
                    <td class="detailTitle"><span>電車をご利用の方</span></td>
                    <td>
                        JR：新宿駅<br>
                        東京メトロ 丸ノ内線：新宿駅<br>
                        都営地下鉄　大江戸線：新宿駅　都庁前駅
                    </td>
    			</tr>
    		</table>
    </main>

    <div id="divide">
        <aside id="subContent">
        <?php
            include 'aside.php';
        ?>
        </aside>
        <div id="links"><!-- 広告 --></div>
    </div>
</div>

<?php
    include 'foot.php';
?>