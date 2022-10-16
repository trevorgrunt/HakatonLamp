<main class="main-admin">
        <div class="container">
            <div class="input-info">
                <form class="data-input">
                    <ul class="data-list">
                        <li class="data-item ">
                            <ul class="data-item-list flex">
                                <li class="data-item-2">
                                    <h5 class="data-title">
                                        Дата создания отчета
                                    </h5>
                                    <p class="data-descr">
                                        <input type="text" id="ReportDate" name="ReportDate" placeholder="Дата создания" size="18" />
                                    </p>
                                </li>
                                <li class="data-item-2">
                                    <h5 class="data-title float">
                                        Объект контроля
                                    </h5>
                                    <p class="data-descr">
                                        <input type="text" id="OperatorName" name="OperatorName" placeholder="Объект контроля" size="18" />
                                    </p>
                                </li>
                                <li class="data-item-2">
                                    <h5 class="data-title float">
                                        Город
                                    </h5>
                                    <p class="data-descr">
                                        <input type="text" id="CityName" name="CityName" placeholder="Город" size="18" />
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="data-item">
                            <h4 class="data-h4"><b>Показатели качества услуг подвижной радиотелефонной связи в части голосового соединения</b></h4>
                            <h5 class="data-title">
                                Доля неуспешных попыток установления голосового соединения (Voice Service Non-Acessibility ) [%]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="VSNonAcessibility" name="VSNonAcessibility" placeholder=" Доля неуспешных попыток" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Доля обрывов голосовых соединений ( Voice Service Cut-off Ratio) [%]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="VSCutoffRatio" name="VSCutoffRatio" placeholder="Доля обрывов" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Средняя разборчивость речи на соединение (Speech Quality on Call basis (MOS POLQA))
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="SpeechQuality" name="SpeechQuality" placeholder="Средняя разборчивость речи" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Доля голосовых соединений с низкой разборчивостью речи (Negative MOS samples Ratio,MOS POLQA < 2,6) [%]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="NegativeMOSSampleRatio" name="NegativeMOSSampleRatio" placeholder="Доля голосовых соединений" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h4 class="data-h4"><b>Показатели качества услуг подвижной радиотелефонной связи в части передачи коротких текстовых сообщений</b></h4>
                            <h5 class="data-title">
                                Доля недоставленных SMS сообщений [%]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="NonDeliviredSMSPercentage" name="NonDeliviredSMSPercentage" placeholder="Доля недоставленных SMS сообщений" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Среднее время доставки SMS сообщений [сек]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="AverageSMSTime" name="AverageSMSTime" placeholder="Среднее время доставки SMS сообщений" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h4 class="data-h4"><b>Показатели качества услуг связи по передаче данных, за исключением услуг связи 
                                по передаче данных для целей передачи голосовой информации</b></h4>
                            <h5 class="data-title">
                                Доля неуспешных сессий по протоколу HTTP (HTTP Session Failure Ratio) [%]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="HTTPSessionFailureRatioPerc" name="HTTPSessionFailureRatioPerc" placeholder=" Доля неуспешных сессий" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Среднее значение скорости передачи данных от абонента (HTTP UL Mean User Data Rate) [kbit/sec]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="HTTPULMeanUserDataRate" name="HTTPULMeanUserDataRate" placeholder="Среднее значение скорости передачи данных" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Среднее значение скорости передачи данных к абоненту (HTTP DL Mean User Data Rate) [kbit/sec]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="HTTPDLMeanUserDataRate" name="HTTPDLMeanUserDataRate" placeholder="Среднее значение скорости передачи данных" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Продолжительность успешной сессии (HTTP Session Time) [s]
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="HTTPSessionTime" name="HTTPSessionTime" placeholder="Продолжительность успешной сессии" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h4 class="data-h4"><b>Справочная информация</b></h4>
                            <h5 class="data-title">
                                Общее количество тестовых голосовых соединений
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="CountTextMessages" name="CountTextMessages" placeholder="Общее количество" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Общее количество голосовых последовательностей в оцениваемых соединениях (POLQA)
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="POLQA" name="POLQA" placeholder=" Общее количество голосовых последовательностей" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Количество голосовых соединений с низкой разборчивостью (Negative MOS samples Count, MOS POLQA &lt; 2,6
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="NegativeMOSSample" name="NegativeMOSSample" placeholder="Количество голосовых соединений" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Общее количество отправленных SMS - сообщений
                            </h5>
                            <p class="data-descr">
                                <input type="text" id="SendedSMSCount" name="SendedSMSCount" placeholder="Общее количество отправленных SMS" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Общее количество попыток соединений с сервером передачи данных HTTP (Загрузка файлов)
                            </h5>
                            <p class="data-descr">
                                <input type="text" name="userName" placeholder="Общее количество попыток соединений" size="18" />
                            </p>
                        </li>
                        <li class="data-item">
                            <h5 class="data-title">
                                Общее количество тестовых сессий по протоколу HTTP (Web-browsing)
                            </h5>
                            <p class="data-descr">
                                <input type="text" name="userName" placeholder="бщее количество тестовых сессий" size="18" />
                            </p>
                        </li>
                    </ul>
                    <p class="btn-descr">
                        <button type="submit">Отправить</button> 
                        <button type="reset">Очистить</button>
                        <a href="new-info.html" class="link-btn-descr">Показать данные</a>
                    </p>
                </form>
            </div>
            <div class="admin-form">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Загрузить протокол</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Загрузить отчет</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Загрузить title</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
            </div>
    </main>