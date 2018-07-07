  


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/main.css">
        <link href="Stylesheets/lightbox.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="Scripts/script.js"></script>
        <script src="Scripts/lightbox.min.js"></script>
        <script>
            function resizeIframe(obj) {
                obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
            }
        </script>
        <TITLE>
            Ice Cream 
        </TITLE>
    </head>

    <body>


        <div id="container1">

            <ul>
                <li class="menu"><a href="#section1">Menu</a></li>
                <li class="menu" ><a href="#section2">Place your order</a>
            </ul>

            <div class="main" id="section1">
                <section>
                    <div class="center">
                        <img src="images/iceCream.png" alt="logo" style =" padding-top: 70px;" >
                        <div id="boximages" >
                            <table id="table1" class="center" style="width:80%">
                                <caption style="font-size: 30px; padding-bottom: 20px;">Click on Photo to Enlarge</caption>          
                                <tr>
                                    <th><a  href="images/choco.jpg"  data-lightbox="space" data-title="Chocolate Flavor"><img src="images/chocoSmall.jpg" alt=""></a></th>
                                    <td>Choco Flavor</td>
                                    <th><a  href="images/vanilla.jpg"  data-lightbox="space" data-title="Vanila"><img src="images/vanillaSmall.jpg" alt=""></a></th>
                                    <td>Vanilla</td>
                                </tr>
                                <tr>
                                    <th><a  href="images/fruitPunch.jpg"  data-lightbox="space" data-title="Fruit Punch"><img src="images/fruitPunchSmall.jpg" alt=""></a></th>
                                    <td>Fruit Punch</td>
                                    <th><a  href="images/waffle.png"  data-lightbox="space" data-title="Waffle Ice Cream"><img src="images/waffleSmall.png" alt=""></a></th>
                                    <td>Waffle Ice Cream</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
            </div>



            <div class="main2" id="section2">
                <section class"section2">
                         <h3 >Select Your Ice Cream</h3>

                    <fieldset class="center">


                        <form action="order.php" method="post" name="orderForm" target="myIframe">

                            <p>
                                <label for="inputName">Your Name</label>
                                <input type="text" class="" id="inputName" name="inputName" placeholder="enter your name" 
                                       value="<?php if(isset($_POST[inputName])){echo $_POST[inputName];}?>" >
                            <hr>

                            <br>


                            <input type="radio" id="fromStore" name="pickUp" value="Pick up from Store" >  
                            <label for="fromStore">Pick up from Store</label>&nbsp;
                            <input type="radio" id="delivered" name="pickUp" value="Delivered" > 
                            <label for="delivered"> Delivered</label>&nbsp; <br>

                            <div id="address">
                            </div>



                            <br><label for="ice_cream_flavor">Select your flavor</label><br>
                            <select name="ice_cream_flavor" id="ice_cream_flavor"> 
                                <option value="Vanilla"> Vanilla 
                                <option value="Chocolate"> Chocolate 
                                <option value="Strawberry"> Strawberry 
                                <option value="Chocolate Chip"> Chocolate Chip 
                                <option value="Cookie Dough"> Cookie Dough 
                                <option value="Mint Chocolate Chip"> Mint Chocolate Chip 
                            </select><br><br>




                            <h3> Pick all your favorite toppings</h3> 
                            <table class="center" >

                                <tr><td><input type="checkbox" id="chocoSyrup" name="topping[]" value="Chocolate syrup"><label for="chocoSyrup"> Chocolate Syrup</label><br> </td> </tr>
                                <tr><td> <input type="checkbox" id="Hotfudge" name="topping[]" value="Hot fudge"><label for="Hotfudge"> Hot fudge</label></td></tr>
                                <tr><td> <input type="checkbox" id="Caramel" name="topping[]" value="Caramel"><label for="Caramel"> Hot Caramel Syrup</label></td></tr>
                                <tr><td> <input type="checkbox" id="Strawberries" name="topping[]" value="Strawberries"><label for="Strawberries"> Sliced Strawberries</label></td></tr>
                                <tr><td> <input type="checkbox" id="Cream" name="topping[]" value="Cream"><label for="Cream"> Whip Cream</label></td></tr>
                                <tr><td> <input type="checkbox" id="Sprinkles" name="topping[]" value="Sprinkles"><label for="Sprinkles"> Chocolate Sprinkles</label></td></tr>
                                <tr><td> <input type="checkbox" id="Cherry" name="topping[]" value="Cherry"><label for="Cherry"> Cherry on Top</label><br></td></tr>

                            </table>



                            <label for="preperation">Preperation Preference</label><br>
                            <select name="preperation" size="2" id="preperation" >
                                <option value="In a cone"> In a cone  </option>
                                <option value="In a big bowl"> In a big bowl </option>
                                <option value="Ice Cream Sandwich "> Ice Cream Sandwich </option>
                                <option value="Milk shake"> Milk shake </option>
                                <option value="Pie ala mode "> Pie ala mode </option>
                            </select>
                            <br>
                            <br>

                            <label for="orderForm"><strong>Additional Comments</strong></label> <br>
                            <textarea name='orderForm' id='orderForm' cols="60" rows="8" ></textarea><br> <br>

                            <div align="center">
                                <input type="submit"value="Place Order" name="submitbutton">
                                <input type="reset" value="Clear" name="resetbutton">
                            </div>
                        </form>



                    </fieldset>


                </section>

            </div>
            <iframe id="section3" style="width:100%; height:100%;"
                    frameborder="0" scrolling="no" name="myIframe"
                    onload="resizeIframe(this)"></iframe>
                 

        </div>


        <script>
            $(document).ready(function () {

                $('#delivered').click(function () {
                    $('#address').html('<br><label for="inputAdress">Your Address</label><input type="text" class="" id="inputAddress" name="inputAddress" placeholder="enter your address" > ');
                });

                $('#fromStore').click(function () {
                    $('#address').html('');
                });

            });
        </script>


    </body>
</html>
