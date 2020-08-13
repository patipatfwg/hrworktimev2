<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<input type="text" id="lname" name="lname" />
<!-- <input type="button" id="getData" value="Get"/> -->
<div class="user-content">
    <h4>User Details</h4>
    <p><span id="msg"></span></p>

</div>
<script>
$(document).ready(function(){
    $("#lname").keyup(function(){
        $.post("server.php",
        {
            name: $("#lname").val()
        },
        function(data,status){
        //alert("Data: " + data + "\nStatus: " + status);

            if(status=="success"){
                $("#msg").html(data);
            }

        });
  });
});
</script>