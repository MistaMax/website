<?php
include_once 'header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <iframe class="twitch-vid" src="https://player.twitch.tv/?channel=rrgsa" frameborder="0" allowfullscreen="true" scrolling="no" height="800" width="75%"></iframe>
                <iframe class="twitch-chat" src="https://www.twitch.tv/rrgsa/chat?popout=" frameborder="0" scrolling="no" height="800" width="24%"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">Event Calendar</h1>
                        <p class="lead font-weight-normal">This calendar contains all the events we are planning on doing throughout the semester</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <iframe class="container-fluid" src="https://calendar.google.com/calendar/embed?src=roadrunnergaming.sa%40gmail.com&ctz=America%2FChicago"
                style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    <?php
	include_once 'footer.php';
?>