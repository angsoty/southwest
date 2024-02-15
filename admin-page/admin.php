<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <form class="upl">
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
                var name = $('#txt-title');
                var description = $('#txt-description');
                if(name.val() == ''){
                    alert("Please input title......");
                    name.focus; 
                    return;
                }      
                 else if(description.val() == ''){
                    alert("Please input description......");
                    description.focus; 
                    return;
                }                                                
                var frm = eThis.closest("form.upl");
                var frm_data = new FormData(frm[0]);
                $.ajax({
                    url:'http://localhost/Southwest/home-page/home.php',
                    type:'POST',
                    data:frm_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    // dataType:"json",
                    beforeSend:function(){
                           eThis.html("Loading...");
                    },
                    success:function(data){   
                            //work after success
                           eThis.html("Uploaded");
                           name.val("");
                           description.val("");
                           name.focus;  
                    }				
                }); 
            })
        })
    </script>
</body>
</html>

                                                        <!-- val = return value -->