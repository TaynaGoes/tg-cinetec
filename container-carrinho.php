<script>
    var $menuBtn = document.getElementById("btn-cart");
    $menuBtn.onclick = function(e) {
        animatedMenu(this);
    };

    function animatedMenu(x) {
        x.classList.toggle("animeOpenClose");
    }
</script>