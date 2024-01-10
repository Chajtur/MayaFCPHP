<?php

include_once '../models/tournament.php';
include_once '../database.php';

$torneos = Tournament::getAll();

?>

<div class="text-yellow-400 mx-auto w-5/6 text-center mt-2">
    <div class="text-2xl">Selecciona un torneo</div>
    <div class="text-lg mt-3">
        <select name="torneos" id="selectTorneos" class="p-2 text-red-900 rounded">
            <?php foreach ($torneos as $torneo) { ?>
                <option value="<?php echo $torneo->id; ?>"><?php echo $torneo->name; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mt-5 text-2xl">
        Tabla de posiciones
    </div>
    <div id="torneoTabla" class="mt-2 w-full">
        <?php include_once '../components/table.php'; ?>
    </div>
</div>