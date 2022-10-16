<main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center text-dark mt-5">Авторизация</h2>
                    <div class="text-center mb-5 text-dark">Введите логин и пароль</div>
                    <div class="card my-5">
                        <form class="card-body cardbody-color p-lg-5" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                                    placeholder="Имя пользователя" name="login">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
                            </div>
                            <input type="checkbox" name="not_attach_ip"><br>Не прикреплять к IP(не безопасно) 
                            <input class="a-btn" name="submit" type="submit" value="Войти">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
