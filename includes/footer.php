<footer>
</footer>

<script src="<?php echo $DOC_ROOT; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $DOC_ROOT; ?>assets/js/swiper-bundle.min.js">
</script>


<script>
    window.addEventListener("scroll", function() {
        const header = document.querySelector(".sticky-header");

        if (window.scrollY > 100) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });
</script>