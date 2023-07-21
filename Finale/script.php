<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type = "text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                ssn: $('#ssn').val(),
                patient_name: $('#patient_name').val(),
                patient_address: $('#patient_address').val(),
                age: $('#age').val(),
                pwd: $('#pwd').val(),
                action : $('#action').val(),
            };
            $.ajax({
                url : 'function.php',
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