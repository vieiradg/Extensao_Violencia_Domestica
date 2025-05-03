<link rel="icon" href="assets/icon.ico" type="image/x-icon">
<script>
  let titulo = "Juntos Contra a Violência Doméstica - Ajude quem precisa! ";
  let pos = 0;

  function scrollTitulo() {
    document.title = titulo.substring(pos) + titulo.substring(0, pos);
    pos = (pos + 1) % titulo.length;
    setTimeout(scrollTitulo, 250);
  }

  scrollTitulo();
</script>