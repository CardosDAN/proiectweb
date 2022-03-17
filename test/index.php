<!DOCTYPE html>
<html>
<head>
    <title>PHP - How to make dependent dropdown list using jquery Ajax?</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>


<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Select State and get bellow Related City</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="category" class="form-control">
                    <option value="">--- Select State ---</option>


                    <?php
                    require('../src/includes/db.php');
                    $sql = "SELECT * FROM category";
                    $result = $con->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo "<option value='".$row['id']."'>".$row['name']."</option>";
                    }
                    ?>


                </select>
            </div>


            <div class="form-group">
                <label for="title">Select City:</label>
                <select name="sub_category" class="form-control" style="width:350px">
                </select>
            </div>


        </div>
    </div>
</div>


<script>
    $( "select[name='category']" ).change(function () {
        var stateID = $(this).val();


        if(stateID) {


            $.ajax({
                url: "ajaxpro.php",
                dataType: 'Json',
                data: {'id':stateID},
                success: function(data) {
                    $('select[name="sub_category"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="sub_category"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });


        }else{
            $('select[name="sub_category"]').empty();
        }
    });
</script>


</body>
</html>