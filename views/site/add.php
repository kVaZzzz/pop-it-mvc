<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Фамилия<input type="text" name="Suraname"></label>
    <label>Имя <input type="text" name="Name"></label>
    <label>Отчество <input type="text" name="Patronymic"></label>
    <label>Должность 
        <select name="ID_Job_title">
            <option value="1">Терапевт</option>
            <option value="2">Окулист</option>
            <option value="3">Травматолог</option>
            <option value="4">Хирург</option>
        <select>
    </label>
    <label>Специализация <input type="text" name="Specialization"></label>
    <button>Зарегистрироваться</button>
</form>
