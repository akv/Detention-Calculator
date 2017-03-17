<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="attributes/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="attributes/css/demo.css" media="all" />
    </head>
    <body>
        <div class="container">
           
            <div class="freshdesignweb-top">
                <a href="#" target="_blank">Home</a>
                <span class="right">

                </span>
                <div class="clr"></div>
            </div>
            <header>
                <h1><span>Detention Calculator</span> Please enter Details of User </h1>
            </header>       
            <div  class="form">
                <form id="userDetentionForm" action="/Test/?controller=user&method=calculator"> 
                    <p class="contact"><label for="name">Name</label></p> 
                    <input id="name" name="name" placeholder="Name of the student" required="" tabindex="1" type="text"> 



                    <p class="contact"><label>Offense type</label></p>
                    <label class="month"> 
                        <select class="" required="" name="offense[]" multiple>
                            <option  value="H_N_done">Homework Not Done</option>
                            <option value="stealing">Stealing</option>
                            <option value="flighting" >Fighting</option>
                            <option value="untideyness">Untidyness</option>
                            <option value="lying">Lying</option>
                            <option value="S_P_damage">School Property Damage</option>
                        </select>   

                    </label>
                    <br><br>
                    <p class="contact"><label>GTBT(Good time / Bad time)</label></p>

                    <select class="select-style" required="" name="gtbt">
                        <option value="">Select Good time bad time</option>
                        <option  value="0">Good time</option>
                        <option value="1">Bad time</option>

                    </select>   

                    <br><br>
                    <p class="contact"><label>Calculation Mode</label></p>

                    <select class="select-style" required="" name="calculationmode">
                        <option value="">Select calculation mode</option>
                        <option  value="0">Concurrent</option>
                        <option value="1">Consecutive</option>
                    </select> 

                    <br> <br>
                    <input class="buttom" name="submit" id="submit" tabindex="5" value="Calculate" type="submit"> 	 
                </form> 
            </div>  
            <div  class="form result_display" style="display: none" >
                <h1><span>Detention Calculator</span> Result: <span style="font-weight: bold" id="calcultor_result"> </span></h1>
                  <div>
                     
                 </div>
            </div>
        </div>
        <script type="text/javascript" src="attributes/js/jquery.min.js"></script>      
        <script type="text/javascript" src="attributes/js/main.js"></script>

    </body>
</html>