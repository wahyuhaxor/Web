document.addEventListener('DOMContentLoaded', () => {
    const loveButton = document.getElementById('loveButton');
    const percentageResult = document.getElementById('percentageResult');

    loveButton.addEventListener('click', () => {
        const percentage = Math.floor(Math.random() * 10) + 91; // Angka acak antara 91-100
        percentageResult.textContent = `In another live "aku akan tetap mencintaimu diversi terbaikmu"`; // Hasil statis yang lebih romantis

        // Atau gunakan hasil random jika ingin variasi:
        // percentageResult.textContent = `${percentage}%! Bahkan lebih dari itu!`;

        // Opsi tambahan: memainkan audio saat tombol diklik
        // const audio = document.getElementById('myAudio');
        // audio.play();
    });

    // Opsional: Otomatis memutar audio saat halaman dimuat
    // Cek apakah browser mengizinkan autoplay
    const audio = document.getElementById('myAudio');
    audio.play().catch(error => {
        console.log("Autoplay ditolak. Pengguna perlu menekan play secara manual.");
    });
});