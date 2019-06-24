<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'GNZ Pilots Hub';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome</h1>

        <p class="lead">To the Gliding New Zealand Pilots Hub.</p>

        <p><a class="btn btn-lg btn-success" href=<?php echo Url::base(true).'/user/login'?>>Login to Get Started</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Aircraft Data</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href=<?php echo Url::base(true).'/aircraft'?>>Aircraft &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Turnpoints</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href=<?php echo Url::base(true).'/waypoints'?>>Turnpoints &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Contests</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href=<?php echo Url::base(true).'/contest/contests'?>>Contests &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
