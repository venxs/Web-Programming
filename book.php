<?php require("includes/head.php");
require("includes/nav.php");

session_start();

if (isset($_POST) && !empty($_POST)) {
    var_dump($_POST);
	
	
};

?>

    <h1> Book Movie Tickets </h1>
    <p> Fill out the form below to book your tickets </p>

    <div id="contentBookings">

            <form id="bookingform" action="voucher.php" method="POST"
                  enctype="multipart/form-data">
                <select name="film" id="dropdown">
                    <option value="CH"> Planes: Fire and Rescue</option>
                    <option value="RC"> Once a Princess</option>
                    <option value="AC"> Guardians of the Galaxy</option>
                    <option value="AF"> Mardaani</option>
                </select>
                <select name="day" id="dropdown">
                    <option value="Monday"> Monday</option>
                    <option value="Tuesday"> Tuesday</option>
                    <option value="Wednesday"> Wednesday</option>
                    <option value="Thursday"> Thursday</option>
                    <option value="Friday"> Friday</option>
                    <option value="Saturday"> Saturday</option>
                    <option value="Sunday"> Sunday</option>
                </select>
                <select name="time" id="dropdown">
                    <option> 1pm</option>
                    <option> 6pm</option>
                    <option> 9pm</option>
                </select>
<br><br>
                <table style="width:70%" name="quantity">
                    <tr>
                        <td> Adult</td>
                        <td> $18</td>
                        <td> Quantity <select name="SA">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    <tr>
                        <td> Consession</td>
                        <td> $15</td>
                        <td> Quantity <select name="SP">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    <tr>
                        <td> Child</td>
                        <td> $12</td>
                        <td> Quantity <select name="SC">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> First Class Adult</td>
                        <td> $30</td>
                        <td> Quantity <select name="FA">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> First Class Child</td>
                        <td> $25</td>
                        <td> Quantity <select name="FC">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> Beanbag</td>
                        <td> $30</td>
                        <td> Quantity <select name="B1">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> Beanbag for 2 people</td>
                        <td> $30</td>
                        <td> Quantity <select name="B2">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> Beanbag for 3 people</td>
                        <td> $30</td>
                        <td> Quantity <select name="B3">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                </table>

<br><br>
                <div>
                    <input type="submit" id="button" value="Book Tickets / Next"/>
                </div>

            <br>
            <div id="discounted">
        <p> The subtotal </p>
    </div>
    <script>
        var quantity = 10;
        var prices = 4.5;

        var subTotal = prices * quantity;

        function subPrice(prices, quantity) {
            document.getElementById("discounted").innerHTML = "You're subtotal is: $" + subTotal;
            //document.write("You're subtotal is: $" + subTotal);
        }
        subPrice();

        var discount = .80;
        var discountedPrice = subTotal * discount;

        function disPrice(subTotal, discount) {
            if (voucherCode) {
                document.getElementById("discounted").innerHTML = "You're new subtotal is $" + discountedPrice;
                $.post('discountedPrice');
            }
        }
        ;
    </script>
	

<!--
            var prices = if ('day' === Monday || Tuesday) {
                prices = prices['SA[cheap]'];
            }

            var quantity = 10;
            var prices = 4.5;

            var subTotal = prices * quantity;

            function subPrice(prices, quantity) {
                document.write("You're subtotal is: $" + subTotal);
                       }

            subPrice();
            </div>
    </div>
-->
    <script>

	var pricesc = array(12, 10, 8, 25, 20, 20, 20, 20);
	var pricesf = array(18, 15, 12, 30, 25, 30, 30, 30);
	
	
        var Sunday = 0;
        var Monday = 1;
        var Tuesday = 2;
        var Wednesday = 3;
        var Thursday = 4;
        var Friday = 5;
        var Saturday = 6;


        var prices = {
            'SA': {
                'cheap': 12,
                'expensive': 18
            },
            'SP': {
                'cheap': 10,
                'expensive': 15
            },
            'SC': {
                'cheap': 8,
                'expensive': 12
            },
            'FA': {
                'cheap': 25,
                'expensive': 30
            },
            'FC': {
                'cheap': 20,
                'expensive': 25
            },
            'B1': {
                'cheap': 20,
                'expensive': 30
            },
            'B2': {
                'cheap': 20,
                'expensive': 30
            },
            'B3': {
                'cheap': 20,
                'expensive': 30
            }

        };

        if (day === Monday || Tuesday) {
            prices = 'cheap';

        }


        var movie = {
            'CH': {
                MONDAY: [1300],
                TUESDAY: [1300],
                WEDNESDAY: [1800],
                THURSDAY: [1800],
                FRIDAY: [1800],
                SATURDAY: [1200],
                SUNDAY: [1200]
            },
            'AF': {
                MONDAY: [1800],
                TUESDAY: [1800],
                SATURDAY: [1500],
                SUNDAY: [1500]
            }


            'RC': {
                MONDAY: [2100],
                TUESDAY: [2100],
                WEDNESDAY: [1300],
                THURSDAY: [1300],
                FRIDAY: [1300],
                SATURDAY: [1800],
                SUNDAY: [1800]
            }

            'AC': {
                WEDNESDAY: [2100],
                THURSDAY: [2100],
                FRIDAY: [2100],
                SATURDAY: [2100],
                SUNDAY: [2100]
            }
        };

        $document(ready)
        $document.ready(function () {
            .
            onchange( )
                .getElementById()


        }




            // change();

            // variables into JQuery, select = target
            // .val
            // switch
            // google: populate select with JSon


            //define: quantity, type, subTotal, and send to SESSION

        < label for= "subTotal" > < / label >
        $subTotal = x * y;
            document.getElementById("subTotal").innterHTML = 'subTotal';
            $_POST[$subTotal];


        $_SESSION['post'][$subTotal] = $value;
        //console.log('subTotal');
        //$_POST['subTotal'];

        </script>
</div>    
<br><br>
<?php

// $subTotal = $_SESSION['$SA + $SP'];
// echo $subTotal;

include_once("includes/footer.php"); ?>