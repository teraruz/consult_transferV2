<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    <h1>Sweet alert page</h1>
</head>
<body>
<button id="alertButton" onclick="showAlert();">Show Alert</button>
</body>

<script>
// นำเข้า SweetAlert2
import Swal from 'sweetalert2';

// ฟังก์ชันสำหรับแสดง SweetAlert2
function showAlert(){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            );
        }
    });
}


</script>

</html>





