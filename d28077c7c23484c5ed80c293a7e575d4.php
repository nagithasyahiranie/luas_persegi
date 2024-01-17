<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perhitungan Luas Persegi</title>
</head>
<body>

<h1>Formulir Perhitungan Luas Persegi</h1>

<form action="/luas-persegi" method="post">
    <?php echo csrf_field(); ?>
    <label for="sisi">Panjang Sisi:</label>
    <input type="text" name="sisi" id="sisi" required>
    <br>
    <button type="submit">Hitung Luas</button>
</form>

</body>
</html>
<?php /**PATH C:\project\project\resources\views/luas_persegi_form.blade.php ENDPATH**/ ?>