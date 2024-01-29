<main class="flex-row pt-5 text-yellow-400 text-center flex justify-between w-4/5 mx-auto">
    <div class="">
        <h2 class="text-xl">Bienvenidos!!</h2>
        <p class="mt-2 text-justify">Bienvenidos al sitio web oficial de nuestro equipo de fútbol infantil. Aquí podrás encontrar información sobre nuestros próximos partidos, jugadores y más.</p>
    </div>
    <div class="hidden lg:flex border border-yellow-500 w-1/5 p-3 justify-center ml-5" id="newsComponent"></div>
</main>

<script>
    $(document).ready(() => {
        $('#newsComponent').load('../controllers/news.php', {action: 'indexComponent'});
    });

    setInterval(() => {
        $('#newsComponent').load('../controllers/news.php', {action: 'indexComponent'});
    }, 60000);    
</script>