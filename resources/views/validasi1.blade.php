<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function validateForm(){
                console.log("ini baris 11");
                return false;
                //DIMANAPUN BERTEMU RETURN, AKAN EXIT FUNCTION DAN CODE DIBWAHNYA TIDAK DIJALANKAN.
                console.log("ini baris 13");
                return true;
                //DALAM 1 FUNCTION, BISA ADA LEBIH DARI 1 RETURN.
                console.log("ini baris 15");
            }

            function validateNRP(){
                var NRP = document.getElementById("NRP");

                if(NRP.length==10){
                    return true;
                }else{
                    alert("NRP memiliki panjang 10 karakter")
                    return false;
                }

                


            }

            function validate(){
                var NRP = document.getElementById("NRP");

                if( NRP.value == ""){
                    alert("NRP harus diisi");
                    return false;
                    
                }if(isNaN(NRP.value)){
                    alert("NRP harus diisi angka")
                    return false;
                }
                if(NRP.value.length!=10){
                    alert("NRP harus 10 angka");
                    return false;
                    
                }else{
                    return true;
                }

                
            }
        </script>
    </head>
    <body>
       <div class="container">
            <form action="https://www.detik.com/" method="get" onsubmit="return validate();">
                
                <div class="form-group">
                    <label for="NRP"> Masukkan NRP </label>
                    <input type="text" id="NRP" class="form-control">
                </div>
                <input type="submit" value="Kirim" class="btn btn-danger">
                
            </form>
        </div>
        
    </body>
</html>