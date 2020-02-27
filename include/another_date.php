<div id="modal-another-date-container">
    <div class="modal--background"></div>
    <div class="modal">

        <h3 class="form_title">Не подходит время?</h3>
        <p class="form_txt">Получите бесплатную консультацию у&nbsp;наших специалистов</p>

        <form action="/include/send.php" class="modal__form">
            <input type="text" name="name" placeholder="ФИО" required>
            <input type="text" name="phone" class="number_phone" placeholder="Телефон" required>
            <input type="hidden" name="event" value="MODAL_FORM" />
            <label id="allow"><input type="checkbox" checked required>Согласен(-на) с <a href="/policy/">политикой обработки персональных данных</a></label>
            <button type="submit" class="btn">ОТПРАВИТЬ</button>
        </form>

        <svg class="modal--svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
            <rect x="0" y="0" fill="none" rx="3" ry="3"></rect>
        </svg>
        <span class="modal-close"></span>
    </div>
</div>