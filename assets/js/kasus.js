function display(kasus){
    document.querySelector("#display-here").innerText = kasus;
}

const provinsi = document.querySelectorAll(".btn-provinsi");

for (let prov of provinsi) {
    prov.addEventListener('click', function(event){
            const target = event.target;
    
        if (target.classList.contains('jkt')) {
            var jumlah_kasus = "4317";
            display(jumlah_kasus);
        }

        if (target.classList.contains('jt')) {
            var jumlah_kasus = "1034";
            display(jumlah_kasus);
        }

        if (target.classList.contains('jb')) {
            var jumlah_kasus = "1012";
            display(jumlah_kasus);
        }

        if (target.classList.contains('jtg')) {
            var jumlah_kasus = "746";
            display(jumlah_kasus);
        }
    });
}