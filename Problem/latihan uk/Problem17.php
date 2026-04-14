<?php

// Buat array 3D untuk data berikut:

// * Kelas A:

//   * Andi (80)
//   * Budi (70)
// * Kelas B:

//   * Citra (90)
//   * Dedi (85)

// Tampilkan dengan format:

// Kelas A:
// Nama: Andi, Nilai: 80
// ...

$A=[
    ["kelas A",
        ["andi",80],
        ["budi",70],
    ],
    ["kelas B",
        ["citra",90],
        ["dedi",85],
    ],
];

var_dump($A);