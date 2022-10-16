<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head xmlns="http://www.w3.org/1999/xhtml">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Hakaton</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-logo">
                <a href="/main" class="header-link"><img src="img/schkola_individual1.png" alt="Главная" class="header-img"></a>
            </div>
            <nav class="header-nav">
                <ul class="header-list  flex">
                    <li class="list-item">
                        <a href="/about" class="list-item-link">О проекте</a>
                    </li>
                    <li class="list-item">
                        <a href="/aboutproject" class="list-item-link">Покрытие автодорог</a>
                    </li>
                    <li class="list-item">
                        <a href="/krim" class="list-item-link">Покрытие автодорог (Крым)</a>
                    </li>
                    <li class="list-item">
                        <a href="/national" class="list-item-link">Национальные стандарты</a>
                    </li>
                    <li class="list-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Регион
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="/centr">Центральный</a></li>
                              <li><a class="dropdown-item" href="/west">Северо-Западный</a></li>
                              <li><a class="dropdown-item" href="/ural">Уральский федеральный округ</a></li>
                              <li><a class="dropdown-item" href="/south">Южный федеральный округ</a></li>
                              <li><a class="dropdown-item" href="/north">Северо-Кавказский федеральный округ</a></li>
                              <li><a class="dropdown-item" href="/volga">Приволжский федеральный округ</a></li>
                              <li><a class="dropdown-item" href="/sibir">Сибирский федеральный округ </a></li>
                              <li><a class="dropdown-item" href="/east">Дальневосточный федеральный округ </a></li>
                            </ul>
                          </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
	    <div class="main">
		    <?php include 'application/views/'.$content_view; ?>
	    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>