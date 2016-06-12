<?php
$this->load->helper('html');
?>
<html>
    <head>
        <title>state loading based on country using jquery and codeigniter</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () { 
                $('#countrycombox select').change(function () {
                    var selCountry = $(this).val();
                    console.log(selCountry);
                    $.ajax({   
                        url: "countrystate_disp/ajax_call", 
                        async: false,
                        type: "POST", 
                        data: "country="+selCountry, 
                        dataType: "html", 
                         
                        
                        success: function(data) {
                        
                            $('#state').html(data);
                        }
                    })
                });
            });
        </script>
    </head>
     
    <body>
        <div id="mydoubts">
            <div id="countrycombox"><?php print form_dropdown('country',$country); ?></div>
            <div id="state"></div>
        </div>
    </body>
</html>