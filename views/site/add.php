<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<div class="add">
    <form class="add_form" method="post">
        <label>Фамилия</label><input type="text" name="Suraname">
        <label>Имя</label><input type="text" name="Name">
        <label>Отчество</label><input type="text" name="Patronymic">
        <label for="start">Дата рождения</label>
        <input type="date" class="date" name="trip-start" min="1900-01-01" max="2025-12-31" />
        <button>Добавить пациента</button>
    </form>
    <form class="add_form" method="post">
        <label>Фамилия</label><input type="text" name="Suraname">
        <label>Имя</label><input type="text" name="Name">
        <label>Отчество</label><input type="text" name="Patronymic">
        <label for="start">Дата рождения</label>
        <input type="date" class="date" name="trip-start" min="1900-01-01" max="2025-12-31" />
        <label>Должность 
            <select name="ID_Job_title">
                <option value="1">Терапевт</option>
                <option value="2">Окулист</option>
                <option value="3">Травматолог</option>
                <option value="4">Хирург</option>
            <select>
        </label>
        <label>Специализация <input type="text" name="Specialization"></label>
        <button>Добавить врача</button>
    </form>
</div>
