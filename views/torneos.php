<?php

//$torneos = Torneo::getAll();

$torneos = [];

for ($i = 1; $i <= 10; $i++) {
    $torneos[] = [
        'id' => $i,
        'nombre' => "Torneo $i",
    ];
}
?>

<div class="text-yellow-400 mx-auto w-5/6 text-center mt-2">
    <div class="text-2xl">Por favor selecciona un torneo para cargar</div>
    <div class="text-lg mt-3">
        <select name="torneos" id="selectTorneos" class="p-2 text-red-900 rounded">
            <?php foreach ($torneos as $torneo) { ?>
                <option value="<?php echo $torneo['id']; ?>"><?php echo $torneo['nombre']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mt-5 text-2xl">
        Tabla de posiciones
    </div>
    <div id="torneoTabla" class="mt-2 overflow-x-auto w-full">
        <?php include_once '../components/tabla.php'; ?>
    </div>
</div>