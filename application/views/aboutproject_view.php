<script src="https://api-maps.yandex.ru/2.1/?apikey=87612107-42c4-4718-9bd4-78b3b4d0abee&lang=ru_RU" type="text/javascript">
</script>
<script type="text/javascript">
    ymaps.ready(init);
    function init(){
        var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 7},
            {
                maxZoom: 15,
                minZoom: 8,
            }
            );
    }
</script>
<div id="map" class="map-2" style="width: 1100px; height: 700px"></div>
