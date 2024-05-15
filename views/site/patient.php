<h2>Карточка пациента</h2>
<h3><?= $message ?? ''; ?></h3>
<div class="record">
    <h2>ID</h2>
    <ul>
        <li>Фамилия:</li>
        <li>Имя:</li>
        <li>Отчество:</li>
        <li>Дата рождения:</li>
    </ul>
    <div id="rec_info">Запись: </div>
</div>
<div class="record_add">
    <label>Выберите врача 
            <select name="ID_Job_title">
                <option value="1">Терапевт</option>
                <option value="2">Окулист</option>
                <option value="3">Травматолог</option>
                <option value="4">Хирург</option>
            <select>
        </label>
    <label for="start">Выберите дату</label>
    <input type="date" class="date" name="trip-start" min="1900-01-01" max="2025-12-31" />
    <button id="butt">Записать</button>
</div>
