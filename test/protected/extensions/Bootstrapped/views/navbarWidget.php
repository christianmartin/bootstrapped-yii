<nav id="<?php echo $this->element_id ?>" class="navbar navbar-default <?php echo $this->getClasses(); ?>" role="navigation">
    <div class="<?php echo $this->containerClass(); ?>">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#<?php echo $this->element_id ?>-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="<?php echo $this->element_id ?>-navbar-collapse">
            <?php foreach($this->sections as $section) {
                echo $section;
            }?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>