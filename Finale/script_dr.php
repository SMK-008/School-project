<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type = "text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                
                drugName: $('#drugName').val(),
                drugAmount: $('#drugAmount').val(),
                price: $('#price').val(),
                action : $('#action').val()

            };
            $.ajax({
                url : 'function_dr.php',
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