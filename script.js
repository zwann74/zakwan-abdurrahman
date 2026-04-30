const courses = [
    { code: "CS101", name: "Algoritma & Pemrograman", sks: 4, status: "Lulus" },
    { code: "CS102", name: "Struktur Data", sks: 3, status: "Aktif" },
    { code: "CS201", name: "Web Development II", sks: 3, status: "Aktif" }
];

function renderCourses() {
    const tbody = document.querySelector("#courseTable tbody");
    tbody.innerHTML = "";

    courses.forEach((c, index) => {
        const tr = document.createElement("tr");
        // Animasi muncul satu per satu
        tr.style.animation = `fadeIn 0.5s ease forwards ${index * 0.1}s`;
        tr.style.opacity = "0";
        
        tr.innerHTML = `
            <td><strong>${c.code}</strong></td>
            <td>${c.name}</td>
            <td>${c.sks}</td>
            <td><span class="status-tag">${c.status}</span></td>
        `;
        tbody.appendChild(tr);
    });
}

function addCourse() {
    const names = ["Kriptografi", "Etika Profesi", "Sistem Operasi", "Jaringan Komputer"];
    const randomName = names[Math.floor(Math.random() * names.length)];
    
    courses.push({
        code: "CS" + Math.floor(Math.random() * 900 + 100),
        name: randomName,
        sks: 3,
        status: "Baru"
    });
    renderCourses();
}

document.getElementById('logoutBtn').addEventListener('click', () => {
    if(confirm("Yakin ingin keluar?")) {
        alert("Sesi berakhir.");
    }
});

// Jalankan
window.onload = renderCourses;