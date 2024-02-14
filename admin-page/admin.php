<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="/js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <form action="upl" method="POST">
    <div class="frm">
        <label for="">Name</label>
        <input type="text" name="txt-title" id="txt-title" class="frm-control">
        <label for="">Description</label>
        <input type="text" name="txt-description" id="txt-description"class="frm-control">
        <div class = "btnsave">
            Save
        </div>
    </div>
    </form>
    <script> 
        $(document).ready(function(){
            $(".btnsave").click(function(){
                var eThis = $(this);
                var frm = eThis.closest("form.upl");
                var frm_data = new FormData(frm[0]);
                $.ajax({
                    url:'http://localhost/Southwest/home-page/home.php',
                    type:'POST',
                    data:frm_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    dataType:"json",
                    beforeSend:function(){
                            alert("are you sure ?") ;
                    },
                    success:function(data){   
                            //work after success
                            alert("Successful");    
                    }				
                }); 
            })
        })
    </script>
</body>
</html>