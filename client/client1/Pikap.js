document.addEventListener('DOMContentLoaded', () => {
    // Ambil semua link yang mengarah ke ID (diawali #)
    const links = document.querySelectorAll('a[href^="#"]');
    const sections = document.querySelectorAll('.page-section');

   function navigateTo(targetId) {
    const id = targetId.replace('#', '');
    const targetSection = document.getElementById(id);

    if (targetSection) {
        // 1. Ambil SEMUA elemen yang punya class page-section
        const allSections = document.querySelectorAll('.page-section');
        
        // 2. Sembunyikan SEMUA tanpa terkecuali
        allSections.forEach(s => {
            s.classList.remove('active');
            s.style.display = 'none'; // Paksa sembunyi secara inline
        });
        
        // 3. Tampilkan hanya yang dipilih
        targetSection.classList.add('active');
        targetSection.style.display = 'block'; // Paksa tampil secara inline

        // 4. Scroll ke atas
        window.scrollTo(0, 0);

        // 5. Update URL
        history.pushState(null, null, `#${id}`);

        // 6. Jalankan animasi reveal
        const reveals = targetSection.querySelectorAll('.reveal, .reveal-left, .reveal-right');
        reveals.forEach(el => el.classList.add('visible'));
    }
}

    // Event Listener untuk klik link
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Jika href hanya # atau link kosong, abaikan
            if (href === '#' || href === '') return;

            e.preventDefault(); // Stop fungsi scroll bawaan browser
            navigateTo(href);
            
            // Tutup mobile menu jika ada (fungsi dari code sebelumnya)
            if (typeof closeMobileMenu === 'function') closeMobileMenu();
        });
    });

    // Cek jika user akses langsung via link (misal: domain.com/#about)
    if (window.location.hash) {
        navigateTo(window.location.hash);
    }
});