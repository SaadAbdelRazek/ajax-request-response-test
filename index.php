<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<form id="myForm" action="process.php" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="submit" value="Submit" name="submit">
</form>
<div id="response"></div>
<script>

    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = $(this).serialize();

            $.ajax({
                url: 'process.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response === 'Invalid credentials.'){
                        $('#response').html(response).css('color','red');
                    }
                    else
                    {
                        $('#response').html(response).css('color','green');
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
</body>
</html>
