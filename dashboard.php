
 <div class="content">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-6 float-start">
                <h4 class="m-0 text-dark text-muted">Dashboard</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-end">
                    <li class="breadcrumb-item"><a href="#"> Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="content" id="tableContent">
            <div class="canvas-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="content">
                                <div class="canvas-wrapper">
                                    <div class="anyotherclass"
                                        data-anijs="if: scroll, on: window, do: rubberBand animated, before: scrollReveal">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="container">
                                            
                                                <div class="card text-white bg-danger mb-3">
                                                    <div class="card-header text-center">
                                                        <h3>Notice</h3>
                                                        
                                                    </div>
                                                    <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                                                    <?php for ($i = count($notices) - 1; $i >= 0; $i--): ?>
                                                        <div class="form-group text-center">
                                                            <h5 class="card-title"><?= $notices[$i]['title'] ?> ( Date: <?= $notices[$i]['created_at'] ?>)</h5>
                                                            <p class="card-text" style="text-align: justify;"><?= nl2br($notices[$i]['notice']) ?></p>
                                                            <br>
                                                        </div>
                                                    <?php endfor; ?>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="ui hidden divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    </div>
    <div class="whatsapp-float">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $mynumber; ?>" target="_blank">
                <div class="whatsapp-icon">
                    <img src="../assests/img/whatsapp-icon.png" alt="WhatsApp Icon" >
                </div>
                <p class="whatsapp-text">Chat on</p>
            </a>
    </div>
</div>

