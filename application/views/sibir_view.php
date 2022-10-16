<main class="main">
        <div class="container">
            <div class="header-title">
                <h2 class="title-h2 Uralsky">Сибирский федеральный округ</h2>
            </div>
            <script src="https://api-maps.yandex.ru/2.1/?apikey=87612107-42c4-4718-9bd4-78b3b4d0abee&lang=ru_RU" type="text/javascript">
            </script>
            <script type="text/javascript">
                ymaps.ready(init);
                function init(){
                    var myMap = new ymaps.Map("map", {
                        center: [52.2978, 104.296],
                        zoom: 7},
                        {
                            maxZoom: 15,
                            minZoom: 8,
                        }
                        );
                }
            </script>
            <div id="map" class="map-img" style="width: 1100px; height: 700px"></div>
            <div class="map-table-1">
                <table class="iksweb">
                    <h3 class="map-table-h3">Результаты тестирования</h3>
                    <tbody>
                        <tr class="table-tr tr-color">
                            <td class="table-td">Город</td>
                            <td class="table-td">Оператор</td>
                            <td class="table-td">Дата исследования</td>
                            <td class="table-td">VSNA</td>
                            <td class="table-td">VSCR</td>
                            <td class="table-td">MOS POLQA</td>
                            <td class="table-td">MOS POLQA &lt; 2.6</td>
                            <td class="table-td">Доля недоставленных SMS</td>
                            <td class="table-td">Среднее время доставки SMS</td>
                            <td class="table-td">HTTP</td>
                        </tr>
                        <tr class="table-tr">
                            <td class="table-td">Екатеринбург</td>
                            <td class="table-td">Tele-2</td>
                            <td class="table-td">03.06.19</td>
                            <td class="table-td">0.8</td>
                            <td class="table-td">0.9</td>
                            <td class="table-td">4.2</td>
                            <td class="table-td">0.6</td>
                            <td class="table-td">6.3</td>
                            <td class="table-td">5.7</td>
                            <td class="table-td">3.3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="map-table-2">
                <table class="iksweb">
                    <tbody>
                        <tr class="table-tr tr-color">
                            <td class="table-td">HTTP UL Mean</td>
                            <td class="table-td">HTTP DL Mean U</td>
                            <td class="table-td">HTTP Session Time</td>
                            <td class="table-td">Общее количество соединений</td>
                            <td class="table-td">POLQA</td>
                            <td class="table-td">Negative MOS samples Count</td>
                            <td class="table-td">Общее количество отправленных SMS</td>
                            <td class="table-td"> HTTP (Загрузка файлов)</td>
                            <td class="table-td">HTTP (Web-browsing) </td>
                        </tr>
                        <tr class="table-tr">
                            <td class="table-td">2012.1</td>
                            <td class="table-td">9170.3</td>
                            <td class="table-td">10.9</td>
                            <td class="table-td">7 690</td>
                            <td class="table-td">154 940</td>
                            <td class="table-td">906</td>
                            <td class="table-td">490</td>
                            <td class="table-td">1 588</td>
                            <td class="table-td">1 915</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>