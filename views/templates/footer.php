<footer>
            <div class="derechos">
                <p>Brian Esparza De La Torre - Todos los derechos reservados <?php echo date("Y"); ?> &copy;</p>
            </div>
            <div class="sociales">
                <a href="#"><img src="iconos/facebook.png" alt="facebook"></a>
                <a href="#"><img src="iconos/gorjeo.png" alt="tweeter"></a>
                <a href="#"><img src="iconos/google-plus.png" alt="google-plus"></a>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            var oculto = true;
            $(".menu").click(function(){

                if(oculto == true){
                    $("#navbar").css({
                        "display": "block"
                    });
                    oculto = false;
                }else{
                    $("#navbar").css({
                        "display": "none"
                    });
                    oculto = true;
                }

                //$("#navbar").slideToggle(500);
            });

        });
    </script>
</body>
</html>