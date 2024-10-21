const btnSideNav = document.getElementById('btnSideNav');
const sideNav = document.getElementById('sideNav');
const footerGkPenting = document.getElementById('gkPenting1');
const listPegawai = document.getElementById('allDataEmployee');
const currentYear = new Date().getFullYear();


async function getData(){
    const response = await fetch('data_pegawai.json');
    const data = await response.json();

    return data
}

async function showData(){
    const data = await getData();
    let counter = 0;

    for(const employee in data){
        console.log(data[employee].jenisjabatan);

        const ttl = data[employee].tgl_lahir;
        counter++
        listPegawai.innerHTML += `
            <tr>
                <td>${counter}</td>
                <td>${data[employee].nama}</td>
                <td>${data[employee].nip_nik}</td>
                <td>${data[employee].kategori}</td>
                <td>${data[employee].opd}</td>
                <td>${data[employee].unit_kerja}</td>
                <td>${data[employee].jabatan}</td>
                <td>${data[employee].jenis_kelamin}</td>
                <td>${data[employee].tgl_lahir}</td>
                <td>${currentYear - ttl.slice(0, 4)}</td>
                <td>${data[employee].tk_pendidikan}</td>
                <td>${data[employee].golongan}</td>
                <td>${data[employee].jenisjabatan}</td>
            </tr>
        
        `

    }
}

showData();


btnSideNav.addEventListener('click', () => {
    sideNav.classList.toggle('sidebar-toggled');
    sideNav.classList.contains('sidebar-toggled') 
        ? sideNav.classList.remove('p-3') 
        : sideNav.classList.add('p-3');
});

footerGkPenting.textContent = currentYear;