$(document).ready(function(){
    $('#frmLogin').submit(function(){
        alert('mensaje');
        $.post('../../assets/php/controladores/login/ctrLogin.php',
            $("#frmLogin").serialize(),
            function(data){
                $("#mensaje").html(data);
                if(data == "0s0p4nd4"){
                    window.location.href = "otra.php";
                } else {
                    alert('mas');
                }
            }
        );
        alert('no entro');

        return false;
    });
});