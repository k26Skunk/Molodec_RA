<div class="modal fade" tabindex="-1" id="opop">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Введите ваши данные</h4>
                </div>
                <div class="modal-body">
                    <form action="mail/maket.php" method="post">
                        <div class="form-group">
                            <label for="name">Введите Ваше имя или название компании</label>
                            <input type="text" name="name" class="form-control" required placeholder="Иван Приарит" title='Иван Приарит'>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone">Введите ваш номер телефона в требуемом формате</label>
                            <input type="text" name="phone" class="form-control" placeholder="098111222" required pattern="^\d{10}$" title="0933888111">
                        </div>
                        <br>
                        <button type="submit" name="send" class="btn btn-default btn-block">ОТПРАВИТЬ ЗАЯВКУ НА МАКЕТ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="calculate">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Введите ваши данные</h4>
                </div>
                <div class="modal-body">
                    <form action="mail/calc.php" method="post">
                        <label for="name">Введите подробные данные для просчета</label>
                        <textarea class="form-control" name="message" rows="3" placeholder="Например: настенный календарь «А3 перекидной» 250 шт."></textarea>
                        <div class="form-group">
                            <label for="name">Введите Ваше имя или название компании</label>
                            <input type="text" name="name" class="form-control name" required placeholder="Иван Приарит" title='Иван Приарит'>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tell">Введите ваш номер телефона в требуемом формате</label>
                            <input type="text" name="phone" class="form-control tell" placeholder="098111222" required pattern="^\d{10}$" title="0933888111">
                        </div>
                        <br>
                        <button type="submit" name="send" class="btn btn-default btn-block feedback">ОТПРАВИТЬ ЗАЯВКУ НА ПРОСЧЕТ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="callback">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Введите ваши данные</h4>
                </div>
                <div class="modal-body">
                    <form action="" name="form-1">
                        <div class="input-group">
                            <label for="name">Введите Ваше имя или название компании</label>
                            <input type="text" name="name" class="form-control name" required placeholder="Иван Приарит" title='Иван Приарит'>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="tell">Введите ваш номер телефона в требуемом формате</label>
                            <input type="text" name="tell" class="form-control tell" placeholder="098111222" required pattern="^\d{10}$" title="0933888111">
                        </div>
                        <br>
                        <button type="submit" name="send" class="btn btn-danger btn-block feedback">ОТПРАВИТЬ ЗАЯВКУ НА МАКЕТ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>