<?php

$namaMahasiswa = "Zakwan Abdurrahman";
$nim = "2430511043";
$prodi = "Teknik Informatika";
$semester = 4;
$fotoProfil = "zakwan.jpg.jpeg";


$courses = [
    ["kode" => "CS101", "nama" => "Algoritma & Pemrograman", "sks" => 4, "status" => "Lulus"],
    ["kode" => "CS102", "nama" => "Struktur Data", "sks" => 3, "status" => "Aktif"],
    ["kode" => "CS201", "nama" => "Web Development II", "sks" => 3, "status" => "Aktif"],
    ["kode" => "CS304", "nama" => "Basis Data", "sks" => 3, "status" => "Lulus"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | PHP Version</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="nav-content">
            <h2 class="logo">Edu<span>Zone</span></h2>
            <ul class="nav-links">
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#">Jadwal</a></li>
                <li><button class="btn-logout" id="logoutBtn">Keluar</button></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        <section class="glass-card profile-section">
            <div class="profile-img-container">
                <img src="<?php echo $fotoProfil; ?>" alt="Foto Profil" class="profile-pic">
            </div>
            <div class="profile-details">
                <span class="badge-status">Mahasiswa Aktif</span>
                <h1><?php echo $namaMahasiswa; ?></h1>
                <p class="nim">NIM: <?php echo $nim; ?></p>
                <div class="meta-info">
                    <span><strong>Prodi:</strong> <?php echo $prodi; ?></span>
                    <span><strong>Semester:</strong> <?php echo $semester; ?></span>
                </div>
            </div>
        </section>

        <section class="glass-card table-section">
            <div class="table-header">
                <h3>Ringkasan Mata Kuliah (Backend PHP)</h3>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($courses as $course): ?>
                        <tr>
                            <td><strong><?php echo $course['kode']; ?></strong></td>
                            <td><?php echo $course['nama']; ?></td>
                            <td><?php echo $course['sks']; ?></td>
                            <td>
                                <span class="status-tag <?php echo ($course['status'] == 'Lulus') ? 'tag-green' : 'tag-blue'; ?>">
                                    <?php echo $course['status']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>