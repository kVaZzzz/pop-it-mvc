<h2>Добавить сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>
    <form class="add_form" method="post">
        <label>Фамилия</label><input type="text" name="Suraname">
        <label>Имя</label><input type="text" name="Name">
        <label>Отчество</label><input type="text" name="Patronymic">
        <label for="start">Дата рождения</label>
        <input type="date" class="date" name="trip-start" min="1900-01-01" max="2025-12-31" />
        <label>Роль</label><input class="date" type="text" name="Name">
        <button class="butt">Добавить</button>
    </form>