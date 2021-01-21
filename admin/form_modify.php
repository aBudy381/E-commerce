<link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>     
<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Update info product</h4>
            <form class="needs-validation" novalidate="" action="" method="POST">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Update Product title:</label>

                        <!-- 

                        hne badelt <?php //echo $data[0]->title; ?>
                         bhedi <?php //echo $data->title; ?>
                         khatr 3andkch tablo hne sigle object t3 data


                        -->





                         <input type="text" class="form-control" value="<?php echo $data->title; ?>" id="validationCustom01" placeholder="Title"  required="" name="title">
                        
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Update Description:</label>
                        <input type="text" class="form-control" value="<?php echo $data->description; ?>" id="validationCustom01" placeholder="Description"  required="" name="description">
                        
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Update Price:</label>
                        <input type="text" class="form-control"value="<?php echo $data->price; ?>" id="validationCustom01" placeholder="Price"  required="" name="price">
                       
                    </div>
                    
                <button class="btn btn-primary" type="submit" name="submit">Update</button>
            </form>
        </div>
    </div>
</div>
 