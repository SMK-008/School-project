<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type = "text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                
                p_name: $('#p_name').val(),
                p_number: $('#p_number').val(),
                p_pwd: $('#p_pwd').val(),

                action : $('#action').val(),
            };
            $.ajax({
                url : 'function_ph.php',
                type : 'POST',
                data : data,
                success: function(response){
                    alert(response);
                    if(response == "Login successful"){
                        window.location.reload();
                    }
                }
            });
        });
    }
</script>