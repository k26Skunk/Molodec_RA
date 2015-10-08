<?php include_once("head.php");?>
    <?php include_once("menu.php");?>
    <div id="load">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="text-center">Требования к макетам</h2>
                    <p>Готовый макет — это файл, полностью подготовленный к печати, не требующий внесения изменений в содержание, а также какой-либо допечатной подготовки. В работу принимаются файлы трех типов: растровые (TIFF, JPEG) и векторные (PDF). Если продукт с Гибридным выборочным лаком - в работу принимается только PDF.
                        <br>А также:
                        <br>Размер файла - не более 80 Мб;
                        <br>Цветовая модель CMYK;
                        <br>Для JPEG-файлов не использовать сжатие;
                        <br>Для TIFF-файлов - слить все слои в один и при сохранении выбирать ZIP или LZW сжатие;
                        <br>Для PDF-файлов - все шрифты должны быть внедрены в PDF;
                        <br>Разрешение файла должно быть 300 точек на дюйм;
                        <br>Макет не должен содержать меток обреза, штампов, биговок и любых других не печатаемых объектов.
                        <br><b>Важно! Несоблюдение требований может привести к самым неожиданным и, зачастую, неприятным результатам...</b> </p>
                    <h5>Нужен макет? Закажите его у нас. Разработаем за 1 день.</h5>
                    <p class="text-center"><a href="#opop" data-toggle="modal"  class="btn btn-default">Заказать макет</a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <br>
                    <br>
                    <form action="send.php" method="post" name="form1" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="txtFormName">Введите ваше имя и организацию</label>
                            <input name="txtFormName" type="text" class="form-control" required placeholder="Иван" title='Иван'> </div>
                        <div class="form-group">
                            <label for="txtDescription">Введите Ваш номер телефона</label>
                            <input name="txtDescription" id="txtDescription" class="form-control" placeholder="098111222" required pattern="^\d{10}$" title="0933888111" /> </div>
                        <div class="form-group">
                            <label for="txtFormEmail">Введите ваш e-mail</label>
                            <input name="txtFormEmail" type="email" class="form-control" title="primer@gmail.com" placeholder="primer@gmail.com" required> </div>
                        <label for="fileAttach">Прикрепите файл с макетом</label>
                        <input name="fileAttach" type="file" required>
                        <br>
                        <br>
                        <input type="submit" name="Submit" value="ОТПРАВИТЬ МАКЕТ" class="btn btn-default btn-block">
                    </form>
                    <p class="text-center"><b>Сразу после загрузки файла с вами свяжется наш менеджер и уточнит детали.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
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
                            <input type="text" name="name" class="form-control name" required placeholder="Иван" title='Иван'>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tell">Введите ваш номер телефона в требуемом формате</label>
                            <input type="text" name="tell" class="form-control phone" placeholder="098111222" required pattern="^\d{10}$" title="0933888111">
                        </div>
                        <br>
                        <button type="submit" name="send" class="btn btn-default btn-block feedback">ОТПРАВИТЬ ЗАЯВКУ НА МАКЕТ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once("footer.php");?>