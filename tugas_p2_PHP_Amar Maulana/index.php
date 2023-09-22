<form method="POST">
     <label>Nama : </label> <br />
     <input name="name" type="text" /><br />

     <br><label>Pekerjaan : </label> <br />
     <select name="pekerjaan">
            <option value="Pekerja_1">Pekerja 1</option>
            <option value="Pekerja_1">Pekerja 2</option>
            <option value="Pekerja_1">Pekerja 3</option>
            <option value="Pekerja_1">Pekerja 4</option>
            <option value="Pekerja_1">Pekerja 5</option>
            <option value="Pekerja_1">Pekerja 6</option>
            <option value="Pekerja_1">Pekerja 7</option>
            <option value="Pekerja_1">Pekerja 8</option>
            <option value="Pekerja_1">Pekerja 9</option>
            <option value="Pekerja_1">Pekerja 10</option>
        </select><br/>

     <br><input name="hobby" type="radio" value="Hobby 1"/>
     <label>Hobby 1 </label><br/>
     <input name="hobby" type="radio" value="Hobby 2"/>
     <label>Hobby 2 </label><br/>
     <input name="hobby" type="radio" value="Hobby 3"/>
     <label>Hobby 3 </label><br/>
     <input name="hobby" type="radio" value="Hobby 4"/>
     <label>Hobby 4 </label><br/>
     <input name="hobby" type="radio" value="Hobby 5"/>
     <label>Hobby 5 </label><br/>
     <input name="hobby" type="radio" value="Hobby 6"/>
     <label>Hobby 6 </label><br/>
     <input name="hobby" type="radio" value="Hobby 7"/>
     <label>Hobby 7 </label><br/>
     <input name="hobby" type="radio" value="Hobby 8"/>
     <label>Hobby 8 </label><br/>
     <input name="hobby" type="radio" value="Hobby 9"/>
     <label>Hobby 9 </label><br/>
     <input name="hobby" type="radio" value="Hobby 10"/>
     <label>Hobby 10 </label><br/>

     <br><input type="submit" name="simpan" value="Simpan" />
    </form>


<?php
$name = $_POST['name'];
$pekerjaan = $_POST['pekerjaan'] ;
$hobby = $_POST['hobby'];
$save = $_POST['simpan'];

if(isset($save)){

?>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Pekerjaan</th>
        <th>hobby</th>
    </tr>
    <tr>
        <td><?= $name ?></td>
        <td><?= $pekerjaan ?></td>
        <td><?= $hobby ?></td>
    </tr>
</table>

<?php } ?>