<!-- Include SweetAlert2 library as shown in step 1 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>

<script>
    // Assuming paymentSuccess is a variable indicating the success of the payment (true or false)
    var paymentSuccess = true;

    if (paymentSuccess) {
        Swal.fire(
            'Good job!',
            'Payment is successful!',
            'success'
        );
    }
    </script>

    <h1>Thank You for Your Payment!</h1>
    <!-- Add additional content if needed -->
