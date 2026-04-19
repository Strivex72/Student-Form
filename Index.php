<?php
include "./layout/header.php";
?>



<style>
  
    body {
        background-color: #f0f2f5;
    }

    .form-container {
        max-width: 900px;
        margin: 50px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        border-left: 5px solid #0d6efd;
        padding-left: 15px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 600;
        color: #555;
        margin-bottom: 8px;
    }

    .form-control, .form-select {
        height: 50px;
        font-size: 16px;
        border-radius: 10px;
        border: 2px solid #eee;
        padding: 10px 20px;
        transition: all 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 10px rgba(13, 110, 253, 0.1);
        outline: none;
    }

    .btn-submit {
        height: 55px;
        font-size: 18px;
        font-weight: 600;
        background: #0d6efd;
        color: white;
        border: none;
        border-radius: 12px;
        padding: 0 40px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-submit:hover {
        background: #0056b3;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
    }

    .payment-box {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 12px;
        margin-top: 10px;
    }
</style>

<div class="container">
    <div class="form-container">
        <h2 class="section-title">Student Information</h2>
        
        <form action="./controller/store.php" method="POST">
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="e.g. Sadman Chy" required>
                </div>

                <div class="col-md-6" style="margin-bottom: 20px;">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="number" placeholder="+88017XXXXXXXX" required>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px;">
                    <label class="form-label">Student Address</label>
                    <input type="text" class="form-control" name="address" placeholder="House No: , Road: , Area:." required>
                </div>

                <div class="col-md-12" style="margin-bottom: 30px;">
                    <div class="payment-box">
                        <label class="form-label d-block">Select Payment Method</label>
                        <select class="form-select" name="payment">
                            <option value="bkash">bKash</option>
                            <option value="nagad">Nagad</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn-submit">
                        Submit now
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


  
<?php
include "./layout/footer.php";
?>