<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type = "text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                SSN: $('#SSN').val(),
                D_name: $('#D_name').val(),
                Specialty: $('#Specialty').val(),
                YearsOfExperience: $('#YearsOfExperience').val(),
                D_pwd: $('#D_pwd').val(),
                action : $('#action').val(),
            };
            $.ajax({
                url : 'function_d.php',
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