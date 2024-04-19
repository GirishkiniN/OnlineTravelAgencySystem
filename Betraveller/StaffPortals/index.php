<!DOCTYPE html>
<html>

<head>
    <title>Log In</title>
</head>

<body>
    <div>
        <label for="domain">Choose Your Domain:</label>

        <select name="domain" id="domain">
    <option value="Package">Package</option>
    <option value="Bus">Bus</option>
    <option value="Car">Car</option>
    </select>
        <button onclick="myFunction()">Click me</button>

    </div>
    <script>
        function myFunction() {
            var nau = document.getElementById("domain").value;
            if (nau == 'Package') {
                window.location = 'packageStaff.php';
            }else if (nau == 'Bus') {
                window.location = 'busStaff/index.php';
            }else if (nau == 'Car') {
                window.location = 'carStaff/index.php';
            }
        }
    </script>
</body>

</html>