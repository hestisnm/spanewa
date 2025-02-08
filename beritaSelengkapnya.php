<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="beritaSelengkapnya.css" rel="stylesheet">

<button class="back-button">
     <a href="index.php?page=berita" style="color:white; text-decoration:none;">Kembali</button></a>

     <div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover" src="./media/osis.png"></div>
            <div class="judul">
            <h2><B>Berita</B></h2> 
            </div>
            </div>

            <div class="image-container">
    <img src="./media/upacara kesaktian pancasila.jpg">
    <img src="./media/upacara kesaktian pancasila.jpg">
    <img src="./media/upacara kesaktian pancasila.jpg">
    <img src="./media/upacara kesaktian pancasila.jpg">
    <img src="./media/upacara kesaktian pancasila.jpg">
    <img src="./media/upacara kesaktian pancasila.jpg">
</div>

<div style="display:flex; margin:40px; gap:20px;" class="konten">
    <img style="width:300px; height:auto; border-radius:10px;" src="./media/upacara kesaktian pancasila.jpg">
    <div>
        <h1>Upacara hari kesaktian pancasila</h1>
        <p>Upacara hari kesaktian pancasila</p>
        <p id="tanggal-pembuatan" style="font-size:14px; color:gray;"></p>
    </div>
    <img style="width:300px; height:auto;" src="./media/fripik berita.png">
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const tanggalPembuatan = new Date().toLocaleDateString("id-ID", {
        year: "numeric",
        month: "long",
        day: "numeric"
    });

    document.getElementById("tanggal-pembuatan").textContent = `Dibuat pada: ${tanggalPembuatan}`;
});
</script>


<div style="margin:40px; margin-top:10px;" class="text">           
    Lorem Ipsum Dolor Sit Amet

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  

Suspendisse potenti. Nulla facilisi. Fusce convallis metus id felis tincidunt, non vulputate est eleifend. Maecenas accumsan, nisl vel aliquet interdum, magna odio fermentum turpis, nec condimentum risus justo et massa. Vivamus tincidunt, lorem eget cursus tincidunt, velit odio viverra ligula, sed dapibus nisi mauris vel metus. Ut nec felis non turpis rhoncus feugiat. Donec porta ipsum sit amet nulla volutpat fermentum. Mauris vel turpis in lorem sollicitudin dictum.  

Curabitur euismod lorem nec nunc scelerisque, et fringilla ligula feugiat. Vestibulum euismod, orci ut vestibulum consectetur, felis ex vehicula quam, non luctus arcu nunc eget neque. Nulla facilisi. Aenean fermentum, mi ut pellentesque viverra, felis felis sollicitudin justo, a dignissim nulla sem et dolor. Cras sit amet odio sapien. Morbi tristique nisi at tortor ultricies, at gravida turpis faucibus. Suspendisse potenti. Integer interdum, nisi a interdum varius, justo urna tincidunt est, eget gravida mi libero non neque.  

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis blandit, justo sed tincidunt sodales, erat dui facilisis ligula, vel vehicula ligula mauris sit amet mauris. Proin consequat justo ut lorem efficitur, sed facilisis magna rhoncus. Sed sit amet felis vel lectus vulputate ullamcorper. Ut feugiat dolor a arcu scelerisque, nec fringilla felis vehicula.  

</div> 


