<?php

$idTorneo = $_POST['idTorneo'] ?? 1;
$torneo = Tournament::get($idTorneo);

//$posiciones = $torneo->getPosiciones();
$posiciones = [
    [
        'equipo' => 'Equipo 1',
        'puntos' => 10,
        'partidosJugados' => 5,
        'partidosGanados' => 3,
        'partidosEmpatados' => 1,
        'partidosPerdidos' => 1,
    ],
    [
        'equipo' => 'Equipo 2',
        'puntos' => 8,
        'partidosJugados' => 5,
        'partidosGanados' => 2,
        'partidosEmpatados' => 2,
        'partidosPerdidos' => 1,
    ],
    [
        'equipo' => 'Equipo 3',
        'puntos' => 7,
        'partidosJugados' => 5,
        'partidosGanados' => 2,
        'partidosEmpatados' => 1,
        'partidosPerdidos' => 2,
    ],
    [
        'equipo' => 'Equipo 4',
        'puntos' => 5,
        'partidosJugados' => 5,
        'partidosGanados' => 1,
        'partidosEmpatados' => 2,
        'partidosPerdidos' => 2,
    ],
    [
        'equipo' => 'Equipo 5',
        'puntos' => 4,
        'partidosJugados' => 5,
        'partidosGanados' => 1,
        'partidosEmpatados' => 1,
        'partidosPerdidos' => 3,
    ],
    [
        'equipo' => 'Equipo 6',
        'puntos' => 3,
        'partidosJugados' => 5,
        'partidosGanados' => 1,
        'partidosEmpatados' => 0,
        'partidosPerdidos' => 4,
    ],
    [
        'equipo' => 'Equipo 7',
        'puntos' => 2,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 2,
        'partidosPerdidos' => 3,
    ],
    [
        'equipo' => 'Equipo 8',
        'puntos' => 1,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 1,
        'partidosPerdidos' => 4,
    ],
    [
        'equipo' => 'Equipo 9',
        'puntos' => 0,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 0,
        'partidosPerdidos' => 5,
    ],
    [
        'equipo' => 'Equipo 10',
        'puntos' => 0,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 0,
        'partidosPerdidos' => 5,
    ],
    [
        'equipo' => 'Equipo 11',
        'puntos' => 3,
        'partidosJugados' => 5,
        'partidosGanados' => 1,
        'partidosEmpatados' => 0,
        'partidosPerdidos' => 4,
    ],
    [
        'equipo' => 'Equipo 12',
        'puntos' => 2,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 2,
        'partidosPerdidos' => 3,
    ],
    [
        'equipo' => 'Equipo 13',
        'puntos' => 1,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 1,
        'partidosPerdidos' => 4,
    ],
    [
        'equipo' => 'Equipo 14',
        'puntos' => 0,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 0,
        'partidosPerdidos' => 5,
    ],
    [
        'equipo' => 'Equipo 15',
        'puntos' => 0,
        'partidosJugados' => 5,
        'partidosGanados' => 0,
        'partidosEmpatados' => 0,
        'partidosPerdidos' => 5,
    ],
    // Add more posiciones as needed
];
?>

<table id="" class="table-auto min-w-full rounded-lg bg-white">
    <thead>
        <tr class="text-yellow-400 bg-gray-500">
            <th class="border border-gray-400 px-2 py-2 hidden md:flex justify-center">Posición</th>
            <th class="border border-gray-400 px-2 py-2 md:hidden">Pos</th>
            <th class="border border-gray-400 px-2 py-2">Equipo</th>
            <th class="justify-center border border-gray-400 px-2 py-2 hidden md:flex">Puntos</th>
            <th class="border border-gray-400 px-2 py-2 md:hidden">Pts</th>
            <th class="border border-gray-400 px-2 py-2">PJ</th>
            <th class="border border-gray-400 px-2 py-2">PG</th>
            <th class="border border-gray-400 px-2 py-2">PE</th>
            <th class="border border-gray-400 px-2 py-2">PP</th>
        </tr>
    </thead>
    <tbody class="text-red-900">
        <?php $i = 1;
        foreach ($posiciones as $posicion) { ?>
            <tr>
                <td class="border border-gray-400 px-2 py-2"><?php echo $i++; ?></td>
                <td class="border border-gray-400 px-2 py-2"><?php echo $posicion['equipo']; ?></td>
                <td class="border border-gray-400 px-2 py-2"><?php echo $posicion['puntos']; ?></td>
                <td class="border border-gray-400 px-2 py-2"><?php echo $posicion['partidosJugados']; ?></td>
                <td class="border border-gray-400 px-2 py-2"><?php echo $posicion['partidosGanados']; ?></td>
                <td class="border border-gray-400 px-2 py-2"><?php echo $posicion['partidosEmpatados']; ?></td>
                <td class="border border-gray-400 px-2 py-2"><?php echo $posicion['partidosPerdidos']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>