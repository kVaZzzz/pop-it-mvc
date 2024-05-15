<h2>Найти пациента</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Найти пациента<input type="text" name="Suraname"></label>
    <label> 
        <select name="ID_Job_title">
            <option value="1">По дате</option>
            <option value="2">По врачу</option>
        <select>
    </label>
    <button>Найти</button>
</form>

<p>Список пациентов:</p>
