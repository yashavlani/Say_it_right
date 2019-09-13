<main>

        <section class="dashboard-section">
            <div class="wrapper">
    
                <div class="row">
                    <div class="col-25">
                        <div class="activity-status">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">26</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-status green">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">18</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-status orange">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">8</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-status gray">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">14</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
                </div>
    
                <div class="row">
                <?php foreach($conferences as $row) { ?>
                    <div class="col-25">
                        <div class="activity-card blue">
                            <div class="header">
                                <?php echo $row['conference'] ?>
                            </div>
                            <div class="content">
                                <?php echo $row['description'] ?>                                
                                <!-- <span>Primary card title</span> -->
                                <!-- Some quick example text to build on the card title and make up the bulk of the card's content. -->
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php foreach($events as $row) { ?>
                    <div class="col-25">
                        <div class="activity-card blue">
                            <div class="header">
                                <?php echo $row['conference'] ?>
                            </div>
                            <div class="content">
                                <?php echo $row['description'] ?>                                
                                <!-- <span>Primary card title</span> -->
                                <!-- Some quick example text to build on the card title and make up the bulk of the card's content. -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
    
                    <!-- <div class="col-25">
                        <div class="activity-card gray">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Secondary card title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-card">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Success cord title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-card red">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Danger card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-25">
                        <div class="activity-card yellow">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Warning card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-card lblue">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Info card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-card white">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Light card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="col-25">
                        <div class="activity-card black">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Dark card title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </main>